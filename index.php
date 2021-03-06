<!DOCTYPE html>
<html lang="en" content="">
<head>
    <title data-i18n="title.index">HackWithPeople - Inicio</title>
    <?php include("section/html_import.php"); ?>
</head>
<body>
<div class="page">
    <!-- HEADER -->
    <?php
        $_GET['ac'] = 'in';
        include("section/header.php");
    ?>

    <!--
    ========================================================
                                CONTENIDO
    ========================================================
    -->
    <main>
        <div id="home">
            <section class="well ins1">
                <div class="container hr">
                    <h2 data-i18n="home.title_1">Retos inminentes</h2>
                    <ul class="row product-list">
                        <li class="grid_6">
                            <div data-wow-delay="0.2s" class="box wow fadeInRight">
                                <div class="box_aside">
                                    <div class="icon "></div>
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><span data-i18n="home.title_1_1">Envejecimiento de la población</span></h3>
                                    <p><mcb data-i18n="home.content_1_1">Europa se acerca a un cambio demográfico. Entre otras medidas, debemos
                                        prepararnos con políticas de envejecimiento activo que puedan mejorar la vida de
                                        las </mcb>
                                        <a href="https://ec.europa.eu/research/social-sciences/pdf/policy_reviews/kina26426enc.pdf"
                                           target="_blank" data-i18n="home.content_1_1_link_1">familias que tengan algún miembro con problemas para
                                            desarrollar su actividad diaria.</a>.
                                    </p>
                                    <div>
                                        <img src="images/img-ned-horton.jpg" width="350" height="350"
                                             alt="Image By Ned horton" title="Image By Ned Horton"/>
                                    </div>
                                </div>
                            </div>
                            <!--hr-->
                        </li>
                        <li class="grid_6">
                            <div data-wow-delay="0.3s" class="box wow fadeInRight">
                                <div class="box_aside">
                                    <div class="icon "></div>
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><span data-i18n="home.title_1_2">Enfermedades neurodegenerativas</span></h3>
                                        <p><mcb data-i18n="home.content_1_2">A nivel mundial, </mcb>
                                            <a href="http://www.who.int/mediacentre/factsheets/fs362/es/" target="_blank" data-i18n="home.content_1_2_link_1">47.6 millones de personas tienen demencia y hay 7.7 millones de casos nuevos cada año.</a>
                                            <a href="http://www.pdf.org/en/parkinson_statistics" data-i18n="home.content_1_2_link_2"> El Parkinson afecta a más de 10 millones de personas en el mundo. </a>
                                        </p>
                                    <div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div data-wow-delay="0.3s" class="box wow fadeInRight">
                                <div class="box_aside">
                                    <div class="icon "></div>
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><span data-i18n="home.title_1_3">Discapacidades</span></h3>
                                    <p><a href="https://www.disabled-world.com/disability/statistics/" data-i18n="home.content_1_3_link_1">Un 10% de la
                                        población mundial nace con alguna discapacidad</a>. <mcb data-i18n="home.content_1_3">Algunos nacen con
                                        discapacidades que les dejan en desventaja en una sociedad no inclusiva. Otros
                                        desarrollan la descapacidad a lo largo de su vida, por motivo de algún accidente
                                        o alguna enfermedad. Pueden y quieren sentirse capaces.</mcb>
                                    </p>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="well ins1">
                <div class="container hr">
                    <h2 data-i18n="home.title_2">Las tecnologías asistivas al rescate</h2>
                    <ul class="row product-list">
                        <li class="grid_6">
                            <div data-wow-delay="0.2s" class="box wow fadeInRight">
                                <div class="box_aside">
                                    <!--div class="icon "></div-->
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><a href="#"></a></h3>
                                    <p data-i18n="home.content_2p1">Los avances científicos, en lo que a enfermedades neurodegenerativas se refiere,
                                        tienen un avance lento, especialmente por lo errático en la financiación de la
                                        investigación básica. Las tecnologías asistivas no son una solución, pero pueden
                                        hacer la vida más llevadera a quien tiene alguna enfermedad y pueden integrar
                                        mejor a la sociedad a los que tienen alguna discapacidad. </p>
                                    <div>
                                        <img src="images/img-head-wand.jpg"
                                             alt="Quadriplegic using head wand, image by Joseph Lorenzo Hall"
                                             title="Quadriplegic using head wand, image by Joseph Lorenzo Hall"
                                             class="img_responsive"/>
                                        <img src="images/img-gyrogearglove.jpg"
                                             alt="GyroGlove by GyroGear group, a device for counter parkinson-caused hand trmors"
                                             title="GyroGlove by GyroGear group, a device for counter parkinson-caused hand trmors"
                                             class="img_responsive"/>
                                    </div>
                                </div>
                            </div>
                            <!--hr-->
                        </li>
                        <li class="grid_6">
                            <div data-wow-delay="0.3s" class="box wow fadeInRight">
                                <div class="box_aside">
                                    <!--div class="icon "></div-->
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><a href="#"></a></h3>
                                    <p data-i18n="home.content_2p2">Estas tecnologías consisten en la integración de elementos electrónicos en
                                        nuestro ambiente cotidiano de tal forma que nos permitan complementar o mantener
                                        nuestra calidad de vida. Dichos elementos podríamos llevarlos puestos sobre el
                                        cuerpo o en nuestra ropa (wearables) o bien ser elementos de asistencia
                                        mecánica, como robots o elevadores.</p>
                                    <div>
                                        <img src="images/img-parkinsons-wearable-test.jpg"
                                             alt="Intel and the Michael J. Fox Foundation are using big data, cloud computing and wearable technologies to monitor Parkinson’s patients."
                                             title="Intel and the Michael J. Fox Foundation are using big data, cloud computing and wearable technologies to monitor Parkinson’s patients."
                                             class="img_responsive"/>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <br/>
                    <h3 data-i18n="home.title_3">Estas tecnologías ayudan en el corto plazo, pero no son <b>la solución perfecta</b></h3>
                    <ul class="row product-list">
                        <li class="grid_6">
                            <div data-wow-delay="0.3s" class="box wow fadeInRight">
                                <div class="box_aside">
                                    <img src="images/img-warning-sign.png" width="100" height="100"
                                         alt="Warning sign by DynV" tilte="Warning sign by DynV"/>
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><span data-i18n="home.title_3_1">Desarrollo demasiado caro</span></h3>
                                    <p data-i18n="home.content_3_1">Un producto empieza por una idea que se prototipa en laboratorio. Luego se
                                        trabaja con voluntarios o personas a las que se les compensa de alguna manera el
                                        esfuerzo. De esta experiencia, se aprende y se rediseña el producto. Después se
                                        planifica y ejecuta la producción industrial. Sólo queda llevar el producto al
                                        cliente final. En todo este proceso, hay un gasto ingente de recursos materiales
                                        y humanos. No todo el mundo puede afrontarlo.</p>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid_6">
                            <div data-wow-delay="0.3s" class="box wow fadeInRight">
                                <div class="box_aside">
                                    <img src="images/img-warning-sign.png" width="100px" height="100px"
                                         alt="Warning sign by DynV" tilte="Warning sign by DynV"/>
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><span data-i18n="home.title_3_2">No es sencillo involucrar a las personas</span></h3>
                                    <p data-i18n="home.content_3_2">Muchos proyectos fracasan por no proponer una solución de interés para las
                                        personas que los usarán. Para evitar esa frustración, se está integrando a
                                        voluntarios en la creación de los productos. Ello encarece más el producto, ya
                                        que requiere de instalaciones donde hacer las pruebas y de compensaciones para
                                        los voluntarios por el esfuerzo realizado. Aparte, plantea nuevas cuestiones.
                                        Imaginemos que construimos un detector de caídas: ¿pediremos al voluntario que
                                        se caiga?, ¿detectará el producto una caída por una escalera?...</p>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid_6">
                            <div data-wow-delay="0.3s" class="box wow fadeInRight">
                                <div class="box_aside">
                                    <img src="images/img-warning-sign.png" width="100px" height="100px"
                                         alt="Warning sign by DynV" tilte="Warning sign by DynV"/>
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><span data-i18n="home.title_3_3">Las tecnologías no están todavía listas</span></h3>
                                    <p data-i18n="home.content_3_3">Los ensayos son lentos porque hay que garantizar fiabilidad. Además, gran parte
                                        de lo que se necesita implica asistencia mecánica, por ejemplo, cuando alguien
                                        se cae, para que le ayude a levantarse.</p>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid_6">
                            <div data-wow-delay="0.3s" class="box wow fadeInRight">
                                <div class="box_aside">
                                    <img src="images/img-warning-sign.png" width="100px" height="100px"
                                         alt="Warning sign by DynV" tilte="Warning sign by DynV"/>
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><span data-i18n="home.title_3_4">Falta de personalización</span></h3>
                                    <p data-i18n="home.content_3_4">Cada persona es un mundo. Ajustar la tecnología asistiva a su caso particular es
                                        un proceso costoso. Los modelos industriales se rigen por la producción en
                                        escala de productos totalmente iguales. Cuando se trata de colectivos pequeños,
                                        o relativamente pequeños, no se pueden producir medios de precio asequible
                                        ajustados al problema de cada uno.</p>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="well1">
                <div class="container"><h2 data-i18n="home.title_4">¿Qué proponemos?</h2></div>
            </section>
            <section>
                <div class="container banner_wr">
                    <h2></h2>
                    <ul class="banner">
                        <li>
                            <p data-i18n="home.content_4p1">Queremos que cualquier persona que tenga conocimientos pueda contribuir.</p>
                            <p>
                                <img src="images/img-hwa-a.png"
                                     alt=" UC Davis Steel Bridge Team | by UC Davis College of Engineering"
                                     title=" UC Davis Steel Bridge Team | by UC Davis College of Engineering"
                                     class="img_responsive"/>
                            </p>
                            <!--a href="#"></a-->
                        </li>
                        <li>
                            <p data-i18n="home.content_4p2">Abaratar costes para que no sea un impedimento el no disponer de muchos recursos.</p>
                            <p>
                                <img src="images/img-hwa-b.png" alt="LadyDIY" title="LadyDIY" class="img_responsive"/>
                            </p>
                            <!--a href="#"></a-->
                        </li>
                        <li>
                            <p data-i18n="home.content_4p3">Romper las limitaciones y hablar de lo que no existe todavía y cómo queremos que sea.</p>
                            <p>
                                <img src="images/img-hwa-c.png" alt="pixel1" title="pixel1" class="img_responsive"/>
                            </p>
                            <!--a href="#"></a-->
                        </li>
                        <li>
                            <p data-i18n="home.content_4p4">Sistematizar el desarrollo y estandarizar una experimentación responsable en tecnologías
                                asistivas.</p>
                            <p>
                                <img src="images/img-hwa-d.png" class="img_responsive"
                                     alt="neetalparekh Sustainability graphic on Performance.gov"
                                     title="neetalparekh Sustainability graphic on Performance.gov"/>
                            </p>
                            <!--a href="#"></a-->
                        </li>
                    </ul>
                </div>
            </section>
            <hr>
            <section>
                <div class="container banner_wr">
                    <h2 data-i18n="home.title_5" >No usamos magia, sólo ingeniería</h2>
                    <ul class="marked-list">
                        <li>
                            <p data-i18n="home.content_5p1">Podemos usar simulaciones 3D de los problemas y resolver primero el problema en el
                                ordenador.<a href="#"></a></p>
                        </li>
                        <li>
                            <p data-i18n="home.content_5p2">Estamos empezando, pero ya tenemos casos que muestran la idea.<a href="#"></a></p>
                        </li>
                        <li>
                            <p data-i18n="home.content_5p3">Una tecnología libre y abierta que todos pueden usar. Si tu fuerte no es la tecnología,
                                también puedes participar enviándonos comentarios de las simulaciones con el
                                CAMAssistant.<a href="#"></a></p>
                        </li>
                        <li>
                            <p data-i18n="home.content_5p4">Si tienes conocimientos tecnológicos, puedes contribuir modelando o desarrollando
                                soluciones. Si te faltan conocomientos tecnológicos, nos puedes ayudar dándonos
                                comentarios a los casos prácticos con el CAMAssistant.<a href="#"></a></p>
                        </li>
                    </ul>
                </div>
            </section>
            <section>
                <div class="container banner_wr">
                    <h2 data-i18n="home.title_6">Formas de colaborar</h2>
                    <ul class="marked-list">
                        <li>
                            <p data-i18n="home.content_6p1">Ayudar con comentarios sobre las simulaciones que tenemos, opinando sobre las soluciones
                                y los problemas que hemos recogido. Se usa la herramienta CAMAssistant para esto. Pueden
                                visitarse los casos de uso y proveer comentarios directamente. Perfil: profesional/persona con interés
                            </p>
                        </li>
                        <li>
                            <p><mcb data-i18n="home.content_6p2_1">Crear modelos 3D con nuestras herramientas. Se usa la </mcb>
                                <a href="http://grasia.fdi.ucm.es/aide" data-i18n="home.content_6p2_link_1">herramienta AIDE para esto.</a>
                                <mcb data-i18n="home.content_6p2_2"> Dispondremos online los modelos para que los interesados los descarguen y también para que se puedan subir nuevos. Perfil: requiere conocimientos técnicos</mcb></p>
                        </li>
                        <li>
                            <p data-i18n="home.content_6p3">Colaboraren equipos multidisciplinares mientras se modela. Organizaremos reuniones para
                                co-crear soluciones o estudiar problemas de forma colaborativa. Perfil: profesional/persona con interés </p>
                        </li>
                        <li>
                            <p><mcb data-i18n="home.content_6p4_1">Proponer soluciones para los problemas. Se usa la </mcb><a
                                    href="http://grasia.fdi.ucm.es/aide" data-i18n="home.content_6p4_link_1">herramienta AIDE para esto.</a><mcb data-i18n="home.content_6p4_2"> Disponemos de ejemplos simples y tutoriales con los que empezar. Perfil: requiere conocimientos técnicos.</mcb>
                            </p>
                        </li>
                    </ul>
                </div>
            </section>
            <hr/>
            <section>
                <div class="wrap_card">
                    <div id="showcase" class="noselect">
                        <div class="card">
                            <h2>Paso 5</h2>
                            <img src="images/img-carrousel-c5.bmp">
                            <p>Una vez que sabemos lo que se quiere construir, usamos elementos electrónicos asequibles
                                para montar prototipos que puedan probar voluntarios. A diferencia de otros enfoques,
                                cuando llegamos a aquí: no hemos invertido recursos físicos más allá de nuestro esfuerzo
                                y nuestros ordenadores (que ya teníamos), hemos cooperado con profesionales y usuarios
                                para determinar que vamos por el buen camino, hemos respetado la privacidad e integridad
                                de los usuarios sin que ello comprometa el proyecto.</p>
                            <a href="#"></a>
                        </div>
                        <div class="card">
                            <h2>Paso 4</h2>
                            <img src="images/img-carrousel-c4.bmp">
                            <p>El resultado final se vuelve a comentar para determinar si lo que los tecnólogos crearon
                                encaja con lo que se esperaba.</p>
                            <a href="#"></a>
                        </div>
                        <div class="card">
                            <h2>Paso 3</h2>
                            <img src="images/img-carrousel-c3.bmp">
                            <p>Ahorramos costes creando prototipos primero en el ordenador. Su funcionamiento se compara
                                con el esperado por los profesionales y personas interesadas. El resultado se traslada
                                en forma de vídeo para que se compruebe otra vez.</p>
                            <a href="#"></a>
                        </div>
                        <div class="card">
                            <h2>Paso 2</h2>
                            <img src="images/img-carrousel-c2.bmp">
                            <p>Los comunicación se canaliza mediante una herramienta de comentarios similar a las
                                herramientas que se usan para poner subtítulos a las películas. Aquí se modelan qué
                                comportamiento se espera de los actores en un escenario ideal y luego se procede a
                                definir cómo cada acción se ve alterada por las discapacidades o las enfermedades.</p>
                            <a href="#"></a>
                        </div>
                        <div class="card">
                            <h2>Paso 1</h2>
                            <img src="images/img-carrousel-c1.bmp">
                            <p>Se colabora con profesionales y especialistas para intentar reproducir en simulaciones de
                                ordenador lo que que cuentan.</p>
                            <a href="#"></a>
                        </div>
                    </div>
                    <button class="nav_card noselect left_card">&lt;</button>
                    <button class="nav_card noselect right_card">&gt;</button>
                </div>
            </section>
            <hr/>
            <!--section>
                <div class="container">
                    <div class="micarrousel">
                        <div align="center">
                            <img src="images/img-carrousel-c3.bmp" alt="Ciclo 3" />
                            <p>Ahorramos costes creando prototipos primero en el ordenador. Su funcionamiento se compara con el esperado por los profesionales y personas interesadas. El resultado se traslada en forma de vídeo para que se compruebe otra vez.</p>
                        </div>
                        <div align="center">
                            <img src="images/img-carrousel-c4.bmp" alt="Ciclo 4" />
                            <p>El resultado final se vuelve a comentar para determinar si lo que los tecnólogos crearon encaja con lo que se esperaba..</p>
                        </div>
                        <div align="center">
                            <img src="images/img-carrousel-c5.bmp" alt="Ciclo 5" />
                            <p>Una vez que sabemos lo que se quiere construir, usamos elementos electrónicos asequibles para montar prototipos que puedan probar voluntarios. A diferencia de otros enfoques, cuando llegamos a aquí: no hemos invertido recursos físicos más allá de nuestro esfuerzo y nuestros ordenadores (que ya teníamos), hemos cooperado con profesionales y usuarios para determinar que vamos por el buen camino, hemos respetado la privacidad e integridad de los usuarios sin que ello comprometa el proyecto.</p>
                        </div>
                        <div align="center">
                            <img src="images/img-carrousel-c1.bmp" alt="Ciclo 1" />
                            <p>Se colabora con profesionales y especialistas para intentar reproducir en simulaciones de ordenador lo que que cuentan.</p>

                        </div>
                        <div align="center">
                            <img src="images/img-carrousel-c2.bmp" alt="Ciclo 2" />
                            <p>Los comunicación se canaliza mediante una herramienta de comentarios similar a las herramientas que se usan para poner subtítulos a las películas. Aquí se modelan qué comportamiento se espera de los actores en un escenario ideal y luego se procede a definir cómo cada acción se ve alterada por las discapacidades o las enfermedades.</p>
                        </div>
                    </div>
                </div>
            </section-->

            <section class="well ins1">
                <div class="container hr">
                    <h2 data-i18n="home.title_7">Desarrollos terminados</h2>
                    <ul class="row product-list">
                        <li class="grid_6">
                            <div data-wow-delay="0.2s" class="box wow fadeInRight">
                                <div class="box_aside">
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><span data-i18n="home.title_7_1">Un detector de caídas</span></h3>
                                    <p data-i18n="home.content_7p1">Fue desarrollado por estudiantes y la tecnología utilizada sirvió para facilitar
                                        el prototipado inicial de la solución. Está disponible toda la documentación que
                                        informa de los elementos necesarios para el desarrollo y así poder construir
                                        otro similar.</p>
                                    <div>
                                        <img src="images/cajacaidas.png" class="img_responsive"/> <img
                                            src="images/probandocaja.jpg" class="img_responsive"/>
                                    </div>
                                </div>
                            </div>
                            <!--hr-->
                        </li>
                        <li class="grid_6">
                            <div data-wow-delay="0.3s" class="box wow fadeInRight">
                                <div class="box_aside">
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><span data-i18n="home.title_7_2">Prototipos de reconocedores de situaciones</span></h3>
                                    <p><mcb data-i18n="home.content_7p2">Un reconocedor de gestos básico (su evolución está en proceso de patente) y un
                                        detector de caídas en grandes instalaciones. Desarrollado usando las
                                        simulaciones y producido con hardware abierto. Obtuvo el premio a la mejor DEMO
                                        patrocinado por </mcb> <a href="http://www.paams.net/" target="_blank" data-i18n="home.content_7_2_link_1">IBM en la
                                            conferencia PAAMS 2016</a>.</p>
                                    <div>
                                        <img src="images/img-grants-2016-1.jpg" class="img_responsive">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="well ins1">
                <div class="container hr">
                    <h2 data-i18n="home.title_8">Algunos desarrollos en progreso</h2>
                    <ul class="row product-list">
                        <li class="grid_6">
                            <div data-wow-delay="0.2s" class="box wow fadeInRight">
                                <div class="box_aside">
                                    <div class="icon "></div>
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><span data-i18n="home.title_8_1">Mando de televisión tolerante a temblores leves</span></h3>
                                    <p data-i18n="home.content_8p1">Se trata de definir cómo sería el control de un mándo de televisión táctil que
                                        fuera tolerante a temblores leves del usuario.</p><br/>
                                    <div>
                                        <img src="images/img-parkinson-watching-tv.png" class="img_responsive"/>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div data-wow-delay="0.3s" class="box wow fadeInRight">
                                <div class="box_aside">
                                    <div class="icon "></div>
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><span data-i18n="home.title_8_3">Monitor de actividades repetidas u olvidadas</span></h3>
                                    <p data-i18n="home.content_8p3">Basado en tecnología para reconocimiento de actividades, se quiere desarrollar un
                                        sistema que aprenda las costumbres del paciente y que identifique cuándo una
                                        actividad ya ha sido realizada, o no ha sido realizada, o cuando ha sido dejada
                                        a medias.</p>
                                    <div>
                                        <img src="images/img-olv-object.png" class="img_responsive"/>
                                    </div>
                                </div>
                            </div>
                            <!--hr-->
                        </li>
                        <li class="grid_6">
                            <div data-wow-delay="0.3s" class="box wow fadeInRight">
                                <div class="box_aside">
                                    <div class="icon "></div>
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><span data-i18n="home.title_8_2">Seguimiento de multitudes</span></h3>
                                    <p data-i18n="home.content_8p2">Se trata de, usando información de tráfico de gente en un punto concreto de un
                                        edificio, determinar cuánta gente hay en otras partes del mismo sin necesidad de
                                        invadir la privacidad.</p>
                                    <div>
                                        <img src="images/img-flujo-multitudes-2.png" class="img_responsive"/>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div data-wow-delay="0.3s" class="box wow fadeInRight">
                                <div class="box_aside">
                                    <!--div class="icon "></div-->
                                </div>
                                <div class="box_cnt__no-flow center">
                                    <h3></h3>
                                    <p><a href="casos_practicos.html" class="btn2" data-i18n="home.boton_mas_casos">Ver más casos</a></p>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <section id="presentation" class="well1">
                <div class="container">
                    <div class="row">
                        <div class="grid_6">
                            <h2></h2>
                            <div class="copyright">
                                <a href="http://grasia.fdi.ucm.es/colosaal" target="_blank">ColosAAL. </a>&nbsp;<mcb data-i18n="footer.financed_by">Proyecto
                                financiado por el Ministerio de Economía y Competitividad del Gobierno de España</mcb>,
                                TIN2014-57028-R FOTRRIS. <br/>
                                <a href="https://www.gsi.dit.upm.es/mosi/" target="_blank">MOSI-AGIL</a>. El programa
                                MOSI-AGIL-CM (S2013/ICE-3019) está financiado por el Gobierno de la Comunidad de Madrid
                                y fondos estructurales FEDER.<br/>
                                <a href="http://fotrris-h2020.eu/" target="_blank">FoTRRIS</a> is an European Research
                                Project of the H2020 Programme, on Responsible Research and Innovation. More information
                                at <a href="http://fotrris-h2020.eu/" target="_blank">http://fotrris-h2020.eu/</a><br/>
                                <a href="http://grasia.fdi.ucm.es/newmain/language/en/" target="_blank">GRASIA</a>&nbsp;&nbsp;
                                <a rel="nofollow" href="http://www.ucm.es" target="_blank">Facultad de Inform&aacute;tica</a>
                                <br/>
                                All the content of this page is licensed under the CC By-SA
                                <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/es/" target="_blank">
                                    <img src="http://i.creativecommons.org/l/by-sa/3.0/es/80x15.png" alt="(cc) BY-SA icon" title="(cc) BY-SA icon" style="border-width: 0; text-align: inherit; vertical-align: middle"/>
                                </a>
                            </div>

                        </div>
                        <div class="grid_2">
                            <div>
                                <p>
                                    <a href="http://cursos.dabne.net/grassia/language/en" target="_blank">
                                        <img src="images/logo_grasia.jpg" height="35" width="133" title="Web GRASIA"
                                             alt="Web GRASIA" class="img_responsive"/>
                                    </a>
                                </p>
                                <p>&nbsp;</p>
                                <p>
                                    <a href="http://www.madrid.org" target="_blank">
                                        <img src="images/img-logo-comunidad-madrid.jpg" title="Comunidad de Madrid"
                                             alt="Comunidad de Madrid" class="img_responsive"/>
                                    </a>
                                </p>
                                <p>&nbsp;</p>
                                <p>
                                    <a rel="license" href="http://www.mineco.gob.es/" target="_blank">
                                        <img src="images/gobspain.png" height="70" width="266" alt="Gobierno de España"
                                             style="border: none" class="img_responsive"/></a>
                                </p>
                                <p>&nbsp;</p>
                                <p>
                                    <img src="images/img-logo-ue.png" title="UE" alt="UE" class="img_responsive"/>
                                </p>
                            </div>
                        </div>
                        <div class="grid_4">
                            <div class="owl-carousel">
                                <div class="item">
                                    <blockquote class="box">
                                        <div class="box_aside"><img src="images/img-t-pavon-mestras.jpeg"
                                                                    alt="Juan Pavón" class="img_responsive"></div>
                                        <div class="box_cnt__no-flow">
                                            <p>Juan Pavón Mestras<br/>
                                                <q data-i18n="presentation.jpm">He joined UCM at the end of 1997, where he created the GRASIA
                                                    research group, whose focus is on the application of multi-agent systems
                                                    technology.</q>
                                            </p>
                                            <cite>Co-director GRASIA</cite>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote class="box">
                                        <div class="box_aside"><img src="images/img-t-jorge-gomez.jpg" alt="Jorge Gómez"
                                                                    class="img_responsive"></div>
                                        <div class="box_cnt__no-flow">
                                            <p>Jorge Gómez Sanz<br/>
                                                <q data-i18n="presentation.jgs">His PhD introduced the INGENIAS methodology for the development of
                                                    Multi-Agent systems, which has been widely cited. He is the
                                                    co-director of the GRASIA research group.</q>
                                            </p>
                                            <cite>Co-director GRASIA</cite>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote class="box">
                                        <div class="box_aside"><img src="images/img-t-marlon-cardenas.jpg" alt=""
                                                                    class="img_responsive"></div>
                                        <div class="box_cnt__no-flow">
                                            <p>Marlon Cárdenas<br/>
                                                <q data-i18n="presentation.mcb">Estudiante de doctorado con un contrato FPI asociado al proyecto
                                                    ColoSAAL.</q>
                                            </p>
                                            <cite>Miembro de GRASIA</cite>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote class="box">
                                        <div class="box_aside"><img src="images/img-t-rafael-pax.jpg" alt=""
                                                                    class="img_responsive"></div>
                                        <div class="box_cnt__no-flow">
                                            <p>Rafael Pax<br/>
                                                <q data-i18n="presentation.rps">Actualmente trabaja en la Universidad Complutense de Madrid (UCM) en
                                                    el proyecto MOSI-AGIL.</q>
                                            </p>
                                            <cite>Miembro de GRASIA</cite>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote class="box">
                                        <div class="box_aside"><img src="images/img-t-andres-arias-astray.jpg" alt=""
                                                                    class="img_responsive"></div>
                                        <div class="box_cnt__no-flow">
                                            <p>Andres Arias Astray<br/>
                                                <q data-i18n="presentation.aaa">Actualmente trabaja en la Universidad Complutense de Madrid (UCM).</q>
                                            </p>
                                            <cite>Facultad de Trabajo Social de la UCM</cite>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote class="box">
                                        <div class="box_aside"><img src="images/img-t-gracia-escalante-ruiz.jpg" alt=""
                                                                    class="img_responsive"></div>
                                        <div class="box_cnt__no-flow">
                                            <p>Gracia Escalante Ruíz<br/>
                                                <q data-i18n="presentation.ger">Actualmente trabaja en la Universidad Complutense de Madrid
                                                    (UCM).</q>
                                            </p>
                                            <cite>Facultad de Trabajo Social de la UCM</cite>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote class="box">
                                        <div class="box_aside"><img src="images/img-t-linda-ducca-cisneros.jpg" alt=""
                                                                    class="img_responsive"></div>
                                        <div class="box_cnt__no-flow">
                                            <p>Linda Ducca Cisneros<br/>
                                                <q data-i18n="presentation.ldc">Actualmente trabaja en la Universidad Complutense de Madrid
                                                    (UCM).</q>
                                            </p>
                                            <cite>Facultad de Trabajo Social de la UCM</cite>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote class="box">
                                        <div class="box_aside"><img src="images/img-t-silvia-patricia-cury.jpg" alt=""
                                                                    class="img_responsive"></div>
                                        <div class="box_cnt__no-flow">
                                            <p>Silvia Patricia Cury<br/>
                                                <q data-i18n="presentation.spc">Actualmente trabaja en la Universidad Complutense de Madrid
                                                    (UCM).</q>
                                            </p>
                                            <cite>Universidad Internacional de la Rioja</cite>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote class="box">
                                        <div class="box_aside"><img src="images/img-t-millan-arroyo-menendez.jpg" alt=""
                                                                    class="img_responsive"></div>
                                        <div class="box_cnt__no-flow">
                                            <p>Millán Arroyo Menéndez<br/>
                                                <q data-i18n="presentation.mam">Profesor Titular de la Universidad Complutense de Madrid, Vicedecano
                                                    de Investigación y Doctorado.</q>
                                            </p>
                                            <cite>Miembro de GRASIA</cite>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- FOOTER -->
    <?php include("section/footer.php"); ?>
</div>
</body>
</html>