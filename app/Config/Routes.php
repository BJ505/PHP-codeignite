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
