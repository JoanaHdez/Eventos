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

                'hero_imagenes' => [
                    'assets/eventos/plantillas/informativa/img/hero1.jpg',
                    'assets/eventos/plantillas/informativa/img/hero2.jpg',
                    'assets/eventos/plantillas/informativa/img/hero3.jpg',
                    'assets/eventos/plantillas/informativa/img/hero4.jpg',
                ],

                'logo_congreso' => 'assets/eventos/plantillas/informativa/img/intro1.png',
                'intro' => 'El Primer Congreso Internacional de Seguridad y Proximidad Social marcó el inicio de un espacio de encuentro entre especialistas nacionales e internacionales, servidores públicos, académicos, consultores y representantes de instituciones dedicadas a la seguridad pública.
                 Durante tres días, el Congreso promovió el intercambio de experiencias y perspectivas sobre los retos de la seguridad ciudadana, impulsando el modelo de proximidad social como una estrategia para fortalecer la confianza entre la ciudadanía y las instituciones de seguridad.',

                'video_principal' => 'https://www.youtube.com/embed/61br80u3baQ',

                'video_titulo' => '1° Congreso Internacional de Seguridad y Proximidad Social PARTE 1',

                'videos_secundarios' => [
                    /* [
                        'titulo' => '1° Congreso Internacional de Seguridad y Proximidad Social PARTE 2',
                        'url' => 'https://www.youtube.com/embed/ID_DEL_VIDEO',
                    ], */
                ],

                'objetivo' => 'Este congreso se consolida como un espacio de encuentro global donde ponentes de diversos países comparten sus experiencias como servidores públicos, consultores y miembros de empresas privadas. A través de una visión multidisciplinaria, el evento ofrece una plataforma común para analizar, debatir y transformar las estrategias actuales en materia de seguridad pública y proximidad social.',

                'tematica_intro' => 'Esta primera edición estuvo enfocada en el análisis de:',

                'tematicas' => [

                    'Seguridad Pública: Estrategias y retos contemporáneos.',
                    'Proximidad Social: El vínculo humano entre la policía y su comunidad.',
                    'Prevención de la Violencia: Mecanismos proactivos para la paz social.',
                    'Convivencia Ciudadana: Construcción de entornos seguros y armónicos.',
                    'Experiencias Internacionales en Seguridad: Casos de éxito globales.',
                    'Modelos Policiales Orientados a la Ciudadanía: Transformación e institucionalidad con enfoque humano.',
                ],

                'personas_destacadas' => [
                    [
                        'nombre' => 'Presidente Municipal Juan Hugo de la Rosa',
                        'cargo' => 'Mensaje de bienvenida',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/bloque_contenido1.jpg',
                    ],
                    [
                        'nombre' => 'Lic. José Jorge Amador Amador',
                        'cargo' => 'Organización',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/bloque_contenido2.jpg',
                    ],
                ],

                'actividades' => [
                    [
                        'titulo' => 'Conferencias magistrales.',
                        'descripcion' => 'Espacios inaugurados con palabras de bienvenida a expositores e invitados, convocando a la acción y la participación activa. El propósito central de estas ponencias fue visibilizar la problemática actual, trazando perspectivas claras para alcanzar soluciones viables en seguridad y convivencia social.',
                    ],
                    [
                        'titulo' => 'Mesas de debate.',
                        'descripcion' => 'Paneles de diálogo técnico entre especialistas, diseñados para confrontar ideas, compartir experiencias de éxito y proponer nuevas rutas de acción en materia de seguridad pública.',
                    ],
                    [
                        'titulo' => 'Foros de discusión.',
                        'descripcion' => 'Encuentros dinámicos orientados al análisis crítico de las problemáticas sociales vigentes y al desarrollo de soluciones prácticas orientadas a fortalecer la proximidad policial.',
                    ],
                    [
                        'titulo' => 'Intercambio de experiencias internacionales.',
                        'descripcion' => 'Una plataforma de vinculación global que reunió a expertos nacionales e internacionales con el fin de compartir, adaptar y replicar modelos de vanguardia y buenas prácticas en las comunidades locales.',
                    ],
                ],

                'actividad_imagen' => 'assets/eventos/plantillas/informativa/img/hero3.jpg',

                'galeria' => [
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/hero1.jpg',
                        'alt' => 'Stand de tiro',
                        'tipo' => 'grande',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/hero2.jpg',
                        'alt' => 'Escenario del congreso',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/hero3.jpg',
                        'alt' => 'Participantes con programa',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/hero4.jpg',
                        'alt' => 'Auditorio del congreso',
                        'tipo' => 'alta',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/hero1.jpg',
                        'alt' => 'Ponente en escenario',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/hero2.jpg',
                        'alt' => 'Entrega de reconocimientos',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/hero3.jpg',
                        'alt' => 'Inauguración',
                        'tipo' => 'normal',
                    ],
                ],

                'programa_imagen' => '',
                'ponentes_imagen' => '',

                'legado' => 'El Primer Congreso Internacional de Seguridad y Proximidad Social representó el origen de un ambicioso proyecto institucional. Con el paso de los años, este esfuerzo inicial logró consolidarse como un espacio permanente y referente para el intercambio de conocimientos, experiencias y buenas prácticas, enriquecido permanentemente por la participación de destacados especialistas de México y diversos países del mundo.',

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
