<?php require 'View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>

<h1><?= $article->getTitle() ?></h1>
<p><?= $article->getDescription() ?></p>
<p>Published on: <?= $article->formatPublishDate() ?></p>

<section>
    <h1><?= $article->title ?></h1>
    <p><?= $article->formatPublishDate() ?></p>
    <p><?= $article->description ?></p>

    <?php // TODO: links to next and previous ?>
    <a href="#">Previous article</a>
    <a href="#">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>