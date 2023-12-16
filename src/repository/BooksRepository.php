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

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM booksinfoview;
        ');
        $stmt->execute();
        // $books = $stmt->fetchAll(PDO::FETCH_CLASS, "Book");
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($books as $book) {
            $result[] = new Book(
                $book['title'],
                $book['author'],
                $book['genre'], 
                $book['cover_url'], 
                $book['num_of_pages'],
            );
        }

        return $result;
    }
}