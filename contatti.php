
<!DOCTYPE html>
<html lang="it">
    <head>
        <?php require "head.php";?>
        <link rel="stylesheet" href="home.css?<?php echo time();?>"> <!--refresh forzato del file css con "time()"-->
    </head>
<body>
    <?php require "navbar.html";?>
    

    <!--Inizio contenuto pagina contatti-->
    
    <div class="container-fluid">
        <!--Riquadro contatti-->
        <div class="row riga1" style="padding-top:35px; padding-bottom: 20px">
            <div style="margin: auto;">
                <h2 style="font-size: 49px;">Contatti</h2>
            </div>
        </div>
        <div class="row riga1" style="padding-bottom:60px;">
            <div style="margin: auto;">
                <div class="riquadro">
                    <h2 style= "font-size: 49px;">VIENI A TROVARCI</h2>
                    <p style= "font-size: 20px;">
                        VIALE TRENTO 97, 63900, FERMO (FM)<br>MARCHE, ITALIA<br>
                        <a href="tel:+39 0734226124" style="color: #000000">TELEFONO: +39 0734226124</a><br>
                        <a href="tel:+39 3282139611" style="color: #000000">CELLULARE: +39 328 2139611</a>
                    </p>
                </div>
            </div>
        </div>
        
         <!--Mappa-->
        <div class="row riga2">
            <?php require "mappa.html";?>  
        </div>
    </div>
    <!--Fine contenuto pagina contatti-->

    <?php require "footer.html";?>
</body>
</html>