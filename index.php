<!DOCTYPE html>
<html lang="it">
    <head>
        <?php require "head.php";?>
        <link rel="stylesheet" href="home.css?<?php echo time();?>">
    </head>
<body>
    <?php require "navbar.html";?>

    <img class="img-fluid copertina" src="images/copertina_crop.jpeg">

    <div class="container-fluid">
        <div class="row riga riga1">
            <div class="riquadro">
                <h2>SCOPRI IL MENU'</h2>
                <p>Il vero antipasto marchigiano con taglieri di affettati e formaggi selezionati, le nostre fritture miste e una selezione di crostini. Le nostre pizze, salate e dolci, la varietà di hamburger, le nostre tagliate e per concludere i nostri dolci freschi e fatti in casa! Cosa aspetti? Fai la tua scelta e vieni ad assaggiare le nostre delizie!</p>
                <button href="#"><b>MENU'<b></button>
            </div>
        </div>
        <div class="row riga riga1">
            <div class="riquadro">
                <h2>VIENI A TROVARCI</h2>
                <p>VIALE TRENTO 97, 63900, FERMO (FM)</p>
                <p>MARCHE, ITALIA</p>
                <p>TELEFONO: +39 0734226124</p>
                <p>WHATSAPP: +39 328 2139611
                </p>
            </div>
        </div>
        <div class="row riga riga1">
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11639.595293407669!2d13.7338154!3d43.1696479!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133211de6dfb01e1%3A0xb8289bf6a854ef0a!2sBistrot83!5e0!3m2!1sit!2sit!4v1681548251873!5m2!1sit!2sit" 
                        width="100" height="100" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div> 
    </div>

    <?php require "footer.html";?>
</body>
</html>