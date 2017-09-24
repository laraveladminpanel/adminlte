<?php

namespace LaravelAdminPanel\Admin;

class Admin
{
    public function routes()
    {
        require __DIR__.'/../routes/web.php';
    }

    public function view($name, array $parameters = [])
    {
        return view($name, $parameters);
    }
}
