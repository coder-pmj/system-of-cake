<?php

        $picture=$_POST['picture'];
		$title=$_POST['title'];
		$price=$_POST['price'];
		$acount=$_POST['acount'];
		
		require('conn.php');
		
		
		$sql="select * from single where title='$title'";
		$result=mysqli_query($conn, $sql);
		if(mysqli_fetch_assoc($result)){
			$arr=('1');
		}else{
			$arr=('2');
			$sql="insert into single(title,price,picture,acount) values('$title','$price','$picture','$acount')";
			mysqli_query($conn, $sql);
		}
		
		echo json_encode($arr);
		mysqli_close($conn);
    
?>