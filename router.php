<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/home.controller.php',
    '/movie' => 'controllers/movie/movie.controller.php',
    '/about' => 'controllers/about/about.controller.php',
    '/contact' => 'controllers/contact/contact.controller.php',
    '/register' => 'controllers/register/register.controllers.php',
    '/login' => 'controllers/login/login.controllers.php',
    '/logout' => 'controllers/logout/logout.controller.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
}

