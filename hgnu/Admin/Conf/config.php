<?php
    //路径设置
    return array(
        'TMPL_PARSE_STRING'     =>     array(
            '__CSS__'    =>   __ROOT__ . '/Public/' . MODULE_NAME . '/assets/css',
            '__JS__'     =>   __ROOT__ . '/Public/' . MODULE_NAME . '/assets/js',
            '__IMG__'    =>   __ROOT__ . '/Public/' . MODULE_NAME . '/assets/i'
        ),

        /* 后台session前缀设置 */
        'SESSION_PREFIX' => 'admin_'
    );