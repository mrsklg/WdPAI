<?php

require_once 'AppController.php';
require_once __DIR__."/../repository/BooksRepository.php";

class BookController extends AppController {

    const MAX_FILE_SIZE = 1024 * 1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $messages = [];
    private $booksRepository;

    function __construct()
    {       
        $this->booksRepository = new BooksRepository();
    }
    
    function add_book() {        
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file($_FILES['file']['tmp_name'], dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']);

            $title = $_POST['title'];
            $authorsNames = $_POST['author'];
            $numOfPages = $_POST['pages'];
            $genresNames = $_POST['genre'];
            $coverUrl = self::UPLOAD_DIRECTORY.$_FILES['file']['name'];

            $authors = explode(",", $authorsNames);
            $genres = explode(",", $genresNames);

            $book = new Book($title, $authors, $genres, $coverUrl, $numOfPages);
            $this->booksRepository->addBook($book);

            return $this->render("dashboard", ["messages" => $this->messages]);
        }

        $this->render('add_book', ["messages" => $this->messages]);
    }

    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->messages[] = "File is too large for destination file system.";
            return false;
        }
        
        if (!isset($file['type']) && !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->messages[] = "File type not supported.";
            return false;
        }
        
        return true;
    }
}