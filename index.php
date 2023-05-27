<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/pergolas/");


Flight::route('/', function () {
    Flight::render('index.php');
});
Flight::route('/nosotros', function () {
    Flight::render('nosotros.php');
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
