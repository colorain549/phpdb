<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
// TODO
$dbname = "dbname";
$tbname = 'country';
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // TODO 使用 sql 创建数据表
    $sql = "CREATE TABLE $tbname (
    code CHAR(2) NOT NULL PRIMARY KEY,
    name CHAR(52) NOT NULL,
    population INT(11) NOT NULL DEFAULT '0',
    reg_date TIMESTAMP
    )";
 
    // 使用 exec() ，没有结果返回 
    $conn->exec($sql);
    echo "数据表创建成功";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
?>