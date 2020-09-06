<?php
$servername = "localhost";
$username = "root";
$password = "";
// TODO 
$dbname = "dbname";
$tbname = 'country';
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // 开始事务
    $conn->beginTransaction();
    // TODO SQL 语句
    $conn->exec("INSERT INTO  (code, name, population) 
    VALUES ('AU','Australia',18886000)
    ");

    $conn->exec("INSERT INTO country (code, name, population) 
    VALUES ('BR','Brazil',170115000)
    ");

    $conn->exec("INSERT INTO country (code, name, population) 
    VALUES ('CA','Canada',1147000)
    ");

    $conn->exec("INSERT INTO country (code, name, population) 
    VALUES ('CN','China',1277558000)
    ");

    $conn->exec("INSERT INTO country (code, name, population) 
    VALUES ('DE','Germany',82164700)
    ");

    $conn->exec("INSERT INTO country (code, name, population) 
    VALUES ('FR','France',59225700)
    ");

    $conn->exec("INSERT INTO country (code, name, population) 
    VALUES ('GB','United Kingdom',59623400)
    ");

    $conn->exec("INSERT INTO country (code, name, population) 
    VALUES ('IN','India',1013662000)
    ");

    $conn->exec("INSERT INTO country (code, name, population) 
    VALUES ('RU','Russia',146934000)
    ");

    $conn->exec("INSERT INTO country (code, name, population) 
    VALUES ('US','United States',278357000)
    ");
 
    // 提交事务
    $conn->commit();
    echo "新记录插入成功";
}
catch(PDOException $e)
{
    // 如果执行失败回滚
    $conn->rollback();
    echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
?>