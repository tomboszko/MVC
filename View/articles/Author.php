
<h1><a href="/author/<?= urlencode($author->getName()) ?>"><?= $author->getName() ?></a></h1>
<h2>Articles:</h2>
<ul>
    <?php foreach ($articles as $article): ?>
        <li>
            <h3><?= $article->getTitle() ?></h3>
            <p><?= $article->getDescription() ?></p>
            <p>Published on <?= $article->getPublishedDate() ?></p>
        </li>
    <?php endforeach; ?>
</ul>