<?php

class Book {
    private string $title;
    private string $author;
    private string $genre;
    private string $coverUrl;
    private int $num_of_pages;

    public function __construct(string $title, string $author, string $genre, string $coverUrl, int $num_of_pages) {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->coverUrl = $coverUrl;
        $this->num_of_pages = $num_of_pages;
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
        return $this->num_of_pages;
    }
}