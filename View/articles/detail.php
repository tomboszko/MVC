<?php require 'View/includes/header.php'?>
<h1><?= $article->getTitle() ?></h1>
<h2 style="color:gray" ><?= $article->getDescription() ?></h2>
<p><?= $article->getContent() ?></p>
<p>Written by <span style="font-style: italic;"><a href="/author/<?= urlencode($article->getAuthor()) ?>"><?= $article->getAuthor() ?></a></span></p>
<p>Published on <?= $article->getPublishedDate() ?></p>
<?php require 'View/includes/footer.php'?>


