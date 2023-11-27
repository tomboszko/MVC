<?php require 'View/includes/header.php'?>

<section>
    <h1>Articles</h1>
    <ul>
        <?php 
        // Use any data loaded in the controller here
        require_once 'Controller/ArticleController.php';
        $controller = new ArticleController();
        $articles = $controller->getArticles(); // Get the articles

        foreach ($articles as $article) : ?>
            <li><?= $article->title ?> (<?= $article->formatPublishDate() ?>)</li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require 'View/includes/footer.php'?>