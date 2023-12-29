<?php

require_once 'AppController.php';
require_once __DIR__."/../models/Book.php";
require_once __DIR__."/../repository/BooksRepository.php";

class DefaultController extends AppController {

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
        $this->render('book_details', ["book" => $this->booksRepository->getBook($bookTitle)]);
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
    
    function settings() {
        $this->render('settings');
    }
    
    function settings_admin() {
        $this->render('settings_admin');
    }
}