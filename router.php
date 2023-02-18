<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/home.controller.php',
    '/movie' => 'controllers/movie/movie.controller.php',
    '/contcet' => 'controllers/contcet/contcet.controller.php',
    '/register' => 'controllers/register/register.controllers.php',
    '/login' => 'controllers/login/login.controllers.php',
    '/logout' => 'controllers/logout/logout.controller.php',
    '/detail' => 'controllers/detail/detail.controller.php',
    '/edit' => 'views/seller/edit.view.php',
    '/delete' => 'controllers/admin/delete.controller.php',
    '/about' => 'controllers/about/about.controller.php',
    '/contact' => 'controllers/contact/contact.controller.php',
    '/booking' => 'controllers/booking/booking.controller.php',
    '/printable' => 'controllers/booking/printable.controller.php',
    '/addShow' => 'admin/addshow.controller.php',
    '/movieEdit' => 'admin/admin.controller.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
}

