<?php

use App\Models\Brand;
use App\Models\Product;

if (!function_exists('encrypt')) {
    function encrypt($pure_string, $encryption_key)
    {
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = '1234567891011121';
        $encryption = openssl_encrypt($pure_string, $ciphering, $encryption_key, $options, $encryption_iv);
        return $encryption;
    }
}

if (!function_exists('decrypt')) {
    function decrypt($encrypted_string, $encryption_key)
    {
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $decryption_iv = '1234567891011121';
        $decryption = openssl_decrypt($encrypted_string, $ciphering, $encryption_key, $options, $decryption_iv);
        return $decryption;
    }
}


if (!function_exists('check_login')) {
    function check_login()
    {
        return isset($_SESSION['user']) ? true : false;
    }
}

if(!function_exists('password_encrypt')){
    function password_encrypt($password){
        $options = [
            'cost' => 12,
        ];
        return password_hash($password, PASSWORD_BCRYPT, $options);
    }
}

if(!function_exists('password_check')){
    function password_check($password, $password_hash){
        return password_verify($password, $password_hash);
    }
}


if(!function_exists('config')){
    function config($key)
    {
        return $GLOBALS['config']->get($key);
    }
}

if(!function_exists('redirect')){
    function redirect($location)
    {
        if(ob_get_level()){
            ob_end_clean();
        }
        header('Location: '.$location);
        exit();
    }
}

if(!function_exists('auth')){
     /** 
   * @return \App\Models\User|mixed
    */
    function auth()
    {
        $userSerialized = session()->get('user');
        $user = $userSerialized ? unserialize($userSerialized):null;
        return $user;
    }
}

if(!function_exists('request')){
    function request(){
        $request = $GLOBALS['request'];
        return $request;
    }
}

if(!function_exists('session')){
    function session(){
        $session = $GLOBALS['session'];
        return $session;
    }
}

if(!function_exists('cookie')){
    function cookie(){
        $cookie = request()->cookies;
        return $cookie;
    }
}

class FLASH {
    public const SUCCESS = 'success';
    public const WARNING = 'warning';
    public const INFO = 'info';
    public const ERROR = 'error';
}
if (!function_exists('get_product')) {
    function get_product()
    {
       $items = Product::all();
       return $items;
    }
}
if (!function_exists('get_brand')) {
    function get_brand()
    {
       $brand = Brand::all();
       return $brand;
    }
}


