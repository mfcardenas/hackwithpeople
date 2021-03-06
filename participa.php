<!DOCTYPE html>
<html lang="en">
<head>
    <title data-i18n="title.participa">HackWithPeople  - Participa</title>
    <?php include("section/html_import.php"); ?>
</head>
<body>
<div class="page">
    <!-- HEADER -->
    <?php include("section/header.php?ac=pa"); ?>

    <!--
    ========================================================
                                CONTENIDO
    ========================================================
    -->
    <main>
        <section class="well1">
            <div class="container">
                <h2>CAM Assistant</h2>
                <p>
                    CAM Assistant es la aplicación web colaborativa que te permitirá participar en la cocreación de los casos de estudios. A trav&eacute;s de comentarios podrás contribuir en la construcción de simulaciones realistas de los casos de estudios definidos. Cuanto mayor sea tu aporte podremos entre todos garantizar que la simulación generada puede ser &uacute;til para estudiar aquellos casos en los que los pacientes pueden verse afectados por la enfermedad o limitación que se estudia.
                </p>
                <p>
                    Durante este ciclo de trabajo, se podr&aacute;n generar varias iteraciones hasta que sea posible usar la simulación como un caso práctico de estudio. Definido el caso práctico se pasará a la fase de diseñar y construir soluciones que mejoren las condiciones de los pacientes.
                </p>
                <p>
                    Mediante CAM Assistant se visualizar&aacute;n las simulaciones en formato de vídeo, bien desde una o varias perspectivas (cámaras). Sobre cada cámara de la simulación podrás ir añadiendo comentarios que iran apareciendo sobre el vídeo en forma de subtítulos. Lo que se pretende es recoger tu <i>feedback</i> de la simulación construida bien para mejorarla o para incluir características que no se hayan tenido en cuenta en su construcción.
                </p>
                <p>&nbsp;</p>
                <h2>Participa en los Casos de Estudios</h2>
                <h3 class="off1 primary"><a name="preamble"></a>Descarga el fichero zip del caso de estudio en el que quieras participar</h3>

                <p>Descarga el fichero zip del <a href="casos_practicos.html" alt="Casos Prácticos" title="Casos Prácticos"> caso de estudio </a> que te interese y extrae su contenido en un directorio local de tu ordenador.</p>

                <p>Una vez extraido el contenido del zip, busca el fichero "index.html" y ábrelo con el navegador Firefox de Mozilla.</p>

                <p>Desde el navegador podrás acceder a la aplicación web para realiazar los comentarios sobre el video de la simulación del caso práctico que has elegido.</p>
                <h3 class="off1 primary"><a name="preamble"></a>Usa la aplicación web de comentarios</h3>
                <p>La aplicación tiene la siguiente apariencia:</p>
                <br/>
                <p><img src="images/img-cam-assitant-01.png" alt="CAM Assistant" title="CAM Assistant" /></p>
                <br/>
                <p>Carga las opciones del video de la simulación con el botón "LOAD VIDEOS". Una vez activado podrás ver todas las opciones de reproducción.</p>
                <br/>
                <p><img src="images/img-cam-assitant-02.png" alt="CAM Assistant" title="CAM Assistant" /></p>
                <br/>
                <h3 class="off1 primary"><a name="preamble"></a>Crea tus comentarios</h3>
                <br/>
                <p>Visualiza las opciones de comentarios sobre cada video. Cuando el video comprenda una sola cámara o punto de vista tendrás un solo panel de visualización. Haz clic en la barra inferior del vídeo del video para mostrar los controles de comentarios.</p>
                <br/>
                <p><img src="images/img-cam-assitant-03.png" alt="CAM Assistant" title="CAM Assistant" /></p>
                <br/>
                <h3 class="off1 primary"><a name="preamble"></a>Consulta la ayuda de la aplicación</h3>
                <br/>
                <p>Consulta la ayuda de la aplicación para conocer todas las opciones de la herramienta.</p>
                <br/>
                <p><img src="images/img-cam-assitant-04.bmp" alt="CAM Assistant" title="CAM Assistant" /></p>
                <br/>
                <h3 class="off1 primary"><a name="preamble"></a>Interactúa con el equipo de desarrollo</h3>
                <br/>
                <p>Cuando hayas creado todos los comentarios que consideres, descarga el fichero de comentarios con la opción "Save Comment". Se descargará un fichero en formato json que nos podrás enviar vía email al equipo de desarrollo.</p>
                <p>Equipo de desarrollo: jjgomez@fdi.ucm.es, marlonca@ucm.es, rpax@ucm.es</p>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include("section/footer.php"); ?>
</div>
</body>
</html>