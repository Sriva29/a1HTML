<?php
include("connect.php");

$articleId = $_POST["articleId"];

$title = $_POST['title'];
$authorName = $_POST['authorName'];
$fullContent = $_POST['fullContent'];

$stmt = $pdo->prepare("UPDATE `articles` SET `title` = '$title', `fullContent` = '$fullContent' WHERE `articleId` = $articleId");
$stmt->execute();

if($stmt){
    echo'<p>Update Sucessful</p> <a href="admin-dashboard.php">Go Back to Dashboard</a>';
}
else{
    echo '<p>Unsuccessful update</p> <a href="edit-about.php>Try again</a>';
}
?>