<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/index.controller.php',
    '/movie' => 'controllers/movie/movie.controller.php',
    '/about' => 'controllersabout/about.controller.php',
    '/contcet' => 'controllers/contcet/contcet.controller.php',
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

