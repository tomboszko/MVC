<?php require 'View/includes/header.php'?>

<section>
    <h1><?= $article->title ?></h1>
    <p><?= $article->formatPublishDate() ?></p>
    <p><?= $article->description ?></p>

    <?php // TODO: links to next and previous ?>
    <a href="index.php?page=articles-show&title=<?= urlencode($previousArticleTitle) ?>">Previous article</a>
    <a href="index.php?page=articles-show&title=<?= urlencode($nextArticleTitle) ?>">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>