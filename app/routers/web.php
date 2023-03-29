<?php
use App\Router;
use Illuminate\Support\Facades\Route;

Router::get('/hello', function(){
    echo 'Hello world';
});
Router::error(function(){
    echo '404 :: Page Not Found';
});

Router::get('/','App\Controllers\HomeController@index');
Router::get('/home','App\Controllers\HomeController@index');

Router::get('/login', '\App\Controllers\Auth\LoginController@showLoginForm');
Router::post('/login', '\App\Controllers\Auth\LoginController@login');

Router::get('/logout', '\App\Controllers\Auth\LoginController@logout');
Router::post('/logout', '\App\Controllers\Auth\LoginController@logout');

Router::get('/register', '\App\Controllers\Auth\RegisterController@showRegisterForm');
Router::post('/register', '\App\Controllers\Auth\RegisterController@register');

Router::get('/search', '\App\Controllers\SearchController@searchForm');

Router::get('/account', '\App\Controllers\AccountController@account');
Router::post('/account', '\App\Controllers\AccountController@update');

Router::get('/account/password', '\App\Controllers\Auth\PassController@show_password');
Router::post('/account/password', '\App\Controllers\Auth\PassController@password');

Router::get('/admin/product', '\App\Controllers\ProductController@product');
Router::post('/admin/product', '\App\Controllers\ProductController@update');

Router::get('/admin/product_list', '\App\Controllers\\ProductController@product_list');
Router::post('/admin/product_list/delete', '\App\Controllers\\ProductController@deleteProduct');

Router::get('/forget', '\App\Controllers\Auth\PassController@forgetPass');
Router::post('/forget', '\App\Controllers\Auth\PassController@Pass');

?>