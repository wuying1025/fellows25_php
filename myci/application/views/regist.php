<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <base href="<?php echo site_url();?>">
</head>
<body>
<form action="welcome/save" method="post">
    <p>
        用户名: <input type="text" name="username">
    </p>
    <p>
        密码: <input type="password" name="pwd1">
    </p>
    <p>
        确认密码: <input type="password" name="pwd2">
    </p>
    <p>
        <input type="submit" value="注册">
    </p>

</form>
</body>
</html>