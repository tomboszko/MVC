<?php

declare(strict_types=1);

class Article
{
    private $title;
    private $description;
    private $publishDate;

    public function __construct(string $title, string $description, string $publishDate)
    {
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    // Add other getter methods for description and publishDate

public function formatPublishDate($format = 'd-m-Y H:i:s')
{
    if ($this->publishDate === null) {
        return null;
    }
    $date = DateTime::createFromFormat('Y-m-d H:i:s', $this->publishDate);
    if ($date === false) {
        // Handle the error
        throw new Exception("Invalid date format for publishDate: {$this->publishDate}");
    }
    return $date->format($format);
}}