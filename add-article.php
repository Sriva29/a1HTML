<?php
?>
<form action="add-article-process.php" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="fullContent">Content:</label>
    <textarea id="fullContent" name="fullContent" required></textarea>

    <label for="authorName">Author:</label>
    <input type="text" id="authorName" name="authorName" required>

    <input type="submit" value="Add Article">
</form>