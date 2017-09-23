<?php

/*
|--------------------------------------------------------------------------
| Web Routes for LaravelAdminPanel
|--------------------------------------------------------------------------
|
| This file is where you may override any of the routes that are included
| with LaravelAdminPanel.
|
*/

Route::group(['as' => 'admin.'], function () {

    Route::get('/', function () {
        return 'Welcome to the admin panel.';
    });

});
