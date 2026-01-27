<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('panduan', 'Home::panduan');
$routes->get('template', 'Home::template');
