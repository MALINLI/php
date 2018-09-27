<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>login</title>
    <base href="<?php echo site_url();?>">
</head>
<body>
    <form action="welcome/save" method="post">
        <p>
            用户名: <input type="text" name="username">
        </p>
        <p>
            密码: <input type="password" name="password">
        </p>
        <p>
            <input type="submit" value="登录">
        </p>
    </form>
</body>
</html>