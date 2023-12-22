<?php

class User {
    private string $email;
    private string $password;
    private string $first_name;
    private string $last_name;

    public function __construct(
        string $email,
        string $password,
        string $first_name,
        string $last_name
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function getEmail(): string 
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }
    public function getLastName(): string
    {
        return $this->last_name;
    }
}