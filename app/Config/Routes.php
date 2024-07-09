<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingController::index');
$routes->get('/program', 'ProgramController::index');
$routes->get('/program/(:num)', 'ProgramController::getId/$1');
