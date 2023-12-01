<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class AuthorModel {
    private $db;

    public function __construct()
    {
        // Initialize your database connection here.
        // This depends on your setup.
        $this->db = new PDO('mysql:host=localhost;dbname=MVC', 'toms', 'root');
    }

    public function getAuthorByName($name)
    {
        // Prepare a SQL statement
        $stmt = $this->db->prepare('SELECT * FROM authors WHERE name = :name');

        // Bind the name parameter to the SQL statement
        $stmt->bindParam(':name', $name);

        // Execute the SQL statement
        $stmt->execute();

        // Fetch the result as an associative array
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Return the result
        return $result;
    }

    public function getArticlesByAuthor($name)
    {
        // Prepare a SQL statement
        $stmt = $this->db->prepare('SELECT * FROM articles WHERE author = :name');

        // Bind the name parameter to the SQL statement
        $stmt->bindParam(':name', $name);

        // Execute the SQL statement
        $stmt->execute();

        // Fetch all results as an associative array
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Return the results
        return $results;
    }
}