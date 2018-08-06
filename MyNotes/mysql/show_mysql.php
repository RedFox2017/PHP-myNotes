<?php
	$servername="localhost";
	$username="root";
	$password="154267cloud~";
	$dbname="MyNotes";
	
	$connect=new mysqli($servername,$username,$password,$dbname);
	if($connect->connect_error){
		die("数据库连接失败！".$connect->connect_error);
	}
	
	$sql = "SELECT name,password FROM Users";
	$result = $connect->query($sql);
	if($result->num_rows>0)
	{
		while($row = $result->fetch_assoc())
		{
				echo "name:".$row['name']."password:".$row['password']."<br>";
		}
	}else{
		echo "0 结果";
	}
	$connect->close();
?>