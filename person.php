<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="frame-container"></div>
<div class="wrapper-user">
    <div class="container-user">
        <div class="header-bg"></div>
        <div class="user-title">
            <a href="main.php"><i class="fa fa-angle-left" aria-hidden="true"></i>返回首页</a>
        </div>
        <div class="user-header">
            <div class="user-avatar">
                <img src="img/noavatar_big.gif" alt="" width="80" height="80" id="previewer">
            </div>
            <p class="user-nickname js-username">
                Nickname <span class="icon-sex"><i class="fa fa-venus" aria-hidden="true"></i></span>
            </p>
        </div>
        <div class="mid-title">
            个人资料
        </div>
        <ul class="user-info">
            <li>手机号码: <input type="text" value="13456722020" class="js-tel"></li>
            <li>所在学院: <input type="text" value="" class="js-school"></li>
            <li>个性签名: <input type="text" value="" class="js-slogan"></li>
            <li>常去地方: <input type="text" value="" class="js-addr"></li>
            <li>是否搜索异性: <select name="allowed" class="js-allowed">
                    <option value="0" selected>禁止</option>
                    <option value="1">允许</option>
                </select>
            </li>
        </ul>
        <div class="btns userinfo">
            <input type="file" id="file-input" class="hidden" name="image" accept="image/gif, image/jpeg, image/png">
            <button type="button" class="btn btn-solid btn-full js-upload-avatar">上传头像</button>
            <button type="button" class="btn btn-solid btn-full js-update">更新资料</button>
            <a href="logout.php" type="button" class="btn btn-solid btn-full">退出登录</a>
        </div>
    </div>
</div>
<script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/babel-standalone/6.23.1/babel.min.js"></script>
<script src="js/person.js"></script>
</body>
</html>