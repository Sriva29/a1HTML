
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
echo '
<footer>
<p>
    This site uses cookies. They are all mandatory because who wouldn\'t want moustache-related cookies in their system. 😊
    <a href="#">Accept Cookies</a>
</p>
</footer>
';
?>