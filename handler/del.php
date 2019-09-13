<?php

require('conn.php');

$sql='delete from single';

mysqli_query($conn, $sql);
mysqli_close($conn);
?>