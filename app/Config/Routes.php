<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Home::index');
$routes->get('/', 'Map::index');
$routes->get('/map/info/(:num)', 'Map::info/$1');
