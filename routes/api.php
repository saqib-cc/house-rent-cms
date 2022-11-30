<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('add_property/','Admin\PropertyController@addproperty')->name('add_property');
Route::get('get_properties/','Admin\PropertyController@get_properties')->name('get_properties');
Route::get('get_property/{id}','Admin\PropertyController@get_property')->name('get_property');
Route::post('edit_property/{id}','Admin\PropertyController@update_property')->name('edit_property');
Route::get('delete_property/{id}','Admin\PropertyController@delete_property')->name('delete_property');
