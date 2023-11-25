<?php

class Book {
    private string $title;
    private string $author;
    private string $genre;
    private string $coverUrl;

    public function __construct(string $title, string $author, string $genre, string $coverUrl) {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->coverUrl = $coverUrl;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function getGenre(): int {
        return $this->genre;
    }

    public function getCoverUrl(): string {
        return $this->coverUrl;
    }

    // public function displayInfo(): string {
    //     return "Title: {$this->title}, Author: {$this->author}, Year: {$this->year}, Price: {$this->price}";
    // }
}