<?php

namespace App\Modules\Eventos\Congresos\OctavoCongreso\Semblanzas\Controllers;

use App\Controllers\BaseController;

class SemblanzasController extends BaseController
{
    public function plantilla()
    {
        $data = [
            'titulo' => 'Semblanzas',

            'ponentes' => [
                [
                    'id'          => 1,
                    'nombre'      => 'Lic. Adolfo Cerqueda Rebollo',
                    'cargo'       => 'Presidente Municipal Constitucional de Nezahualcóyotl ',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P1.png'
                    ),


                    'semblanza' => 'El Licenciado Adolfo Cerqueda Rebollo, licenciado en Ciencias Políticas y Administración Pública por la Universidad Autónoma del Estado de México, cuenta con una sólida trayectoria en el servicio público, especialmente en el municipio de Nezahualcóyotl.

                    Su experiencia incluye diversos cargos estratégicos, destacando su labor como Asistente Directivo en Servicios Públicos (2003–2006) y Coordinador en la Cámara de Diputados (2007–2009). Posteriormente, se desempeñó como Síndico Municipal (2016–2018), vigilando la hacienda y el marco jurídico local, y como Director del Instituto Municipal de Cultura Física y Deporte (2019–2021), donde impulsó la activación comunitaria.

                    Desde 2022, ocupa el cargo de Presidente Municipal Constitucional de Nezahualcóyotl, liderando la administración pública con un enfoque en el desarrollo urbano, la seguridad, el bienestar social y el fortalecimiento institucional. A lo largo de su carrera, su labor se ha caracterizado por una constante cercanía con la ciudadanía, la gestión social y el trabajo comunitario, consolidándose como una figura clave en la administración local mexiquense.',
                ], 

                [
                    'id'          => 2,
                    'nombre'      => 'Dra. Michelle Guerra Sastre',
                    'cargo'       => 'Directora Ejecutiva de la Unidad Especializada de Género de la Secretaria de Seguridad Ciudadana de la Ciudad México',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '....',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P2.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '48%',
                            'alto'   => '100%',
                            'escala' => 1.0,
                            'x'      => '-50px',
                            'y'      => '0px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '560px',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '-45px',
                            'y'      => '0px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],
                    
                    'semblanza' => 'La Doctora Michelle Guerra Sastre es Directora Ejecutiva de la Unidad Especializada de Género de la Secretaría de Seguridad Ciudadana de la Ciudad de México. Es Doctora y Licenciada en Derecho por la Universidad Nacional Autónoma de México (UNAM), además de Maestra en Derechos Humanos y Democracia por FLACSO México.

                    Su trayectoria se enfoca en la seguridad ciudadana, los derechos humanos y la igualdad sustantiva. Desde su cargo actual, encabeza la transversalización de la perspectiva de género dentro de la institución policial, impulsando la profesionalización operativa, protocolos de atención integral y mecanismos especializados para la prevención y atención de la violencia contra las mujeres.

                    Paralelamente, cuenta con una sólida labor como investigadora, docente y autora, contribuyendo al fortalecimiento del marco jurídico y al diseño de políticas públicas orientadas a garantizar una actuación policial con estricto apego a los derechos humanos.',
                ], 

                [
                    'id'          => 3,
                    'nombre'      => 'Mtra. Marcela Figueroa Franco',
                    'cargo'       => 'Secretaria Ejecutiva del Sistema Nacional de Seguridad Pública',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P3.png'
                    ),

                        'ajuste_visor' => [
                            'ancho'  => '48%',
                            'alto'   => '100%',
                            'escala' => 1.15,
                            'x'      => '-50px',
                            'y'      => '-40px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '560px',
                            'alto'   => '100%',
                            'escala' => 1.1,
                            'x'      => '-45px',
                            'y'      => '50px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],
                    
                    'semblanza' => 'La Maestra Marcela Figueroa Franco es una destacada especialista en seguridad pública y políticas públicas, con una sólida formación académica que incluye la licenciatura por la UNAM y estudios de posgrado en la Universidad Central Europea y en la Universidad de California, San Diego.

                    Su experiencia en el servicio público incluye su paso por la Secretaría de Seguridad Ciudadana de la Ciudad de México, donde se desempeñó como Directora General de Carrera Policial y Subsecretaria de Desarrollo Institucional, liderando la profesionalización de miles de elementos policiales.

                    Desde octubre de 2024, ocupa el cargo de Secretaria Ejecutiva del Sistema Nacional de Seguridad Pública (SESNSP). En esta responsabilidad, impulsa la coordinación entre órdenes de gobierno, la evaluación institucional, la mejora de los sistemas de información y la creación de la nueva Academia Nacional de Seguridad Pública para formar a mandos y especialistas. Su trayectoria refleja un firme compromiso con la construcción de modelos de seguridad basados en evidencia y el fortalecimiento de las corporaciones policiales del país.',
                ], 

                [
                    'id'          => 4,
                    'nombre'      => 'Lic. Vicente Ramírez García',
                    'cargo'       => 'Comisario General de Seguridad Ciudadana de Nezahualcóyotl',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P4.png'
                    ),

                        'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '-30px',
                            'y'      => '200px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.90,
                            'x'      => '-45px',
                            'y'      => '-40px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Licenciado Vicente Ramírez García es un servidor público especializado en seguridad ciudadana, prevención del delito y proximidad social. Originario de Nezahualcóyotl y licenciado en Ciencias Políticas, ha dedicado su carrera al fortalecimiento de la seguridad local, destacando previamente como Director Operativo de la Policía Municipal, cargo que le permitió consolidar el modelo de vigilancia y atención de emergencias del municipio.

                    Actualmente se desempeña como Comisario General de Seguridad Ciudadana de Nezahualcóyotl, liderando una de las corporaciones más reconocidas del país por reducir la delincuencia. Su gestión se distingue por impulsar la coordinación interinstitucional con órdenes de gobierno federales, estatales y de la Ciudad de México, así como por integrar herramientas tecnológicas y sistemas de monitoreo para una mejor toma de decisiones.

                    Asimismo, uno de sus pilares fundamentales ha sido consolidar el modelo de proximidad social, fomentando la comunicación constante entre los policías y los vecinos, la atención directa a las necesidades comunitarias y la construcción de confianza mutua para mejorar la seguridad en el municipio.',
                ], 

                [
                    'id'          => 5,
                    'nombre'      => 'Lic. Patricia Chávez Obregón',
                    'cargo'       => 'Directora General de Investigación Cibernética en la Secretaria de Seguridad y Protección Ciudadana',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P5.png'
                    ),

                        'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.80,
                            'x'      => '50px',
                            'y'      => '200px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 2.10,
                            'x'      => '10px',
                            'y'      => '-250px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'La Licenciada Patricia Chávez Obregón es una destacada especialista en inteligencia policial, investigación cibernética y seguridad digital, con una sólida trayectoria enfocada en el desarrollo de estrategias para prevenir, detectar y combatir delitos cometidos a través de tecnologías de la información.

                    Actualmente se desempeña como Directora General de Investigación Cibernética de la Secretaría de Seguridad y Protección Ciudadana, desde donde encabeza iniciativas de investigación e inteligencia tecnológica para proteger a la ciudadanía en el entorno digital. Su labor destaca por impulsar el fortalecimiento institucional, el uso de herramientas especializadas de análisis de datos y la colaboración interinstitucional y hemisférica para hacer frente a los retos de la ciberseguridad contemporánea.',
                ], 

                [
                    'id'          => 6,
                    'nombre'      => 'Mtro. Cristóbal Castaeda Camarillo',
                    'cargo'       => 'Secretario de Seguridad del Estado de México',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P6.png'
                    ),

                        'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.20,
                            'x'      => '50px',
                            'y'      => '200px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '10px',
                            'y'      => '10px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Maestro Cristóbal Castañeda Camarillo es el Secretario de Seguridad del Estado de México. Es Licenciado en Administración Militar, cuenta con maestrías en Administración Naval y de Negocios, y estudios de doctorado en Seguridad Pública y Ciencias Políticas.

