<?php

require_once 'AppController.php';
require_once __DIR__."/../models/Book.php";
require_once __DIR__."/../repository/BooksRepository.php";

class DefaultController extends AppController {

    private array $books;
    private $booksRepository;

    function __construct()
    {       
        $this->booksRepository = new BooksRepository();
    }

    function dashboard() {
        return $this->render('dashboard');
    }

    function book_details() {
        $bookTitle = isset($_GET['title']) ? $_GET['title'] : null;
        $book = $this->getBookByTitle($bookTitle);
        $this->render('book_details', ["book" => $book]);
    }

    function collection() {
        $this->render('collection', ["books" => $this->booksRepository->getBooks()]);
    }

    function current_book() {
        $this->render('current_book');
    }

    function reading_session() {
        $this->render('reading_session');
    }
    
    function end_reading_session() {
        $this->render('end_reading_session');
    }

    function start_screen() {
        $this->render('start_screen');
    }

    function stats() {
        $this->render('stats');
    }

    private function getBookByTitle(string $title) {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book;
            }
        }
        return null;
    }
}