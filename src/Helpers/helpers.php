<?php

if (!function_exists('admin_model')) {
    function admin_model($model)
    {
        return LaravelAdminPanel\Admin\Facades\Admin::model($model);
    }
}
