<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingController::index');
$routes->get('/program', 'LandingController::program');
$routes->get('/program/(:num)', 'ProgramController::getId/$1');
$routes->get('/publications', 'LandingController::publications');
