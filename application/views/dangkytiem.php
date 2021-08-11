<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký tiêm chủng</title>
</head>
<body>
<div style="text-align: center;">
    <h1>Chào mừng bạn đến với website đăng ký tiêm chủng</h1>
    <h4>Xin mời đăng ký thông tin tiêm chủng</h4>
    <form method="post" action="<?php echo base_url('Confirm/')?>" >
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
                <th>Mật khẩu</th>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <th>Tuổi</th>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <th>Nơi đăng ký tiêm</th>
                <td><input type="text" name="noitiem"></td>
            </tr>
            <tr>
                <th>Đối tượng ưu tiên</th>
                <td><input type="number" name="doituong"></td>
            </tr>
            <tr>
                <th>Ngày hẹn tiêm</th>
                <td><input type="date" name="ngaytiem"></td>
            </tr>
            <tr>
                <td colspan="8">
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
    <a href="<?php echo base_url('Welcome/logout/')?>">Logout</a>
</div>
</body>
</html>
