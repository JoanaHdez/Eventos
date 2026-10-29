<?php

namespace App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Controllers;

use App\Controllers\BaseController;

class MaterialPonentesController extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $ponentes = $db
            ->table('eventos_ponentes')
            ->select([
                'id_ponente',
                'nombre_completo',
                'cargo',
            ])
            ->where('activo', 1)
            ->orderBy('nombre_completo', 'ASC')
            ->get()
            ->getResultArray();

        foreach ($ponentes as &$ponente) {
            $ponente['imagen'] = base_url(
                'assets/eventos/plantillas/semblanzas/img/P'
                . (int) $ponente['id_ponente']
                . '.png'
            );
        }

        unset($ponente);

        return view(
            'App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Views\MaterialPonentes\index',
            [
                'ponentes' => $ponentes,
            ]
        );
    }
}

