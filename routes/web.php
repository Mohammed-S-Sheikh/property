<?php

use App\Models\Property;
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
    return 'Hoow';
});

Route::get('1', function () {

    // \App\Models\User::factory(1)->create();
    // \App\Models\Property::factory(100)->create();

    // return 'DONE';

});

Route::get('2', function () {

    // \App\Models\Property::truncate();

});
