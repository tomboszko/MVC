<?php

declare(strict_types=1);

class Article
{
    private $title;
    private $description;
    private $publishDate;
    private $id;
    private $author;
    private $content;

    public function __construct(string $title, string $description, string $publishDate, $id, string $author, string $content)
    {
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
        $this->id = $id;
        $this->author = $author;
        $this->content = $content;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    // Add other getter methods for description and publishDate

public function formatPublishDate($format = 'd-m-Y')
{
    // Create a DateTime object
    $date = new DateTime($this->publishDate);

    // Format the date
    $formattedDate = $date->format($format);

    return $formattedDate;
}

public function getId()
{
    return $this->id;
}

public function getDescription()
{
    return $this->description;
}

public function getContent()
    {
        return $this->content;
    }

    public function getAuthor()
    {
        return $this->author;
    }

}