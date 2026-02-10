<?php

namespace App\Support\Traits;

trait ShoppingCartTrait
{
    public static function addToCart($item)
    {
        $quantity = (int) ($item['qty'] ?? 1);
        $carts = session()->get('shoppingcart');
        $carts = (($carts && count($carts)) ? $carts : collect());

        $exist_item = $carts->where('id', $item['id']);

        if ($exist_item->count()) {
            // Single Item Added
            return false;

            $exists_key = $exist_item->keys()->first();
            $item['qty'] = ($exist_item->first()['qty'] + $quantity);
            $carts[$exists_key] = $item;
        } else {
            $carts->push($item);
        }

        session()->put('shoppingcart', $carts);

        return true;
    }

    public static function existsCartBucketItem($item_id)
    {
        $shoppingcart = (session()->get('shoppingcart') ?? []);

        if (count($shoppingcart) < 1) {
            return false;
        }

        $exist_item = $shoppingcart->where('id', $item_id);

        return (bool) $exist_item->count();
    }

    public static function updateCart() {}

    public static function removeCartById($item_id)
    {
        $shoppingcart = (session()->get('shoppingcart') ?? []);

        if (count($shoppingcart) < 1) {
            return false;
        }

        $exist_of = $shoppingcart->where('id', $item_id);

        if ($exist_of->count()) {

            $exists_key = $exist_of->keys()->first();
            unset($shoppingcart[$exists_key]);

            session()->put('shoppingcart', $shoppingcart);

            return true;
        }

        return false;
    }

    public static function getContent()
    {
        return session()->get('shoppingcart') ?? [];
    }

    public static function destroyCart()
    {
        session()->put('shoppingcart', []);

        return [];
    }

    public static function getTotalTax()
    {
        return 0;
    }

    public static function getCartSubtotal()
    {
        $carts = self::getContent();

        if ($carts) {
            return $carts->map(function ($v) {
                return $v['price'] * $v['qty'];
            })->sum();
        }

        return 0;
    }

    public static function getCartTotal()
    {
        $carts = self::getContent();

        if ($carts) {
            $sub_total = self::getCartSubtotal();

            return $sub_total;
        }

        return 0;
    }

    public static function getCartTotalItems()
    {
        $carts = self::getContent();

        if ($carts) {
            return $carts->count();
        }

        return 0;
    }
}
