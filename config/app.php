<?php
/*
 * @author: liudiao
 * @Date: 2023-07-25 14:37:57
 * @Description: 
 */
// +----------------------------------------------------------------------
// | 应用设置
// +----------------------------------------------------------------------

return [
    // 应用地址
    'app_host'         => env('app.host', ''),
    // 应用的命名空间
    'app_namespace'    => '',
    // 是否启用路由
    'with_route'       => true,
    // 默认应用
    'default_app'      => 'index',

    // 开启自动多模式
    'auto_multi_app' => true,

    // 应用映射（自动多应用模式有效）
    'app_map'          => [
        'blog'=>'blog',
    ],
    // 域名绑定（自动多应用模式有效）
    'domain_bind'      => [
        'blog.oaido.com'=>'blog',
    ],

    // 开启应用快速访问
    'app_express' => false,

    // 默认时区
    'default_timezone' => 'Asia/Shanghai',

    // 禁止URL访问的应用列表（自动多应用模式有效）
    'deny_app_list'    => [],

    // 异常页面的模板文件
    'exception_tmpl'   => app()->getThinkPath() . 'tpl/think_exception.tpl',

    // 错误显示信息,非调试模式有效
    'error_message'    => '页面错误！请稍后再试～',
    // 显示错误信息
    'show_error_msg'   => false,
];
