<?php

require('conn.php');

$acount=$_POST['acount'];
$title=$_POST['title'];

$sql="update single set acount='$acount' where title='$title'";

mysqli_query($conn, $sql);
mysqli_close($conn);

?>