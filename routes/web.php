<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo env('APP_NAME');
    echo'<hr>';
    var_dump(function_exists('dd'));
    echo env('APP_ENV');
    echo'<hr>';
    var_dump(App::environment());
    var_dump(App::environment('local'));
    var_dump(App::environment(['local', 'staging']));
    var_dump(config('app.env'));
    var_dump(config('app.timezone'));
    var_dump(config('app.timezoneXXX', 'default_value_here'));

    config(['app.var1' => 'value1']); // setter
    var_dump(config('app.var1'));

    return view('welcome');
});

Route::get('/b', function () {
    var_dump(config('app.var1','default'));
});
