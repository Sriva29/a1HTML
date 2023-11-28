<?php

include("connect.php");

$stmt = $pdo->prepare("SELECT * FROM contact");

$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?><li><?=$row["personId"]?><?=$row["name"]?><?=$row["email"]?><?=$row["role"]?><?=$row["handlebar"]?><?=$row["walrus"]?>
    <?=$row["vanDyke"]?><?=$row["pencil"]?><?=$row["horseshoe"]?><?=$row["chevron"]?><?=$row["fuManchu"]?>
    </li><?php
}

?>
<a href="admin-dashboard.php">Go Back</a>