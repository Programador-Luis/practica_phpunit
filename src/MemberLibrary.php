<?php


use Practicas\Tests\Library;

require 'src/Library.php';

class MemberLibrary {

    private $name;
    private $booksBorrowed;


    public function __construct(
        string $name,
    ){

        $this->name = $name;
        $this->booksBorrowed = [];

    }

    public function lendBook($book)
    {
        if ($book->isAvailable()) {

            $book->lend();
            $this->booksBorrowed[] = $book;
        } else {
            return "Está prestado";
        }
    }

    public function returnBook(Library $book): void
    {
        foreach ($this->booksBorrowed as $key => $bookBorrowed ) {
            if ($bookBorrowed->getTitle() === $book->getTitle()) {
                $book->returnBook();
                unset($this->booksBorrowed[$key]);
                break;
            }
        }
    }

    public function listBorrowedBooks() {
        $title = array_map(function($book) {
            return $book->getTitle();
        }, $this->booksBorrowed);

    }

}