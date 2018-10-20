<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <base href="<?php echo site_url();?>">
</head>
<body>
<form action="welcome/login_check" method="post">
    <p>
        用户名: <input type="text" name="username">
    </p>
    <p>
        密码: <input type="password" name="pwd1">
    </p>
    <p>
        <input type="submit" value="登录">
    </p>

</form>
</body>
</html>