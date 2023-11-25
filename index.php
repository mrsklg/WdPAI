<?php

// dodać typowanie

require_once 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('start_screen', 'DefaultController');
Routing::get('signup', 'DefaultController');
Routing::get('login', 'SecurityController');
Routing::get('add_book', 'DefaultController');
Routing::get('book_details', 'DefaultController');
Routing::get('collection', 'DefaultController');
Routing::get('current_book', 'DefaultController');
Routing::get('dashboard', 'DefaultController');
Routing::get('reading_session', 'DefaultController');
Routing::get('stats', 'DefaultController');

Routing::run($path);