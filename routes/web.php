<?php

Route::group(['middleware' => 'web'],function(){
    Route::get('/',function(){
        return view('login.login');
    });

    Route::group(['middleware' => 'AuthLogin'],function(){

        Route::post('Dashboard',[
            "as" => "login",
            "uses" => "DashboardController@dashboard"
        ]);

        Route::match(['post','get'],'/userinfo','DashboardController@insert_user_info')->name('userinfo');

        Route::view('/Dashboard','Dashboard/dashboard')->name('user_account');
    });

});




