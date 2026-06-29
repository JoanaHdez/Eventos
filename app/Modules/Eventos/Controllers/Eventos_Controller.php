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
            ],
        ];

        if (!isset($congresos[$id])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Congreso no encontrado');
        }

        return view('App\Modules\Eventos\Views\Plantillas\Informativa\index', $congresos[$id]);
    }
}
