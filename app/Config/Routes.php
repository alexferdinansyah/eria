<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingController::index');
$routes->get('/program', 'LandingController::program');
$routes->get('/program/details/(:num)', 'LandingController::programDetail/$1');
// $routes->get('/program/(:num)', 'ProgramController::getId/$1');
$routes->get('/publications', 'LandingController::publications');
$routes->get('/news', 'LandingController::news');

$routes->get('/updates', 'LandingController::updates');

$routes->get('/events', 'LandingController::events');
