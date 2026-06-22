<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('eventos/8vo-congreso', '\App\Modules\Eventos\Controllers\Eventos_Controller::octavoCongreso');