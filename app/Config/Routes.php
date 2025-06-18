<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pretest', 'Praktikum::profil');
$routes->get('profil', 'Profil::index');

