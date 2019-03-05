<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Symfony\Component\Routing\Annotation\Route as SymfonyRoute;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('/products', 'Productcontroller');
Route::group(['prefix'=>'products'],function(){

          Route::resource('/{product}/reviews', 'ReviewsController');

});


