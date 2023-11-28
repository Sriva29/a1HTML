<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicons/favicon-32x32.png">
    <link rel="stylesheet" href="css/main.css">
    <title>Contact Us</title>
</head>
<body>
<?php include 'header.php'?>
<main class="flex-body">
    <div class="body-element">
        <h1 id="contact-heading">Contact Us!</h1>
    </div>
    <div class="body-element">
        <form class="contact-form" action="process-contact.php" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" name="email" required>

            <p>Which of these moustache types tickles your fancy?</p>
            <div class="container-checkboxes">        
                <div><input type="checkbox" id="c1" value="handlebar" name="handlebar"> <label for="c1">Handlebar</label></div>
                <div><input type="checkbox" id="c2" value="walrus" name="walrus"> <label for="c2">Walrus</label></div>
                <div><input type="checkbox" id="c3" value="van_dyke" name="vanDyke"> <label for="c3">Van Dyke</label></div>
                <div><input type="checkbox" id="c4" value="pencil" name="pencil"> <label for="c4">Pencil</label></div>
                <div><input type="checkbox" id="c5" value="horseshoe" name="horseshoe"> <label for="c5">Horseshoe</label></div>
                <div><input type="checkbox" id="c6" value="chevron" name="chevron"> <label for="c6">Chevron</label></div>
                <div><input type="checkbox" id="c7" value="fu_manchu" name="fuManchu"> <label for="c7">Fu Manchu</label></div>
            </div>

            <label for="selection">Choose Your Role: </label>
            <select name="role" id="selection">
                <option value="">Select from Dropdown</option>
                <option value="lurker">Lurker</option>
                <option value="contributor">Contributor</option>
                <option value="administrator">Administrator</option>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>
</main>
<?php include "footer.php"?>
</body>
</html>