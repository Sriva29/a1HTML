<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Login Page</title>
</head>
<body>
<?php include 'header.php'?>
<main>
<div class="login-signup-wrapper">
    <div>
    <h1>Login</h1>
    <h2>Come grab a chair and join us.</h2>
    </div>
    <form class="login-signup-form" action="login-process.php" method="post">    
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
    
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    
        <input type="submit" value="Login">
    </form>
</div>
</main>
<?php include 'footer.php'?>
</body>
</html>