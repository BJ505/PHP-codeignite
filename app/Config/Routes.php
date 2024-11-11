<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/**
 * Route de indicadores CRUD
 */
$routes->get('indicadores', 'Indicadores::index');
$routes->post('create', 'Indicadores::create');
$routes->get('getData/(:num)', 'Indicadores::getData/$1');
$routes->post('update', 'Indicadores::update');
$routes->get('delete/(:num)', 'Indicadores::delete/$1');
