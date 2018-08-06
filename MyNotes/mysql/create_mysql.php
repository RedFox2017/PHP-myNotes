<?php
$servername = "127.0.0.1";
$username = "root";
$password = "154267cloud~";

// 创建连接
$conn = new mysqli($servername, $username, $password, 'mysql');
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
// 创建数据库
$sql = "CREATE DATABASE MyNotes";
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . $conn->error;
}
 
$conn->close();
?>
