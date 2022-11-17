<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\Newsletter\NewsletterController;

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


Route::group(["prefix" => "v1"], function () {

    /** Cache */
    Route::get('/clear-cache', function () {
         Artisan::call('optimize:clear');
         return "Cache is cleared";
     });
 
    Route::group(['prefix' => 'website', "namespace" => "v1\Newsletter"], function () {
        Route::post('newsletter/subscribe', [NewsletterController::class, 'subscribe']);
        Route::post('contact/create', [NewsletterController::class, 'contact']);
     });

});