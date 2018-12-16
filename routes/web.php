<?php

Route::get('/',function(){
   return view('login.login');
});

Route::group(['middleware' => 'AuthLogin'],function(){

    Route::post('Dashboard',[
        "as" => "login",
        "uses" => "DashboardController@dashboard"
    ]);
});


