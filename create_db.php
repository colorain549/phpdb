<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
// 
$dbname = "dbname";

try { 
    $conn = new PDO("mysql:host=$servername", $username, $password); 

    // 设置 PDO 错误模式为异常 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    // TODO 创建数据库
    $sql = "CREATE DATABASE $dbname"; 

    // 使用 exec() ，因为没有结果返回 
    $conn->exec($sql); 

    echo "数据库创建成功<br>"; 
} 
catch(PDOException $e) 
{ 
    echo $sql . "<br>" . $e->getMessage(); 
} 

$conn = null; 
?>