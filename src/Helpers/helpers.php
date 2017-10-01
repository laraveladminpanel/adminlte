<?php

if (!function_exists('admin_model')) {
    function admin_model($model)
    {
        return LaravelAdminPanel\Admin\Facades\Admin::model($model);
    }
}

if (!function_exists('admin_asset')) {
    function admin_asset($path, $secure = null)
    {
        return asset(config('admin.assets_path').'/'.$path, $secure);
    }
}