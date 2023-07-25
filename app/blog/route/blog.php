<?php
/*
 * @author: liudiao
 * @Date: 2023-07-25 14:42:33
 * @Description: blog 路由
 */

use think\facade\Route;

 Route::group(':version.index', function(){
    Route::get('hello','h5/:version.Index/hello')->name('blog_index_hello');
 });
