<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//receive POST variables
$name = $_POST["name"];
$email = $_POST["email"];

// if(isset($_POST["handlebar"])) {$handlebar = 1;} else {$handlebar=0;}
// if(isset($_POST["walrus"])) {$walrus = $_POST["walrus"];} else {$walrus=NULL;}
// if(isset($_POST["vanDyke"])) {$vanDyke = $_POST["vanDyke"];} else {$vanDyke=NULL;}
// if(isset($_POST["pencil"])) {$pencil = $_POST["pencil"];} else {$pencil=NULL;}
// if(isset($_POST["horseshoe"])) {$horseshoe = $_POST["horseshoe"];} else {$horseshoe=NULL;}
// if(isset($_POST["chevron"])) {$chevron = 1;} else {$chevron=0;}
// if(isset($_POST["fuManchu"])) {$fuManchu = 1;} else {$fuManchu=0;}
$handlebar = isset($_POST["handlebar"])? 1:0;
$walrus = isset($_POST["walrus"])? 1:0;
$vanDyke = isset($_POST["vanDyke"])? 1:0;
$pencil = isset($_POST["pencil"])? 1:0;
$horseshoe = isset($_POST["horseshoe"])? 1:0;
$chevron = isset($_POST["chevron"])? 1:0;
$fuManchu = isset($_POST["fuManchu"])? 1:0;

$role = $_POST["role"];

// handlebar, walrus, vanDyke, pencil, horseshoe, chevron, fuManchu

include"connect.php";

//prepare
//$stmt = $pdo->prepare("INSERT INTO `contact` (`name`, `email`, `role`, `handlebar`, `walrus`,`vanDyke`,`pencil`, `horseshoe`, `chevron`, `fuManchu`) 
//    VALUES ($name, $email,$role, $handlebar, $walrus, $vanDyke, $pencil, $horseshoe, $chevron, $fuManchu)");

$stmt = $pdo->prepare("INSERT INTO `contact` (`name`, `email`, `role`, `handlebar`, `walrus`, `vanDyke`, `pencil`, `horseshoe`, `chevron`, `fuManchu`) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

//execute
if($stmt->execute([$name, $email, $role, $handlebar, $walrus, $vanDyke, $pencil, $horseshoe, $chevron, $fuManchu])){
    echo '{"success":"true"}';
} else {
    echo '{"success":"false"}';
};

?>