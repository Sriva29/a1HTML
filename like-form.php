<?php
if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true){
echo'
<form action="like-unlike-process.php" method="post">
    <input type="hidden" name="articleId" value="'.$articleId.'">
    <input type="hidden" name="memberId" value="'.$_SESSION["memberId"].'">
    <input type="hidden" name="likeUnlike" value="like"> 
    <button type="submit" class="like-button" name="like">Like</button>
</form>
<form action="like-unlike-process.php" method="post">
    <input type="hidden" name="articleId" value="'.$articleId.'">
    <input type="hidden" name="memberId" value="'.$_SESSION["memberId"].'">
    <input type="hidden" name="likeUnlike" value="unlike">
    <button type="submit" class="unlike-button" name="unlike">Unlike</button>
</form>
';}
?>