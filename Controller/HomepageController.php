<?php

require_once 'Model/Article.php';
require_once 'Model/DatabaseManager.php';

class HomeController
{
    private $dbManager;

    public function __construct()
    {
        $this->dbManager = new Database('localhost', 'MVC', 'toms', 'root');
    }

    public function index()
    {
        // Fetch articles from the database
        $articles = $this->dbManager->executeQuery('SELECT * FROM articles');

        // Convert the result to an array of Article objects
        $articles = array_map(function ($article) {
            return new Article($article['title'], $article['description'], $article['publish_date']);
        }, $articles);

        // Load the home view and pass the articles to it
        require 'View/home.php';
    }
}