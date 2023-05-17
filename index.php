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
            <img class="img-fluid copertina" src="images/copertina_nirvana_crop.jpg">
        </div>

        <!--Riquadro menu-->
        <div class="row riga riga2">
            <div class="riquadro">
                <h2>SCOPRI IL MENU'</h2>
                <p>Siete pronti per un'esperienza gastronomica indimenticabile? Benvenuti nel nostro pub, dove la pizza è la regina indiscussa del menù!
                    Abbiamo una vasta selezione che va dalle classiche pizze bianche e rosse ai nostri incredibili calzoni. La nostra focaccia è cotta al forno a legna e farcita con ingredienti freschi e deliziosi, mentre i nostri calzoni sono una vera e propria festa per il palato, ripieni di formaggi fusi, verdure croccanti e carni gustose</p>
                    <a href="https://www.leggimenu.it/menu/79sk3f2o85q1/150361" target="_blank" style="text-decoration: none; color: black" class="my-btn"><b>MENU'</b></a>
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
                                <h3 style="padding-top:20px;">Birra 1</h3>
                                <hr>
                                <p><b>Birrificio:</b> Styles</p>
                                <p><b>Gradazione alcolica:</b> 4.8% Vol</p>
                                <p><b>Descrizione:</b> Helles è uno stile di birra chiara tedesca a bassa fermentazione (ovvero una lager) prodotta per lo più a Monaco, in baviera. Il colore è giallo pagliarino con schiuma bianca pannosa e persistente.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-riquadro">
                                <img src="images/birre/Lilly-Smoke.png" alt="Birra2" class="carousel-immagine img-fluid">
                                <h3 style="padding-top:20px;">Birra 2</h3>
                                <hr>
                                <p><b>Birrificio:</b> Styles</p>
                                <p><b>Gradazione alcolica:</b> 4.8% Vol</p>
                                <p><b>Descrizione:</b> Helles è uno stile di birra chiara tedesca a bassa fermentazione (ovvero una lager) prodotta per lo più a Monaco, in baviera. Il colore è giallo pagliarino con schiuma bianca pannosa e persistente.</p>
                            </div>
                            
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-riquadro">
                                <img src="images/birre/PoggieVolpi_cerchiobirre2.jpg" alt="Birra3" class="carousel-immagine img-fluid">
                                <h3 style="padding-top:20px;">Birra 3</h3>
                                <hr>
                                <p><b>Birrificio:</b> Styles</p>
                                <p><b>Gradazione alcolica:</b> 4.8% Vol</p>
                                <p><b>Descrizione:</b> Helles è uno stile di birra chiara tedesca a bassa fermentazione (ovvero una lager) prodotta per lo più a Monaco, in baviera. Il colore è giallo pagliarino con schiuma bianca pannosa e persistente.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-riquadro">
                                <img src="images/birre/PoggieVolpi_cerchiobirre2.jpg" alt="Birra3" class="carousel-immagine img-fluid">
                                <h3 style="padding-top:20px;">Birra 4</h3>
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
              
                <div style="display: flex; justify-content: center; padding-top: 60px">
                    <a href="https://www.leggimenu.it/menu/nirvana-da-safi/151313" target="_blank" style="text-decoration: none; color: black" class="my-btn"><b>SCOPRI TUTTE LE BIRRE</b></a>
                </div>
            </div>
            <div class="col-md"></div>
            
        </div>

        <!--Riquadro orari-->
        <div class="row riga riga2">
            <div class="riquadro" style="background-color:#faf8f6;">
                <img class="img-fluid" src="images/orari.png">
            </div>
        </div>

        <!--Riquadro contatti-->
        <div class="row riga riga1">
            <?php require "vieni-a-trovarci.html";?>
        </div>

        <!--Mappa-->
        <div class="row riga1">
            <?php require "mappa.html";?>
        </div> 
    </div>
    <!--Fine contenuto pagina home-->

    <?php require "footer.html";?>
</body>
</html>