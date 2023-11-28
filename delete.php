<?php
include("connect.php");
$articleId = $_POST["articleId"];
$stmt = $pdo->prepare("DELETE FROM `articles` WHERE `articleId` = $articleId;");

//execute
if($stmt->execute()){
	?><p>Record <?=$articleId ?> deleted</p><?php
}else{
	?><p>Could not delete record</p><?php
}
?>
<a href="admin-dashboard.php">Go Back</a>