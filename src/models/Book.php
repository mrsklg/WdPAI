<?php

class Book {
    private string $title;
    private string $author;
    private string $genre;
    private string $coverUrl;
    private int $numOfPages;

    public function __construct(string $title, string $author, string $genre, string $coverUrl, int $numOfPages) {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->coverUrl = $coverUrl;
        $this->numOfPages = $numOfPages;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function getGenre(): string {
        return $this->genre;
    }

    public function getCoverUrl(): string {
        return $this->coverUrl;
    }
    
    public function getNumOfPages(): int {
        return $this->numOfPages;
    }
}