<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ {
    CityController,
    ImageController,
    PropertyController,
    RegionController,
    SectionController,
    UserController,
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {

    Route::post('/properties/filter', [PropertyController::class, 'filter']);
    Route::get('/properties/types', [PropertyController::class, 'types']);

    Route::apiResources([
        'cities' => CityController::class,
        'images' => ImageController::class,
        'properties' => PropertyController::class,
        'regions' => RegionController::class,
        'sections' => SectionController::class,
        'users' => UserController::class,
    ]);

});
