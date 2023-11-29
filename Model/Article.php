<?php

declare(strict_types=1);

class Article
{
    private $publish_date;

    public function __construct($title, $description, $content, $id, $author, $publish_date)
    {
        $this->title = $title;
        $this->description = $description;
        $this->content = $content;
        $this->id = $id;
        $this->author = $author;
        $this->publish_date = $publish_date;
    }

    public function formatPublishDate($format = 'Y-m-d H:i:s')
    {
        $date = new DateTime($this->publish_date);
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
    public function getTitle()
    {
        return $this->title;
    }
}