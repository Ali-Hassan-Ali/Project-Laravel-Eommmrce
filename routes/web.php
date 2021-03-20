<?php


use Illuminate\Support\Facades\Route;


Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){ //...


	 Route::group(['namespace' => 'Home'], function(){


        Route::get('/', 'WelcomeController@index')->name('/');
       

	});//route group Home
	 
		Auth::routes();

});//end of end






