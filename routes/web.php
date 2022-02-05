<?php

use Nblkmal\IpGeo\Classes\IpGeo;
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
    return view('welcome');
});

Route::get('/test', function () {

    $ip = new IpGeo();
    $user_ip = $ip->getIP();
    
    $user_location = $ip->getGeolocation($user_ip);

    return $user_location;
});




