<?php
		$server='localhost';
		$username='root';
		$password='';
		$database='db_aquatic';
		
		$conn=mysqli_connect($server,$username,$password,$database);
		if(!$conn)
		{
			echo "Connection Failed";
		}
		
		
?>