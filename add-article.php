<?php include("header.php");?>
<form action="add_article-process.php" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="content">Content:</label>
    <textarea id="content" name="content" required></textarea>

    <label for="author">Author:</label>
    <input type="text" id="author" name="author" required>

    <input type="submit" value="Add Article">
</form>
<?php include("footer.php");?>