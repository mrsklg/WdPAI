<?php

class Book {
    private string $title;
    private array $authors;
    private array $genres;
    private string $coverUrl;
    private int $numOfPages;

    public function __construct(string $title, array $authors, array $genres, string $coverUrl, int $numOfPages) {
        $this->title = $title;
        $this->authors = $authors;
        $this->genres = $genres;
        $this->coverUrl = $coverUrl;
        $this->numOfPages = $numOfPages;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): array {
        return $this->authors;
    }

    public function getGenre(): array {
        return $this->genres;
    }

    public function getCoverUrl(): string {
        return $this->coverUrl;
    }
    
    public function getNumOfPages(): int {
        return $this->numOfPages;
    }
}