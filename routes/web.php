<?php

use Illuminate\Support\Facades\Route;




Route::get('/','Frontend\FrontendController@index');

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('update_category', function () {
    return view('admin.category.update_category');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard','Admin\AdminController@dashboard');
    Route::view('add_category','admin.category.add_category');
   
//   category routes
    Route::post('add_category','Admin\CategoryController@add_category')->name('add_category');
    Route::get('delete_category/{id}','Admin\CategoryController@delete_category')->name('delete_category')->middleware(['can:isAdmin,App\Category']);
    Route::get('edit_category/{id}','Admin\CategoryController@edit_category')->name('edit_category');
    Route::post('update_category/{id}','Admin\CategoryController@update_category')->name('update_category')->middleware(['can:isAdmin,App\Category']);
    Route::get('categories','Admin\CategoryController@show_category')->name('categories');
    Route::get('view_category/{id}','Admin\CategoryController@view_category')->name('view_category');

    //  subcategory routes
    Route::get('add_subcategory','Admin\SubcategoryController@show_addsubcategory');
    Route::get('subcategories','Admin\SubcategoryController@show_subcategory')->name('subcategories');
    Route::post('add_subcategory','Admin\SubcategoryController@add_subcategory')->name('add_subcategory');
    Route::get('edit_subcategory/{id}','Admin\SubcategoryController@edit_subcategory')->name('edit_subcategory');
    Route::post('update_subcategory/{id}','Admin\SubcategoryController@update_subcategory')->name('update_subcategory')->middleware(['can:isAdmin,App\Subcategory']);
    Route::get('delete_subcategory/{id}','Admin\SubcategoryController@delete_subcategory')->name('delete_subcategory')->middleware(['can:isAdmin,App\Subcategory']);
    Route::get('get_subcategories/{id}','Admin\SubcategoryController@get_subcategories')->name('get_subcategories');
    
    //  expenses routes
    Route::get('add_expense/','Admin\ExpenseController@view_addexpense')->name('view_addexpense');
    Route::post('add_expense/','Admin\ExpenseController@add_expense')->name('add_expense');
    Route::get('view_expense/','Admin\ExpenseController@view_expense')->name('view_expense');
    Route::get('edit_expense/{id}','Admin\ExpenseController@edit_expense')->name('edit_expense');
    Route::post('update_expense/{id}','Admin\ExpenseController@update_expense')->name('update_expense')->middleware(['can:isAdmin,App\Expense']);
    Route::get('delete_expense/{id}','Admin\ExpenseController@delete_expense')->name('delete_expense')->middleware(['can:isAdmin,App\Expense']);
        //  Income routes
    Route::get('add_income/','Admin\IncomeController@view_addincome')->name('view_addincome');
    Route::post('add_income/','Admin\IncomeController@add_income')->name('add_income');
    Route::get('view_income/','Admin\IncomeController@view_income')->name('view_income');
    Route::get('edit_income/{id}','Admin\IncomeController@edit_income')->name('edit_income');
    Route::post('update_income/{id}','Admin\IncomeController@update_income')->name('update_income');
    Route::get('delete_income/{id}','Admin\IncomeController@delete_income')->name('delete_income');
     //  Report routes
    Route::get('view_reports/','Admin\ReportController@view_reports')->name('view_reports');
    Route::post('reports/','Admin\ReportController@reports')->name('reports');
    //  Settings routes
    Route::get('view_setting/','Admin\SettingController@view_settings')->name('view_settings');
    Route::post('update_setting/{id}','Admin\SettingController@update_setting')->name('update_setting');
    Route::get('edit_setting/','Admin\SettingController@edit_setting')->name('edit_setting');
    //  Properties routes
    // Route::get('view_addproperty/','Admin\PropertyController@view_addproperty')->name('view_addproperty');
    Route::get('properties','Admin\PropertyController@properties')->name('properties');
    // Route::get('edit_property/','Admin\PropertyController@edit_property')->name('edit_property');



});



// Route::fallback(function(){

//     return back();
// });


Auth::routes();

