<?php

// Auth
Route::group([ 'prefix' => 'auth', 'namespace' => "Auth" ], function() {
    Route::group( [ 'middleware' => 'guest' ], function() {
        // Login
        Route::get('/signin', ['as' => 'login.index', 'uses' => "LoginController@index"]);
        Route::post('/signin', ['as' => 'login.post', 'uses' => "LoginController@login"]);
        // Register
        Route::get('/signup', ['as' => 'register.index', 'uses' => "RegisterController@index"]);
        Route::post('/signup', ['as' => 'register.post', 'uses' => "RegisterController@register"]);
    });
    Route::get('/logout',['as' => 'logout', 'uses' => 'LoginController@logout']);
});

// Admin
Route::group([ 'prefix' => 'admin', 'middleware' => 'sentinel_auth', 'namespace' => 'Backend'], function() {
    Route::get('/',['as' => 'home', 'uses' => 'DashboardController@home']);

    // Administrator
    Route::group([ 'prefix' => 'administration' ],function() {
        // Menus
        Route::group([ 'prefix' => 'menu' ],function() {
            Route::get('/', ['as' => 'menu.index', 'uses' => 'MenuController@index']);
            Route::get('/create', ['as' => 'menu.create', 'uses' => 'MenuController@create']);
            Route::post('/create', ['as' => 'menu.store', 'uses' => 'MenuController@store']);
            Route::get('/edit/{id}', ['as' => 'menu.edit', 'uses' => 'MenuController@edit']);
            Route::post('/edit/{id}', ['as' => 'menu.update', 'uses' => 'MenuController@update']);
            Route::post("/delete/{id}", ['as' => 'menu.delete', 'uses' => 'MenuController@destroy']);
        });

        // Roles
        Route::group([ 'prefix' => 'role' ],function() {
            Route::get('/', ['as' => 'role.index', 'uses' => 'RoleController@index']);
            Route::get('/create', ['as' => 'role.create', 'uses' => 'RoleController@create']);
            Route::post('/create', ['as' => 'role.store', 'uses' => 'RoleController@store']);
            Route::get('/edit/{id}', ['as' => 'role.edit', 'uses' => 'RoleController@edit']);
            Route::post('/edit/{id}', ['as' => 'role.update', 'uses' => 'RoleController@update']);
            Route::post("/delete/{id}", ['as' => 'role.delete', 'uses' => 'RoleController@destroy']);
        });

        // Users
        Route::group([ 'prefix' => 'user' ],function() {
            Route::get('/', ['as' => 'user.index', 'uses' => 'UserController@index']);
            Route::get('/create', ['as' => 'user.create', 'uses' => 'UserController@create']);
            Route::post('/create', ['as' => 'user.store', 'uses' => 'UserController@store']);
            Route::get('/edit/{id}', ['as' => 'user.edit', 'uses' => 'UserController@edit']);
            Route::post('/edit/{id}', ['as' => 'user.update', 'uses' => 'UserController@update']);
            Route::post("/delete/{id}", ['as' => 'user.delete', 'uses' => 'UserController@destroy']);
        });
    });

    // Administrator
    Route::group([ 'prefix' => 'posting' ],function() {
        // Blog
        Route::group([ 'prefix' => 'blog' ],function() {
            Route::get('/', ['as' => 'blog.index', 'uses' => 'BlogController@index']);
            Route::get('/create', ['as' => 'blog.create', 'uses' => 'BlogController@create']);
            Route::post('/create', ['as' => 'blog.store', 'uses' => 'BlogController@store']);
            Route::get('/edit/{id}', ['as' => 'blog.edit', 'uses' => 'BlogController@edit']);
            Route::post('/edit/{id}', ['as' => 'blog.update', 'uses' => 'BlogController@update']);
            Route::post("/delete/{id}", ['as' => 'blog.delete', 'uses' => 'BlogController@destroy']);
        });
        // Program
        Route::group([ 'prefix' => 'program' ],function() {
            Route::get('/', ['as' => 'program.index', 'uses' => 'ProgramController@index']);
            Route::get('/create', ['as' => 'program.create', 'uses' => 'ProgramController@create']);
            Route::post('/create', ['as' => 'program.store', 'uses' => 'ProgramController@store']);
            Route::get('/edit/{id}', ['as' => 'program.edit', 'uses' => 'ProgramController@edit']);
            Route::post('/edit/{id}', ['as' => 'program.update', 'uses' => 'ProgramController@update']);
            Route::post("/delete/{id}", ['as' => 'program.delete', 'uses' => 'ProgramController@destroy']);
        });
        //Protected
        Route::group([ 'prefix' => 'protected' ],function() {
            Route::get('/', ['as' => 'protected.index', 'uses' => 'ProtectedController@index']);
            Route::get('/create', ['as' => 'protected.create', 'uses' => 'ProtectedController@create']);
            Route::post('/create', ['as' => 'protected.store', 'uses' => 'ProtectedController@store']);
            Route::get('/edit/{id}', ['as' => 'protected.edit', 'uses' => 'ProtectedController@edit']);
            Route::post('/edit/{id}', ['as' => 'protected.update', 'uses' => 'ProtectedController@update']);
            Route::post("/delete/{id}", ['as' => 'protected.delete', 'uses' => 'ProtectedController@destroy']);
        });
        //Testimoni
        Route::group([ 'prefix' => 'testimoni' ],function() {
            Route::get('/', ['as' => 'testimoni.index', 'uses' => 'TestimoniController@index']);
            Route::get('/create', ['as' => 'testimoni.create', 'uses' => 'TestimoniController@create']);
            Route::post('/create', ['as' => 'testimoni.store', 'uses' => 'TestimoniController@store']);
            Route::get('/edit/{id}', ['as' => 'testimoni.edit', 'uses' => 'TestimoniController@edit']);
            Route::post('/edit/{id}', ['as' => 'testimoni.update', 'uses' => 'TestimoniController@update']);
            Route::post("/delete/{id}", ['as' => 'testimoni.delete', 'uses' => 'TestimoniController@destroy']);
        });
        //Tours
        Route::group([ 'prefix' => 'tours' ],function() {
            Route::get('/', ['as' => 'tours.index', 'uses' => 'ToursController@index']);
            Route::get('/create', ['as' => 'tours.create', 'uses' => 'ToursController@create']);
            Route::post('/create', ['as' => 'tours.store', 'uses' => 'ToursController@store']);
            Route::get('/edit/{id}', ['as' => 'tours.edit', 'uses' => 'ToursController@edit']);
            Route::post('/edit/{id}', ['as' => 'tours.update', 'uses' => 'ToursController@update']);
            Route::post("/delete/{id}", ['as' => 'tours.delete', 'uses' => 'ToursController@destroy']);
        });
        //Upcoming
        Route::group([ 'prefix' => 'upcoming' ],function() {
            Route::get('/', ['as' => 'upcoming.index', 'uses' => 'UpcomingController@index']);
            Route::get('/create', ['as' => 'upcoming.create', 'uses' => 'UpcomingController@create']);
            Route::post('/create', ['as' => 'upcoming.store', 'uses' => 'UpcomingController@store']);
            Route::get('/edit/{id}', ['as' => 'upcoming.edit', 'uses' => 'UpcomingController@edit']);
            Route::post('/edit/{id}', ['as' => 'upcoming.update', 'uses' => 'UpcomingController@update']);
            Route::post("/delete/{id}", ['as' => 'upcoming.delete', 'uses' => 'UpcomingController@destroy']);
        });
    });


    //other
    Route::group([ 'prefix' => 'feed' ],function() {
        // Blog
        Route::group([ 'prefix' => 'index' ],function() {
            Route::get('/', ['as' => 'feed.index', 'uses' => 'FeedController@index']);
        });
    });
    
});