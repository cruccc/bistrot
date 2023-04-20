<!DOCTYPE html>
<html lang="it">
    <head>
        <?php require "head.php";?>
        <link rel="stylesheet" href="home.css?<?php echo time();?>"> <!--refresh forzato del file css con "time()"-->
    </head>
<body>
    <?php require "navbar.html";?>

    <!--Inizio contenuto pagina menu-->
    <div class="container-fluid">
         <!--Mappa-->
         <div class="row riga1">
            <div class="google-maps" style="margin-top:100px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11639.595293407669!2d13.7338154!3d43.1696479!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133211de6dfb01e1%3A0xb8289bf6a854ef0a!2sBistrot83!5e0!3m2!1sit!2sit!4v1681548251873!5m2!1sit!2sit" 
                        width="100" height="100" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div> 
    </div> 
    <!--Fine contenuto pagina menu-->

    <?php require "footer.html";?>
</body>
</html>