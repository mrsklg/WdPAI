<?php

function my_autoloader(string $class) {
    $file_path = __DIR__ . '/src/controllers/' . $class . '.php';

    if (file_exists($file_path)) {
        include $file_path;
    }
}

spl_autoload_register('my_autoloader');

class Routing {

    public static $routes;

    public static function get(string $url, string $controller) {
        self::$routes[$url] = $controller;
    }

    public static function post(string $url, string $view) {
        self::$routes[$url] = $view;
      }

    public static function run(string $path) {

        $actions = explode('/', $path);
        $action = $actions[0];
        $action = $action ?: "start_screen";
        
        if (!array_key_exists($action, self::$routes)) {
            $controller = new ErrorController();
            $controller->render();
        } else {
            $controller = self::$routes[$action];
            $object = new $controller;
            if ($_COOKIE['user_id'] == null && !($object instanceof SecurityController) && $action != "start_screen") {
                $controller = new ErrorController();
                $controller->render();
            } else {
                $object->$action();
            }
        }
    }
}