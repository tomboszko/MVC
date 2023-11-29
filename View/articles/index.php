<?php require 'View/includes/header.php'?>



<section>
    <h1>Articles</h1>
    <ul>
    <?php foreach ($articles as $article): ?>
        <li style="border-bottom: 1px solid #000; padding-bottom: 10px; margin-bottom: 10px;">
            <h2><a href="index.php?page=detail&id=<?= $article->getId() ?>"><?= $article->getTitle() ?></a></h2>
             <p style="font-weight:900;"><?= $article->getDescription() ?>
            <p style="font-style: italic;">Published on <?= $article->getPublishedDate()?></p>
        </li>
    <?php endforeach; ?>
    </ul>
</section>

<?php require 'View/includes/footer.php'?>