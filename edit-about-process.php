<?php
include("connect.php");

$aboutTitle = $_POST['aboutTitle'];
$aboutContent = $_POST['aboutContent'];

$stmt = $pdo->prepare("UPDATE `about` SET `aboutTitle` = '$aboutTitle', `aboutContent` = '$aboutContent' WHERE `about`.`ind` = 1");
$stmt->execute();

if($stmt){
    echo'<p>Update Sucessful</p> <a href="admin-dashboard.php">Go Back to Dashboard</a>';
}
else{
    echo '<p>Unsuccessful update</p> <a href="edit-about.php>Try again</a>';
}
?>