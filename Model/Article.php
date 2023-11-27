<?php

declare(strict_types=1);

require_once 'DatabaseManager.php';

class Article
{
    public string $title;
    public ?string $description;
    public ?string $publishDate;

    public function __construct(string $title, ?string $description, ?string $publishDate)
    {
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
    }

    public function formatPublishDate($format = 'd-m-Y')
    {
        // Create a DateTime object from the publishDate property
        $date = new DateTime($this->publishDate);

        // Format the DateTime object 
        $formattedDate = $date->format($format);

        // Return the formatted date
        return $formattedDate;
    }
}