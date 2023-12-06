<?php

class User {
    private string $email;
    private string $password;
    private string $name;
    private string $surname;

    public function __construct(
        string $email,
        string $password,
        string $name,
        string $surname
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getEmail(): string 
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}