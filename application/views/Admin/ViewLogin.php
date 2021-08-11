<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login as admin</title>
</head>
<body>
    <table style="margin: auto">
        <form method="post" action="">
            <tr>
                <td colspan="2">Please enter your account</td>
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
                <td colspan="2"><input type="submit" name="loginSubmit"></td>
            </tr>
        </form>
    </table>
    <div style=" padding: 15px; color: red; font-size: 13px;"><?php echo isset($error_msg)?$error_msg:''; ?></div>
</body>
</html>