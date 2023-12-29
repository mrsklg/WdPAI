<?php

require_once 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('start_screen', 'DefaultController');
Routing::get('signup', 'SecurityController');
Routing::get('login', 'SecurityController');
Routing::get('add_book', 'BookController');
Routing::get('book_details', 'DefaultController');
Routing::get('collection', 'DefaultController');
Routing::get('current_book', 'DefaultController');
Routing::get('dashboard', 'DefaultController');
Routing::get('reading_session', 'DefaultController');
Routing::get('end_reading_session', 'DefaultController');
Routing::get('stats', 'DefaultController');
Routing::get('settings', 'DefaultController');
Routing::get('settings_admin', 'DefaultController');

Routing::run($path);