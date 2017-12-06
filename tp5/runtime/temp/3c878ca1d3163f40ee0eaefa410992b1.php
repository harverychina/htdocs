<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"/Applications/MAMP/htdocs/tp5/public/../application/index/view/index/reg.html";i:1512553598;s:81:"/Applications/MAMP/htdocs/tp5/public/../application/index/view/Layout/header.html";i:1512568945;s:81:"/Applications/MAMP/htdocs/tp5/public/../application/index/view/Layout/footer.html";i:1512568946;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="__STATIC__/css/bootstrap.min.css">
    <link rel="stylesheet" href="__STATIC__/css/style.css">
    <title>注册</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="__URL__/index">首页</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="# ">今日资讯</a></li>
                    <li><a href="# ">产品简介</a></li>
                    <li><a href="# ">联系我们</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right ">
                    <li class="active "><a href="__URL__/reg ">注册</a></li>
                    <li><a href="__URL__/login ">登录</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>
</header>
            <div class="container">
                <div class="row">
                    <form class="reg-form">
                        <h2>用户注册</h2>
                        <label for="uid"></label><input type="text" name="uid" id="uid" placeholder="注册账号">
                        <label for="pwd"></label><input type="password" name="pwd" id="pwd" placeholder="注册密码">
                        <label for="rpwd"></label><input type="password" name="rpwd" id="rpwd" placeholder="确认密码">
                        <label for="verify"></label><input type="text" name="verify" id="verify" placeholder="验证码">
                        <div><?php echo captcha_img(); ?></div>
                        <button type="button" class="btn btn-large btn-block btn-primary">提交</button>
                    </form>
                </div>
            </div>
            <footer>
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">1950-2017</a></li>
                    <li><a href="#">&copy;广州市工贸技师学院</a></li>
                </ul>
            </div>
        </div>
    </nav>
</footer>
        </div>
    </div>
</body>
<script src="__STATIC__/js/jquery.min.js"></script>
<script src="__STATIC__/js/bootstrap.min.js"></script>
<script>
    $(function() {
        $("button").click(function() {
            var uid = $("#uid").val();
            var pwd = $("#pwd").val();
            var verify = $("#verify").val();

        });
    })
</script>

</html>