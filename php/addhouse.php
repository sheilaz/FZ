<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fz";

error_reporting(0);

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$sql = "INSERT INTO house (loupan, huxing, yangtai, chaoxiang, jiaoyifangshi, jiage, mianji, louhao, cenghao, fanghao)
VALUES ('{$_POST['district']}', '{$_POST['style']}', '{$_POST['balcony']}', '{$_POST['direction']}', '{$_POST['pay']}', '{$_POST['price']}', '{$_POST['area']}', '{$_POST['place01']}', '{$_POST['place02']}', '{$_POST['place03']}')";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>