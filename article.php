<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicons/favicon-32x32.png">
    <link rel="stylesheet" href="css/main.css">

    <?php include ("connect.php");

    $articleId = $_GET["articleId"];
    $stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `articleId` = $articleId");
    $stmt->execute();
    $article = $stmt->fetch(PDO::FETCH_ASSOC);

    $likes = $pdo->prepare("SELECT COUNT(*) as `totalLikes` FROM `likes` GROUP BY `articleId`");
    $likes->execute();
    $likesData = $likes->fetch(PDO::FETCH_ASSOC);
    $likeCount = $likesData['totalLikes'];
    ?>

    <meta name="description"
        content="<?=$article['metaDesc'];?>">
    <meta name="keywords"
        content="<?= $article['metaKeys'];?>">
    <link rel="author" content="<?=$article['authorName'];?>" href="<?=$article['authorLink'];?>"/>
    
    <title><?=$article['title'];?></title>

</head>

<body>
<?php include ("header.php");?>
<main>
<?php include "like-form.php" ?>
<h1 class="article-title"><?=$article['title'];?></h1>
<p>by <?=$article['authorName'];?>Mike Lawson</p>
<p>Total likes: <?=$likeCount;?>
<?=$article['fullContent'];?>

</main>
<?php include "footer.php" ?>
</body>
</html>