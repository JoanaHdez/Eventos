<?php

namespace App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Controllers;

use App\Controllers\BaseController;
use App\Modules\Eventos\Congresos\OctavoCongreso\Ponentes\Models\Ponente_Model;

class AuthController extends BaseController
{
    public function login()
    {
        try {
        $usuario = trim(
            (string) $this->request->getPost('usuario')
        );

        $password = (string) $this->request->getPost(
            'contrasena'
        );

        if ($usuario === '' || $password === '') {
            return $this->response
                ->setStatusCode(422)
                ->setJSON([
                    'success' => false,
                    'message' => 'Debe ingresar usuario y contraseña.',
                ]);
        }

        $modelo = new Ponente_Model();

        $ponente = $modelo->buscarPorUsuario($usuario);

        if (
            !$ponente ||
            !password_verify(
                $password,
                $ponente['password_hash']
            )
        ) {
            return $this->response
                ->setStatusCode(401)
                ->setJSON([
                    'success' => false,
                    'message' => 'Usuario o contraseña incorrectos.',
                ]);
        }

        session()->regenerate();

        session()->set([
            'ponente_id' => $ponente['id_ponente'],
            'ponente_nombre' => $ponente['nombre_completo'],
            'ponente_usuario' => $ponente['usuario'],
            'ponente_logueado' => true,
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Inicio de sesión correcto.',
            'ponente' => [
                'id' => $ponente['id_ponente'],
                'nombre' => $ponente['nombre_completo'],
                'cargo' => $ponente['cargo'] ?? '',
            ],
        ]);
        } catch (\Throwable $error) {
        return $this->response
            ->setStatusCode(500)
            ->setJSON([
                'success' => false,
                'message' => $error->getMessage(),
            ]);
    }
    }

    public function logout()
{
    session()->destroy();

    return $this->response->setJSON([
        'success' => true,
        'message' => 'Sesión cerrada correctamente.',
    ]);
}
}
