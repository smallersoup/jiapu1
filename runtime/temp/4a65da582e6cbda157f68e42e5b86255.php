<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"D:\WWW\jiapu_baiqianwan_net/application/admin\view\login.index.html";i:1643863559;s:66:"D:\WWW\jiapu_baiqianwan_net\application\extra\view\admin.main.html";i:1643863559;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit"/>
        <title><?php echo (isset($title) && ($title !== '')?$title:''); if(!empty($title)): ?> · <?php endif; ?><?php echo sysconf('site_name'); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="shortcut icon" href="<?php echo sysconf('browser_icon'); ?>" />
        <link rel="stylesheet" href="/static/plugs/awesome/css/font-awesome.min.css?ver=<?php echo date('ymd'); ?>">
        <link rel="stylesheet" href="/static/plugs/bootstrap/css/bootstrap.min.css?ver=<?php echo date('ymd'); ?>"/>
        <link rel="stylesheet" href="/static/plugs/layui/css/layui.css?ver=<?php echo date('ymd'); ?>"/>
        <link rel="stylesheet" href="/static/theme/default/css/console.css?ver=<?php echo date('ymd'); ?>">
        <link rel="stylesheet" href="/static/theme/default/css/animate.css?ver=<?php echo date('ymd'); ?>">
<link rel="stylesheet" href="/static/theme/default/css/login.css">

        <script src="/static/plugs/require/require.js?ver=<?php echo date('ymd'); ?>"></script>
        <script src="/static/admin/app.js?ver=<?php echo date('ymd'); ?>"></script>
        <script>window.ROOT_URL='__PUBLIC__';</script>
    </head>
    
    <body>
        
<style>
  .admin-captcha {
    position: absolute;
    margin-left: 205px;
    width: 48%;
    right: 0;
    top: -2px;
    height: 40px;
}
</style>
<div class="login-container full-height">

    <!-- 动态云层动画 开始 -->
    <div class="clouds-container">
        <div class="clouds clouds-footer"></div>
        <div class="clouds"></div>
        <div class="clouds clouds-fast"></div>
    </div>
    <!-- 动态云层动画 结束 -->

    <!-- 顶部导航条 开始 -->
    <div class="header">
        <span class="title notselect">
            欢迎登录 <?php echo sysconf('app_name'); ?> 后台管理 <sup><?php echo sysconf('app_version'); ?></sup>
        </span>
        <ul>
            <!--<li class="notselect"><a href="javascript:void(0)" target="_blank">帮助</a></li>-->
            <li class="notselect">
                <a href="http://sw.bos.baidu.com/sw-search-sp/software/4bcf5e4f1835b/ChromeStandalone_54.0.2840.99_Setup.exe">
                    <b>推荐使用谷歌浏览器</b>
                </a>
            </li>
        </ul>
    </div>
    <!-- 顶部导航条 结束 -->

    <!-- 页面表单主体 开始 -->
    <div class="container" style="top:50%;margin-top:-300px">
        <form style="height:400px;background-size: cover;" onsubmit="return false;" data-time="0.001" data-auto="true" method="post"
              class="content layui-form animated fadeInDown">
            <div class="people">
                <div class="tou"></div>
                <div id="left-hander" class="initial_left_hand transition"></div>
                <div id="right-hander" class="initial_right_hand transition"></div>
            </div>
            <ul>
                <li>
                    <input required="required" pattern="^\S{4,}$" value="admin" name="username"
                           autofocus="autofocus" autocomplete="off" class="login-input username"
                           title="请输入4位及以上的字符" placeholder="请输入用户名/手机号码"/>
                </li>
                <li>
                    <input required="required" pattern="^\S{4,}$" value="admin" name="password"
                           type="password" autocomplete="off" class="login-input password"
                           title="请输入4位及以上的字符" placeholder="请输入密码"/>
                </li>
                <li>
                    <input style="width: 50%;display: inline-block;" type="text" name="verify" placeholder="请输入验证码" autocomplete="off" class="login-input password">
                    <img style="" id="verify_img" class="admin-captcha" src="<?php echo captcha_src(); ?>" onclick="updateVerify()">
                </li>
                <li class="text-center">
                    <button type="submit" class="layui-btn layui-disabled" data-form-loaded="立 即 登 入">正 在 载 入</button>
                    <!--<a style="position:absolute;display:block;right:0" href="javascript:void(0)">忘记密码？</a>-->
                </li>
            </ul>
        </form>
    </div>
    <!-- 页面表单主体 结束 -->

    <!-- 底部版权信息 开始 -->
    <?php if(sysconf('site_copy')): ?>
    <div class="footer notselect"><?php echo sysconf('site_copy'); ?></div>
    <?php endif; ?>
    <!-- 底部版本信息 结束 -->

</div>

        
<script>
    if (window.location.href.indexOf('#') > -1) {
        window.location.href = window.location.href.split('#')[0];
    }
    require(['jquery'], function ($) {
        $('[name="password"]').on('focus', function () {
            $('#left-hander').removeClass('initial_left_hand').addClass('left_hand');
            $('#right-hander').removeClass('initial_right_hand').addClass('right_hand')
        }).on('blur', function () {
            $('#left-hander').addClass('initial_left_hand').removeClass('left_hand');
            $('#right-hander').addClass('initial_right_hand').removeClass('right_hand')
        });
    });
    function updateVerify() {
        var ts = Date.parse(new Date())/1000;
        var img = document.getElementById('verify_img');
        img.src = "/captcha?id="+ts;
    }
</script>

    </body>
    
</html>