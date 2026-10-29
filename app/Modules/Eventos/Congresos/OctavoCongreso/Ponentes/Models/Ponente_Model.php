<?php

namespace App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Models;

use CodeIgniter\Model;

class Ponente_Model extends Model
{
    protected $table = 'eventos_ponentes';
    protected $primaryKey = 'id_ponente';

    protected $returnType = 'array';
    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'nombre_completo',
        'cargo',
        'usuario',
        'password_hash',
        'activo',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function buscarPorUsuario(string $usuario): ?array
    {
        return $this->where('usuario', $usuario)
                    ->where('activo', 1)
                    ->first();
    }
}
