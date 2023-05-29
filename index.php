<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost:5000/Trabajo/Freelancer/Samuel/pergolas/");


Flight::route('/', function () {
    Flight::render('index.php');
});
Flight::route('/nosotros', function () {
    Flight::render('nosotros.php');
});
Flight::route('/servicios', function () {
    Flight::render('servicios.php');
});
Flight::route('/pergolas', function () {
    Flight::render('pergolas.php');
});
Flight::route('/terrazas', function () {
    Flight::render('terrazas.php');
});
Flight::route('/pergolasAcero', function () {
    Flight::render('pergolasAcero.php');
});
Flight::route('/pergolasHibridaAcero', function () {
    Flight::render('pergolasHibridaAcero.php');
});
Flight::route('/pergolasHibridaPremium', function () {
    Flight::render('pergolasHibridaPremium.php');
});
Flight::route('/pergolasPremium', function () {
    Flight::render('pergolasPremium.php');
});
#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
