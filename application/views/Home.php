<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký / Đăng nhập</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>Chào mừng bạn đến với website đăng ký tiêm chủng</h1>
        <h4>Xin mời đăng nhập</h4>
        <form method="post" action="" >
            <table border="1" style="margin: auto">
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
                        <input type="submit" name="loginSubmit">
                    </td>
                </tr>
            </table>
        </form>
        <a href="<?php echo base_url("Welcome/register/")?>">Hoặc đăng ký</a>
        <div style=" padding: 15px; color: red; font-size: 13px;"><?php echo isset($error_msg)?$error_msg:''; ?></div>
    </div>
</body>
</html>
