<!DOCTYPE html>
<html lang="it">
    <head>
        <?php require "head.php";?>
        <link rel="stylesheet" href="home.css?<?php echo time();?>"> <!--refresh forzato del file css con "time()"-->
    </head>
<body>
    <?php require "navbar.html";?>

    <!--Inizio contenuto pagina home-->
    <div class="container-fluid">

        <!--Immagine di copertina-->
        <div class="row riga1">
            <img class="img-fluid copertina" src="images/copertina_crop.jpeg">
        </div>

        <!--Riquadro menu-->
        <div class="row riga riga2">
            <div class="riquadro">
                <h2>SCOPRI IL MENU'</h2>
                <p>Il vero antipasto marchigiano con taglieri di affettati e formaggi selezionati, le nostre fritture miste e una selezione di crostini. Le nostre pizze, salate e dolci, la varietà di hamburger, le nostre tagliate e per concludere i nostri dolci freschi e fatti in casa! Cosa aspetti? Fai la tua scelta e vieni ad assaggiare le nostre delizie!</p>
                <button class="btn" onclick="document.location='menu.php'"><b>MENU'</b></button>
            </div>
        </div>

        <!--Carousel birre alla spina-->
        <div class="row riga riga1">
            <div class="col-md"></div>
            <div class="col-md-6 col-sm-8">

                <h2 style="text-align:center;padding-bottom:20px;">LE NOSTRE BIRRE ALLA SPINA</h2>

                <!--Carosello-->
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-riquadro">
                                <img src="images/birre/hellison_beer.png" alt="Birra1" class="carousel-immagine img-fluid">
                                <h3 style="padding-top:20px;">Birra fratm1</h3>
                                <hr>
                                <p><b>Birrificio:</b> Styles</p>
                                <p><b>Gradazione alcolica:</b> 4.8% Vol</p>
                                <p><b>Descrizione:</b> Helles è uno stile di birra chiara tedesca a bassa fermentazione (ovvero una lager) prodotta per lo più a Monaco, in baviera. Il colore è giallo pagliarino con schiuma bianca pannosa e persistente.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-riquadro">
                                <img src="images/birre/Lilly-Smoke.png" alt="Birra2" class="carousel-immagine img-fluid">
                                <h3 style="padding-top:20px;">Birra fratm1</h3>
                                <hr>
                                <p><b>Birrificio:</b> Styles</p>
                                <p><b>Gradazione alcolica:</b> 4.8% Vol</p>
                                <p><b>Descrizione:</b> Helles è uno stile di birra chiara tedesca a bassa fermentazione (ovvero una lager) prodotta per lo più a Monaco, in baviera. Il colore è giallo pagliarino con schiuma bianca pannosa e persistente.</p>
                            </div>
                            
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-riquadro">
                                <img src="images/birre/PoggieVolpi_cerchiobirre2.jpg" alt="Birra3" class="carousel-immagine img-fluid">
                                <h3 style="padding-top:20px;">Birra fratm1</h3>
                                <hr>
                                <p><b>Birrificio:</b> Styles</p>
                                <p><b>Gradazione alcolica:</b> 4.8% Vol</p>
                                <p><b>Descrizione:</b> Helles è uno stile di birra chiara tedesca a bassa fermentazione (ovvero una lager) prodotta per lo più a Monaco, in baviera. Il colore è giallo pagliarino con schiuma bianca pannosa e persistente.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <i class="freccia-sinistra" style="height:64px;width:64px;color:#404040;"></i>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <i class="freccia-destra" style="height:64px;width:64px;color:#404040;"></i>
                    </a>
                </div>

            </div>
            <div class="col-md"></div>
            
        </div>

        <!--Riquadro contatti-->
        <div class="row riga riga2" id="section-2" >
            <div class="riquadro">
                <h2>VIENI A TROVARCI</h2>
                <p>VIALE TRENTO 97, 63900, FERMO (FM)<br>MARCHE, ITALIA<br>
                <a href="tel:+39 0734226124" style="color: #000000">TELEFONO: +39 0734226124</a><br>
                <a href="tel:+39 3282139611" style="color: #000000">CELLULARE: +39 328 2139611</a></p>
            </div>
        </div>

        <!--Mappa-->
        <div class="row riga1">
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11639.595293407669!2d13.7338154!3d43.1696479!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133211de6dfb01e1%3A0xb8289bf6a854ef0a!2sBistrot83!5e0!3m2!1sit!2sit!4v1681548251873!5m2!1sit!2sit" 
                        width="100" height="100" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div> 
    </div>
    <!--Fine contenuto pagina home-->

    <?php require "footer.html";?>
</body>
</html>