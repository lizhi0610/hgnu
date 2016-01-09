<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!doctype html>
        <html class="no-js">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>后台首页</title>
            <meta name="description" content="后台首页 - bundary">
            <meta name="keywords" content="index">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <meta name="renderer" content="webkit">
            <meta http-equiv="Cache-Control" content="no-siteapp"/>
            <link rel="icon" type="image/png" href="/Public/Admin/assets/i/favicon.png">
            <link rel="apple-touch-icon-precomposed" href="/Public/Admin/assets/i/app-icon72x72@2x.png">
            <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
            <link rel="stylesheet" href="/Public/Admin/assets/css/amazeui.min.css"/>
            <link rel="stylesheet" href="/Public/Admin/assets/css/admin.css">
            <!--[if (gte IE 9)|!(IE)]><!-->
            <script src="/Public/Admin/assets/js/jquery.min.js"></script>
            <!--<![endif]-->
            <script src="/Public/Admin/assets/js/index.js"></script>
        </head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->
<header class="am-topbar admin-header">
    <div class="am-topbar-brand">
        <strong>Bundary</strong>
        <small>后台管理</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
            class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span
                    class="am-badge am-badge-warning">5</span></a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span>管理员 - <?php echo ($_SESSION[C("SESSION_PREFIX")]["username"]); ?>
                    <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
                    <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="<?php echo U(MODULE_NAME . '/Common/logout');?>"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span
                    class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>
<script type="text/javascript">
    var PUBLIC = '/Public';
    var uploadPic = '<?php echo U("Common/uploadPic");?>';
</script>
<div class="am-cf admin-main">
    <!-- sidebar start -->
<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
        <ul class="am-list admin-sidebar-list">
            <li><a href="<?php echo U(MODULE_NAME . '/Index/index');?>"><span class="am-icon-home"></span> 首页</a></li>
            <li class="admin-parent">
                <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 页面模块 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                    <li><a href="admin-user.html" class="am-cf"><span class="am-icon-check"></span> 个人资料<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                    <li><a href="admin-help.html"><span class="am-icon-puzzle-piece"></span> 帮助页</a></li>
                    <li><a href="<?php echo U(MODULE_NAME . '/Gallery/index');?>"><span class="am-icon-th"></span> 相册<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
                    <li><a href="admin-log.html"><span class="am-icon-calendar"></span> 系统日志</a></li>
                    <li><a href="admin-404.html"><span class="am-icon-bug"></span> 404</a></li>
                </ul>
            </li>
            <li><a href="admin-table.html"><span class="am-icon-table"></span> 表格</a></li>
            <li><a href="admin-form.html"><span class="am-icon-pencil-square-o"></span> 表单</a></li>
            <li><a href="<?php echo U(MODULE_NAME . '/Common/logout');?>"><span class="am-icon-sign-out"></span> 注销</a></li>
        </ul>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p><span class="am-icon-bookmark"></span> 公告</p>
                <p>时光静好，与君语；细水流年，与君同。</p>
            </div>
        </div>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p><span class="am-icon-tag"></span> wiki</p>
                <p>Welcome to Bundary - 后台管理!</p>
            </div>
        </div>
    </div>
</div>
<!-- sidebar end -->
    <!-- content start -->
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">上传图片</strong> /
                <small>Gallery</small>
            </div>
        </div>

        <form class="am-form" action="<?php echo U(MODULE_NAME . '/Gallery/doUpload');?>" enctype="multipart/form-data" method="post">
            <fieldset>
                <iframe name="upload_file" style="display:none;"></iframe>
                <div class="am-form-group">
                    <label for="doc-ipt-picName-1">图片名称</label>
                    <input type="text" name="picName" id="doc-ipt-picName-1" placeholder="请输入图片名称">
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-picAlias-1">图片别名</label>
                    <input type="text" name="picAlias" id="doc-ipt-picAlias-1" placeholder="请输入图片别名">
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-author-1">上传者</label>
                    <input type="text" name="author" id="doc-ipt-author-1" placeholder="上传者">
                </div>

                <div class="am-form-group">
                    <input type="hidden" name="max" id="doc-ipt-max-1" placeholder="大图">
                </div>

                <div class="am-form-group">
                    <input type="hidden" name="min" id="doc-ipt-min-1" placeholder="缩略图">
                </div>

                <div class="am-form-group am-form-file">
                    <button type="button" class="am-btn am-btn-primary am-btn-sm">
                        <i class="am-icon-cloud-upload"></i> 选择要上传的文件</button>
                    <input id="doc-form-file" type="file" name="photo" multiple>
                </div>
                <div id="file-list"></div>

                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </fieldset>
        </form>
    </div>
    <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Public/Admin/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<script src="/Public/Admin/assets/js/amazeui.min.js"></script>
<script src="/Public/Admin/assets/js/app.js"></script>
</body>

</html>