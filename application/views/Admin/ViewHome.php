<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrator</title>
</head>
<body>
    <table border="1" style="margin: auto">
        <tr><td colspan="4">QUẢN LÝ THÔNG TIN NGƯỜI ĐĂNG KÝ TIÊM VACCIN</td></tr>
        <tr>
            <th>Họ tên</th>
            <th>Nơi tiêm</th>
            <th>Đối tượng ưu tiên</th>
            <th>Ngày giờ hẹn tiêm</th>
        </tr>
        <?php foreach ($infor as $rows): ?>
            <?php
            $var = strtotime($rows->ngaytiem);
            $date = date("d - m - Y",$var);
            ?>
        <tr>
            <td><?php echo $rows->name; ?></td>
            <td><?php echo $rows->noitiem; ?></td>
            <td><?php echo $rows->doituong; ?></td>
            <td><?php echo $date; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>