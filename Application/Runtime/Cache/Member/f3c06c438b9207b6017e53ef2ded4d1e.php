<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<!--
Beyond Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->
<head>
    <meta charset="utf-8" />
    <title>Login Page</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/Public/member/assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/Public/member/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="/Public/member/assets/css/font-awesome.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="/Public/member/assets/css/beyond.min.css" rel="stylesheet" />
    <link href="/Public/member/assets/css/demo.min.css" rel="stylesheet" />
    <link href="/Public/member/assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />
    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="/Public/member/assets/js/skins.min.js"></script>
</head>
<!--Head Ends-->
<!--Body-->
<body>
    <div class="login-container animated fadeInDown">
        <div class="loginbox bg-white">
            <div class="loginbox-title">SIGN IN</div>
            <div class="loginbox-social">
                <div class="social-title ">Connect with Your Social Accounts</div>
                <div class="social-buttons">
                    <a href="" class="button-facebook">
                        <i class="social-icon fa fa-facebook"></i>
                    </a>
                    <a href="" class="button-twitter">
                        <i class="social-icon fa fa-twitter"></i>
                    </a>
                    <a href="" class="button-google">
                        <i class="social-icon fa fa-google-plus"></i>
                    </a>
                </div>
            </div>
            <div class="loginbox-or">
                <div class="or-line"></div>
                <div class="or">OR</div>
            </div>
            <form action="" method="post" onsubmit="return checkForm(this);">
            <div class="loginbox-textbox">
                <input type="text" class="form-control" name="user_name" id="username" placeholder="用户名" />
            </div>
            <div class="loginbox-textbox">
                <input type="password" class="form-control" name="user_pwd" id="password" placeholder="密码" />
            </div>
            <div style="position: relative;left:40px">
                    <input type="text" name="code" placeholder="验证码" id="code" style="width: 125px;height: 33px;" />
                    <!-- 点击切换 -->
                    <img src="/Member/Course/code" onclick="this.src='/Member/Course/code/' + Math.random();" width="90" height="33" />
            </div>
            <div class="loginbox-forgot">
                <a href="">Forgot Password?</a>
            </div>
            <div class="checkbox" style="position: relative;">
                <label>
                    <input type="checkbox" class="colored-primary" name="remember" value="on" id="remember">
                    <label class="text darkgray" for="remember">记住密码</label>
                </label>
            </div>
            <div class="loginbox-submit">
                <input type="submit" class="btn btn-primary btn-block" value="Login">
            </div>
            </form>
            <div class="loginbox-signup">
                <a href="register.html">Sign Up With Email</a>
            </div>
        </div>
        <div class="logobox">
        </div>
    </div>

    <!--Basic Scripts-->
    <script src="/Public/member/assets/js/jquery-2.0.3.min.js"></script>
    <script src="/Public/member/assets/js/bootstrap.min.js"></script>

    <!--Beyond Scripts-->
    <script src="/Public/member/assets/js/beyond.js"></script>

    <!--Google Analytics::Demo Only-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-52103994-1', 'auto');
        ga('send', 'pageview');

    </script>
    <script>
        function checkForm(form){
            if(form.username.value==""){
                alert("用户名不能为空！");
                form.username.focus();
                return false;
            }
            if(form.password.value==""){
                alert("密码不能为空！");
                form.password.focus();
                return false;
            }
            if(form.code.value==""){
                alert("验证码不能为空！");
                form.code.focus();
                return false;
            }
            return true;
        }
        $('#remember').focus(function(){
            $(this).blur();
        });

        $('#remember').click(function(e) {
            checkRemember($(this));
        });

        function checkRemember($this) {
            if (!-[1,]) {
                if ($this.prop("checked")) {
                    $this.parent().addClass('checked');
                } else {
                    $this.parent().removeClass('checked');
                }
            }
        }
    </script>
</body>
<!--Body Ends-->
</html>