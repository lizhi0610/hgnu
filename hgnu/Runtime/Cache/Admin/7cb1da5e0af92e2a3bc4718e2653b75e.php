<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>Login Page | Amaze UI Example</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="alternate icon" type="image/png" href="/Public/Admin/assets/i/favicon.png">
    <link rel="stylesheet" href="/Public/Admin/assets/css/amazeui.min.css"/>
</head>

<body>
<div class="header">
    <hr/>
</div>
<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <h3>登录</h3>
        <hr>
        <br>
        <form method="post" action="<?php echo U(MODULE_NAME . '/Login/login');?>" class="am-form">
            <label for="user_login">用户名:</label>
            <input type="text" name="user_login" id="user_login" value="">
            <br>
            <label for="user_pass">密码:</label>
            <input type="password" name="user_pass" id="user_pass" value="">
            <br>
            <label for="remember-me">
                <input id="remember-me" type="checkbox" name="remember-me" value="1"> 记住密码
            </label>
            <br/>
            <div class="am-cf">
                <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
                <input type="submit" name="" value="忘记密码 ^_^? " class="am-btn am-btn-default am-btn-sm am-fr">
            </div>
        </form>
        <hr>
        <p>copyright ©2015-2016  Bundary - 永无止境的程序猿  鄂ICP备15019081号</p>
    </div>
</div>
</body>

</html>