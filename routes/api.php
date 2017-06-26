<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/drinksfoods','Api\DrinkfoodController@getDrinksfoods')->name('drinksfoods.get');
Route::post('/drinkfood','Api\DrinkfoodController@postDrinkfood')->name('drinkfood.post');
//Route::put('/drinkfood/{id}','Api\DrinkfoodController@putDrinkfood')->name('drinkfood.put');

Route::post('/customer','Api\CustomerController@postCustomer')->name('customer.post');
Route::get('/customers','Api\CustomerController@getCustomers')->name('customers.get');
Route::put('/customer/{id}','Api\CustomerController@putCustomer')->name('customer.put');
Route::delete('/customer/{id}','Api\CustomerController@deleteCustomer')->name('customer.delete');
