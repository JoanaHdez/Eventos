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
                    'assets/eventos/plantillas/informativa/img/1/hero1.jpg',
                    'assets/eventos/plantillas/informativa/img/1/hero2.jpg',
                    'assets/eventos/plantillas/informativa/img/1/hero3.jpg',
                    'assets/eventos/plantillas/informativa/img/1/hero4.jpg',
                ],

                'logo_congreso' => 'assets/eventos/plantillas/informativa/img/1/intro1.png',
                'intro' => 'El Primer Congreso Internacional de Seguridad y Proximidad Social marcó el inicio de un espacio de encuentro entre especialistas nacionales e internacionales, servidores públicos, académicos, consultores y representantes de instituciones dedicadas a la seguridad pública.
                 Durante tres días, el Congreso promovió el intercambio de experiencias y perspectivas sobre los retos de la seguridad ciudadana, impulsando el modelo de proximidad social como una estrategia para fortalecer la confianza entre la ciudadanía y las instituciones de seguridad.',

                'video_principal' => 'https://www.youtube.com/embed/61br80u3baQ',

                'video_titulo' => '1° Congreso Internacional de Seguridad y Proximidad Social PARTE 1',

                'videos_secundarios' => [
                    /* [
                        'titulo' => '1° Congreso Internacional de Seguridad y Proximidad Social PARTE 2',
                        'url' => 'https://www.youtube.com/embed/ID_DEL_VIDEO',
                    ], */],

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
                        'imagen' => 'assets/eventos/plantillas/informativa/img/1/bloque_contenido1.jpg',
                    ],
                    [
                        'nombre' => 'Lic. José Jorge Amador Amador',
                        'cargo' => 'Organización',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/1/bloque_contenido2.jpg',
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

                'actividad_imagen' => 'assets/eventos/plantillas/informativa/img/1/hero3.jpg',

                'galeria' => [
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/1/hero1.jpg',
                        'alt' => 'Stand de tiro',
                        'tipo' => 'grande',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/1/hero2.jpg',
                        'alt' => 'Escenario del congreso',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/1/hero3.jpg',
                        'alt' => 'Participantes con programa',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/1/hero4.jpg',
                        'alt' => 'Auditorio del congreso',
                        'tipo' => 'alta',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/1/hero1.jpg',
                        'alt' => 'Ponente en escenario',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/1/hero2.jpg',
                        'alt' => 'Entrega de reconocimientos',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/1/hero3.jpg',
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

            2 => [
                'titulo' => '2° Congreso Internacional de Seguridad y Proximidad Social',
                'fecha' => '24 y 25 de mayo de 2018',
                'lugar' => 'Nezahualcóyotl, Estado de México',
                'descripcion' => 'Texto de ejemplo para probar la plantilla informativa.',

                'hero_imagenes' => [
                    'assets/eventos/plantillas/informativa/img/2/hero1.jpg',
                    'assets/eventos/plantillas/informativa/img/2/hero2.jpg',
                    'assets/eventos/plantillas/informativa/img/2/hero3.jpg',
                    'assets/eventos/plantillas/informativa/img/2/hero4.jpg',
                ],

                'logo_congreso' => 'assets/eventos/plantillas/informativa/img/2/hero5.JPG',
                'intro' => 'El Centro de Investigación para la Paz México A.C. (CIPMEX) formó parte activa de los trabajos del Segundo Congreso Internacional de Seguridad y Proximidad Social. Este encuentro se distinguió por ser un espacio dinámico, enriquecido con propuestas de vanguardia y análisis críticos orientados a transformar las estrategias de seguridad desde una visión local y comunitaria.',

                'video_principal' => 'https://www.youtube.com/embed/rfRrZOxfa8U?list=PLhnE0TFJnZhfTY-A5ISbrOKIGNHoRppsP',

                'video_titulo' => 'Segundo Congreso Internacional de Seguridad y Proximidad Social en Nezahualcóyotl, Estado de México.',

                'videos_secundarios' => [
                    [
                        'titulo' => 'Adrián Cervantes. Promotor comunitario en redes vecinales de seguridad por cuadra de Nazahualcóyotl',
                        'url' => 'https://www.youtube.com/embed/n-n_n5prek0?list=PLhnE0TFJnZhfTY-A5ISbrOKIGNHoRppsP&index=2',
                    ],
                    [
                        'titulo' => 'Alejandro Hope Pinzón. Director del proyecto Menos Crimen Más Castigo',
                        'url' => 'https://www.youtube.com/embed/nghTJ5v3i6k?list=PLhnE0TFJnZhfTY-A5ISbrOKIGNHoRppsP&index=3',
                    ],
                    [
                        'titulo' => 'Carlos Guajardo. Investigador de la Universidad Alberto Hurtado en Chile',
                        'url' => 'https://www.youtube.com/embed/VbR2Un8rPZg?list=PLhnE0TFJnZhfTY-A5ISbrOKIGNHoRppsP&index=4',
                    ],
                    [
                        'titulo' => 'Diana Mendoza. Promotor comunitario en redes vecinales de seguridad por cuadra de Nazahualcóyotl',
                        'url' => 'https://www.youtube.com/embed/eA2tGaAePZY?list=PLhnE0TFJnZhfTY-A5ISbrOKIGNHoRppsP&index=5',
                    ],
                    [
                        'titulo' => 'Dr Bernardo GómezDr. Bernardo Gómez del Campo Presidente de Misiones Regionales de Seguridad A.C.',
                        'url' => 'https://www.youtube.com/embed/ZzO-JkucFFY?list=PLhnE0TFJnZhfTY-A5ISbrOKIGNHoRppsP&index=6',
                    ],
                    [
                        'titulo' => 'Dr. Ernesto López Portillo. Especialista en Seguridad Pública',
                        'url' => 'https://www.youtube.com/embed/uFvi0nW2Mmw?list=PLhnE0TFJnZhfTY-A5ISbrOKIGNHoRppsP&index=7',
                    ],
                    [
                        'titulo' => 'Dr. John Bailey. Profesor de Gobierno y Servicio Exterior de Georgetown University',
                        'url' => 'https://www.youtube.com/embed/NAzaCs7g7ww?list=PLhnE0TFJnZhfTY-A5ISbrOKIGNHoRppsP&index=8',
                    ],
                ],

                'objetivo' => 'Consolidar el espacio de diálogo internacional para plantear soluciones metodológicas y tecnológicas en la reducción del delito, promoviendo un cambio de paradigma en el que la seguridad se construya de abajo hacia arriba, involucrando activamente a la sociedad civil, la academia y los cuerpos policiales.',

                'tematica_intro' => 'En esta segunda edición, las ponencias y mesas de debate se enfocaron en los siguientes ejes analíticos:',

                'tematicas' => [

                    'Gobernanza Ética y Combate a la Impunidad: Diagnóstico de los círculos viciosos de la corrupción y el delito.',
                    'Policía de Proximidad y Prevención Situacional: El diseño de estrategias locales basadas en el conocimiento del entorno vecinal.',
                    'Recuperación de Espacios Públicos: El tejido comunitario como herramienta proactiva de seguridad.',
                    'Tecnología e Información: El uso de herramientas tecnológicas para el combate y mapeo del delito.',
                    'Modelos de Patrullaje: Diferenciación entre el patrullaje disuasivo tradicional y la verdadera prevención del delito.',
                ],

                'personas_destacadas' => [
                    [
                        'nombre' => 'Dr. John Bailey',
                        'cargo' => 'Profesor en la Universidad de Georgetown y especialista en seguridad.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/2/destacada1.jpg',
                    ],
                    [
                        'nombre' => 'Bernardo Gómez del Campo',
                        'cargo' => 'Presidente de Misiones Regionales de Seguridad A.C',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/2/destacada2.jpg',
                    ],
                    [
                        'nombre' => 'Dr. Mario Arroyo Juárez',
                        'cargo' => 'Especialista en seguridad nacional, terrorismo y reducción del delito.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/2/destacada3.jpg',
                    ],
                    [
                        'nombre' => 'Dr. Mario Crosswell Arenas',
                        'cargo' => 'Director General de la Oficina Coordinadora de Riesgos Asegurados (OCRA).',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/2/destacada4.jpg',
                    ],
                    [
                        'nombre' => 'Carlos Guajardo',
                        'cargo' => 'Investigador de la Universidad Alberto Hurtado en Chile.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/2/destacada5.jpg',
                    ],
                ],

                'actividades' => [
                    [
                        'titulo' => 'Conferencias Magistrales y Presentaciones Editoriales.',
                        'descripcion' => 'Ponencias de alto nivel donde se analizaron obras clave como "Crimen e Impunidad: las trampas de la seguridad en México" para entender el panorama latinoamericano.',
                    ],
                    [
                        'titulo' => 'Mesas de Diagnóstico y Debate.',
                        'descripcion' => 'Foros enfocados en la falta de recaudación local, problemas de coordinación institucional y la necesidad de erradicar el pesimismo colectivo frente a la inseguridad.',
                    ],
                    [
                        'titulo' => 'Paneles de Intercambio Internacional.',
                        'descripcion' => 'Espacios de análisis comparativo donde expertos de países como Chile y Estados Unidos contrastaron el impacto del patrullaje tradicional frente al modelo de proximidad.',
                    ],
                ],

                'actividad_imagen' => 'assets/eventos/plantillas/informativa/img/2/hero3.jpg',

                'galeria' => [
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/2/hero1.jpg',
                        'alt' => 'Stand de tiro',
                        'tipo' => 'grande',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/2/galeria2.jpg',
                        'alt' => 'Escenario del congreso',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/2/hero3.jpg',
                        'alt' => 'Participantes con programa',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/2/hero4.jpg',
                        'alt' => 'Auditorio del congreso',
                        'tipo' => 'alta',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/2/galeria1.jpg',
                        'alt' => 'Ponente en escenario',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/2/hero2.jpg',
                        'alt' => 'Entrega de reconocimientos',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/2/galeria3.jpg',
                        'alt' => 'Inauguración',
                        'tipo' => 'normal',
                    ],
                ],

                'programa_imagen' => '',
                'ponentes_imagen' => '',

                'legado' => 'La segunda edición reafirmó que la proximidad no consiste únicamente en el diálogo con la comunidad, sino en una inmersión profunda en el ambiente vecinal respaldada por la investigación científica. Este congreso dejó claro que el verdadero éxito institucional radica en dejar de ver al policía tradicional como un símbolo de emergencia y comenzar a consolidarlo como un agente preventivo integrado en la vida diaria de la ciudadanía.',

                'informacion_general' => [
                    [
                        'label' => 'Edición',
                        'value' => '2°',
                    ],
                    [
                        'label' => 'Fecha',
                        'value' => '24 y 25 de mayo de 2018',
                    ],
                    [
                        'label' => 'Sede',
                        'value' => 'Universidad La Salle Nezahualcóyotl',
                    ],
                    [
                        'label' => 'Duración',
                        'value' => '2 días',
                    ],
                    [
                        'label' => 'Modalidad',
                        'value' => 'Presencial',
                    ],
                    [
                        'label' => 'Tema central',
                        'value' => 'Seguridad y Proximidad Social (Enfoques metodológicos y participación comunitaria)',
                    ],
                ],
            ],

            3 => [
                'titulo' => '3° Congreso Internacional de Seguridad y Proximidad Social',
                'fecha' => '30 y 31 de mayo de 2019',
                'lugar' => 'Nezahualcóyotl, Estado de México',
                'descripcion' => 'Texto de ejemplo para probar la plantilla informativa.',

                'hero_imagenes' => [
                    'assets/eventos/plantillas/informativa/img/3/hero1.png',
                    'assets/eventos/plantillas/informativa/img/3/hero2.jpg',
                    'assets/eventos/plantillas/informativa/img/3/hero3.jpg',
                    'assets/eventos/plantillas/informativa/img/3/hero4.jpg',
                ],

                'logo_congreso' => 'assets/eventos/plantillas/informativa/img/3/hero1.png',
                'intro' => 'El Tercer Congreso Internacional de Seguridad y Proximidad Social se llevó a cabo en un momento crucial para la agenda nacional: la aprobación constitucional y el despliegue de la Guardia Nacional. Este encuentro se consolidó como el escenario idóneo para debatir el rumbo de la seguridad pública en México, analizando cómo integrar el exitoso modelo de proximidad con las nuevas fuerzas del orden federal.',

                'video_principal' => 'https://www.youtube.com/embed/Y1YlLYPIrvQ',

                'video_titulo' => 'Lic. Federico Fernández',

                'videos_secundarios' => [
                    [
                        'titulo' => 'Dra. Laura Carrera Lugo, Consultora, experta en seguridad ciudadana',
                        'url' => 'https://www.youtube.com/embed/iK_sIdJp6S8',
                    ],
                    [
                        'titulo' => 'Jorge Amador Amador, Director de Seguridad Ciudadana de Nezahualcóyotl',
                        'url' => 'https://www.youtube.com/embed/y3eNC6UpuZE',
                    ],
                    [
                        'titulo' => 'Congreso Internacional de Seguridad y Proximidad Social, 3er. Congreso',
                        'url' => 'https://www.youtube.com/embed/PtHnKa3gWo8',
                    ],
                ],

                'objetivo' => 'Brindar y compartir experiencias que contribuyan a resolver la crisis de inseguridad en el país mediante el debate del modelo de proximidad en el nuevo contexto de la Guardia Nacional. El congreso buscó plantear propuestas sólidas para superar el viejo enfoque de seguridad pública basados puramente en la fuerza y transitar hacia una verdadera seguridad ciudadana que recupere la confianza de las comunidades.',

                'tematica_intro' => 'En esta tercera edición, las conferencias y mesas de trabajo se articularon en torno a los siguientes ejes estratégicos:',

                'tematicas' => [

                    'La Proximidad Social en los Tiempos de la Guardia Nacional: El debate sobre las funciones operativas y la coordinación territorial.',
                    'Construcción de la Seguridad Ciudadana: Superación de las estrategias fallidas basadas únicamente en el uso de la fuerza.',
                    'Estrategias de Recomposición Social: Modificación del paradigma e imagen de los cuerpos policíacos en su relación con la ciudadanía.',
                    'Fortalecimiento y Dignificación Policial: La profesionalización de las corporaciones locales, estatales y municipales como base de una coordinación efectiva.',
                    'Derechos Humanos y Seguridad: Enfoques internacionales para garantizar la integridad y el tejido comunitario.',
                ],

                'personas_destacadas' => [
                    [
                        'nombre' => 'Juan Hugo de la Rosa García',
                        'cargo' => 'Alcalde de Nezahualcóyotl e impulsor central del congreso.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/3/destacada1.jpg',
                    ],
                    [
                        'nombre' => 'Luis García López',
                        'cargo' => 'Director General del Centro Nacional de Prevención del Delito y Participación Ciudadana del Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/3/destacada2.jpg',
                    ],
                    [
                        'nombre' => 'Norma Maray Hernández',
                        'cargo' => 'Directora de Seguridad Humana del municipio de Peñalolén, Chile.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/3/destacada3.jpg',
                    ],
                    [
                        'nombre' => 'María Elena Morera Mitre',
                        'cargo' => 'Presidenta de la organización Causa en Común.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/3/destacada4.jpg',
                    ],
                    [
                        'nombre' => 'María Esther Nolasco Núñez',
                        'cargo' => 'Fiscal Regional de Justicia en el municipio de Nezahualcóyotl.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/3/destacada5.jpg',
                    ],
                ],

                'actividades' => [
                    [
                        'titulo' => 'Ceremonia Inaugural y Convocatoria Institucional.',
                        'descripcion' => 'Apertura oficial a cargo de autoridades de los tres niveles de gobierno para trazar las directrices del debate estratégico nacional.',
                    ],
                    [
                        'titulo' => 'Paneles de Coordinación Operativa.',
                        'descripcion' => 'Mesas de análisis enfocadas en definir las funciones y facultades de la Guardia Nacional respecto a las policías locales.',
                    ],
                    [
                        'titulo' => 'Foros Académicos Internacionales.',
                        'descripcion' => 'Intercambio de ponencias con especialistas extranjeros para tropicalizar casos de éxito de proximidad comunitaria en el contexto mexicano.',
                    ],
                ],

                'actividad_imagen' => 'assets/eventos/plantillas/informativa/img/3/hero3.jpg',

                'galeria' => [
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/3/galeria1.jpg',
                        'alt' => 'Stand de tiro',
                        'tipo' => 'grande',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/3/galeria2.jpg',
                        'alt' => 'Escenario del congreso',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/3/galeria3.jpg',
                        'alt' => 'Participantes con programa',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/3/galeria4.jpg',
                        'alt' => 'Auditorio del congreso',
                        'tipo' => 'alta',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/3/galeria5.jpg',
                        'alt' => 'Ponente en escenario',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/3/galeria6.jpg',
                        'alt' => 'Entrega de reconocimientos',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/3/galeria7.jpg',
                        'alt' => 'Inauguración',
                        'tipo' => 'normal',
                    ],
                ],

                'programa_imagen' => '',
                'ponentes_imagen' => '',

                'legado' => 'La tercera edición dejó un legado trascendental: posicionó formalmente el llamado nacional a no militarizar las estrategias de seguridad locales. Reafirmó que para frenar la violencia e inseguridad en el país es ineludible que las armas de las instituciones sean el trabajo policial comunitario y de proximidad vecinal, demostrando que las corporaciones municipales sólidas son el único mecanismo esencial para legitimar la autoridad y salvaguardar la paz.',

                'informacion_general' => [
                    [
                        'label' => 'Edición',
                        'value' => '3°',
                    ],
                    [
                        'label' => 'Fecha',
                        'value' => '30 y 31 de mayo de 2019',
                    ],
                    [
                        'label' => 'Sede',
                        'value' => 'Universidad La Salle Nezahualcóyotl',
                    ],
                    [
                        'label' => 'Duración',
                        'value' => '2 días',
                    ],
                    [
                        'label' => 'Modalidad',
                        'value' => 'Presencial',
                    ],
                    [
                        'label' => 'Tema central',
                        'value' => 'La Proximidad Social en los Tiempos de la Guardia Nacional',
                    ],
                ],
            ],

            4 => [
                'titulo' => '4° Congreso Internacional de Seguridad y Proximidad Social',
                'fecha' => '28 y 29 de julio de 2022',
                'lugar' => 'Nezahualcóyotl, Estado de México',
                'descripcion' => 'Texto de ejemplo para probar la plantilla informativa.',

                'hero_imagenes' => [
                    'assets/eventos/plantillas/informativa/img/4/hero1.png',
                    'assets/eventos/plantillas/informativa/img/4/hero2.jpg',
                    'assets/eventos/plantillas/informativa/img/4/hero3.jpg',
                    'assets/eventos/plantillas/informativa/img/4/hero4.jpg',
                ],

                'logo_congreso' => 'assets/eventos/plantillas/informativa/img/4/hero5.png',
                'intro' => 'Tras una pausa en las actividades presenciales por la contingencia sanitaria, el Cuarto Congreso Internacional de Seguridad y Proximidad Social marcó el regreso triunfal de esta iniciativa global. Encabezado por la nueva administración local, el evento sirvió como foro de vanguardia para que mandatarios de diversas regiones de México y del mundo compartieran sus visiones sobre cómo optimizar la labor policial en un entorno de constante evolución social.',

                'video_principal' => 'https://www.youtube.com/embed/M3chHQRiaXM?list=PLw2QxJGgsiAsKKGykmWj1n7USFd4YPK8o',

                'video_titulo' => 'Inauguración del 4º Congreso Internacional de Seguridad y Proximidad Social',

                'videos_secundarios' => [],

                'objetivo' => 'Sociabilizar, difundir y contrastar las buenas prácticas de diversas corporaciones policiales en el ámbito nacional e internacional. El enfoque principal radicó en analizar los retos actuales y desafíos operativos en la coordinación estratégica entre las policías locales (municipales) y las fuerzas de seguridad nacionales, buscando que el modelo de proximidad de Nezahualcóyotl sirva como base de réplica para otros territorios de la República Mexicana.',

                'tematica_intro' => 'En esta cuarta edición, las ponencias y paneles de discusión estructuraron sus análisis bajo el lema rector "Retos y Desafíos de la Coordinación entre las Policías Locales y Nacionales", centrándose en los siguientes ejes:',

                'tematicas' => [

                    'Inteligencia Social: El fortalecimiento del tejido comunitario a través de la vinculación y confianza mutua entre ciudadanos y policías.',
                    'Coordinación Metropolitana e Intergubernamental: Estrategias de cooperación efectiva sin distinción de fronteras o colores políticos.',
                    'Prevención de Conductas Antisociales: Mecanismos proactivos aplicados a cuadrantes y sectores vecinales para respuestas inmediatas.',
                    'Evolución del Servicio Policial: Análisis comparativo de modelos donde se prioriza la proximidad ante la ausencia de policías tradicionales en demarcaciones extranjeras.',
                ],

                'personas_destacadas' => [
                    [
                        'nombre' => 'Adolfo Cerqueda Rebollo',
                        'cargo' => 'Presidente Municipal de Nezahualcóyotl.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/4/destacada1.jpg',
                    ],
                    [
                        'nombre' => 'Dra. Claudia Sheinbaum Pardo',
                        'cargo' => 'Jefa de Gobierno de la Ciudad de México.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/4/destacada2.jpg',
                    ],
                    [
                        'nombre' => 'Carolina Leitao Álvarez-Salamanca',
                        'cargo' => 'Alcaldesa de Peñalolén, Chile.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/4/destacada3.jpg',
                    ],
                    [
                        'nombre' => 'Rodrigo Hernández',
                        'cargo' => 'Director de Cooperación Sur-Sur y Alianza del Pacífico de la Agencia Mexicana de Cooperación para el Desarrollo (AMEXCID).',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/4/destacada4.jpg',
                    ],
                    [
                        'nombre' => 'Rodrigo Sigfrid Martínez-Celis Wogau',
                        'cargo' => 'Secretario de Seguridad del Estado de México.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/4/destacada5.jpg',
                    ],
                    [
                        'nombre' => 'Xóchitl Flores Jiménez',
                        'cargo' => 'Presidenta Municipal de Chimalhuacán.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/4/destacada6.jpg',
                    ],
                    [
                        'nombre' => 'Mariela Gutiérrez Escalante',
                        'cargo' => 'Presidenta Municipal de Tecámac.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/4/destacada7.jpg',
                    ],
                    [
                        'nombre' => 'Juan Hugo de la Rosa García',
                        'cargo' => 'Expresidente municipal de Nezahualcóyotl y asesor en materia de seguridad social de proximidad.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/4/destacada8.jpg',
                    ],
                ],

                'actividades' => [
                    [
                        'titulo' => 'Ceremonia Inaugural.',
                        'descripcion' => 'Apertura oficial de los trabajos en la que se expuso la vinculación de éxito en zonas limítrofes como el eje Nezahualcóyotl-Iztapalapa.',
                    ],
                    [
                        'titulo' => 'Conferencias y Exposiciones Especializadas',
                        'descripcion' => 'Ponencias internacionales orientadas a tropicalizar modelos de inteligencia social y metodologías operativas europeas y sudamericanas en el contexto del Estado de México.',
                    ],
                    [
                        'titulo' => 'Mesas de Trabajo Intermunicipales.',
                        'descripcion' => 'Espacios de diálogo técnico donde alcaldes y presidentas municipales intercambiaron experiencias prácticas para implementar esquemas basados en sectores y cuadrantes comunitarios.',
                    ],
                ],

                'actividad_imagen' => 'assets/eventos/plantillas/informativa/img/4/hero4.jpg',

                'galeria' => [
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/4/galeria1.png',
                        'alt' => 'Stand de tiro',
                        'tipo' => 'grande',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/4/galeria2.png',
                        'alt' => 'Escenario del congreso',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/4/galeria3.png',
                        'alt' => 'Participantes con programa',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/4/hero1.png',
                        'alt' => 'Auditorio del congreso',
                        'tipo' => 'alta',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/4/hero2.jpg',
                        'alt' => 'Ponente en escenario',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/4/hero3.jpg',
                        'alt' => 'Entrega de reconocimientos',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/4/hero4.jpg',
                        'alt' => 'Inauguración',
                        'tipo' => 'normal',
                    ],
                ],

                'programa_imagen' => '',
                'ponentes_imagen' => '',

                'legado' => 'El cuarto congreso dejó en claro que la seguridad ciudadana demanda una coordinación estrecha entre los tres niveles de gobierno por encima de cualquier ideología. Al ser respaldado por datos que colocaban al modelo de proximidad de Nezahualcóyotl como referente nacional de cercanía con la población, esta edición consolidó la premisa de que los municipios tienen la capacidad de dictar la agenda nacional de seguridad si construyen sus estrategias desde la base comunitaria.',

                'informacion_general' => [
                    [
                        'label' => 'Edición',
                        'value' => '4°',
                    ],
                    [
                        'label' => 'Fecha',
                        'value' => '28 y 29 de julio de 2022',
                    ],
                    [
                        'label' => 'Sede',
                        'value' => 'Auditorio "Alfredo Harp Helú", Universidad La Salle Campus Nezahualcóyotl',
                    ],
                    [
                        'label' => 'Duración',
                        'value' => '2 días',
                    ],
                    [
                        'label' => 'Modalidad',
                        'value' => 'Presencial',
                    ],
                    [
                        'label' => 'Tema central',
                        'value' => 'Retos y Desafíos de la Coordinación entre las Policías Locales y Nacionales',
                    ],
                ],
            ],

            5 => [
                'titulo' => '5° Congreso Internacional de Seguridad y Proximidad Social',
                'fecha' => '3 y 4 de agosto de 2023',
                'lugar' => 'Nezahualcóyotl, Estado de México',
                'descripcion' => 'Texto de ejemplo para probar la plantilla informativa.',

                'hero_imagenes' => [
                    'assets/eventos/plantillas/informativa/img/5/hero1.jpg',
                    'assets/eventos/plantillas/informativa/img/5/hero2.jpg',
                    'assets/eventos/plantillas/informativa/img/5/hero3.png',
                    'assets/eventos/plantillas/informativa/img/5/hero4.png',
                ],

                'logo_congreso' => 'assets/eventos/plantillas/informativa/img/5/hero5.jpg',
                'intro' => 'El Quinto Congreso Internacional de Seguridad y Proximidad Social consolidó de manera definitiva el renombre global de este encuentro, alcanzando una participación masiva de más de 4 mil asistentes tanto de forma presencial como remota. En un esfuerzo por innovar y democratizar el aprendizaje, esta edición implementó por primera vez dinámicas digitales de retroalimentación en tiempo real a través de redes sociales, enriqueciendo sustancialmente el debate de los congresistas.',

                'video_principal' => 'https://www.youtube.com/embed/9RqzFlJXVO4',

                'video_titulo' => '5° Congreso Internacional de Seguridad y Proximidad Social.',

                'videos_secundarios' => [
                    [
                        'titulo' => '5to Congreso Internacional de Seguridad y Proximidad Social',
                        'url' => 'https://www.youtube.com/embed/KNnZZcXHr2s',
                    ],
                    [
                        'titulo' => '5to Congreso Internacional de Seguridad y Proximidad Social',
                        'url' => 'https://www.youtube.com/embed/isVl18hIVFI',
                    ],
                    [
                        'titulo' => '5to Congreso Internacional de Seguridad y Proximidad Social',
                        'url' => 'https://www.youtube.com/embed/K8JY5_3LtDg',
                    ],
                    [
                        'titulo' => 'Todo listo para el 5°Congreso Int. de Seguridad y Proximidad Social',
                        'url' => 'https://www.youtube.com/embed/32BT2xo-_g8',
                    ],
                ],

                'objetivo' => 'Intercambiar, contrastar y compartir metodologías y acciones orientadas a robustecer las políticas de seguridad ciudadana a nivel global. El enfoque principal consistió en abordar el reto de mantener la efectividad histórica del modelo de proximidad social de Nezahualcóyotl frente a los contextos delictivos modernos, sirviendo a su vez como guía de implementación y adaptación operativa para otros estados y municipios de la República Mexicana.',

                'tematica_intro' => 'Bajo una visión integral y de vanguardia, los trabajos y ponencias de esta quinta edición articularon sus análisis en torno a los siguientes pilares temáticos:',

                'tematicas' => [

                    'La Seguridad Ciudadana frente a la Militarización: Un balance crítico sobre el ascenso institucional de las fuerzas federales.',
                    'Contención del Crimen Organizado desde lo Local: Estrategias tácticas de las corporaciones municipales para mitigar los impactos delictivos de alto impacto.',
                    'Evolución Tecnológica del Modelo de Proximidad: El uso de herramientas digitales para agilizar la respuesta y canalización comunitaria.',
                    'Reducción del Armamentismo y Cooperación para la Paz: Enfoques internacionales orientados al desarme y la construcción de entornos de paz.',
                ],

                'personas_destacadas' => [
                    [
                        'nombre' => 'Adolfo Cerqueda Rebollo',
                        'cargo' => 'Presidente Municipal de Nezahualcóyotl.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/5/destacada1.jpg',
                    ],
                    [
                        'nombre' => 'Lilian Bobea',
                        'cargo' => 'Directora Académica de la Plataforma Centroamérica-Caribe para la Seguridad Ciudadana y Cooperación para la Paz.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/5/destacada2.jpg',
                    ],
                    [
                        'nombre' => 'Vicente Ramírez García',
                        'cargo' => 'Director General de Seguridad Ciudadana (Comisario General) de Nezahualcóyotl.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/5/destacada3.jpg',
                    ],
                ],

                'actividades' => [
                    [
                        'titulo' => 'Paneles de Discusión en Modalidad Híbrida.',
                        'descripcion' => 'Conferencias donde expositores interactuaron simultáneamente con asistentes en el auditorio y miles de usuarios vía remota.',
                    ],
                    [
                        'titulo' => 'Ponencias Magistrales Internacionales.',
                        'descripcion' => 'Espacios donde se compartieron análisis tácticos sobre políticas de paz, con especial énfasis en el enfoque del desarme y la disminución de los índices de violencia en América Latina.',
                    ],
                    [
                        'titulo' => 'Mesas de Retroalimentación y Aprendizaje Colectivo',
                        'descripcion' => 'Talleres técnicos orientados al estudio de cómo transferir de manera efectiva el esquema de proximidad social a diferentes realidades geográficas del país.',
                    ],
                ],

                'actividad_imagen' => 'assets/eventos/plantillas/informativa/img/5/hero4.jpg',

                'galeria' => [
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/5/galeria1.png',
                        'alt' => 'Stand de tiro',
                        'tipo' => 'grande',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/5/galeria2.png',
                        'alt' => 'Escenario del congreso',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/5/galeria3.png',
                        'alt' => 'Participantes con programa',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/5/hero1.jpg',
                        'alt' => 'Auditorio del congreso',
                        'tipo' => 'alta',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/5/hero2.jpg',
                        'alt' => 'Ponente en escenario',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/5/hero3.png',
                        'alt' => 'Entrega de reconocimientos',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/5/hero4.png',
                        'alt' => 'Inauguración',
                        'tipo' => 'normal',
                    ],
                ],

                'programa_imagen' => '',
                'ponentes_imagen' => '',

                'legado' => 'El quinto congreso dejó asentado que la proximidad social no es una fórmula estática, sino una estrategia viva que debe evolucionar año con año para no perder eficacia ante los cambios del entorno delictivo. Asimismo, legitimó que el conocimiento no fluye en un solo sentido: al integrar las voces ciudadanas mediante herramientas digitales, se consolidó un modelo de aprendizaje colaborativo que continúa transformando el diseño de las políticas públicas de seguridad en México.',

                'informacion_general' => [
                    [
                        'label' => 'Edición',
                        'value' => '5°',
                    ],
                    [
                        'label' => 'Fecha',
                        'value' => '3 y 4 de agosto de 2023',
                    ],
                    [
                        'label' => 'Sede',
                        'value' => 'Auditorio "Alfredo Harp Helú", Universidad La Salle Campus Nezahualcóyotl',
                    ],
                    [
                        'label' => 'Duración',
                        'value' => '2 días',
                    ],
                    [
                        'label' => 'Modalidad',
                        'value' => 'Híbrida (Presencial y Remota)',
                    ],
                    [
                        'label' => 'Tema central',
                        'value' => 'Evolución del Modelo de Proximidad Social ante los Retos de la Seguridad Ciudadana Moderna',
                    ],
                ],
            ],

            6 => [
                'titulo' => '6° Congreso Internacional de Seguridad y Proximidad Social',
                'fecha' => '1 y 2 de agosto de 2024',
                'lugar' => 'Nezahualcóyotl, Estado de México',
                'descripcion' => 'Texto de ejemplo para probar la plantilla informativa.',

                'hero_imagenes' => [
                    'assets/eventos/plantillas/informativa/img/6/hero1.jpg',
                    'assets/eventos/plantillas/informativa/img/6/hero2.jpg',
                    'assets/eventos/plantillas/informativa/img/6/hero3.jpg',
                    'assets/eventos/plantillas/informativa/img/6/hero4.jpg',
                ],

                'logo_congreso' => 'assets/eventos/plantillas/informativa/img/6/hero5.png',
                'intro' => 'El Sexto Congreso Internacional de Seguridad y Proximidad Social se consolidó como una de las ediciones más ambiciosas de este proyecto institucional. En un contexto global donde el uso de herramientas tecnológicas avanza rápidamente, este encuentro sirvió para debatir cómo la innovación digital y la inteligencia artificial pueden potenciar las labores policiales locales, sin perder el rostro humano ni la cercanía comunitaria que caracterizan al municipio.',

                'video_principal' => 'https://www.youtube.com/embed/oWts1vj6Q3M',

                'video_titulo' => '6° Congreso Internacional de Seguridad y Proximidad Social.',

                'videos_secundarios' => [
                    [
                        'titulo' => '6° Congreso Internacional de Seguridad y Proximidad Social.',
                        'url' => 'https://www.youtube.com/embed/PMsHn6_B-N4',
                    ],
                    [
                        'titulo' => '6° Congreso Internacional de Seguridad y Proximidad Social. 30 de Agosto',
                        'url' => 'https://www.youtube.com/embed/G5pgmBpk-es?t=2s',
                    ],
                ],

                'objetivo' => 'Establecer una plataforma global para el análisis y adopción de tecnologías de vanguardia aplicadas a la seguridad pública. El congreso buscó que las corporaciones municipales y estatales compartieran metodologías y herramientas innovadoras que optimicen los tiempos de respuesta y la prevención del delito, fortaleciendo el esquema de proximidad social frente a las nuevas realidades digitales y vecinales.',

                'tematica_intro' => 'Bajo el firme propósito de modernizar las estrategias de paz, los análisis de esta sexta edición se centraron en los siguientes pilares temáticos:',

                'tematicas' => [

                    'Inteligencia Artificial y Big Data aplicados a la Seguridad: El uso ético de datos para predecir, mapear y mitigar zonas de riesgo.',
                    'Tecnología y Proximidad Social: Plataformas digitales y aplicaciones móviles diseñadas para agilizar la comunicación directa entre los ciudadanos y la policía de cuadrante.',
                    'Ciberseguridad y Prevención del Delito Digital: Estrategias locales para concientizar y proteger a la población ante fraudes y conductas antisociales en la red.',
                    'Profesionalización con Enfoque de Género y Derechos Humanos: La actualización de los protocolos de actuación policial para garantizar entornos de paz con perspectiva de género.',
                ],

                'personas_destacadas' => [
                    [
                        'nombre' => 'Adolfo Cerqueda Rebollo',
                        'cargo' => 'Presidente Municipal de Nezahualcóyotl.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/6/destacada1.jpg',
                    ],
                    [
                        'nombre' => 'Vicente Ramírez García',
                        'cargo' => 'Director General de Seguridad Ciudadana (Comisario General) de Nezahualcóyotl.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/6/destacada3.jpg',
                    ],
                ],

                'actividades' => [
                    [
                        'titulo' => 'Paneles de Innovación Tecnológica.',
                        'descripcion' => 'Conferencias dinámicas enfocadas en la presentación de software y herramientas de geolocalización utilizadas con éxito en el patrullaje vecinal de proximidad.',
                    ],
                    [
                        'titulo' => 'Foros de Coordinación Metropolitana.',
                        'descripcion' => 'Mesas de trabajo interinstitucionales orientadas a estrechar los lazos operativos y tecnológicos entre los municipios colindantes y las fuerzas estatales.',
                    ],
                    [
                        'titulo' => 'Talleres de Ciberprevención',
                        'descripcion' => 'Espacios técnicos y académicos dedicados al diseño de programas preventivos que las corporaciones de proximidad pueden replicar directamente con los comités vecinales.',
                    ],
                ],

                'actividad_imagen' => 'assets/eventos/plantillas/informativa/img/6/hero4.jpg',

                'galeria' => [
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/6/galeria1.jpg',
                        'alt' => 'Stand de tiro',
                        'tipo' => 'grande',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/6/galeria2.jpg',
                        'alt' => 'Escenario del congreso',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/6/galeria3.jpg',
                        'alt' => 'Participantes con programa',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/6/hero1.jpg',
                        'alt' => 'Auditorio del congreso',
                        'tipo' => 'alta',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/6/hero2.jpg',
                        'alt' => 'Ponente en escenario',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/6/hero3.jpg',
                        'alt' => 'Entrega de reconocimientos',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/6/hero4.jpg',
                        'alt' => 'Inauguración',
                        'tipo' => 'normal',
                    ],
                ],

                'programa_imagen' => '',
                'ponentes_imagen' => '',

                'legado' => 'La sexta edición dejó en claro que la tecnología y la digitalización no deben deshumanizar la labor policial, sino todo lo contrario: deben convertirse en el puente que agilice y asegure la confianza comunitaria. Al integrar herramientas inteligentes al modelo de proximidad, este congreso fijó la pauta para que las corporaciones locales de todo el país den el salto hacia una seguridad moderna, eficiente, predictiva y profundamente cercana a las familias.',

                'informacion_general' => [
                    [
                        'label' => 'Edición',
                        'value' => '6°',
                    ],
                    [
                        'label' => 'Fecha',
                        'value' => '1 y 2 de agosto de 2024',
                    ],
                    [
                        'label' => 'Sede',
                        'value' => 'Auditorio "Alfredo Harp Helú", Universidad La Salle Campus Nezahualcóyotl',
                    ],
                    [
                        'label' => 'Duración',
                        'value' => '2 días',
                    ],
                    [
                        'label' => 'Modalidad',
                        'value' => 'Híbrida',
                    ],
                    [
                        'label' => 'Tema central',
                        'value' => 'Innovación Tecnológica e Inteligencia Aplicada a la Seguridad y Proximidad Social',
                    ],
                ],
            ],

            7 => [
                'titulo' => '7° Congreso Internacional de Seguridad y Proximidad Social',
                'fecha' => '5 y 6 de agosto de 2025',
                'lugar' => 'Nezahualcóyotl, Estado de México',
                'descripcion' => 'Texto de ejemplo para probar la plantilla informativa.',

                'hero_imagenes' => [
                    'assets/eventos/plantillas/informativa/img/7/hero1.jpg',
                    'assets/eventos/plantillas/informativa/img/7/hero2.jpg',
                    'assets/eventos/plantillas/informativa/img/7/hero3.jpg',
                    'assets/eventos/plantillas/informativa/img/7/hero4.jpg',
                ],

                'logo_congreso' => 'assets/eventos/plantillas/informativa/img/7/hero5.png',
                'intro' => 'El Séptimo Congreso Internacional de Seguridad y Proximidad Social se consolidó como un espacio cumbre para el análisis de las políticas públicas de paz en un año de profundas transiciones institucionales. Este encuentro destacó por convocar a un frente común de municipios y estados con el objetivo de replantear los modelos de justicia cívica y proximidad, preparándolos para responder de manera ágil a las nuevas demandas del entorno nacional.',

                'video_principal' => 'https://www.youtube.com/embed/zWzrdmFpmVQ',

                'video_titulo' => '7° Congreso Internacional de Seguridad y Proximidad Social.',

                'videos_secundarios' => [
                    [
                        'titulo' => '7° Congreso Internacional de Seguridad y Proximidad Social. 7° Congreso Internacional de Seguridad y Proximidad Social. 29 de Agosto',
                        'url' => 'https://www.youtube.com/embed/7OL-1b166d4',
                    ],
                ],

                'objetivo' => 'Generar un laboratorio de soluciones y estrategias integrales enfocado en la dignificación policial y la reestructuración del tejido social. El propósito central fue compartir metodologías que articulen la prevención del delito, la mediación comunitaria y las alternativas de sanción basadas en la justicia restaurativa, proyectando el caso de éxito de Nezahualcóyotl hacia esquemas de replicabilidad en todo el país.',

                'tematica_intro' => 'Con un enfoque centrado en la cohesión comunitaria y la paz sostenible, los debates de esta séptima edición se articularon en los siguientes ejes:',

                'tematicas' => [

                    'Modelos de Justicia Cívica y Proximidad: La evolución de las sanciones tradicionales hacia mecanismos de mediación y reparación del daño.',
                    'Dignificación y Desarrollo Policial: Estrategias laborales, de salud mental y profesionalización para los agentes locales.',
                    'Prevención Social de la Violencia y la Delincuencia: Metodologías comunitarias orientadas a identificar y atender las causas raíz de las conductas antisociales.',
                    'Coordinación Metropolitana frente a Nuevos Retos: Esfuerzos compartidos para blindar zonas limítrofes mediante la homologación de criterios operativos de proximidad.',
                ],

                'personas_destacadas' => [
                    [
                        'nombre' => 'Adolfo Cerqueda Rebollo',
                        'cargo' => 'Presidente Municipal de Nezahualcóyotl.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/7/destacada1.jpg',
                    ],
                    [
                        'nombre' => 'Vicente Ramírez García',
                        'cargo' => 'Director General de Seguridad Ciudadana (Comisario General) de Nezahualcóyotl.',
                        'imagen' => 'assets/eventos/plantillas/informativa/img/7/destacada3.jpg',
                    ],
                ],

                'actividades' => [
                    [
                        'titulo' => 'Mesas de Trabajo de Justicia Cívica.',
                        'descripcion' => 'Espacios de análisis técnico donde se expusieron las mejores prácticas para transitar de los juzgados calificadores tradicionales a centros de mediación comunitaria.',
                    ],
                    [
                        'titulo' => 'Paneles de Coordinación Regional.',
                        'descripcion' => 'Foros de debate orientados a estrechar las estrategias de inteligencia social e intercambio de información entre demarcaciones del Valle de México.',
                    ],
                    [
                        'titulo' => 'Talleres de Dignificación Policial',
                        'descripcion' => 'Paneles enfocados en el diseño de políticas públicas que protejan el bienestar físico y emocional de los cuerpos policiacos de proximidad.',
                    ],
                ],

                'actividad_imagen' => 'assets/eventos/plantillas/informativa/img/6/hero4.jpg',

                'galeria' => [
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/7/galeria1.jpg',
                        'alt' => 'Stand de tiro',
                        'tipo' => 'grande',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/7/galeria2.jpg',
                        'alt' => 'Escenario del congreso',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/7/galeria3.jpg',
                        'alt' => 'Participantes con programa',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/7/hero1.jpg',
                        'alt' => 'Auditorio del congreso',
                        'tipo' => 'alta',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/7/hero2.jpg',
                        'alt' => 'Ponente en escenario',
                        'tipo' => 'normal',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/7/hero3.jpg',
                        'alt' => 'Entrega de reconocimientos',
                        'tipo' => 'ancha',
                    ],
                    [
                        'src' => 'assets/eventos/plantillas/informativa/img/7/hero4.jpg',
                        'alt' => 'Inauguración',
                        'tipo' => 'normal',
                    ],
                ],

                'programa_imagen' => 'assets/eventos/plantillas/informativa/img/7/programa2.png',
                'ponentes_imagen' => 'assets/eventos/plantillas/informativa/img/7/programa1.png',

                'legado' => 'La séptima edición reafirmó que el futuro de la seguridad pública en México no descansa en esquemas puramente punitivos, sino en la solidez de la justicia cívica y la mediación. Este congreso consolidó el precedente de que la policía de proximidad debe actuar como un facilitador de la paz comunitaria, dejando un marco metodológico listo para que los gobiernos locales asuman un rol preventivo, humano y profundamente transformador.',

                'informacion_general' => [
                    [
                        'label' => 'Edición',
                        'value' => '7°',
                    ],
                    [
                        'label' => 'Fecha',
                        'value' => '5 y 6 de agosto de 2025',
                    ],
                    [
                        'label' => 'Sede',
                        'value' => 'Auditorio "Alfredo Harp Helú", Universidad La Salle Campus Nezahualcóyotl',
                    ],
                    [
                        'label' => 'Duración',
                        'value' => '2 días',
                    ],
                    [
                        'label' => 'Modalidad',
                        'value' => 'Híbrida',
                    ],
                    [
                        'label' => 'Tema central',
                        'value' => 'Justicia Cívica, Dignificación Policial y Coordinación Metropolitana para la Paz Social',
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
