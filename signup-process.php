
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//connect
include("connect.php");

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password']; 

//prepare
$stmt = $pdo->prepare("INSERT INTO `members` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password');");


if($stmt->execute()) {
    $memberId = $pdo->lastInsertId();
    $_SESSION ["memberId"] = $memberId;
    $_SESSION ["username"] = $username;
    $_SESSION ["loggedIn"] = true;
}

include("header.php");
?>

<?="You have successfully signed up";?>
<a href="index.php">Go Home</a>
<?php include ("footer.php");