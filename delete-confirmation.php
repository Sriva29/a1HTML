<?php

include ("connect.php");

$articleId = $_GET["articleId"];
//prepare
$stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `articleId` = $articleId");

//execute
$stmt->execute();

//process results
$article = $stmt->fetch();


?>
<h1>Delete Confirmation</h1>
<p>Are you sure you want to delete this record?</p>
<div>
	<p>Article Title: <?= $article["title"] ?></p>
	<p>Article Author <?= $article["authorName"] ?></p>
</div>

<a href="admin-dashboard.php">No</a>
<form action="delete.php" method="POST">
	<input type="hidden" 
	name="articleId" 
	value="<?= $article['articleId'] ?>"
	>
	<input type="submit" value="Yes">
</form>