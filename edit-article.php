<?php

include("connect.php");

$articleId = $_GET["articleId"];

$stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `articleId` = $articleId");

$stmt->execute();

$articles = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<h1>Edit this Article</h1>    
<form action="edit-article-process.php" method="post">
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?= $articles['title'] ?>">
    </div>
    <div>
        <label for="authorName">Author:</label>
        <textarea id="authorName" name="authorName"><?= $articles['authorName'] ?></textarea>
    </div>
    <div>
        <label for="fullContent">Content:</label>
        <textarea id="fullContent" name="fullContent"><?= $articles['fullContent'] ?></textarea>
    </div>
    <div>
        <input type="hidden" id="articleId" name="articleId" value='<?=$articles["articleId"]?>'>
    </div>
    <div>
        <input type="submit" value="Update Article">
    </div>
</form>