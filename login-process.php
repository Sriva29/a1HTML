
<?php
include("header.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//connect
include("connect.php");

$email = $_POST['email'];
$password = $_POST['password']; 

//prepare
$stmt = $pdo->prepare("SELECT * FROM `members` WHERE `email` = '$email' AND `password` = '$password'");
$stmt->execute();
$member = $stmt->fetch(PDO::FETCH_ASSOC);

if($member) {
    $_SESSION ["username"] = $member["username"];
    $_SESSION ["memberId"] = $member["memberId"];
    $_SESSION ["loggedIn"] = true;
    if($member["admin?"] == 1) {
    $_SESSION ["isAdmin"] = true;
    }
    echo "<p> You have successfully logged in! </p>";
    echo'<a href="index.php">Go Home</a>';
} else {
    echo "<p> You are not allowed inside! </p>";
    echo'<a href="login.php">Try Again</a>';
}

 include ("footer.php");

 ?>