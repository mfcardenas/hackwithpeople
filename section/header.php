<!--
********************************************************
                            CABECERA
********************************************************
-->
<?php require_once "function/function.php"; ?>
<header>
    <div class="container">
        <div id="brand" class="brand">
            <h1 class="brand_name"><a href="./"><img src="images/logo.png"/> HackWithPeople</a></h1>
            <p class="brand_slogan" data-i18n="brand.subtitle">Tecnología con y para la gente</p>
        </div>
        <p>&nbsp;</p>
    </div>
    <div id="stuck_container" class="stuck_container">
        <div id="menu" class="container">
            <nav class="nav">
                <ul data-type="navbar" class="sf-menu">
                    <li id="index_" class="<?php echo getActivate("in"); ?>">
                        <a href="index.php?ac=in" data-i18n="menu.index">Inicio</a>
                    </li>
                    <li id="about_" class="<?php echo getActivate("ab"); ?>">
                        <a href="about.php?ac=ab" data-i18n="menu.about">Quiénes somos</a>
                    </li>
                    <li id="casos_practicos_" class="<?php echo getActivate("cp"); ?>">
                        <a href="casos_practicos.php?ac=cp" data-i18n="menu.casospracticos">Casos Pr&aacute;cticos</a>
                    </li>
                    <li id="licencia_" class="<?php echo getActivate("li"); ?>">
                        <a href="licence.php?ac=li" data-i18n="menu.licencia">Licencia</a>
                    </li>
                    <li id="contactanos_" class="<?php echo getActivate("co"); ?>">
                        <a href="contacta.php?ac=co" data-i18n="menu.contactanos">Cont&aacute;ctanos</a>
                    </li>
                    <li>
                        <a href="javascript:traslateLang('en');">
                            <img width="25" height="25" class="lang" src="images/img_uk_b.png" title="Language English" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:traslateLang('es');">
                            <img width="25" height="25" class="lang" src="images/img_spain_a.png" title="Language Spain" />
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>