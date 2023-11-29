
<h1><?= $article->getTitle() ?></h1>
<p><?= $article->getDescription() ?></p>
<p><?= $article->getContent() ?></p>
<p>Written by <?= $article->getAuthor() ?></p>
<p>Published on <?= $article->formatPublishDate() ?></p>
