<?php

namespace App\Modules\Eventos\Controllers;

use App\Controllers\BaseController;

class Eventos_Controller extends BaseController
{
    public function octavoCongreso()
    {
        return view('App\Modules\Eventos\Views\Congresos\OctavoCongreso\index');
    }

    public function congreso($id)
    {
        $congresos = [
            1 => [
                'titulo' => '1° Congreso Internacional de Seguridad y Proximidad Social',
                'fecha' => '10, 11, 12 de mayo de 2017',
                'lugar' => 'Nezahualcóyotl, Estado de México',
                'descripcion' => 'Texto de ejemplo para probar la plantilla informativa.',

                'logo_congreso' => 'assets/eventos/plantillas/informativa/img/logo-congreso.png',
                'intro' => 'El Primer Congreso Internacional de Seguridad y Proximidad Social marcó el inicio de un espacio de encuentro entre especialistas nacionales e internacionales, servidores públicos, académicos, consultores y representantes de instituciones dedicadas a la seguridad pública.
                Durante tres días, el Congreso promovió el intercambio de experiencias y perspectivas sobre los retos de la seguridad ciudadana, impulsando el modelo de proximidad social como una estrategia para fortalecer la confianza entre la ciudadanía y las instituciones de seguridad.',
            ],
        ];

        if (!isset($congresos[$id])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Congreso no encontrado');
        }

        return view('App\Modules\Eventos\Views\Plantillas\Informativa\index', $congresos[$id]);
    }
}
