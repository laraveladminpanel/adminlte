<?php

namespace LaravelAdminPanel\Admin\Http\Controllers;

use LaravelAdminPanel\Admin\Facades\Admin;

class DashboardController extends BaseController
{
    public function index()
    {
        return Admin::view('admin::dashboard');
    }
}
