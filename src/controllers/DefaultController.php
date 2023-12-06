<?php

require_once 'AppController.php';
require_once __DIR__."/../models/Book.php";

class DefaultController extends AppController {

    private array $books;

    function __construct()
    {
        $book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", "Fiction", "https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781524879761/the-great-gatsby-9781524879761_lg.jpg", 120);
        $book2 = new Book("To Kill a Mockingbird", "Harper Lee", "Drama", "https://cdn.kobo.com/book-images/4e1af857-e0e8-45fa-8922-e4bff584beca/353/569/90/False/to-kill-a-mockingbird-4.jpg", 500);
        $book3 = new Book("1984", "George Orwell", "Science Fiction", "https://m.media-amazon.com/images/I/81StSOpmkjL._SL1500_.jpg", 355);
        $book4 = new Book("The Hobbit", "J.R.R. Tolkien", "Fantasy", "https://m.media-amazon.com/images/I/A1ryaMDbIiL._SL1500_.jpg", 267);
        $book5 = new Book("The Catcher in the Rye", "J.D. Salinger", "Coming of age", "https://m.media-amazon.com/images/I/71fWBj3qq+L._AC_SL1000_.jpg", 211);
        $book6 = new Book("Harry Potter and the Philosopher's Stone", "J.K. Rowling", "Fantasy", "https://upload.wikimedia.org/wikipedia/en/6/6b/Harry_Potter_and_the_Philosopher%27s_Stone_Book_Cover.jpg", 234);
        $book7 = new Book("The Da Vinci Code", "Dan Brown", "Mystery", "https://upload.wikimedia.org/wikipedia/en/6/6b/DaVinciCode.jpg", 245);
        $book8 = new Book("Pride and Prejudice", "Jane Austen", "Romance", "https://m.media-amazon.com/images/I/71SWlrUKGsL._SL1500_.jpg", 512);
        $book9 = new Book("The Lord of the Rings", "J.R.R. Tolkien", "Fantasy", "https://upload.wikimedia.org/wikipedia/en/e/e9/First_Single_Volume_Edition_of_The_Lord_of_the_Rings.gif", 310);
        $book10 = new Book("The Shining", "Stephen King", "Horror", "https://ecsmedia.pl/cdn-cgi/image/format=webp,width=544,height=544,/c/the-shining-b-iext138657503.jpg", 222);
        $book11 = new Book("The Hunger Games", "Suzanne Collins", "Dystopian", "https://upload.wikimedia.org/wikipedia/en/d/dc/The_Hunger_Games.jpg", 566);
        $book12 = new Book("The Girl on the Train", "Paula Hawkins", "Thriller", "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1574805682i/22557272.jpg", 400);
        
        $this->books = [$book1, $book2, $book3, $book4, $book5, $book6, $book7, $book8, $book9, $book10, $book11, $book12];
    }

    function dashboard() {
        return $this->render('dashboard');
    }

    function add_book() {
        $this->render('add_book');
    }

    function book_details() {
        $bookTitle = isset($_GET['title']) ? $_GET['title'] : null;
        $book = $this->getBookByTitle($bookTitle);
        $this->render('book_details', ["book" => $book]);
    }

    function collection() {
        $this->render('collection', ["books" => $this->books]);
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