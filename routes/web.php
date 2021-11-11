<?php

Route::get('/', 'HomeController@index')->name('goreala');
// Route::get('/', 'HomeController@index')->name('goreala');

// Auth user
Route::group([ 'prefix' => 'auth', 'namespace' => "Auth" ], function() {
    Route::group( [ 'middleware' => 'guest' ], function() {
        
        //Login
        Route::get('/login', ['uses'=>'LoginController@login_user'])->name('login_user');
        Route::post('/login_auth_user', ['as' => 'login_auth_user', 'uses' => "LoginController@login_auth_user"]);
        
        
        //Register
        Route::get('/register', ['as' => 'resgister.user', 'uses' => "RegisterController@signup_user"]);
        Route::post('/signup_user', ['as' => 'register.post_user', 'uses' => "RegisterController@register_user"]);
        
        //Profile
        Route::post('/profile', ['as' => 'profile_user', 'uses' => "RegisterController@register_user"]);

        
        
    });
    //change pwd
    Route::get('/changepassword', ['as' => 'change.pwd', 'uses' => "ChangePassword@view"]);
    Route::post('/changepasswordpost', ['as' => 'change.post', 'uses' => "ChangePassword@store"]);

    Route::get('/forgetpassword', ['as' => 'forget.password', 'uses' => "ForgotPasswordController@Forgetview"]);
    Route::post('/forgetpwdpost', ['as' => 'forget.post', 'uses' => "ForgotPasswordController@ForgetPassword"]);
    Route::get('/resetpassword/{token}', ['as' => 'reset.form', 'uses' => "ResetPasswordController@ResetPasswordForm"]);
    Route::post('/resetpassword', ['as' => 'reset.post', 'uses' => "ResetPasswordController@UpdatePassword"]);



    //logout
    Route::get('/logout_user',['as' => 'logout_user', 'uses' => 'LoginController@logout_user']);
});


//===============================//
//          Layouts              //
//===============================//
Route::group(
    [           
        'namespace' => 'Frontend',

    ], function(){
        Route::get('/profile', ['as' => 'profile_user', 'uses' => "ProfileController@index"]);
        Route::get('blog/{slug}', ['as' => 'blog.detail', 'uses' => 'BlogdetailController@blogdetail']);
        Route::get('upcoming', ['uses'=>'UpcomingController@blogdetail'])->name('upcoming');
        Route::post('/contact', ['as' => 'contact.store', 'uses' => "ContactController@store"]);
        Route::post('blog_comment', ['as' => 'blog.comment', 'uses' => 'BlogdetailController@store']);
        
        // Sitemap
        Route::get('/sitemap.xml', 'SitemapController@index')->name('getSitemap');
});

