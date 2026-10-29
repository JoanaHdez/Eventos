<?php

namespace App\Modules\Eventos\Congresos\OctavoCongreso\Controllers;

use App\Controllers\BaseController;

class CongresoController extends BaseController
{
    public function octavoCongreso()
    {
        return view('App\Modules\Eventos\Congresos\OctavoCongreso\Views\index');
    }
}
