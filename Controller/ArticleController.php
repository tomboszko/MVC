<?php

declare(strict_types = 1);

class ArticleController
{
    private $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $db   = 'MVC';
        $user = 'toms';
        $pass = 'root';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $this->pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function index()
    {
        $articles = $this->getArticles();
        require 'View/articles/index.php';
    }

    public function detail($id)
    {
        $article = $this->getArticle($id);
        require 'View/articles/detail.php';
    }

    private function getArticles()
    {
        $stmt = $this->pdo->query('SELECT * FROM articles');
        $rawArticles = $stmt->fetchAll();

        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            $articles[] = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date'], $rawArticle['id'], $rawArticle['author'], $rawArticle['content']);
        }

        return $articles;
    }

    private function getArticle($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM articles WHERE id = ?');
        $stmt->execute([$id]);
        $rawArticle = $stmt->fetch();

        return new Article(
            $rawArticle['title'],
            $rawArticle['description'],
            $rawArticle['content'],
            (int) $rawArticle['id'],  // Cast id to integer
            (string) $rawArticle['author'],  // Cast author to string
            $rawArticle['publish_date']
        );
    }

    
}