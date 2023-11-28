<?php require 'View/includes/header.php'?>


<h1><?= $article->getTitle() ?></h1>
<p><?= $article->getDescription() ?></p>
<p>Published on: <?= $article->formatPublishDate() ?></p>

<section>
    <h1><?= $article->getTitle() ?></h1>
    <p><?= $article->formatPublishDate() ?></p>
    <p><?= $article->getDescription() ?></p>

    <a href="#">Previous article</a>
    <a href="#">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>
