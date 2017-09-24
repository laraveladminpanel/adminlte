<?php

namespace LaravelAdminPanel\Admin;

use LaravelAdminPanel\Admin\Models\User;

class Admin
{
    private $models = [
        'User' => User::class,
    ];

    public function model($name)
    {
        return app($this->models[studly_case($name)]);
    }

    public function routes()
    {
        require __DIR__.'/../routes/web.php';
    }

    public function view($name, array $parameters = [])
    {
        return view($name, $parameters);
    }
}
