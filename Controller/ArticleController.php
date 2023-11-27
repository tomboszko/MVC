<?php

declare(strict_types = 1);

require_once 'DatabaseManager.php';

class ArticleController
{
    private $dbManager;

    public function __construct() {
        $this->dbManager = new DatabaseManager('localhost', 'MVC', 'toms', 'root', 'utf8mb4');
    }

    public function index()
    {
        // Load all required data
        $articles = $this->getArticles();

        // Load the view
        require 'View/articles/index.php';
    }

    public function getArticles()
    {
        // Fetch all articles as $rawArticles
        $stmt = $this->dbManager->executeQuery("SELECT * FROM articles");
        $rawArticles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
        }

        return $articles;
    }

    public function show($title)
    {
        // Execute a query to retrieve the article with the given title
        $stmt = $this->dbManager->executeQuery("SELECT * FROM articles WHERE title = ?", [$title]);

        // Fetch the article data
        $rawArticle = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if an article was found
        if (!$rawArticle) {
            // TODO: Handle the case where no article was found for the given title
            return;
        }

        // Create an Article object
        $article = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);

        // Load the detail view and pass the Article object to it
        // TODO: Replace 'View/articles/show.php' with the actual path to your detail view
        require './View/articles/show.php';
    }}