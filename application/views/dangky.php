<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
</head>
<body>
<div style="text-align: center;">
    <h1>Chào mừng bạn đến với website đăng ký tiêm chủng</h1>
    <h4>Xin mời đăng ký</h4>
    <form method="post" action="" >
        <table border="1" style="margin: auto">
            <tr>
                <th>Họ tên</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
    <a href="<?php echo base_url("Welcome/")?>">Hoặc đăng nhập</a>
</div>
</body>
</html>
