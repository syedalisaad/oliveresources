<?php

namespace App\Http\Controllers;

class AdminController extends \App\Http\Controllers\Controller
{
    public function __construct()
    {

        $guard = \Request::segment(1);
        $this->middleware($guard);
    }

    /**
     * Check if the permission matches with any permission user has
     *
     * @param string permission slug of a permission
     * @return bool true if permission exists, otherwise false
     */
    protected function checkPermission($perm)
    {
        if (isAdmin()) {
            return true;
        }

        $exists_perms = getAuth()->permissions->pluck('name', 'id')->toArray();
        $permissions = is_array($perm) ? $perm : [$perm];
        $matchedPermission = array_intersect($exists_perms, $permissions);
        $current_route = \Request::route()->getName();

        foreach ($matchedPermission as $perm) {
            if ((admin_route($perm) == $current_route)) {
                return true;
            } elseif (str_contains(admin_route($perm), 'create')) {
                if ((admin_route(str_replace('create', 'store', $perm)) == $current_route)) {
                    return true;
                }
            }
        }

        abort(403, "You don't have permission to view this page");
    }
}
