<!DOCTYPE html>
<html lang="en">
<head>
    <title data-i18n="title.contactanos">HackWithPeople - Cont&aacute;ctanos</title>
    <?php include("section/html_import.php"); ?>
</head>
<body>
<div class="page">
    <!-- HEADER -->
    <?php include("section/header.php"); ?>

    <!--
    ========================================================
                                CONTENIDO
    ========================================================
    -->

    <main>
        <section class="well3">
            <div class="container">
                <hr>
                <ul class="row contact-list2">
                    <li class="grid_3">
                        <h3>Facultad de Informática</h3><a href="#">+34 91-394-7501&nbsp;+34 91-394-7599</a>
                        <dl>
                            <dt>Lunes - Viernes:</dt>
                            <dd>9am-5pm</dd>
                        </dl>
                    </li>
                    <li class="grid_3">
                        <h3>Jorge Gómez Sanz</h3><a href="#">jjgomez@fdi.ucm.es</a>
                        <dl>
                            <dt></dt>
                            <dd></dd>
                        </dl>
                    </li>
                    <li class="grid_3">
                        <h3>Juan Pavón</h3><a href="#">jpavon@ucm.es</a>
                        <dl>
                            <dt></dt>
                            <dd></dd>
                        </dl>
                    </li>
                    <li class="grid_3">
                        <h3>GRASIA</h3><a href="#">grasia@ucm.es</a>
                        <dl>
                            <dt></dt>
                            <dd></dd>
                        </dl>
                    </li>
                </ul>
                <hr>
                <!--ul class="row contact-list">
                    <li class="grid_4">
                        <div class="box">
                            <div class="box_aside">
                                <div class="icon2 fa-map-marker"></div>
                            </div>
                            <div class="box_cnt__no-flow">
                                <address>Calle Profesor Jos&eacute; Garc&iacute;a Santesmases, 9<br/> 28040 Madrid</address>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box_aside">
                                <div class="icon2 fa-envelope"></div>
                            </div>
                            <div class="box_cnt__no-flow"><a href="#">grasia@ucm.es</a></div>
                        </div>
                    </li>
                    <li class="grid_4">
                        <div class="box">
                            <div class="box_aside">
                                <div class="icon2 fa-phone"></div>
                            </div>
                            <div class="box_cnt__no-flow"><a href="#">+34 91-394-7501</a></div>
                        </div>
                        <div class="box">
                            <div class="box_aside">
                                <div class="icon2 fa-fax"></div>
                            </div>
                            <div class="box_cnt__no-flow"><a href="#">+ 34 91-394-7599</a></div>
                        </div>
                    </li>
                    <li class="grid_4">
                        <div class="box">
                            <div class="box_aside">
                                <div class="icon2 fa-facebook"></div>
                            </div>
                            <div class="box_cnt__no-flow"><a href="https://es-es.facebook.com/UniComplutense/" target="_blank">Follow on facebook</a></div>
                        </div>
                        <div class="box">
                            <div class="box_aside">
                                <div class="icon2 fa-twitter"></div>
                            </div>
                            <div class="box_cnt__no-flow"><a href="https://twitter.com/unicomplutense?lang=es" target="_blank">Follow on Twitter</a></div>
                        </div>
                    </li>
                </ul-->
            </div>
        </section>
        <section class="well1">
            <div class="container">
                <h2>Feedback</h2>
                <!-- < ? php if ($_GET['notify'] == 1){ ?>
                    <div class="alert alert-success fade in">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Listo!</strong> Su mensaje ha sido enviado correctamente.
                    </div>
                < ? php } else { ?>
                <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Lo sentimos!</strong> Su mensaje no ha sido posible enviarlo.
                </div>
                < ? php }  ?> -->
                <form data-toggle="validator" action="mail.php" class="mailform off2" method="POST" role="form">
                    <input type="hidden" name="form-type" value="contact">
                    <fieldset class="row">
                        <label class="grid_4">
                            <input required type="text" id="name" name="name" placeholder="Nombre:*"
                                   data-constraints="@LettersOnly @NotEmpty">
                        </label>
                        <label class="grid_4">
                            <input type="text" id="phone" name="phone" placeholder="Telefono:" data-constraints="@Phone">
                        </label>
                        <label class="grid_4">
                            <input required type="text" id="email" name="email" placeholder="Email:*" data-constraints="@Email @NotEmpty">
                        </label>
                        <label class="grid_12">
                            <textarea required id="message" name="message" placeholder="Mensaje:*" data-constraints="@NotEmpty"></textarea>
                        </label>
                        <div class="mfControls grid_12">
                            <button type="submit" class="btn">Enviar</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include("section/footer.php"); ?>
</div>
</body>
</html>