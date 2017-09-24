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
    $namespacePrefix = '\\'.config('admin.controllers.namespace').'\\';

    Route::group(['middleware' => 'admin'], function () use ($namespacePrefix) {
        // Main Admin and Logout Route
        Route::get('/', [
            'as' => 'dashboard', 'uses' => $namespacePrefix.'DashboardController@index'
        ]);
    });
});
