<?php

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

            Route::get('/', 'WelcomeController@index')->name('welcome');

            //user routes
            Route::resource('users', 'UserController')->except(['show']);

            //parent_category routs
            Route::resource('parent_category', 'ParentCategoryController')->except(['show']);
		
			//sub_category routs
			Route::resource('sub_categories', 'SubCategoryController')->except(['show']);

            //markets routs
            Route::resource('markets', 'MarketController')->except(['show']);

            //carts routs
            Route::resource('carts', 'CartController')->except(['show']);

        });//end of dashboard routes

        
    });

