<?php 

include("connect.php");

$authorName = $_POST["authorName"];
$title = $_POST["title"];
$fullContent = $_POST["fullContent"];

$stmt = $pdo->prepare("INSERT INTO `articles` 
	(`articleId`, `authorName`, `title`, `fullContent`) 
	VALUES 
	(NULL, '$authorName', '$title', '$fullContent');");

if($stmt->execute()){ ?>
	<h1>Success!</h1>
	<p>You submitted the following:</p>

	<p>Title: <?=$authorName ?></p>
	<p>Author: <?=$title ?></p>
	<p>Content: <?=$fullContent ?></p>
<?php
}else{ 
	?><h1>Error</h1> <?php
}
?>
<a href="admin-dashboard.php">Go Back to Admin Dashboard</a>
<a href="add-article.php">Insert another article!</a>