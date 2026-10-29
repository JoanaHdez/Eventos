<?php

namespace App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Controllers;

use App\Controllers\BaseController;

class MaterialDescargasController extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $ponentes = $db
            ->table('eventos_ponentes AS p')
            ->select(
                'p.id_ponente,
                 p.nombre_completo,
                 p.cargo,
                 COUNT(a.id_archivo) AS total_archivos'
            )
            ->join(
                'eventos_entregas_material AS e',
                'e.id_ponente = p.id_ponente',
                'left'
            )
            ->join(
                'eventos_archivos_material AS a',
                'a.id_entrega = e.id_entrega',
                'left'
            )
            ->where('p.activo', 1)
            ->groupBy([
                'p.id_ponente',
                'p.nombre_completo',
                'p.cargo',
            ])
            ->orderBy(
                'p.nombre_completo',
                'ASC'
            )
            ->get()
            ->getResultArray();

        foreach ($ponentes as &$ponente) {
            $ponente['total_archivos'] =
                (int) (
                    $ponente['total_archivos'] ?? 0
                );

            $ponente['imagen'] = base_url(
                'assets/eventos/plantillas/semblanzas/img/P'
                . (int) $ponente['id_ponente']
                . '.png'
            );
        }

        unset($ponente);

        return view(
            'App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Views\MaterialDescargas\index',
            [
                'ponentes' => $ponentes,
            ]
        );
    }
}
