<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Home::index');

$routes->get('home', 'HomeController::index');

$routes->get('release', 'ReleaseController::index');

$routes->get('documentation', 'DocumentationController::index');


//route in Release Note 

$routes->get('release', 'ReleaseController::index');


//