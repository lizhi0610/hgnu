<?php

return array(

    /* 应用设定 */
    'MODULE_ALLOW_LIST'         => array('Admin','Home'), //扩展模块列表
    'DEFAULT_MODULE'            => 'Home',                //默认模块

    /* 错误设置 */
    'SHOW_PAGE_TRACE'            => false,   //显示右下角调试界面

    /* URL设置 */
    'URL_CASE_INSENSITIVE'       => true,   //区分URL大小写，true为不区分，false为区分
    'URL_MODEL'                  => 2,      //0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE 模式); 3 (兼容模式) 默认为PATHINFO 模式
    'URL_HTML_SUFFIX'            => '',     //URL伪静态后缀设置

    /* 加载扩展配置文件 */
    'LOAD_EXT_CONFIG'            => 'db,verify',   //数据库配置文件

    /* 默认设定 */
    'DEFAULT_FILTER'             => 'htmlspecialchars', //默认参数过滤方法，适用于I函数

    /* 用于加密的字符串 */
    'ENCRYPTION_KEY'             => 'Ntif@#2B3JS6\.7/NJ*kK%HW\k+8@J<O',

    /* cookies设置 */
    'COOKIES_KEY'                => 'Ntif@#2BA1S6\.7/NJ*1K%HW\k+8@J<O',  //COOKIE加密参数
    'COOKIES_TIME'               => 60*60*24*7,   //cookies保存时间

);


