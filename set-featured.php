<?php
include("connect.php");

$articleId = $_GET['articleId'];

// Set the new featured article
// $currentFeature = $pdo->prepare("SELECT FROM `articles` WHERE `featured?` = true");
// $currentFeature->execute();
// $currentFeatureRow = $currentFeature->fetch(PDO::FETCH_ASSOC);

// $currentFeatureId = $currentFeatureRow["articleId"];

$currentFeatureRemove = $pdo->prepare("UPDATE `articles` SET `featured?` = false WHERE `featured?` = true");
$currentFeatureRemove->execute();


$newFeatureSet = $pdo->prepare("UPDATE `articles` SET `featured?` = true WHERE articleId = $articleId");

$newFeatureSet->execute();
if($newFeatureSet->execute()){
    echo'Great success. <a href="admin-dashboard.php">Go Back</a>';
}
else{
    echo'Bad failure. <a href="admin-dashboard.php">Go Back</a>';
}

?>
