<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('eventos/8vo-congreso', '\App\Modules\Eventos\Congresos\OctavoCongreso\Controllers\CongresoController::octavoCongreso');

$routes->get('eventos/congreso/(:num)', '\App\Modules\Eventos\Plantillas\Informativa\Controllers\InformativaController::congreso/$1');

$routes->get('eventos/semblanzas', '\App\Modules\Eventos\Congresos\OctavoCongreso\Semblanzas\Controllers\SemblanzasController::plantilla');

$routes->post('eventos/material/subir', '\App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Controllers\MaterialController::subir');

$routes->get('eventos/material-ponentes', '\App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Controllers\MaterialPonentesController::index');

$routes->get('eventos/material/archivos/(:num)', '\App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Controllers\MaterialController::archivos/$1');

$routes->get(
    'eventos/material-descargas',
    '\App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Controllers\MaterialDescargasController::index'
);

$routes->get(
    'eventos/material/descargar/(:num)',
    '\App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Controllers\MaterialController::descargar/$1'
);
