<?php
session_start();
require('handler/conn.php');

$name = $_POST['name'];
$pwd=$_POST['pwd'];

$sql ="select * from user where username='$name'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
if ($row['password']==$pwd) {
	
	$_SESSION['user']=$name;
    // 如果配对成功，
    $arr=('1');
} else {
    //如果登录失败，就把内容更改成登录失败
    $arr=('2');
}

echo json_encode($arr);

mysqli_close($conn);
?>
