<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here
require 'Model/Article.php';
require 'Model/AuthorModel.php'; // Include the Author model
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/ArticleController.php';
require 'Controller/AuthorController.php'; // Include the AuthorController

// Get the current page to load
// If nothing is specified, it will remain empty (home should be loaded)
$page = $_GET['page'] ?? null;

// Load the controller
// It will *control* the rest of the work to load the page
switch ($page) {
    case 'articles':
    case 'articles-index':
        (new ArticleController())->index();
        break;
    case 'articles-show':
        case 'detail':
            $id = $_GET['id'];
            (new ArticleController())->detail($id);
            break;
    case 'author': // Add this case
        $authorName = $_GET['name'];
        (new AuthorController())->detail($authorName);
        break;
    case 'home':
    default:
        (new HomepageController())->index();
        break;
}