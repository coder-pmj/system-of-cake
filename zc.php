<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!--    <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册页面</title>

</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);
$servername = "localhost";
$username = "root";
$password = "zsh123456.";
$dbname = "login_login";
// 创建链接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检查链接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$sql = "INSERT INTO user (username,password)
VALUES ('$_POST[zcusername]','$_POST[zcuserpassword]')";
if ($conn->multi_query($sql) === TRUE) {
    //注册成功/失败后在整个页面动态创建一个链接
    echo "注册成功<a href='index.php'>点击进入</a>&nbsp;&nbsp;";
} else {
    echo "注册失败<a href='account.html'>点击返回</a>&nbsp;&nbsp;";
}

$conn->close();
?>
</body>
</html>
