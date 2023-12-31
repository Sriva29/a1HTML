<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="This is the home page for the world's and only site dedicated to the mighty stache. All staches except for the stache-that-will-not-be-named is talked about here.">
    <meta name="keywords"
        content="I wish there was a site for moustaches, moustache facts, history of moustaches, moustache care, moustache styles, moustache puns">
    <link rel="author" content="Srivatsan Rangarajan" href="srivatsanrangarjan.com" />
    <link rel="icon" href="img/favicons/favicon-32x32.png">
    <link rel="stylesheet" href="css/main.css">
    <title>I Moustache You to Read These</title>
</head>

<body>
    <?php include 'header.php' ?>
    <main class="flex-body">
        <div class="body-element">
        <section class="welcomeBox">
            <h1>Welcome to the fascinating world of moustaches</h1>
            <p>Moustaches celebrate the bond between men and ferocious animals like kitties with whiskers and cute
                little
                puppies. This site has been built in anticipation of Movember 2023. Watch the video below on what
                Movember
                is from our own moustache king, Nick Offerman:</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/8w1p5UI7Siw?si=4z8Pq-vs3CfwCHFf"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </section>
        </div>
        <div class="body-element">
        <article class="featuredArticle">
            <h2>Featured Article: HOW TO BLOW YOUR NOSE WHEN YOU HAVE A MUSTACHE</h2>
            
            <p>If there’s one thing that blows about having a mustache — it’s blowing your nose while having a mustache.
                Mustaches are powerful! They’re masculine and strong and represent virality — until they’re soaked with
                snot. Look, that manstache is practically a ShamWow for snot rockets. Yeah, it’s gross. This is not news
                to
                us. And as far as we know, blowing your nose has been an issue for mustachio’d men since the advent of
                mucus. Is there any hope? No, not really. But as we make our way through flu season, we have five tips
                to
                help keep your mustache a little less mucousy. Read the full article here: 
                <a href="article.php?articleId=3">read more</a></p>
        </article>
        </div>
        <div class="body-element">
        <section class="article-categories-flex">
            <div>
            <h2 class="moustache-styles">Moustache Styles</h2>
            <article class="moustache-styles">
                <h3 class="moustache-styles">Three stache styles to keep you warm this chilly Movember</h3>
                <p class="moustache-styles">by Sri R</p>
                <figure><img src="img/cold-freeze.gif" alt="gif of Ron Swanson freezing and shivering"></figure>
                <p class="moustache-styles">Movember is coming and its going to be a really chilly one this time around. On top of your jacket,
                    your scarf, your hat, and your boots, why not use nature's winter gear? The mighty stache. Here are
                    three styles guaranteed to keep you warm this winter.</p>
                <p class="moustache-styles">View Full Article <a href="article.php?articleId=4">here</a></p>
            </article>
            <article class="moustache-styles">
                <h3 class="moustache-styles">Get the Horseshoe Moustache in 10 Steps</h3>
                <p class="moustache-styles">Gillette</p>
                <figure><img src="img/article3img1.webp" alt="Hulk Hogan with his handlebar moustache"></figure>
                <p class="moustache-styles">Want a handlebar moustache? No judgements. Here's how you can do just that in 10 steps.</p>
                <p class="moustache-styles">View Full Article <a href="article.php?articleId=5">here</a></p>
            </article>
            </div>
            <div>
            <h2 class="moustache-care">Moustache Care</h2>
            <article class="moustache-care">
                <h3 class="moustache-care">Moustache Care: Expert Tips on Grooming and Maintenance</h3>
                <p>LEE KYNASTON</p>
                <figure><img src="img/article4-img1.jpg" alt="an image of a man with a moustache"></figure>
                <p class="moustache-care">Whether you’re growing one for Movember or simply because they’re on trend at the moment (the
                    moustache is the new beard, don’t you know?) a ‘tache takes time to train and needs some TLC if it’s
                    to look its best. Read on for some tips from the stache kings:
                </p>
                <p class="moustache-care">View Full Article <a href="article.php?articleId=6">here</a></p>
            </article>
            <article>
                <h3 class="moustache-care">Like your moustache? Buy these moustache care products</h3>
                <p class="moustache-care">Vintage Grooming</p>
                <figure><img src="img/article5-img1.jpg" alt="a man caring for his moustache"></figure>
                <p class="moustache-care">Buy these products to take care of your moustache</p>
                <p class="moustache-care">View Full Article <a href="article.php?articleId=7">here</a></p>
            </article>
            </div>
            <div>
            <h2 class="moustache-history">Moustache History</h2>
            <article class="moustache-history">
                <h3 class="moustache-history">The Moustache to Rule Them All</h3>
                <p>Debabrata Mukherjee</p>
                <figure><img src="img/article6-img1.jpg" alt="Three men with old timey moustaches"></figure>
                <p class="moustache-history">Did you know that you could be imprisoned for shaving your moustache? Between 1860 and 1916, every
                    soldier in the British Army was forbidden from shaving his upper lip or else it would have been
                    considered a breach of discipline.</p>
                <p class="moustache-history">View Full Article <a href="article.php?articleId=8">here</a></p>
            </article>
            <article>
                <h3 class="moustache-history">Men and their moustaches - A moustache timeline</h3>
                <p>NZ</p>
                <figure ><img src="img/article7-img1.jpg" alt="image of a man with mutton chops moustache">
                    <figcaption>A style sometimes known as 'friendly mutton chops'</figcaption>
                </figure>
                <p class="moustache-history">Let's explore a brief time of moustaches throughout history...</p>
                <p class="moustache-history">View Full Article <a href="article.php?articleId=9">here</a></p>
            </article>
            </div>
        </section>
        </div>
        <div class="body-element">
            <table class="visitor-table">
                <thead>
                    <tr>
                        <th colspan="2">Site Visitors (Moustache Appreciators)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Number of Visitors in the Past Six Months</td>
                        <td>42</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <?php include 'footer.php' ?>
</body>

</html>