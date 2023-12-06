<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';

class SecurityController extends AppController {
    
    private array $userRepository;
    
    public function __construct()
    {
     $this->userRepository = [
        new User('jsnow@pk.edu.pl', 'admin', 'Johnny', 'Snow'),
        new User('anowak@gmail.com', 'kochamKotki123', 'Anna', 'Nowak'),
        new User('blabla.meh@mail.pl', password_hash('ballab', PASSWORD_BCRYPT), 'Bla', 'Blameh')
    ];   
    }

    public function addUser(User $newUser) {
        $this->userRepository[] = $newUser;
    }
    
    public function login() {

        if (!$this->isPost()) {
            return $this->render('login');
        }
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $user = $this->getUserByEmail($email);

        if (!$user) {
            return $this->render('login');
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email does not exist!']]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/dashboard");
    }

    public function signup()
    {
        if (!$this->isPost()) {
            return $this->render('signup');
        }

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        
        if ($password !== $confirmPassword) {
            return $this->render('signup', ['messages' => ['Please provide proper password']]);
        }

        $user = new User($email, password_hash($password, PASSWORD_BCRYPT), $name, $surname);

        $this->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
    }

    private function getUserByEmail(string $email) {
        foreach ($this->userRepository as $user) {
            if ($user->getEmail() === $email) {
                return $user;
            }
        }
        return null;
    }
}