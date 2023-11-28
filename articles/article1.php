<!DOCTYPE html>
<html lang="en">
<!--Exported to SQL Database called moustachios. This document is no longer necessary-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicons/favicon-32x32.png">
    
    <?php include ("connect.php");

    $articleId = $_GET["articleId"];
    $stmt = $pdo->prepare("SELECT * FROM articles WHERE articleId = $articleId");
    $stmt->execute();
    $article = $stmt->fetch(PDO::FETCH_ASSOC);

    ?> 
    <meta name="description"
        content=<?=$article['metaDesc'];?> 
        <!-- "This article is about taking care of your moustache by making sure you blow your nose effectively without compromising your stache integrity.">-->
    <meta name="keywords"
        content=<?= $article['metaKeys'];?>
        <!-- "moustache, blow my nose, moustache getting in the way of my nose blowing, moustache care, moustache tips">-->
    
    <link rel="author" content=<?php $article['author'];?> <!--"Mike Lawson"--> href=<?=$article['authorLink'];?><!--"https://www.beardbrand.com/blogs/urbanbeardsman/how-to-blow-your-nose-when-you-have-a-mustache"--> />
    
    <title><?=$article['title'];?> <!--How to blow your nose when you have a moustache --></title>
</head>

<body>
<?php include ("header.php");?>

<h1 class="article-title"><?=$article['title'];?></h1>
<p>by <?php $article['author'];?>Mike Lawson</p>

<?=$article['fullcontent'];?>
<!--<article>
        <h2>1. Find Some Privacy</h2>
        <p>Nothing is redeeming about blowing your nose. Okay, it’s slightly better than just letting your nose drip
            like a faucet. Still, nobody’s ever blown their nose and gotten a standing ovation. Now, add a mustache to
            the mix. Yeah, an ugly situation is about to get uglier.

            If you have to blow your nose, do everyone a favor and find some privacy. Be it a bathroom or a broom
            closet, get yourself somewhere discreet. Because chances are, when you pull that tissue away, your mustache
            will have absorbed the brunt of the boogers. Nobody wants to see that. At the very least, go find a corner
            or turn your back until you’ve got yourself situated again. Just, whatever you do, try not to let anyone see
            you.</p>
        <figure><img src="../img/article1img1.webp" alt="A picture of tissues"></figure>
        <h2>2. Use a Handkerchief</h2>
        <p>Are tissues more convenient? Yes. Do tissues feel better on your nose? Probably — especially if you get the
            nice ones with the aloe vera on them. So why on earth would we suggest using a handkerchief to blow your
            nose? For starters, no matter how deft you are at the art of clearing out your sneeze box, there’s still a
            high likelihood that you’re going to end up with some nastiness in your mustache. When you go to wipe that
            snot out, tissues leave behind a bit of residue that can get trapped in between the hairs. Now, instead of
            dealing with snot, you’re doing with snot and little white tissue particles. Get yourself a week’s worth of
            bandanas and carry a fresh one with you every day. It won’t actually help you all that much. But in the
            event that you can't find some privacy, at least it will look cool — sort of.</p>
    </article>

    <p>Read the rest of this fascinating article here: <a href="https://www.beardbrand.com/blogs/urbanbeardsman/how-to-blow-your-nose-when-you-have-a-mustache" target="_blank">article link</a>
    </p>

    <a href="../index.html">Go Back Home</a>
-->
<?php include "footer.php" ?>
</body>
</html>