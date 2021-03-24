<?php


use Illuminate\Support\Facades\Route;


Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){ //...


	 Route::group(['namespace' => 'Home'], function(){


        Route::get('/', 'WelcomeController@index')->name('/');
       
		Auth::routes();

		Route::resource('parent_category', 'ParentCategoryController')->except(['show']);
		
		Route::resource('sub_category', 'SubCategoryController')->except(['show']);


	});//route group Home



	 
		



});//end of end






