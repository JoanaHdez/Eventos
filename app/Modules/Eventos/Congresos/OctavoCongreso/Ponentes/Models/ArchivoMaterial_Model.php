<?php

namespace App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Models;

use CodeIgniter\Model;

class ArchivoMaterial_Model extends Model
{
    protected $table = 'eventos_archivos_material';
    protected $primaryKey = 'id_archivo';

    protected $returnType = 'array';
    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'id_entrega',
        'nombre_original',
        'extension',
        'tipo_mime',
        'tamano_bytes',
        'contenido',
    ];

    protected $useTimestamps = false;

    protected $createdField = 'created_at';
}
