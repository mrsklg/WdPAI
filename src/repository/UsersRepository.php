<?php

require_once "Repository.php";
require_once __DIR__."/../models/User.php";

class UsersRepository extends Repository {
    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users u LEFT JOIN usersdetails ud 
            ON u.id_user_details = ud.id_user_details WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['first_name'],
            $user['last_name']
        );
    }

    public function addUser(User $user)
    {
        try {
            $stmt = $this->database->connect()->prepare('
                INSERT INTO usersdetails (first_name, last_name)
                VALUES (?, ?)
            ');

            $stmt->execute([
                $user->getFirstName(),
                $user->getLastName(),
            ]);

            $stmt = $this->database->connect()->prepare('
                INSERT INTO users (email, password, id_user_details)
                VALUES (?, ?, ?)
            ');

            $stmt->execute([
                $user->getEmail(),
                $user->getPassword(),
                $this->getUserDetailsId($user)
            ]);
            
        } catch (PDOException $e) {
            if ($e->getCode() == '23505') {
                throw new Exception('User with this email already exists.');
            } else {
                throw $e;
            }
        }
    }

    public function getUserDetailsId(User $user): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.usersdetails WHERE first_name = :name AND last_name = :surname
        ');
        $stmt->bindParam(':name', $user->getFirstName(), PDO::PARAM_STR);
        $stmt->bindParam(':surname', $user->getLastName(), PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id_user_details'];
    }
    
    public function getUserId(string $email): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT user_id FROM public.users WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['user_id'];
    }
}