<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

Route::get('/', function () {
    return view('welcome');
});


Route::group([
    "namespace" => "App\Http\Controllers",
    "prefix" => "listing",
], function () {
    Route::get("", "ListingController@index");
    Route::post("", "ListingController@create");
    Route::get("{index}", "ListingController@show");
    Route::patch("{index}", "ListingController@modify");
    Route::delete("{index}", "ListingController@delete");
});

Route::group([
    "prefix" => "payment",
    "namespace" => "App\Http\Controllers",
], function () {
    Route::get("", "PaymentController@getPayments");
    Route::get("show/{paymentId?}" , "PaymentController@show");
});

