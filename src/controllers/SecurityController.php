<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UsersRepository.php';

class SecurityController extends AppController {
    
    private $userRepository;
    
    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UsersRepository();
    }
    
    public function login() {

        if (!$this->isPost()) {
            return $this->render('login');
        }
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $user = $this->userRepository->getUser($email);

        if (!$user) {
            return $this->render('login');
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email does not exist!']]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $user_id = $this->userRepository->getUserId($user->getEmail());
        setcookie("user_id", $user_id, time() + 3600, "/");

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

        try {
            $this->userRepository->addUser($user);
        } catch (Exception $e) {
            return $this->render('signup', ['messages' => [$e->getMessage()]]);
        }
    
        return $this->render('login', ['messages' => ['You\'ve been succesfully registered!']]);
    }
}