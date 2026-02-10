<?php

namespace App\Support\Traits;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Modules\Order\Respository\OrderRespository;
use Illuminate\Support\Facades\Auth;

trait ShoppingCartDatabaseTrait
{
    protected $repo_order_service;

    public static function addToCart($item)
    {
        $quantity = (int) ($item['qty'] ?? 1);

        $user = Auth::user();
        $carts = $user->user_cart_orders ? $user->user_cart_orders->order_items : collect([]);
        $exist_item = $carts->where('product_id', $item['product_id']);

        if ($exist_item->count()) {
            // Single Item Added
            return false;
        } else {
            (new OrderRespository(new Order))->apiCartCreateOrder($item);
        }

        return true;
    }

    public static function existsCartBucketItem($item_id)
    {
        $user = Auth::user();
        $shoppingcart = $user && $user->user_cart_orders ? $user->user_cart_orders->order_items : collect([]);

        if ($shoppingcart->count() < 1) {
            return false;
        }

        $exist_item = $shoppingcart->where('product_id', $item_id);

        return (bool) $exist_item->count();
    }

    public static function removeCartById($item_id)
    {
        $user = Auth::user();
        $order = $user->user_cart_orders;
        $order_item = OrderDetail::where(['order_id' => $order->id, 'product_id' => $item_id]);

        if (is_null($order_item->first())) {
            return false;
        }

        $order_item->delete();

        $order->total_amount = self::getCartTotal();
        $order->save();

        return true;
    }

    public static function getContent()
    {
        $user = Auth::user();

        if (! $user) {
            return collect([]);
        }

        return $user->user_cart_orders ? $user->user_cart_orders->order_items : collect();
    }

    public static function destroyCart()
    {
        $user = Auth::user();
        $order = $user->user_cart_orders;

        OrderDetail::where('order_id', $order->id)->delete();

        return true;
    }

    public static function getTotalTax()
    {
        return 0;
    }

    public static function getCartSubtotal()
    {
        $carts = self::getContent();

        if ($carts->count()) {
            return $carts->map(function ($v) {
                return $v['cost_price'] * $v['qty'];
            })->sum();
        }

        return 0;
    }

    public static function getCartTotal()
    {
        $carts = self::getContent();

        if ($carts->count()) {
            $sub_total = self::getCartSubtotal();

            return $sub_total;
        }

        return 0;
    }

    public static function getCartTotalItems()
    {
        $carts = self::getContent();

        return count($carts);
    }
}
