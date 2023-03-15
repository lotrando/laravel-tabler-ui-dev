<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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

Route::get('/404', function () {
    return view('error.404');
});

/*
    |--------------------------------------------------------------------------
    | Sweet alert Toast position
    |--------------------------------------------------------------------------
    | Modal window or toast position, can be 'top',
    | 'top-start', 'top-end', 'center', 'center-start',
    | 'center-end', 'bottom', 'bottom-start', or 'bottom-end'.
    | For specific modal just use the position() helper method.
    |
    */
Route::get('alert', function () {
    // Alert::success('SuccessAlert', 'Sweetalert is installed!')->position('center');
    Alert::toast('Sweetalert is installed!', 'success')->position('top');
    return view('alert');
});
