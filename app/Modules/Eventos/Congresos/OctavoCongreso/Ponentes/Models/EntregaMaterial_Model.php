<?php

namespace App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Models;

use CodeIgniter\Model;

class EntregaMaterial_Model extends Model
{
    protected $table = 'eventos_entregas_material';
    protected $primaryKey = 'id_entrega';

    protected $returnType = 'array';
    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'id_ponente',
        'estado',
        'fecha_envio',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function obtenerOCrearBorrador(
        int $idPonente
    ): ?array {
        $entrega = $this
            ->where('id_ponente', $idPonente)
            ->first();

        if ($entrega) {
            return $entrega;
        }

        $idEntrega = $this->insert([
            'id_ponente' => $idPonente,
            'estado' => 'borrador',
            'fecha_envio' => null,
        ], true);

        if (!$idEntrega) {
            return null;
        }

        return $this->find($idEntrega);
    }
}
