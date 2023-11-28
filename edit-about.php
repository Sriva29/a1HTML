<?php

include("connect.php");


$stmt = $pdo->prepare("SELECT * FROM `about`");

$stmt->execute();

$about = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<h1>Edit About Page</h1>    
<form action="edit-about-process.php" method="post">
    <div>
        <label for="aboutTitle">About Title:</label>
        <input type="text" id="aboutTitle" name="aboutTitle" value="<?= $about['aboutTitle'] ?>">
    </div>
    <div>
        <label for="aboutContent">About Content:</label>
        <textarea id="aboutContent" name="aboutContent"><?= $about['aboutContent'] ?></textarea>
    </div>
    <div>
        <input type="submit" value="Update About Page">
    </div>
</form>