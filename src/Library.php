<?php

namespace practicas\tests;
class Library{


    private $title;
    private $author;
    private $aniopublish;
    private $available;


    public function __construct(
        string $title,
        string $author,
        int $aniopublish, 
        string $available
    ){

        $this->title = $title;
        $this->author = $author;
        $this->aniopublish = $aniopublish;
        $this->available = true;

    }

    public function lend(): bool
    {
        $this->available = false;

        return $this->available;
    }

    public function returnBook(): bool
    {

        $this->available = true;

        return $this->available;

    }

    public function isAvailable(): bool
    {

        return $this->available;

    }

    public function getTitle(): string
    {

        return $this->title;

    }

}



