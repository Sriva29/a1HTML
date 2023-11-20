<?php
//connect
$servername = "localhost";
$dbname = "moustachios";
$dbusername = "root";
$dbpassword = "";

$dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

?>