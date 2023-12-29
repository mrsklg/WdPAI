<!-- pamiętać żeby zamknąć połączenie do bazy danych -->
<!-- fetch pojedynczy, gdy chce się otrzymać pojedynczy obiekt, np. o konkretbych id -->
<!-- fetch all przy pobieraniu wszystkich danych z tablicy -->
<!-- przy większej liczbie zapytań w jednym momencie (zapytaniu) należy utworzyć transakcję (zapytania następują po sobie i są od siebie 
zależne np. wszystkie muszą być poprawnie wykonane -->
<?php

require_once "Repository.php";
require_once __DIR__."/../models/Book.php";

class BooksRepository extends Repository {
    public function getBooks(): array
    {
        $result = [];
        $user_id = $_COOKIE['user_id'];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM booksinfoview where user_id = :user_id;
        ');
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $stmt->execute();
        // $books = $stmt->fetchAll(PDO::FETCH_CLASS, "Book");
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($books as $book) {
            $result[] = new Book(
                $book['title'],
                array($book['authors']),
                array($book['genres']), 
                $book['cover_url'], 
                $book['num_of_pages'],
            );
        }

        return $result;
    }

    public function getBook(string $title): ?Book
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM booksinfoview WHERE title = :title
        ');
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->execute();

        $book = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($book == false) {
            return null;
        }

        return new Book(
            $book['title'],
            array($book['authors']),
            array($book['genres']), 
            $book['cover_url'], 
            $book['num_of_pages'],
        );
    }

    public function addBook(Book $book) 
    {
        try {
            $pdo = $this->database->connect();
            $pdo->beginTransaction();
            $pdo->exec('SET TRANSACTION ISOLATION LEVEL READ COMMITTED');

            $stmt = $pdo->prepare("INSERT INTO books (title, user_id, num_of_pages, cover_url, is_currently_read, is_already_read) VALUES (:title, NULL, :num_of_pages, :cover_url, false, false) ON CONFLICT (title) DO NOTHING;");
            $stmt->bindParam(':title', $book->getTitle(), PDO::PARAM_STR);
            $stmt->bindParam(':num_of_pages', $book->getNumOfPages(), PDO::PARAM_INT);
            $stmt->bindParam(':cover_url', $book->getCoverUrl(), PDO::PARAM_STR);
            $stmt->execute();
            $bookId = $pdo->lastInsertId();

            $authorsArray = $book->getAuthor();
            $authorsArray = array_map('trim', $authorsArray);

            foreach ($authorsArray as $author) {
                $authorFirstName = explode(" ", $author)[0];
                $authorLastName = explode(" ", $author)[1];
            
                $stmt = $pdo->prepare("INSERT INTO authors (first_name, last_name) VALUES (:first_name, :last_name) ON CONFLICT (first_name, last_name) DO NOTHING");
                $stmt->bindParam(':first_name', $authorFirstName, PDO::PARAM_STR);
                $stmt->bindParam(':last_name', $authorLastName, PDO::PARAM_STR);
                $stmt->execute();
            
                $stmt = $pdo->prepare("SELECT author_id FROM authors WHERE first_name = :first_name AND last_name = :last_name");
                $stmt->bindParam(':first_name', $authorFirstName, PDO::PARAM_STR);
                $stmt->bindParam(':last_name', $authorLastName, PDO::PARAM_STR);
                $stmt->execute();
                $authorId = $stmt->fetchColumn();
                
                $stmt = $pdo->prepare("INSERT INTO authorsbooks (author_id, book_id) VALUES (:author_id, :book_id)");
                $stmt->bindParam(':author_id', $authorId, PDO::PARAM_INT);
                $stmt->bindParam(':book_id', $bookId, PDO::PARAM_INT);
                $stmt->execute();
            }

            $genresArray = $book->getGenre();
            $genresArray = array_map('trim', $genresArray);

            foreach ($genresArray as $genre) {
                $stmt = $pdo->prepare("INSERT INTO genres (genre_name) VALUES (:genre_name) ON CONFLICT (genre_name) DO NOTHING;");
                $stmt->bindParam(':genre_name', $genre, PDO::PARAM_STR);
                $stmt->execute();
            
                $stmt = $pdo->prepare("SELECT genre_id FROM genres WHERE genre_name = :genre_name");
                $stmt->bindParam(':genre_name', $genre, PDO::PARAM_STR);
                $stmt->execute();
                $genreId = $stmt->fetchColumn();
            
                $stmt = $pdo->prepare("INSERT INTO booksgenres (book_id, genre_id) VALUES (:book_id, :genre_id)");
                $stmt->bindParam(':book_id', $bookId, PDO::PARAM_INT);
                $stmt->bindParam(':genre_id', $genreId, PDO::PARAM_INT);
                $stmt->execute();
            }
        
            $pdo->commit();        
        } catch (Exception $e) {
            $pdo->rollBack();
        }    
    }
}