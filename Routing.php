<?php

require_once __DIR__.'/src/controllers/DefaultController.php';
require_once __DIR__.'/src/controllers/SecurityController.php';


class Routing {

    public static $routes;

    public static function get($url, $controller) {
        self::$routes[$url] = $controller;
    }

    public static function post($url, $view) {
        self::$routes[$url] = $view;
      }

    public static function run($path) {

        $actions = explode('/', $path);
        $action = $actions[0];
        $action = $action ?: "start_screen";
        $controller = self::$routes[$action];
        $object = new $controller;
        
        if (!array_key_exists($action, self::$routes)) {
             ob_start();
            // dodaj customowe controllery
                // error controller można zrobić w przypadku błędu
                // Output the HTML for the error page
                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Error Page</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f4f4f4;
                            color: #333;
                            text-align: center;
                            padding: 50px;
                        }

                        h1 {
                            color: #dc3545;
                        }
                    </style>
                </head>
                <body>
                    <h1>Oops! Something went wrong.</h1>
                </body>
                </html>
                <?php

                // Get the contents of the output buffer and clean (end) the buffer
                $output = ob_get_clean();

                // Print the final output
                print $output;
        }
        $object->$action();
    }
}