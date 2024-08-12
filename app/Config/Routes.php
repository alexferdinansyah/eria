<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingController::index');
$routes->get('/program/(:any)', 'LandingController::program/$1');
$routes->get('/program/details/', 'LandingController::programDetail');
$routes->get('/update/(:any)', 'LandingController::updateDetail/$1');
    
// $routes->get('/program/(:num)', 'ProgramController::getId/$1');
$routes->get('/publications', 'LandingController::publications');
$routes->get('/publications/details/(:num)', 'LandingController::publicationDetail/$1');
$routes->get('/news', 'LandingController::news');
$routes->get('/news/details', 'LandingController::newsDetail');

// $routes->get('/updates', 'LandingController::updates');

$routes->get('/events', 'LandingController::events');
$routes->get('/events/detail', 'LandingController::eventsDetail');

$routes->get('/summary/(:segment)', 'LandingController::summary/$1');
