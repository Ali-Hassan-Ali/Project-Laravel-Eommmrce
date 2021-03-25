<?php


use Illuminate\Support\Facades\Route;


Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){ //...


	 Route::group(['namespace' => 'Home'], function(){


        Route::get('/', 'WelcomeController@index')->name('/');

        // user profile
        Route::resource('profiles', 'ProfileController');
        Route::post('change.password', 'ProfileController@changePassword')->name('change.password');

      

	});//route group Home
	 
	 // this is auth
		Auth::routes();

});//end of end






