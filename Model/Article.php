<?php

declare(strict_types=1);

class Article
{
    private $publish_date;
    private $id;
    private $title;
    private $description;
    private $content;
    private $author;


    public function __construct($title, $description, $content, $id, $author, $publish_date)
    {
        $this->title = $title;
        $this->description = $description;
        $this->content = $content;
        $this->id = $id;
        $this->author = $author;
        $this->publish_date = $publish_date;
    }



    public function getPublishedDate()
    {
        return $this->publish_date;
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