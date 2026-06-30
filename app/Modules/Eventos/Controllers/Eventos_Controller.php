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

                'video_principal' => 'https://www.youtube.com/embed/ID_DEL_VIDEO',

                'video_titulo' => '1° Congreso Internacional de Seguridad y Proximidad Social',

                'videos_secundarios' => [
                    [
                        'titulo' => '1° Congreso Internacional de Seguridad y Proximidad Social',
                        'url' => 'https://www.youtube.com/embed/ID_DEL_VIDEO',
                    ],
                ],

                'objetivo' => 'Lugar de encuentro en el que participan ponentes de diferentes países que comparten experiencias como servidores públicos, empresas privadas y consultores con diferentes perspectivas, a través de un espacio en común en materia de seguridad pública y proximidad social.',

                'tematica_intro' => 'Esta primera edición estuvo enfocada en el análisis de:',

                'tematicas' => [
                    'Seguridad Pública.',
                    'Proximidad Social.',
                    'Prevención de la violencia.',
                    'Convivencia ciudadana.',
                    'Experiencias internacionales en seguridad.',
                    'Modelos policiales orientados a la ciudadanía.',
                ],

                'personas_destacadas' => [
                    [
                        'nombre' => 'Presidente Municipal Juan Hugo de la Rosa',
                        'cargo' => 'Mensaje de bienvenida',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/persona1.jpg',
                    ],
                    [
                        'nombre' => 'Lic. José Jorge Amador Amador',
                        'cargo' => 'Organización',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/persona2.jpg',
                    ],
                ],

                'actividades' => [
                    [
                        'titulo' => 'Conferencias magistrales.',
                        'descripcion' => 'Palabras de bienvenida a expositores e invitados además de convocar a ser partícipes en las conferencias. Con el propósito de difundir la problemática actual y las perspectivas para alcanzar soluciones viables en materia de seguridad y convivencia social.',
                    ],
                    [
                        'titulo' => 'Mesas de debate.',
                        'descripcion' => 'Espacios de diálogo entre especialistas para compartir experiencias, propuestas y perspectivas en materia de seguridad pública.',
                    ],
                    [
                        'titulo' => 'Foros de discusión.',
                        'descripcion' => 'Encuentros orientados al análisis de problemáticas actuales y posibles soluciones para fortalecer la proximidad social.',
                    ],
                    [
                        'titulo' => 'Intercambio de experiencias internacionales.',
                        'descripcion' => 'Participación de especialistas nacionales e internacionales para compartir modelos y buenas prácticas.',
                    ],
                ],

                'actividad_imagen' => 'assets/eventos/plantillas/informativa/img/actividad1.jpg',

                'galeria' => [
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/galeria1.jpg',
                        'alt' => 'Stand de tiro',
                        'grande' => true,
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/galeria2.jpg',
                        'alt' => 'Escenario del congreso',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/galeria3.jpg',
                        'alt' => 'Participantes con programa',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/galeria4.jpg',
                        'alt' => 'Auditorio del congreso',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/galeria5.jpg',
                        'alt' => 'Ponente en escenario',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/galeria6.jpg',
                        'alt' => 'Entrega de reconocimientos',
                        'grande' => true,
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/galeria7.jpg',
                        'alt' => 'Inauguración',
                    ],
                ],

                'programa_imagen' => 'assets/eventos/plantillas/informativa/img/programa1.jpg',
                'ponentes_imagen' => 'assets/eventos/plantillas/informativa/img/ponentes1.jpg',

                'legado' => 'El Primer Congreso Internacional de Seguridad y Proximidad Social representó el inicio de un proyecto institucional que, con el paso de los años, se consolidó como un espacio permanente para el intercambio de conocimientos, experiencias y buenas prácticas en materia de seguridad pública y proximidad social, contando con la participación de especialistas de México y diversos países.',

                'informacion_general' => [
    [
        'label' => 'Edición',
        'value' => '1°',
    ],
    [
        'label' => 'Fecha',
        'value' => '10 al 12 de mayo de 2017',
    ],
    [
        'label' => 'Sede',
        'value' => 'Nezahualcóyotl, Estado de México',
    ],
    [
        'label' => 'Duración',
        'value' => '3 días',
    ],
    [
        'label' => 'Modalidad',
        'value' => 'Presencial',
    ],
    [
        'label' => 'Tema central',
        'value' => 'Seguridad y Proximidad Social',
    ],
],
            ],
        ];

        if (!isset($congresos[$id])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Congreso no encontrado');
        }

        return view('App\Modules\Eventos\Views\Plantillas\Informativa\index', $congresos[$id]);
    }
}
