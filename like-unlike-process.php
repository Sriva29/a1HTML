<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
include("connect.php");

if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true){
    $articleId = $_POST["articleId"];
    $memberId = $_POST["memberId"];
    $likeUnlike = $_POST["likeUnlike"];

    if($likeUnlike == 'like'){
        $member = $pdo->prepare("SELECT * FROM `member` WHERE memberId = $memberId");
        $stmt = $pdo->prepare("INSERT INTO `likes` (`articleId`, `memberId`) VALUES ('$articleId', '$memberId')");
        $stmt->execute();
        echo'<a href="index.php">Go Back</a>';
    } elseif($likeUnlike == 'unlike'){
        $stmt = $pdo->prepare("DELETE FROM `likes` WHERE memberId = $memberId AND articleId = $articleId");
        $stmt->execute();
        echo'<a href="index.php">Go Back</a>';
    }
}
?>
