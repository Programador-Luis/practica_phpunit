<?php


use Practicas\Tests\Library;

class MemberLibrary extends Library{

    private $name;
    private $booksBorrowed;


    public function __construct(
        string $name,
    ){

        $this->name = $name;

    }

    public function lendBook($book)
    {
        if ($book->isAvailable()) {

            $book->lend();
            $this->booksBorrowed = $book;
        } else {
            return "Está prestado";
        }
    }



}