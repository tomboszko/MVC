<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class AuthorController {
    private $authorModel; // Define the $authorModel property
    private $articleModel; // Define the $articleModel property

    public function __construct()
    {
        $this->authorModel = new AuthorModel(); // Instantiate the AuthorModel
        $this->articleModel = new ArticleModel(); // Instantiate the ArticleModel
    }

    // Other methods...

    public function detail($authorName)
    {
        // Retrieve the author's details and articles from the database
        $author = $this->authorModel->getAuthorByName($authorName);
        $articles = $this->articleModel->getArticlesByAuthor($authorName); // Call the getArticlesByAuthor method

        // Pass the author's details and articles to the view
        require_once('View/articles/Author.php');
    }

    // Other methods...
}