<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

session_unset();

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out</title>
    <link rel="stylesheet" href="css/main.css"> <!-- Adjust if you have a CSS file -->
</head>
<body>
    <main>
    <div class="logout-box">
        <p>You have successfully logged out.</p>
        <a href="login.php"><button>Log In</button></a>
    </div>
    </main>
</body>
</html>