                    Su sólida trayectoria en el servicio público incluye una destacada labor en las Fuerzas Armadas y su gestión como Secretario de Seguridad Pública de Sinaloa entre 2018 y 2023. Desde junio de 2024 encabeza la estrategia de seguridad en el Estado de México, impulsando la coordinación interinstitucional, la profesionalización policial y un modelo de proximidad sustentado en la inteligencia y la prevención del delito.',
                ], 

                [
                    'id'          => 7,
                    'nombre'      => 'Mtro. José Luis Rodríguez Díaz de León ',
                    'cargo'       => 'Subsecretario de Política Criminal, Vinculación y 
                                    Protección Civil de la Secretaría de Seguridad y Protección 
                                    Ciudadana
                                    ',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P7.png'
                    ),

                        'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.20,
                            'x'      => '50px',
                            'y'      => '200px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '10px',
                            'y'      => '10px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Maestro José Luis Rodríguez Díaz de León cuenta con una sólida formación en Derecho por la UNAM, con maestría en Derecho Constitucional y especialidad en género y derechos humanos. Su trayectoria combina la experiencia académica con una amplia experiencia institucional en los ámbitos legislativo, laboral y de justicia.

                    A lo largo de su carrera, ha ocupado importantes responsabilidades en el Congreso de la Ciudad de México y en el gobierno capitalino, destacando su labor como secretario del Trabajo y Fomento al Empleo, donde impulsó la justicia laboral y la atención a causas sociales con un enfoque de derechos humanos.

                    Desde agosto de 2025, se desempeña como Subsecretario de Política Criminal, Vinculación y Protección Civil en la Secretaría de Seguridad y Protección Ciudadana (SSPC). En este cargo, aporta su visión técnica y política para fortalecer la prevención del delito, la protección civil, la seguridad ciudadana y la coordinación entre distintas instituciones dentro de la estrategia nacional de seguridad.',
                ], 

                /* [
                    'id'          => 8,
                    'nombre'      => 'Comisaria Yolanda Rodríguez Gómez',
                    'cargo'       => 'Consejera de Interior de la Embajada de España en México
                                    ',
                    'pais'        => 'España',
                    'pais_codigo' => 'ES',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P8.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.35,
                            'x'      => '-25px',
                            'y'      => '200px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '-25px',
                            'y'      => '-30px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'La Comisaria Principal Yolanda Rodríguez Gómez es una destacada funcionaria de la Policía Nacional de España, con una amplia trayectoria en áreas operativas, de investigación y de cooperación internacional. A lo largo de su carrera, ha coordinado estrategias para la prevención del delito, la investigación criminal y el fortalecimiento de las relaciones con cuerpos de seguridad de otros países.

                    Actualmente se desempeña como Consejera de Interior de la Embajada de España en México. Desde este puesto diplomático, actúa como enlace institucional clave entre ambas naciones, impulsando la cooperación bilateral en temas prioritarios como el combate a la delincuencia organizada, la ciberdelincuencia, el intercambio de información estratégica y la asistencia técnica.

                    Su labor se distingue por promover una gestión policial estratégica y estrechar los lazos de colaboración entre Europa y América Latina, contribuyendo de manera significativa a la creación de mecanismos más eficaces para la seguridad global.',
                ],  */

                [
                    'id'          => 9,
                    'nombre'      => 'Comisario Mtro.Federico Ernesto Robles Cázares',
                    'cargo'       => 'Titular del Centro de Atención a Denuncias por el 
                                Delito de Extorsión de la SecretarÍa de Seguridad 
                                y Protección Ciudadana
                                    ',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P9.png'
                    ),

                    'semblanza' => 'El Comisario Federico Ernesto Robles Cázares cuenta con más de treinta años de experiencia en seguridad pública y atención ciudadana. Es licenciado en Comunicación Digital, con una maestría en Dirección de Arte Digital y formación especializada en alta dirección, mando policial y administración pública.

                    A lo largo de su carrera, ha dirigido proyectos estratégicos en instituciones como la Policía Federal, la Guardia Nacional y las Secretarías de Seguridad Pública y de Salud de la Ciudad de México. Entre sus cargos más relevantes, destaca su labor como Titular del Centro Nacional de Atención Ciudadana tanto en la Policía Federal como en la Guardia Nacional, donde impulsó la mejora en la respuesta institucional ante las demandas de la sociedad.

                    Actualmente, se desempeña como responsable del Centro de Atención a Denuncias por el Delito de Extorsión (CADDE) de la Secretaría de Seguridad y Protección Ciudadana. Desde este espacio, encabeza un modelo nacional enfocado en brindar acompañamiento especializado y cercano a las víctimas, facilitando la denuncia y fortaleciendo la capacidad de respuesta del Estado frente a este delito.',
                ], 

                [
                    'id'          => 10,
                    'nombre'      => 'Alejandro Londoño Hurtado ',
                    'cargo'       => 'Asesor de Despacho de la SecretarÍa de Seguridad 
                            y Convivencia  de la Alcaldía de Medellín, Colombia

                                    ',
                    'pais'        => 'Colombia',
                    'pais_codigo' => 'CO',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P10.png'
                    ),

                    'semblanza' => 'Alejandro Londoño Hurtado es un profesional colombiano especializado en seguridad ciudadana, políticas públicas y gobernanza local, con una sólida formación en ciencia política y administración pública. Su carrera se ha centrado en el diseño y asesoría de estrategias orientadas a reducir la violencia y mejorar la convivencia en entornos urbanos complejos.

                    Antes de unirse al servicio público distrital, participó en diversas iniciativas de análisis de políticas públicas y gestión territorial enfocadas en problemáticas de seguridad. Posteriormente, colaboró en la asesoría técnica de proyectos enfocados en la prevención de la violencia y la vinculación entre las instituciones de seguridad y las comunidades.

                    Actualmente, se desempeña como Asesor de Despacho de la Secretaría de Seguridad y Convivencia de la Alcaldía de Medellín. Desde este cargo, participa activamente en la planeación estratégica, el seguimiento de programas institucionales y la articulación entre autoridades locales, organismos de seguridad y actores sociales. Su labor busca consolidar una gobernanza eficaz de la seguridad y fortalecer el bienestar en la ciudad.',
                ], 

                [
                    'id'          => 11,
                    'nombre'      => 'Mtra. Dilcya Samantha García Espinoza de los Monteros',
                    'cargo'       => 'Fiscal Central para la Atención de Delitos Vinculados a la Violencia de Género en la Fiscalía General de Justicia del Estado de México',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P11.png'
                    ),

                    'semblanza' => 'La Maestra Dilcya Samantha García Espinoza de los Monteros es una reconocida especialista en derechos humanos, igualdad de género y procuración de justicia, con más de veinte años de trayectoria en los sectores federal y estatal. Es licenciada en Derecho y maestra en Derechos Humanos y Democracia.

                    A lo largo de su carrera, ha dirigido áreas clave enfocadas en la protección de las mujeres, la atención a víctimas y la prevención de la violencia de género, colaborando también con organismos nacionales e internacionales. Su labor se distingue por impulsar la perspectiva de género y la debida diligencia en las investigaciones.

                    Actualmente se desempeña como Fiscal Central para la Atención de Delitos Vinculados a la Violencia de Género en la Fiscalía General de Justicia del Estado de México. Desde este cargo, coordina la investigación y persecución de delitos contra mujeres, niñas y adolescentes, promoviendo una atención integral, sensible y especializada. Asimismo, comparte su experiencia como ponente en foros nacionales e internacionales para mejorar las políticas públicas en la materia.',
                ], 

                [
                    'id'          => 12,
                    'nombre'      => 'Dr. Franz Vandershueren',
                    'cargo'       => 'Director del Centro de Seguridad Urbana Director 
                                del Magister en Seguridad Urbana, Prevención y Política 
                                Criminal de la Facultad de Derecho',
                    'pais'        => 'Chile',
                    'pais_codigo' => 'CL',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P12.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.25,
                            'x'      => '-15px',
                            'y'      => '200px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '-25px',
                            'y'      => '-30px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Doctor Franz Vanderschueren es un reconocido experto internacional en seguridad ciudadana, prevención de la violencia y gobernanza urbana, con más de cincuenta años de trayectoria. Es Doctor en Sociología por la Universidad de París–La Sorbona y ha desarrollado una importante labor en universidades y organismos globales.

                    Destaca su labor entre 1995 y 2001 como coordinador del Programa Ciudades Más Seguras de ONU-Hábitat, donde impulsó metodologías que hoy son referentes mundiales para gobiernos locales. Además, ha sido consultor del PNUD y del Banco Interamericano de Desarrollo en América Latina, África y Asia.

                    Desde 2003, está vinculado a la Universidad Alberto Hurtado en Chile, donde fundó y dirige el Centro de Seguridad Urbana y encabeza el magíster especializado en la materia, formando a servidores públicos de la región. A lo largo de su carrera, ha asesorado a diversos gobiernos en políticas de prevención social y es autor de numerosas publicaciones clave sobre la seguridad en las ciudades.',
                ], 

                [
                    'id'          => 13,
                    'nombre'      => 'Lic. Oscar Balderas',
                    'cargo'       => 'Periodista Especializado en Crimen Organizado y Seguridad Pública',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P13.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.25,
                            'x'      => '-15px',
                            'y'      => '150px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '-25px',
                            'y'      => '-50px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'Oscar Balderas es un reconocido periodista mexicano especializado en seguridad, crimen organizado, corrupción y derechos humanos. Es licenciado en Ciencias de la Comunicación por la UNAM y cuenta con estudios de especialización en periodismo de investigación y cobertura de conflictos.

                    A lo largo de su carrera, se ha consolidado como una de las voces analíticas más importantes sobre la violencia y la impunidad en México, destacando por su rigor documental en temas como el narcotráfico, la desaparición de personas y el tráfico de armas.

                    Ha colaborado con destacados medios nacionales como MVS Noticias, Milenio Televisión, Imagen Televisión, La Silla Rota y Animal Político. Actualmente conduce el pódcast Código de Investigación, donde analiza los principales retos de justicia y seguridad en el país.

                    Su trayectoria ha sido galardonada por diversos organismos nacionales e internacionales. Además de su labor en medios, se desempeña como conferencista, analista y docente, impulsando el periodismo de investigación como una herramienta fundamental para la transparencia, la rendición de cuentas y el combate a la corrupción.',
                ], 

                [
                    'id'          => 14,
                    'nombre'      => 'Héctor de Mauleon',
                    'cargo'       => 'Escritor y Periodista',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P14.png'
                    ),

                    'semblanza' => 'Héctor de Mauleón es un destacado periodista, cronista y escritor mexicano nacido en 1963, con más de treinta años de trayectoria dedicados al periodismo de investigación, la crónica histórica y el análisis de la seguridad pública y los fenómenos sociales en México.

                    A lo largo de su carrera, ha ocupado importantes cargos editoriales y directivos en medios de gran relevancia nacional. Fue colaborador de la revista Cambio, dirigida por Gabriel García Márquez, director de los suplementos culturales *Posdata* y *Confabulario*, y subdirector de la revista *Nexos*. Actualmente es columnista del periódico *El Universal* y conductor del programa televisivo *El Foco*. Su obra literaria incluye novelas, cuentos y crónicas que exploran la historia de la Ciudad de México y la evolución de la violencia, destacando libros como *Marca de sangre* y la colección *La ciudad oculta*.

                    Su rigurosa labor en la investigación periodística y la reconstrucción histórica le ha valido múltiples galardones, como el Premio de Periodismo Ciudad de México, la Medalla al Mérito en Artes y el Premio José Pagés Llergo, consolidándolo como una voz indispensable para comprender la memoria, la seguridad y la transformación social del país.',
                ], 

                [
                    'id'          => 15,
                    'nombre'      => 'Dra. Lucia Carmina Jasso López',
                    'cargo'       => 'Investigadora del Instituto de Investigaciones Sociales de la UNAM',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P15.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.15,
                            'x'      => '30px',
                            'y'      => '150px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.0,
                            'x'      => '-25px',
                            'y'      => '0px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'La Dra. Lucía Carmina Jasso López es una destacada investigadora y académica especializada en criminología, seguridad ciudadana y políticas públicas. Es Doctora en Ciencias Social con orientación en Sociología y actualmente se desempeña como Investigadora de Tiempo Completo en el Instituto de Investigaciones Sociales de la Universidad Nacional Autónoma de México (UNAM).

                    Su trabajo se centra en el estudio científico de los fenómenos delictivos, la victimización, la violencia urbana y la percepción social de la inseguridad. A través de metodologías tanto cuantitativas como cualitativas, analiza la confianza institucional y el impacto de la delincuencia en la vida cotidiana, aportando bases sólidas para el diseño y la evaluación de políticas públicas en la materia.

                    A lo largo de su carrera, ha participado en diversos proyectos de investigación a nivel nacional e internacional, y es autora de numerosas publicaciones científicas, artículos y capítulos de libros enfocados en la prevención de la violencia, la cohesión social y la construcción de ciudadanía. Su trayectoria combina el rigor académico con el compromiso de generar conocimiento útil para mejorar la seguridad y la justicia en la sociedad.',
                ], 

                [
 'id'          => 16,
                    'nombre'      => 'Mtra. Gloria Valeska Mancilla Ibacache',
                    'cargo'       => 'Profesora e Investigadora del Centro de Estudios de Derecho Penal de la Universidad de Talca, Chile',
                    'pais'        => 'Chile',
                    'pais_codigo' => 'CL',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P16.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.15,
                            'x'      => '30px',
                            'y'      => '150px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                    'semblanza' => 'La Maestra Gloria Valeska Mancilla Ibacache, candidata a Doctora por la Universidad Alberto Hurtado en Chile y por la Universidad de Girona, España. Se desempeña como profesora e investigadora en el Centro de Estudios de Derecho Penal de la Universidad de Talca, donde también es coordinadora académica del Magíster en Derecho Penal. Su labor combina la docencia de posgrado con la investigación jurídica enfocada en la protección de las víctimas y las garantías procesales.

                    Su sólida trayectoria cuenta con proyección internacional. En junio de 2026, fue seleccionada por la Fundación Manuel Serra Domínguez, en España, para realizar una investigación sobre un estatuto procesal diferenciado para víctimas de violaciones a los derechos humanos en el sistema chileno. Asimismo, ese mismo mes participó como expositora en el Primer Seminario Internacional de Asesores del Concurso de Simulación Judicial ante la Corte Penal Internacional en La Haya.

                    A lo largo de su carrera, la Maestra Mancilla Ibacache ha destacado por vincular la investigación académica rigurosa con el compromiso social por la justicia, consolidándose como una referente en la defensa de los derechos humanos y el mejoramiento de los sistemas de procuración de justicia.',
                ],  

                [
                    'id'          => 17,
                    'nombre'      => 'Mtro. Severino Cartagena Hernández',
                    'cargo'       => 'Especialista en Inteligencia para la Seguridad Nacional, Académico y Asociado a la I.N.A.P.',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P17.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '100px',
                            'y'      => '180px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '10px',
                            'y'      => '-80px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Maestro Severino Cartagena Hernández es un especialista en Inteligencia para la Seguridad Nacional, además de académico y asociado al Instituto Nacional de Administración Pública (INAP). Su carrera se ha centrado en el análisis estratégico de riesgos, la planeación y la formación de servidores públicos especializados en el uso de información para la toma de decisiones en el sector público.

                    A través de su labor en el INAP, ha promovido la profesionalización gubernamental y una cultura de trabajo basada en evidencia y análisis estratégico. Asimismo, como ponente en el Congreso Internacional de Seguridad y Proximidad Social en Nezahualcóyotl, aporta una perspectiva clave sobre la importancia de la inteligencia para la prevención del delito, la gestión de riesgos y el fortalecimiento de las capacidades institucionales de seguridad.',
                ], 

                [
                    'id'          => 18,
                    'nombre'      => 'Mtro. Daniel Sánchez Velásquez',
                    'cargo'       => 'Coordinador de Proyectos del Programa de Naciones Unidas para el Desarrollo - PNUD',
                    'pais'        => 'Perú',
                    'pais_codigo' => 'PE',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P18.png'
                    ),

                    'semblanza' => 'El Maestro Daniel Sánchez Velásquez es un abogado peruano con una destacada trayectoria en políticas públicas, derechos humanos y gobernanza democrática. Es abogado por la Pontificia Universidad Católica del Perú y cuenta con una maestría y estudios de doctorado en Derecho Constitucional por la Universidad de Sevilla.

                    Su experiencia en el sector público peruano incluye cargos de alta responsabilidad, destacando su labor en 2018 como Viceministro de Derechos Humanos y Acceso a la Justicia, así como Director General de Ciudadanía Intercultural en el Ministerio de Cultura, donde impulsó la inclusión social y la protección de los derechos fundamentales.

                    Actualmente se desempeña como Coordinador de Proyectos en el Programa de las Naciones Unidas para el Desarrollo (PNUD Perú). Desde este organismo internacional, lidera iniciativas orientadas al fortalecimiento institucional, el diálogo político, la modernización del Estado y la cooperación internacional. Su carrera combina la práctica gubernamental, la academia y el trabajo multilateral, consolidándolo como un referente en la construcción de instituciones democráticas basadas en el respeto a los derechos humanos.',
                ], 

                [
                    'id'          => 19,
                    'nombre'      => 'Dr. Raúl Eduardo García Víquez ',
                    'cargo'       => 'Investigador y Profesor Especialista en Derecho Penal y Cibercrimen',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P19.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '100px',
                            'y'      => '125px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '10px',
                            'y'      => '-150px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Doctor Raúl Eduardo García Víquez es un distinguido profesor y escritor con una sólida trayectoria dedicada a la generación y difusión del conocimiento. Su labor se sustenta en el rigor académico, la ética y un profundo compromiso con la sociedad.

                    Como docente, fomenta el pensamiento crítico y la formación integral de los estudiantes, mientras que su faceta como escritor le permite aportar perspectivas analíticas para comprender los fenómenos contemporáneos. Su participación constante en congresos, seminarios y foros especializados lo consolida como un referente en la educación y la divulgación intelectual, contribuyendo de manera activa a la construcción de una comunidad más informada y participativa.',
                ], 

                [
                    'id'          => 20,
                    'nombre'      => 'Dr. Mario Pavel Díaz Román',
                    'cargo'       => 'Titular de la Dirección General de Gestión Estratégica del C5 de la CDMX',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P20.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.20,
                            'x'      => '30px',
                            'y'      => '20px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.20,
                            'x'      => '10px',
                            'y'      => '-80px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Doctor Mario Pavel Díaz Román es Doctor en Ciencias Sociales por El Colegio de México y especialista en el análisis de la violencia, la delincuencia y las políticas públicas de seguridad. Su trayectoria combina la investigación y la academia con la función pública, habiendo sido docente en la Facultad de Ciencias Políticas y Sociales de la UNAM y autor de diversas publicaciones científicas sobre la materia.

                    Desde al menos 2019, se desempeña como Director General de Gestión Estratégica en el C5 de la Ciudad de México. Desde este cargo, encabeza el análisis de información y la inteligencia institucional para optimizar la operación de los sistemas de videovigilancia, la atención de emergencias y la coordinación interinstitucional en favor de la protección ciudadana.',
                ], 

                [
                    'id'          => 21,
                    'nombre'      => 'Mtra. Mónica Godoy Ferro',
                    'cargo'       => 'Antropóloga e Investigadora Social Especialista en la Prevención y Atención de la Violencia Basada en Género.',
                    'pais'        => 'Colombia',
                    'pais_codigo' => 'CO',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P21.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.0,
                            'x'      => '30px',
                            'y'      => '20px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.0,
                            'x'      => '10px',
                            'y'      => '0px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'La Maestra Mónica Godoy Ferro es antropóloga, investigadora y docente, especializada en la prevención de la violencia de género, los derechos humanos y el acompañamiento a poblaciones vulnerables. Su trabajo combina la investigación participativa y etnográfica para impulsar la transformación social y la igualdad.

                    Cuenta con estudios de posgrado en género y una amplia trayectoria en proyectos sobre violencia sexual, migración, trata de personas y acceso a la justicia. Ha colaborado con diversas organizaciones sociales y educativas, enfocándose en erradicar la violencia en espacios comunitarios y académicos, así como en brindar atención integral a las víctimas.

                    Además, participa activamente como conferencista y analista en foros sobre feminismos y cultura de paz. Su enfoque promueve una visión integral de la seguridad humana y aporta herramientas fundamentales para diseñar políticas públicas y estrategias de proximidad social con perspectiva de género.',
                ], 

                [
                    'id'          => 22,
                    'nombre'      => 'Mtra. Norma Maray Hernández',
                    'cargo'       => 'Asesora de Alianzas Estratégicas en Seguridad en la Mucinipalidad de Peñalolén',
                    'pais'        => 'Chile',
                    'pais_codigo' => 'CL',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P22.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '30px',
                            'y'      => '250px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '10px',
                            'y'      => '-20px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'Norma Maray Hernández es una destacada especialista chilena en gestión pública local, seguridad ciudadana y análisis de información. Cuenta con formación en Planificación y Evaluación de Proyectos Sociales y en Alta Administración Municipal por la Universidad de Chile, complementada con una especialización en Seguridad Ciudadana por la Universidad Alberto Hurtado.

                    Con más de 25 años de trayectoria profesional, ha liderado el diseño, ejecución y evaluación de políticas públicas orientadas a la prevención de la violencia y el fortalecimiento de la cohesión social. Su experiencia incluye colaboraciones clave en la materia con los municipios de Recoleta y Peñalolén, así como con el Gobierno Regional Metropolitano de Chile.

                    Actualmente se desempeña como Coordinadora del Observatorio de Gestión Local y de Gestión y Análisis de Datos de la Municipalidad de Peñalolén. Dentro de esta misma administración, ha ocupado los cargos de Directora de Seguridad Ciudadana y Directora de Seguridad Humana, impulsando modelos innovadores basados en evidencia y análisis de datos para consolidar estrategias integrales de prevención del delito y fortalecer el desarrollo de comunidades más resilientes.',
                ], 

                [
                    'id'          => 23,
                    'nombre'      => 'Lic. Alejandro Alegre Rabiela',
                    'cargo'       => 'Ex Director del CISEN',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P23.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '30px',
                            'y'      => '280px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '10px',
                            'y'      => '-20px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Licenciado Alejandro Alegre Rabiela es un abogado por la Universidad Anáhuac con más de tres décadas de trayectoria en la administración pública, la seguridad nacional y la inteligencia civil en México. Su carrera comenzó en 1986 en la Dirección General de Investigación y Seguridad Nacional (DGISN), donde se desempeñó como analista, Jefe de Planeación Informativa y Subdirector de Investigación Foránea.

                    En la década de los noventa, ocupó importantes cargos directivos como Director de Información Táctica y Coordinador General en el Centro Nacional de Información sobre Drogas, para posteriormente fungir como Secretario General del CISEN entre 1994 y 1999. De 1999 a 2000, encabezó la máxima dirección del Centro de Investigación y Seguridad Nacional (CISEN), consolidando la producción de inteligencia estratégica para la toma de decisiones del Estado mexicano.

                    Desde 2001, forma parte del Banco de México, donde ha desempeñado cargos directivos clave relacionados con la seguridad institucional y la emisión de billetes, contribuyendo de manera decisiva a la protección de activos estratégicos y de la infraestructura crítica del banco central. Su perfil destaca por su sólida aportación a la capacidad institucional del país en materia de seguridad e inteligencia civil.',
                ], 

                [
                    'id'          => 24,
                    'nombre'      => 'Mtro. Alfredo Brandt A',
                    'cargo'       => 'Fundador de SupraRisk LLC y Analista de Inteligencia',
                    'pais'        => 'Reino Unido',
                    'pais_codigo' => 'GB',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P24.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '30px',
                            'y'      => '210px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '10px',
                            'y'      => '-50px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'Alfredo Brandt A. es un especialista en gestión integral de riesgos, resiliencia organizacional y continuidad de operaciones, enfocado en el desarrollo de metodologías y estrategias para la atención de crisis en los sectores público y privado. Actualmente se desempeña como Director de Ejercicios Estratégicos de Integración de Riesgo en TEKIUM.

                    A lo largo de su carrera, ha coordinado simulacros, evaluaciones de riesgos y procesos de preparación institucional para optimizar la capacidad de respuesta de las organizaciones ante escenarios complejos y eventos disruptivos. Sus áreas de especialización abarcan la planeación estratégica, la protección civil y el uso de ejercicios de simulación para fomentar una cultura de prevención y toma de decisiones anticipadas.

                    Como ponente en el Congreso Internacional de Seguridad y Proximidad Social en Nezahualcóyotl, aporta una perspectiva fundamental sobre cómo la gestión integral de riesgos fortalece la seguridad pública, la continuidad de servicios esenciales y la coordinación interinstitucional para proteger a las comunidades.',
                ], 

                [
                    'id'          => 25,
                    'nombre'      => 'Ing. Balam García Rivera',
                    'cargo'       => 'Titular y Comisario General de la Policía Cibernética del Estado de Aguascalientes',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P25.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '30px',
                            'y'      => '210px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '10px',
                            'y'      => '-50px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Maestro Balam García Rivera, nacido en Tantoyuca, Veracruz, es Ingeniero Electrónico por el Instituto Tecnológico Superior de Tantoyuca y Maestro en Nuevas Tecnologías Aplicadas a la Educación. Inició su carrera en 2009 en la extinta Policía Federal dentro de la División de Investigación, especializándose en inteligencia tecnológica y combate al secuestro. Su destacada labor en la cooperación internacional le valió en 2018 un reconocimiento por parte del Departamento de Justicia de los Estados Unidos y el U.S. Marshals Service.

                    Desde ese mismo año se desempeña como Director General de la Policía Cibernética del Estado de Aguascalientes, donde ha encabezado una transformación institucional para consolidar a la corporación como un referente nacional en materia de ciberseguridad, prevención del delito digital e innovación tecnológica aplicada a la procuración de justicia.',
                ], 

                [
                    'id'          => 26,
                    'nombre'      => 'Dra. Patricia Navarrete Soriano',
                    'cargo'       => 'Directora de la Policía Cibernética de la Fiscalía General de Michoacán',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P26.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '30px',
                            'y'      => '380px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '10px',
                            'y'      => '30px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'Originaria de la Ciudad de México, cuenta con una sólida formación interdisciplinaria como Licenciada en Informática y en Derecho, complementada con una Maestría en Seguridad de la Información por el Centro de Estudios Superiores Navales (CESNAV), un Doctorado en Políticas Públicas por la Universidad Michoacana de San Nicolás de Hidalgo y especializaciones en Derecho de la Ciberseguridad.

                    Con más de dos décadas de trayectoria en seguridad, inteligencia y tecnologías de la información, ha encabezado proyectos estratégicos de alto impacto institucional. Entre sus principales aportaciones históricas destaca la creación del Centro de Mando Inteligente (CMI-C4) de la extinta Procuraduría General de la República (PGR), así como el diseño e implementación de sistemas integrales de seguridad en sus 31 delegaciones estatales y en instalaciones estratégicas como SEIDO, CENAPI, la Policía Federal Ministerial y Servicios Periciales. Asimismo, participó en la planeación y puesta en operación del Centro de Investigación Estratégica de la Agencia de Inteligencia Criminal en Michoacán.

                    Actualmente se desempeña como Directora de la Policía Cibernética de la Fiscalía General del Estado de Michoacán, desde donde dirige estrategias de investigación y ciberinteligencia, impulsando modelos innovadores de prevención digital para la protección de la ciudadanía. Su perfil se consolida con múltiples certificaciones internacionales en informática forense, análisis de video, evidencia digital y metodologías como ITIL y COBIT, además de una destacada labor como ponente en foros nacionales e internacionales sobre seguridad digital.',
                ], 

                [
                    'id'          => 27,
                    'nombre'      => 'Mtro. Edoardo Papini',
                    'cargo'       => 'Founder & CEO de Amaiora México',
                    'pais'        => 'Italia',
                    'pais_codigo' => 'IT',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P27.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '30px',
                            'y'      => '300px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                    'semblanza' => 'El Maestro Edoardo Papini es un empresario y conferencista ítalo-mexicano con una maestría en Relaciones y Negocios Internacionales, especializado en innovación, inteligencia artificial y transformación organizacional. Con más de quince años de trayectoria, impulsa ecosistemas de colaboración entre los sectores público, privado y académico para fortalecer la competitividad en América Latina.

                    Actualmente es Founder y CEO de ADMAIORA México. Previamente, ocupó cargos directivos en organizaciones de gran relevancia como *Forbes México y Latinoamérica* —donde lideró iniciativas como Forbes Tech Future—, McGraw-Hill Education, México Business News y PQ Media Group.

                    Como conferencista internacional, ha participado en más de trescientos foros compartiendo su visión sobre liderazgo, transformación digital e inteligencia artificial. Como ponente en el Congreso Internacional de Seguridad y Proximidad Social en Nezahualcóyotl, aporta una perspectiva vanguardista sobre el papel de la tecnología y la innovación en el diseño de ciudades más seguras y resilientes.',
                ], 

                [
                    'id'          => 28,
                    'nombre'      => 'Lic. Guillermo Valdés Castellanos',
                    'cargo'       => 'Investigador del Centro de Estudios sobre Seguridad, Inteligencia y Gobernanza (ITAM)',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P28.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '30px',
                            'y'      => '280px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '10px',
                            'y'      => '-20px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Licenciado Guillermo Valdés Castellanos es un reconocido especialista mexicano en seguridad nacional, inteligencia, gobernanza y análisis político, con más de cuatro décadas de trayectoria en el servicio público y la academia. Es Licenciado en Sociología por la UNAM y cuenta con estudios de Maestría por El Colegio de México.

                    Entre 2007 y 2011, se desempeñó como Director General del Centro de Investigación y Seguridad Nacional (CISEN), encabezando los esfuerzos de inteligencia civil del Estado y el fortalecimiento de las capacidades estratégicas y de coordinación interinstitucional frente al crimen organizado.

                    Actualmente es investigador en el Centro de Estudios sobre Seguridad, Inteligencia y Gobernanza (CESIG) del ITAM. Desde este espacio académico, enfoca su trabajo en el análisis de los desafíos contemporáneos de la seguridad, la gobernanza democrática y la formulación de políticas públicas para mejorar la capacidad de prevención e inteligencia del Estado.',
                ], 

                [
                    'id'          => 29,
                    'nombre'      => 'Dr. Salvador Guerrero Chiprés',
                    'cargo'       => 'Coordinador General del C5 de la Ciudad de México',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P29.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '30px',
                            'y'      => '300px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '10px',
                            'y'      => '-30px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Doctor Salvador Guerrero Chiprés es académico, periodista y especialista en seguridad y transparencia. Es Doctor en Teoría Política por la Universidad de Essex, Maestro en Comunicación Política por la Universidad Iberoamericana, y cuenta con licenciaturas en Derecho y en Comunicación por la UNAM, además de estudios de posdoctorado.

                    Desde octubre de 2024, se desempeña como Coordinador General del C5 de la Ciudad de México, encabezando la estrategia tecnológica de monitoreo, videovigilancia y atención de emergencias. Previamente, de 2018 a 2024, presidió el Consejo Ciudadano para la Seguridad y Justicia de la capital, impulsando la denuncia y la prevención del delito. Su trayectoria incluye responsabilidades como Comisionado del InfoDF, Director de Seguridad Privada y directivo en la Comisión Nacional de Seguridad.

                    Su labor combina la gestión pública con una sólida trayectoria en investigación sobre gobernanza, seguridad ciudadana y participación social, consolidándose como un referente nacional en el diseño de estrategias de seguridad y proximidad con la ciudadanía.',
                ], 

                [
                    'id'          => 30,
                    'nombre'      => 'Cap. Marco Antonio Zamora Cázares',
                    'cargo'       => 'Titular de los Centros de Control, Comando, Cómputo y Contacto Ciudadano (C5) del Estado de Quintana Roo',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P30.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '-80px',
                            'y'      => '230px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '-80px',
                            'y'      => '-70px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Capitán de Fragata Marco Antonio Zamora Cázares cuenta con una sólida trayectoria en seguridad, coordinación operativa y gestión tecnológica. Con formación en la Universidad Naval —donde cursó la Especialidad de Mando Naval—, ha desempeñado cargos directivos clave en la Subsecretaría de los Centros de Mando e Inteligencia y en los sistemas C4 y C5 de Quintana Roo.

                    Actualmente se desempeña como Titular de los Centros C5 del Estado de Quintana Roo, desde donde encabeza la operación de los sistemas de videovigilancia, la atención de emergencias y el uso de inteligencia tecnológica para la prevención delictiva.

                    Como ponente en el Congreso Internacional de Seguridad y Proximidad Social en Nezahualcóyotl, aporta su experiencia en el aprovechamiento de herramientas tecnológicas para fortalecer la coordinación interinstitucional, mejorar la capacidad de respuesta ante emergencias e impulsar modelos de seguridad orientados a la protección ciudadana y la proximidad social.',
                ], 

                [
                    'id'          => 31,
                    'nombre'      => 'Dr. David Pérez Esparza',
                    'cargo'       => 'Consultor y Académico en Temas de Seguridad Pública y Política Criminal',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P31.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '-50px',
                            'y'      => '350px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '-30px',
                            'y'      => '0px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Doctor David Pérez Esparza es un especialista en seguridad pública, inteligencia estratégica y análisis de datos, reconocido por su gestión al frente del Centro Nacional de Información (CNI) del SESNSP entre 2019 y 2023. Desde este cargo, coordinó la integración de las bases de datos de seguridad del país y consolidó registros estratégicos como el Registro Nacional de Detenciones.

                    Su trayectoria combina la administración pública de alto nivel con la academia y la consultoría, promoviendo modelos de seguridad basados en evidencia y el aprovechamiento de tecnologías emergentes para la prevención del delito.

                    Como ponente en el Congreso Internacional de Seguridad y Proximidad Social en Nezahualcóyotl, aporta una perspectiva fundamental sobre la interoperabilidad de los sistemas de información, el análisis criminal y el uso de inteligencia de datos para fortalecer la toma de decisiones y la coordinación interinstitucional en materia de seguridad.',
                ], 

                [
                    'id'          => 32,
                    'nombre'      => 'Mtro. José Jorge Amador Amador',
                    'cargo'       => 'Asesor de Seguridad',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P32.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '150px',
                            'y'      => '370px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.80,
                            'x'      => '90px',
                            'y'      => '00px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],
                        
                    'semblanza' => 'El Mtro. José Jorge Amador Amador es un servidor público con una amplia trayectoria en materia de seguridad pública, procuración de justicia, prevención del delito y gestión gubernamental, con más de cuatro décadas de experiencia al servicio de las instituciones de seguridad en los ámbitos municipal, estatal y federal.
                    Es Licenciado en Derecho por la Universidad de Guadalajara, Maestro en Filosofía por la misma institución y Doctor en Sociología por El Colegio de México (COLMEX). 

                    Inició su trayectoria profesional en la entonces Procuraduría General de Justicia del Estado de México, donde desempeñó diversos cargos relacionados con la investigación de delitos y la procuración de justicia. Posteriormente ocupó responsabilidades estratégicas dentro de la administración pública estatal y municipal, consolidándose como uno de los principales especialistas en materia de seguridad en la Zona Metropolitana del Valle de México.

                    Desempeñó la titularidad de la Dirección General de Seguridad Ciudadana durante dos etapas: de 2003 a 2009 y posteriormente de 2012 a 2021, acumulando aproximadamente 15 años al frente de la institución. Durante este periodo impulsó la sectorización territorial, la creación del Centro de Mando (C4), el fortalecimiento de la inteligencia policial, la incorporación de tecnología para la prevención del delito, la evaluación permanente del desempeño policial y la consolidación de un modelo de seguridad centrado en el servicio a la ciudadanía

                    Bajo su liderazgo, el modelo de seguridad implementado en Nezahualcóyotl obtuvo reconocimiento nacional e internacional por sus resultados en la disminución de diversos delitos de alto impacto, la recuperación de la confianza ciudadana y la consolidación de estrategias de prevención social de la violencia.

                    Gracias a su amplia experiencia operativa y administrativa, el Mtro. José Jorge Amador Amador se ha consolidado como uno de los referentes nacionales en materia de seguridad municipal, destacando por su capacidad para implementar estrategias innovadoras que fortalecen la proximidad social, la coordinación institucional y la confianza entre la ciudadanía y las corporaciones policiales.',
                ], 

                /* [
                    'id'          => 33,
                    'nombre'      => 'Ing. Raúl De León Apráez',
                    'cargo'       => 'Presidente Estatal del Fideicomiso para la Competitividad y Seguridad Ciudadana (FICOSEC)',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P33.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '30px',
                            'y'      => '240px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '10px',
                            'y'      => '-50px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Ingeniero Raúl De León Apráez es Ingeniero Civil y cuenta con la Especialidad en Alta Dirección de Empresas por el IPADE. Su trayectoria destaca por su liderazgo en los sectores empresarial, gubernamental y de participación ciudadana, enfocado en el fortalecimiento de la seguridad, la justicia y la competitividad.

                    En el ámbito público, fue Regidor de Ciudad Juárez (2007–2010) y Director de Ecología y Protección Civil (2010–2013). Además, ha presidido CANACINTRA Ciudad Juárez y el Consejo Directivo de Seguridad y Justicia de la misma localidad.

                    Desde abril de 2026, funge como Presidente Estatal del Comité Técnico de FICOSEC, encabezando estrategias de colaboración entre el sector empresarial, la sociedad civil y las instituciones para impulsar la seguridad y la prevención del delito en Chihuahua.',
                ],  */

                [
                    'id'          => 34,
                    'nombre'      => 'Lic. Cynthia Guadalupe Ortega Barreto',
                    'cargo'       => 'Coordinadora de Financiamiento de Proyectos 
                        en FICOSEC. ',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P34.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '30px',
                            'y'      => '350px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                    'semblanza' => 'La Licenciada Cynthia Guadalupe Ortega Barreto es una profesional especializada en la gestión de proyectos y el financiamiento estratégico, enfocada en iniciativas orientadas al impacto social y la seguridad ciudadana. Se desempeña como Coordinadora de Unidad de Financiamiento en FICOSEC, rol desde el cual coordina y da seguimiento a esquemas de asignación de recursos.

                    A lo largo de su trayectoria, ha participado en la evaluación, estructuración y vinculación de propuestas con actores públicos, privados y sociales. Su labor incluye garantizar la correcta ejecución de proyectos financiados por la organización, promoviendo la transparencia, el cumplimiento de objetivos estratégicos y el fortalecimiento institucional.

                    Desde su posición, contribuye al desarrollo de programas orientados a la prevención del delito, la convivencia y la consolidación de comunidades más seguras y resilientes en Chihuahua mediante la gestión eficiente de recursos y la articulación de alianzas estratégicas.',
                ], 

                [
                    'id'          => 35,
                    'nombre'      => 'Ing. Jorge Tello Peón',
                    'cargo'       => 'Presidente y Director General en Madison Inteligencia    ',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P35.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.20,
                            'x'      => '30px',
                            'y'      => '230px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.20,
                            'x'      => '10px',
                            'y'      => '30px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Ing. Jorge Tello Peón es un especialista en inteligencia estratégica y seguridad con una amplia trayectoria en los sectores público y privado. Actualmente se desempeña como Presidente y Director General de Madison Inteligencia, firma de consultoría internacional dedicada al análisis y gestión de riesgos, así como al desarrollo de sistemas de inteligencia estratégica.

                    Su experiencia profesional incluye cargos de alto nivel en el ámbito gubernamental, entre ellos director del Cisen, subsecretario de Gobernación y asesor del Presidente de la República en materia de Seguridad Nacional durante el periodo de 2008 a 2011. También formó parte del Gabinete de Seguridad Nacional y participó en procesos vinculados con la creación y fortalecimiento de instituciones de inteligencia en México.

                    En el sector privado, se desempeñó como vicepresidente de Desarrollo de Información Internacional de Cemex, responsabilidad que ejerció a partir de 2001, con alcance sobre operaciones en múltiples países. Esta etapa consolidó su perfil como experto en sistemas de información, planeación estratégica y análisis de riesgos a escala internacional.

                    Asimismo, ha desarrollado una importante labor académica como catedrático y conferencista en instituciones como el ITAM y el Tecnológico de Monterrey, además de participar en espacios especializados sobre seguridad, inteligencia y gobernanza. Su trayectoria se distingue por la articulación entre experiencia pública, liderazgo empresarial y aportaciones al estudio de la inteligencia estratégica',
                ], 

                [
                    'id'          => 36,
                    'nombre'      => 'Mtro. Guillermo Alberto Hidalgo Montes',
                    'cargo'       => 'Vicerrector Profesionalización de la Universidad de
                            Ciencias Policiales y de Seguridad del Estado de Puebla',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P36.png'
                    ),

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.10,
                            'x'      => '10px',
                            'y'      => '0px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Maestro Guillermo Alberto Hidalgo Montes es un especialista en seguridad pública y profesionalización policial, licenciado en Derecho con estudios de maestría en la materia. Su trayectoria se ha enfocado en el diseño de programas de formación, certificación y desarrollo institucional orientados a fortalecer las capacidades técnicas y operativas de los cuerpos de seguridad bajo una perspectiva de derechos humanos y legalidad.

                    Actualmente se desempeña como Vicerrector de Profesionalización de la Universidad de Ciencias Policiales y de Seguridad del Estado de Puebla, donde coordina estrategias académicas para la actualización y especialización de mandos y personal operativo. Asimismo, ha participado como conferencista en diversos foros nacionales, promoviendo buenas prácticas y modelos educativos de excelencia para consolidar instituciones policiales más profesionales y cercanas a la ciudadanía.',
                ], 

                [
                    'id'          => 37,
                    'nombre'      => 'Dra. Guadalupe Correa Cabrera ',
                    'cargo'       => 'Investigadora Periodística sobre Temas de Seguridad, Narcotráfico y Delincuencia Organizada',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P37.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.30,
                            'x'      => '60px',
                            'y'      => '100px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.20,
                            'x'      => '50px',
                            'y'      => '-50px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'La Doctora Guadalupe Correa-Cabrera es una destacada académica, investigadora y analista especializada en seguridad, narcotráfico, crimen organizado, migración y relaciones transfronterizas. Es profesora en la Schar School of Policy and Government de la Universidad George Mason y codirectora del Terrorism, Transnational Crime and Corruption Center (TraCCC), consolidándose como un referente global en el estudio de redes ilícitas y seguridad internacional.

                    Su trabajo investigativo analiza profundamente el impacto de las corporaciones criminales en la gobernabilidad. Es autora de obras fundamentales como *Los Zetas Inc.: Criminal Corporations, Energy and Civil War in Mexico*, una investigación clave sobre la evolución de las estructuras delictivas transnacionales.

                    Además, ha ocupado importantes posiciones gremiales, como la presidencia de la Association for Borderlands Studies, y colabora activamente con organismos internacionales y universidades en el análisis de dinámicas migratorias, trata de personas y seguridad bilateral entre México y Estados Unidos. Su perspectiva ofrece un análisis crítico y riguroso sobre los desafíos contemporáneos de la violencia y la gobernanza regional.',
                ], 

                [
                    'id'          => 38,
                    'nombre'      => 'Dr. Armando Vargas',
                    'cargo'       => 'Coordinador del Programa de Seguridad de la  Organización México Evalúa',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P38.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.10,
                            'x'      => '30px',
                            'y'      => '120px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.10,
                            'x'      => '10px',
                            'y'      => '20px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Maestro Armando Vargas es politólogo especialista en seguridad pública, política criminal y evaluación de políticas públicas, con una Maestría en Políticas Públicas por la University of Chicago y una Licenciatura en Ciencia Política y Relaciones Internacionales por el CIDE. Su trayectoria se ha enfocado en el análisis de la violencia, la gobernanza y el fortalecimiento institucional.

                    Desde 2019 se desempeña como Coordinador del Programa de Seguridad de *México Evalúa*, donde dirige investigaciones y estudios especializados sobre políticas de seguridad, instituciones policiales y procuración de justicia. Su labor impulsa propuestas basadas en evidencia para mejorar las capacidades institucionales en los tres órdenes de gobierno.

                    Previamente, colaboró como investigador y consultor en proyectos de seguridad ciudadana y gobernanza, destacando también como articulista, conferencista y docente. Su aportación es clave en la generación de conocimiento técnico para promover el Estado de derecho, la prevención de la violencia y la consolidación de instituciones eficaces y transparentes en México.',
                ], 

                [
                    'id'          => 39,
                    'nombre'      => 'Ing. Gerardo García Galarza',
                    'cargo'       => 'Suboficial de la Dirección General de Inteligencia 
                        Cibernética de la UIICOT',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P39.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.20,
                            'x'      => '30px',
                            'y'      => '220px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.20,
                            'x'      => '10px',
                            'y'      => '30px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Ingeniero Gerardo García Galarza es Suboficial de la Dirección General de Inteligencia Cibernética, adscrita a la Unidad de Inteligencia, Investigación Cibernética y Operaciones Tecnológicas (UIICOT). Su labor se centra en la prevención, investigación y atención de delitos digitales, así como en el fortalecimiento de las capacidades tecnológicas orientadas a la seguridad pública.

                    Desde su trinchera operativa y técnica, participa en el análisis de información y la identificación de amenazas en entornos digitales, contribuyendo a la protección de la infraestructura tecnológica y al combate de incidentes que vulneran a la ciudadanía.

                    Asimismo, ha colaborado en actividades de capacitación y difusión sobre ciberseguridad, fomentando el uso responsable de las tecnologías y una sólida cultura de prevención frente a los riesgos del ciberespacio. Su trayectoria refleja el compromiso institucional con la innovación y la especialización en la seguridad digital.',
                ], 

                [
                    'id'          => 40,
                    'nombre'      => 'Mtro. Ricardo Campos González',
                    'cargo'       => 'Especialista en Inteligencia y Seguridad Nacional',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P40.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.20,
                            'x'      => '-20px',
                            'y'      => '200px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.10,
                            'x'      => '-50px',
                            'y'      => '30px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Maestro Ricardo Campos González es un especialista en inteligencia estratégica, seguridad nacional y gestión de riesgos, con una sólida trayectoria en el diseño de metodologías de análisis para la toma de decisiones en el ámbito de la seguridad. Su carrera destaca por la colaboración con instituciones públicas, organismos especializados y espacios académicos en proyectos orientados al fortalecimiento de los sistemas de inteligencia y la profesionalización del servicio público.

                    Con formación de posgrado en la materia, ha participado como conferencista y docente en diversos foros nacionales e internacionales, abordando temas como el análisis de riesgos, la prevención frente a la delincuencia organizada y la cooperación interinstitucional.

                    Su labor se distingue por promover una visión integral que articula la inteligencia estratégica con la prevención y la innovación tecnológica, buscando consolidar capacidades institucionales más sólidas para la protección del Estado y la gobernabilidad democrática.',
                ], 

                [
                    'id'          => 41,
                    'nombre'      => 'Dr. Emilio Daniel Cunjama López',
                    'cargo'       => 'Director General del Instituto de Estudios Criminológicos Transdisciplinarios, IECRIMT',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P41.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '30px',
                            'y'      => '100px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.80,
                            'x'      => '10px',
                            'y'      => '-180px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Doctor Emilio Daniel Cunjama López es un destacado criminólogo, investigador y académico mexicano especializado en criminología, política criminal y prevención de la violencia. Es Doctor en Criminología con una sólida formación en ciencias penales, destacando por su enfoque transdisciplinario en el análisis de los fenómenos delictivos.

                    Actualmente se desempeña como Director General del Instituto de Estudios Criminológicos Transdisciplinarios (IECRIMT), desde donde encabeza proyectos de investigación aplicada, consultoría y programas de formación especializada en seguridad pública, derechos humanos y procuración de justicia.

                    Asimismo, es profesor y conferencista invitado en diversos foros nacionales e internacionales, compartiendo su experiencia sobre criminología contemporánea, análisis del delito y el fortalecimiento institucional para la construcción de entornos más seguros en América Latina.',
                ], 

                [
                    'id'          => 42,
                    'nombre'      => 'Dr. Roberto Emmanuele Mercadillo Caballero',
                    'cargo'       => 'Catedrático del CONACYT',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P42.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '30px',
                            'y'      => '400px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.80,
                            'x'      => '10px',
                            'y'      => '30px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Doctor Roberto Emmanuele Mercadillo Caballero es un destacado investigador mexicano especializado en neurociencias cognitivas, neuropsicología y neurocriminología. Es Doctor en Ciencias Biomédicas por la UNAM, y su trayectoria científica se ha enfocado en estudiar las bases neurobiológicas de la cognición social, la empatía, la toma de decisiones y la conducta antisocial.

                    Ha sido investigador y catedrático del CONAHCYT, desarrollando proyectos interdisciplinarios que conectan las neurociencias sociales con la criminología, la psicología y el análisis de la violencia.

                    Es autor de numerosas publicaciones científicas internacionales de alto impacto sobre neuroética, moralidad y procesos cerebrales vinculados al comportamiento humano, aportando perspectivas innovadoras fundamentales para la comprensión de la violencia, la prevención del delito y el diseño de políticas públicas basadas en evidencia científica.',
                ], 

                [
                    'id'          => 43,
                    'nombre'      => 'Dr. Raúl Benítez Manaut',
                    'cargo'       => 'Investigador de la Universidad Nacional Autónoma de México',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P43.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '30px',
                            'y'      => '350px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                    'semblanza' => 'El Doctor Raúl Benítez Manaut es uno de los máximos referentes en México en materia de seguridad nacional, defensa y estudios estratégicos. Es Doctor en Estudios Latinoamericanos por la UNAM y, desde 1991, investigador del Centro de Investigaciones sobre América del Norte (CISAN), donde ha centrado su labor en la seguridad hemisférica, las fuerzas armadas y las relaciones bilaterales entre México y Estados Unidos.

                    A lo largo de más de tres décadas de trayectoria académica, ha sido profesor y conferencista en prestigiosas universidades de América, Europa y Asia, además de fungir como asesor para organismos internacionales en temas de gobernanza y cooperación regional.

                    Es autor y coordinador de numerosas publicaciones fundamentales sobre crimen organizado, política exterior y relaciones civiles-militares, consolidándose como una voz indispensable en el debate público y la formulación de políticas públicas de seguridad en la región.',
                ], 

                [
                    'id'          => 44,
                    'nombre'      => 'Mtro. Carlos Héctor Daza Zaragoza',
                    'cargo'       => 'Coordinador de la Comisión de Derecho Victimal
                                        en el Nacional Colegio de Abogados de México',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P44.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '30px',
                            'y'      => '300px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                    'semblanza' => 'El Maestro Carlos Héctor Daza Zaragoza es un distinguido jurista y académico especialista en Derecho Penal, Victimología y *Compliance* Penal Corporativo. Cuenta con una sólida formación internacional, siendo Licenciado en Derecho por la Universidad Iberoamericana, Maestro en Derecho por la UNAM, y especialista por las universidades de Salamanca y Sevilla en España, además de contar con estudios en *Compliance* por la Universidad de Oviedo.

                    En el ámbito institucional, destaca su liderazgo dentro del Ilustre y Nacional Colegio de Abogados de México (INCAM), donde ha coordinado la Comisión de Derecho Victimal y diversas actividades académicas en materia penal, impulsando la protección jurídica y la reparación integral para las personas afectadas por delitos.

                    Como ponente en el Congreso Internacional de Seguridad y Proximidad Social en Nezahualcóyotl, aporta una visión jurídica fundamental sobre los derechos de las víctimas, los retos de la victimización frente a la violencia y la consolidación de políticas públicas centradas en los derechos humanos dentro de los sistemas de seguridad y justicia.',
                ], 

                [
                    'id'          => 45,
                    'nombre'      => 'Dra. Laura Carrera Lugo ',
                    'cargo'       => 'Directora General Estrategias Neuroeducativas, S.C., Investigadora del Centro de Estudios sobres Seguridad, Inteligencia y Gobernanza (CESIG)',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P45.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '30px',
                            'y'      => '350px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                    'semblanza' => 'La Doctora Laura Carrera Lugo es una especialista en neuroeducación, desarrollo humano y competencias socioemocionales, con una sólida trayectoria en la aplicación de las neurociencias al aprendizaje y al fortalecimiento del liderazgo y el bienestar organizacional.

                    Actualmente se desempeña como Directora General de Estrategias Neuroeducativas, S.C., desde donde encabeza programas de consultoría, capacitación y formación dirigidos a servidores públicos, docentes, directivos y cuerpos de seguridad. Su enfoque integra los avances neurocientíficos con metodologías orientadas a desarrollar la inteligencia emocional, la resiliencia, la gestión del cambio y las habilidades socioemocionales para optimizar el desempeño y la convivencia en entornos institucionales.',
                ], 

                [
                    'id'          => 46,
                    'nombre'      => 'Mtro. Miguel Garza Flores',
                    'cargo'       => 'Presidente Ejecutivo del INSYDE A.C.',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P46.png'
                    ),

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.20,
                            'x'      => '10px',
                            'y'      => '30px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Maestro Miguel Garza Flores es un especialista en seguridad pública, reforma policial y gobernanza democrática, con maestría en Administración Pública y Políticas Públicas. Su trayectoria destaca por su compromiso con la profesionalización de las corporaciones policiales y la consolidación de modelos de seguridad ciudadana fundamentados en los derechos humanos y la rendición de cuentas.

                    Actualmente se desempeña como Presidente Ejecutivo del Instituto para la Seguridad y la Democracia, A.C. (INSYDE), desde donde encabeza iniciativas orientadas a transformar el sistema de seguridad y justicia penal en México y América Latina mediante la evaluación de políticas públicas y el fortalecimiento de capacidades institucionales.

                    Asimismo, ha colaborado estrechamente con organismos internacionales, gobiernos y organizaciones de la sociedad civil, consolidándose como un referente en el diseño de estrategias de proximidad social y en la promoción de instituciones policiales más transparentes, eficientes y cercanas a la ciudadanía.',
                ], 

                [
                    'id'          => 47,
                    'nombre'      => 'Dra. Doricela Gutiérrez Cruz',
                    'cargo'       => 'Académica de la Universidad Autónoma del 
                            Estado de México',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P47.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.0,
                            'x'      => '30px',
                            'y'      => '100px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.10,
                            'x'      => '10px',
                            'y'      => '30px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'La Doctora Doricela Gutiérrez Cruz es académica e investigadora de la Universidad Autónoma del Estado de México (UAEMéx), especializada en minería de datos, inteligencia artificial, aprendizaje automático y analítica de datos. Su trabajo se enfoca en el desarrollo de herramientas tecnológicas para optimizar la toma de decisiones en áreas estratégicas como la salud, la educación, el medio ambiente y la movilidad.

                    A través de su trayectoria científica y docente, ha impulsado proyectos de investigación interdisciplinarios orientados a la transformación digital y la innovación tecnológica con un fuerte compromiso social, contribuyendo a la formación de capital humano y a la generación de soluciones basadas en evidencia desde el ámbito universitario.',
                ], 

                [
                    'id'          => 48,
                    'nombre'      => 'María Elena Morera Mitre',
                    'cargo'       => 'Presidenta de Causa en Común',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P48.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.80,
                            'x'      => '250px',
                            'y'      => '350px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 2.0,
                            'x'      => '200px',
                            'y'      => '-150px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'La Maestra María Elena Morera Mitre es una destacada activista y especialista en seguridad ciudadana y participación social. Es licenciada en Diseño Industrial por la Universidad Iberoamericana y preside la organización *Causa en Común*, desde donde impulsa rigurosas investigaciones sobre el desempeño policial, la procuración de justicia y el fortalecimiento institucional en México.

                    Con una trayectoria de más de dos décadas en la incidencia pública, previamente presidió *México Unido Contra la Delincuencia* (MUCD) entre 2005 y 2010. Su liderazgo ha sido fundamental para promover la cultura de la denuncia, la rendición de cuentas y la construcción de un Estado de derecho más sólido, consolidándose como una de las voces ciudadanas más influyentes del país en materia de seguridad.',
                ], 

                [
                    'id'          => 49,
                    'nombre'      => 'Dra. Magdalena Alcocer Vega',
                    'cargo'       => 'Coordinadora de Posgrado de la Facultad de Estudios Globales',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P49.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.10,
                            'x'      => '30px',
                            'y'      => '150px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.10,
                            'x'      => '-30px',
                            'y'      => '30px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'La Doctora Magdalena Alcocer Vega es una destacada académica, investigadora y especialista en seguridad, inteligencia estratégica y asuntos internacionales. Es Doctora en Gobierno y Administración Pública *Cum Laude* por la Universidad Complutense de Madrid, además de contar con estudios de posgrado por la Universidad de Barcelona y una licenciatura en Relaciones Internacionales por la Universidad Iberoamericana.

                    Actualmente se desempeña como Coordinadora de Posgrado y profesora de la Facultad de Estudios Globales de la Universidad Anáhuac México, donde dirige programas de alto nivel como la Maestría en Asuntos Internacionales y el Doctorado en Seguridad Internacional. Previamente, coordinó la pionera Licenciatura en Inteligencia Estratégica en la misma institución y fue Directora de Desarrollo Académico del *Institute for Strategic Risk Management* (ISRM) en el Reino Unido.

                    Su sólida trayectoria combina la experiencia en el sector público y privado: colaboró en la División de Inteligencia de la Secretaría de Seguridad Pública Federal —enfocándose en cooperación internacional e Iniciativa Mérida— y fungió como *Regional Security Advisor* para México y Centroamérica en Microsoft, consolidándose como una figura clave en el análisis de riesgos y la gestión de la seguridad estratégica a nivel global.',
                ], 

                [
                    'id'          => 50,
                    'nombre'      => 'Mtra. Gema Guadalupe Chávez Durán',
                    'cargo'       => 'Coordinación General de Investigación de Delitos de Género y Atención a Víctimas de la Ciudad de México',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P50.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.40,
                            'x'      => '30px',
                            'y'      => '300px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                    'semblanza' => 'La Maestra Gema Guadalupe Chávez Durán es una destacada jurista y servidora pública especializada en procuración de justicia, investigación criminal y derechos humanos con perspectiva de género. Actualmente se desempeña como titular de la Coordinación General de Investigación de Delitos de Género y Atención a Víctimas de la Fiscalía General de Justicia de la Ciudad de México, donde dirige las estrategias institucionales para combatir la impunidad en casos de violencia contra las mujeres y brindar protección integral a los sectores más vulnerables.

                    Con una sólida trayectoria en el ámbito de procuración de justicia, hizo historia al desempeñarse previamente como Fiscal General del Estado de Chihuahua, siendo una de las primeras mujeres en encabezar dicha institución. Su liderazgo se ha caracterizado por impulsar modelos de investigación especializados en feminicidios, delitos sexuales y violencia familiar, fortaleciendo las capacidades operativas e institucionales con un firme enfoque de derechos humanos y atención diferenciada.',
                ], 

                [
                    'id'          => 51,
                    'nombre'      => 'Mtro. Leopoldo Morante Cervantes ',
                    'cargo'       => 'Catedrático en la Escuela Superior de Ingeniería Química e Industrias Extractivas del Instituto Politécnico Nacional',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P51.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.0,
                            'x'      => '30px',
                            'y'      => '30px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.0,
                            'x'      => '10px',
                            'y'      => '10px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Maestro Leopoldo Morante Cervantes es un académico y especialista en seguridad industrial, protección civil y gestión integral de riesgos. Catedrático de la Escuela Superior de Ingeniería Química e Industrias Extractivas (ESIQIE) del Instituto Politécnico Nacional (IPN), ha dedicado su trayectoria a la formación técnica de profesionales en la prevención de accidentes y la protección de instalaciones estratégicas.

                    Su labor combina la docencia superior con la asesoría y capacitación especializada para organismos públicos y privados, impartiendo cursos y conferencias en análisis de riesgos, ingeniería de procesos y atención de emergencias. Su trayectoria destaca por consolidar una sólida cultura de la seguridad y fomentar el desarrollo de entornos industriales más seguros mediante la aplicación práctica del conocimiento técnico.',
                ], 

                [
                    'id'          => 52,
                    'nombre'      => 'Mtro. Miguel Ángel Alarcón Hernández',
                    'cargo'       => 'Oficial de la Unidad Antisecuestro y Antiextorsión de la Secretaria de Seguridad y Protección Ciudadana',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P52.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.60,
                            'x'      => '30px',
                            'y'      => '250px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.80,
                            'x'      => '10px',
                            'y'      => '-150px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Maestro Miguel Ángel Alarcón Hernández cuenta con una sólida trayectoria de 30 años de servicio en instituciones de seguridad pública de México, habiendo laborado en la Policía Preventiva de la Ciudad de México, la Agencia Federal de Investigación (PGR), la Policía Federal y la Guardia Nacional. Desde diciembre de 2024, se encuentra adscrito a la Unidad de Antisecuestro y Antiextorsión de la Secretaría de Seguridad y Protección Ciudadana.

                    Es Maestro en Educación Basada en Competencias por la UVM, Licenciado en Derecho por la Universidad Insurgentes y TSU en Seguridad Pública, complementando su perfil con especialidades en Mando Policial, técnicas antisecuestro y negociación de rehenes. A lo largo de su carrera ha acumulado 25 años de experiencia especializada en el manejo de crisis, consolidándose mediante capacitaciones internacionales impartidas por agencias como el FBI de los Estados Unidos, la policía federal de Alemania y los gobiernos de EE. UU. y Colombia.',
                ], 

                [
                    'id'          => 53,
                    'nombre'      => 'Jean Paul Aguilera Reynaud',
                    'cargo'       => 'Director Ejecutivo del Fideicomiso para la Competitividad y Sguridad Ciudadana (FICOSEC) Zona Norte (en lugar de Presidente de FICOSEC)',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P53.png'
                    ),

                    'ajuste_visor' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.80,
                            'x'      => '-50px',
                            'y'      => '550px',
                            'fit'    => 'contain',
                            'posicion' => 'center bottom',
                        ],

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 2.10,
                            'x'      => '-50px',
                            'y'      => '0px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],

                    'semblanza' => 'El Maestro Jean Paul Aguilera Reynaud es Director Ejecutivo del Fideicomiso para la Competitividad y Seguridad Ciudadana (FICOSEC) Zona Norte desde mayo de 2023. Desde este cargo, impulsa la colaboración entre el sector empresarial, el gobierno y la sociedad civil para fortalecer la seguridad ciudadana, la procuración de justicia y la prevención de la violencia.

                    Su trayectoria se distingue por coordinar proyectos estratégicos basados en evidencia y participación ciudadana, promoviendo la reinserción social, la cultura de la legalidad y la evaluación de políticas públicas. Al frente de FICOSEC Zona Norte, ha consolidado alianzas interinstitucionales clave para mejorar las capacidades de seguridad, la generación de datos para la toma de decisiones y las condiciones de competitividad en la región fronteriza.',
                ],

                [
                    'id'          => 54,
                    'nombre'      => 'Dr. Arturo Alvarado Mendoza',
                    'cargo'       => 'Profesor-Investigador del Centro de Estudios Sociológicos (CES) de El Colegio de México',
                    'pais'        => 'México',
                    'pais_codigo' => 'MX',
                    'institucion' => '...',

                    'imagen' => base_url(
                        'assets/eventos/plantillas/semblanzas/img/P54.png'
                    ),

                        'ajuste_modal' => [
                            'ancho'  => '100%',
                            'alto'   => '100%',
                            'escala' => 1.20,
                            'x'      => '10px',
                            'y'      => '-30px',
                            'fit'    => 'contain',
                            'posicion' => 'center top',
                        ],
                    'semblanza' => 'El Doctor Arturo Alvarado Mendoza es un distinguido profesor-investigador del Centro de Estudios Sociológicos (CES) de El Colegio de México (Colmex), institución a la que ha estado vinculado desde 1986 y cuya dirección general ocupó de 2015 a 2018. Es Doctor en Sociología por la misma casa de estudios y miembro del Sistema Nacional de Investigadoras e Investigadores (SNII) en el Nivel III.

                    Su sólida trayectoria académica se centra en el estudio de la seguridad pública, la justicia, los derechos humanos, la prevención de la violencia y la gobernanza democrática en América Latina. Ha encabezado numerosos proyectos de investigación especializada y fungido como consultor para organismos internacionales de gran relevancia, como el PNUD, la UNODC, ONU Mujeres y el Banco Mundial.

                    Su prestigio internacional se consolida a través de su labor como profesor e investigador invitado en instituciones académicas de excelencia global, tales como la Universidad de Princeton, el MIT, la Universidad de Brown, la Universidad de São Paulo, la Sorbona de París y el Woodrow Wilson Center, además de haber presidido el Comité de Investigación sobre Desviación y Control Social de la Asociación Internacional de Sociología (ISA).',
                ],
            ],
        ];

        $estilosPaises = [

                // México
                'MX' => [
                    'gradiente' => 'linear-gradient(
                90deg,
                #006847 0%,
                #006847 33.33%,
                #FFFFFF 33.33%,
                #FFFFFF 66.66%,
                #CE1126 66.66%,
                #CE1126 100%
            )',
                    'contorno' => '#FFFFFF',
                ],

                // Perú
                'PE' => [
                    'gradiente' => 'linear-gradient(
                90deg,
                #D91023 0%,
                #D91023 33.33%,
                #FFFFFF 66.66%,
                #D91023 66.66%,
                #D91023 100%
            )',
                    'contorno' => '#D91023',
                ],

                // España
                'ES' => [
                    'gradiente' => 'linear-gradient(
                180deg,
                #AA151B 0%,
                #AA151B 25%,
                #F1BF00 25%,
                #F1BF00 75%,
                #AA151B 75%,
                #AA151B 100%
            )',
                    'contorno' => '#F1BF00',
                ],

                // Colombia
                'CO' => [
                    'gradiente' => 'linear-gradient(
                180deg,
                #FCD116 0%,
                #FCD116 50%,
                #003893 50%,
                #003893 75%,
                #CE1126 75%,
                #CE1126 100%
            )',
                    'contorno' => '#FCD116',
                ],

                // Chile
                'CL' => [
                    'gradiente' => 'linear-gradient(
                180deg,
                #FFFFFF 0%,
                #FFFFFF 50%,
                #D52B1E 50%,
                #D52B1E 100%
            )',
                    'contorno' => '#ffffff',
                ],

                // Reino Unido
                'GB' => [
                    'gradiente' => 'linear-gradient(
                135deg,
                #012169 0%,
                            #D52B1E 50%,
                #012169 100%
            )',
                    'contorno' => '#ffffff',
                ],

                // Italia
                'IT' => [
                    'gradiente' => 'linear-gradient(
                90deg,
                #009246 0%,
                #009246 33.33%,
                #FFFFFF 33.33%,
                #FFFFFF 66.66%,
                #CE2B37 66.66%,
                #CE2B37 100%
            )',
                    'contorno' => '#FFFFFF',
                ],

        ];

        $estiloPredeterminado = [
            'gradiente' => 'linear-gradient(
                90deg,
                #245cc4 0%,
                #245cc4 50%,
                #8db8ff 100%
            )',
            'contorno' => '#ffffff',
        ];

        /*
         * Asignar colores del país a cada ponente.
         */
        foreach ($data['ponentes'] as &$ponente) {
            $codigoPais = strtoupper(
                trim($ponente['pais_codigo'] ?? '')
            );

            $estiloPais = $estilosPaises[$codigoPais]
                ?? $estiloPredeterminado;

            $ponente['pais_gradiente'] = $estiloPais['gradiente'];
            $ponente['pais_contorno']  = $estiloPais['contorno'];
        }

        unset($ponente);

        /*
         * Crear la lista de países disponible para el filtro.
         */
        $paises = array_column(
            $data['ponentes'],
            'pais'
        );

        $paises = array_filter(
            $paises,
            static function ($pais) {
                return is_string($pais) && trim($pais) !== '';
            }
        );

        $paises = array_unique($paises);

        natcasesort($paises);

        $data['paises'] = array_values($paises);

        return view(
            'App\Modules\Eventos\Congresos\OctavoCongreso\Semblanzas\Views\index',
            $data
        );
    }
}
