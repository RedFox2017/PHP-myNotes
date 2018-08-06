<?php
$servername = "localhost";
$username = "root";
$password = "154267cloud~";
$dbname = "MyNotes";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
 
// 预处理及绑定
$stmt = $conn->prepare("INSERT INTO Users (name, password) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $password);
 
// 设置参数并执行
$name = "hao";
$password = "123456";
$stmt->execute();

 
echo "注册成功！";
 
$stmt->close();
$conn->close();
?>