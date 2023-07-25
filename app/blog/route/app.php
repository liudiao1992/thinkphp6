<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('hello/:name', 'index/hello');


Route::group(':version',function(){
    Route::group('index',function(){
        Route::get('index','blog/v1/index/index');
        Route::get('queue','blog/v1/index/queue');
        Route::get('hello/:name','blog/v1/index/hello');
    });
});
