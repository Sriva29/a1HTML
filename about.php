<?php session_start(); 
include("connect.php");
$stmt = $pdo->prepare("SELECT * FROM `about`");
$stmt->execute();
$about = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicons/favicon-32x32.png">
    <link rel="stylesheet" href="css/main.css">
    <title><?=$about["aboutTitle"]?></title>
</head>
<body>
    <?php include "header.php"; ?>
    <main class="flex-body">
    <div class="about-container">
    <div class="body-element">
        <img src="img/cold-freeze.gif" alt="image of Ron Swanson from Parks and Rec freezing and wearing warm clothes. His moustache is prominently visible.">
    </div>
    
    <div class="body-element">
    <article class="about-text">
    <?=$about["aboutContent"]?>
        
    </article>
    </div>
    </div>
    <?php include "footer.php"; ?>
    </main>
</body>
</html>