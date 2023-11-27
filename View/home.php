<?php require 'View/includes/header.php'?>

<?php // Use any data loaded in the controller here 

require_once 'Controller/ArticleController.php';

foreach ($articles as $article) : ?>
    <li>
        <h2><?= $article->title ?></h2>
        <p><?= $article->formatPublishDate() ?></p>
        <p><?= $article->description ?></p>
    </li>
<?php endforeach; ?>


<section>
    <p><a href="index.php?page=articles">To articles page</a></p>

    <p>Put your content here.</p>
</section>

<?php require 'View/includes/footer.php'?>