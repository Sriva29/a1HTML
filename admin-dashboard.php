<?php session_start(); 

//see a table of articles (foreach) with links to add, edit, and delete articles. 
//Also a set featured button next to the article.
//Also, edit the text on the about page.
//And view a contact form submissions page.

include("connect.php");


$stmt = $pdo->prepare("SELECT * FROM articles");
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrator Dashboard</title>
     
</head>
<?php include "header.php";?>
<body>
    <main>
    <div class="admin-dashboard">
        <h1>Administrator Dashboard</h1>
        <a href="add-article.php">Add New Article</a>
        <a href="edit-about.php">Edit About Page</a>
        <a href="view-contact-submissions.php">View Contact Form Submissions</a>

        <?php
        while($article = $stmt->fetch()) {     
	    ?><li><?=$article["articleId"] ?> <?=$article["authorName"] ?> <?=$article["title"] ?> <?=$article["featured?"] ?> 
        <a href="edit-article.php?articleId=<?=$article["articleId"] ?>">Edit</a> 
	    <a href="delete-confirmation.php?articleId=<?=$article["articleId"] ?>">Delete</a>
        <a href="set-featured.php?articleId=<?=$article["articleId"] ?>">Set Featured</a>
	    </li><?php
        }
?></ul><?php
?>
    </div>
    </main>
</body>
</html>