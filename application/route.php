<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
Route::rule('index','index/Index/index');
Route::rule('book','index/Index/book');
Route::rule('help_tips','index/Index/help_tips');
Route::rule('orders','index/Index/orders');
Route::rule('profile','index/Index/profile');
Route::rule('store_address','index/Index/store_address');
Route::rule('products','index/Index/products');
Route::rule('product_detaile','index/Index/product_detaile');
Route::rule('product_detaile_qiye','index/Index/product_detaile_qiye');
Route::rule('order_details','index/Index/order_details');
Route::rule('do_order','index/Index/do_order');
Route::rule('combos','index/Index/combos');
Route::rule('schedules','index/Index/schedules');
Route::rule('city','index/Index/city');
Route::rule('stores','index/Index/stores');

//api
Route::rule('api/validatecode','api/Api/validatecode');
Route::rule('api/getcode','api/Api/getcode');
Route::rule('api/getTimes','api/Api/getTimes');
Route::rule('api/order','api/Api/order');
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
