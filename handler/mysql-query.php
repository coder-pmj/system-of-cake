<?php
    

      
	  
	  function  query($sql){
	  	
		require('conn.php');
	  	
		

		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_assoc($result);
		
		
			return $row;
		
		
		
	  }
	  
	   function  query_size($sql){
	  	
		require('conn.php');
	  	
		mysqli_query($conn, 'set names utf-8');
		$result=mysqli_query($conn, $sql);
		$rows=mysqli_num_rows($result);
		
		
			return $rows;
		
		
		
	  }
    

?>