<?php

namespace Practicas\Tests;
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

    public function return(): void
    {
        $this->available = true;
    }

    public function isAvailable(): string
    {
        return $this->available;
    }

    public function book($title): string
    {
        return $this->title = $title;
    }





}



