<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 


?>

<header>
    <nav class="header-nav">
        <div class="header-nav-logo-name-links">
            <div class="header-nav-logo-name">
                <img class="header-nav-logo" src="img/moustache-inverted.png" width="100" height="50" alt="A logo of a moustache">
                <h1 class="header-nav-h1-sitename">Whisker Wise</h1>        
            </div>

            <div class="header-nav-links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="header-nav-signinup-buttons">
            <?php 
            if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true){
                echo"<p> Hello, ".$_SESSION["username"]." |</p>";
                if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] == true){
                    echo '<a href="admin-dashboard.php"><p>Admin</p></a>';
                }
                echo '<a href="logout.php"><p>Log Out</p></a>';
                
            } else {
                echo '<a href="login.php"><p>Log In</p></a>';
                echo '<a href="signup.php"><p>Sign Up</p></a>';
            }?>
        </div>

    </nav>
</header>

