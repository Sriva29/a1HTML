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
    
    <h1>Contact Us!</h1>

    <form class="contact-form" action="process-contact.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <p>Which of these moustache types tickles your fancy?</p>
        <div class="container-checkboxes">        
            <div><input type="checkbox" id="c1" value="handlebar" name="category"> <label for="c1">Handlebar</label></div>
            <div><input type="checkbox" id="c2" value="walrus" name="category"> <label for="c2">Walrus</label></div>
            <div><input type="checkbox" id="c3" value="van_dyke" name="category"> <label for="c3">Van Dyke</label></div>
            <div><input type="checkbox" id="c4" value="pencil" name="category"> <label for="c4">Pencil</label></div>
            <div><input type="checkbox" id="c5" value="horseshoe" name="category"> <label for="c5">Horseshoe</label></div>
            <div><input type="checkbox" id="c6" value="chevron" name="category"> <label for="c6">Chevron</label></div>
            <div><input type="checkbox" id="c7" value="fu_manchu" name="category"> <label for="c7">Fu Manchu</label></div>
        </div>

        <label for="selection">Choose Your Role: </label>
        <select name="selection" id="">
            <option value="">Select from Dropdown</option>
            <option value="writer">Writer</option>
            <option value="contributor">Contributor</option>
            <option value="administrator">Administrator</option>
        </select>

        <input type="submit" value="Submit">
    </form>
    <footer>
        <p>This site uses cookies. They are all mandatory because who wouldn't want moustache-related cookies in their system. 😊
            <a href="#">Accept Cookies</a>
        </p>
    </footer>
</body>
</html>