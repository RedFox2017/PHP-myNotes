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
				if($_POST["user_name"]==$row['name']&&$_POST["user_password"]==$row['password'])
				{
					echo "登录成功"."<br>";
					echo "name:".$row['name']."<br>";
					break;
				}		
		}
		echo "用户名或密码错误！";	
	}else{
		echo "0 结果";
	}
	$connect->close();
?>