<html lang="it">
    <head>
        <?php require "head.php";?>
        <link rel="stylesheet" href="galleria.css"<?php echo time();?>> <!--refresh forzato del file css con "time()"-->
    </head>

<body>
  <?php require "navbar.html";?>
<!-- Container for the image gallery -->
  <div class="carousel-container">

    <!-- Full-width images with number text -->
    <div class="mySlides">
      <div class="numbertext">1 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">9 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">10 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">11 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">12 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">13 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">14 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">15 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">16 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">17 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">18 / 18</div>
        <img src="images/copertina.jpeg" style="width:100%">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" style="text-decoration: none" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" style="text-decoration: none" onclick="plusSlides(1)">&#10095;</a>

    <!-- Image text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail images -->
    <div class="row">
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(1)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(2)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(3)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(4)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg"style="width:100%" onclick="currentSlide(5)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(6)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(7)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(8)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(9)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(10)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(11)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(12)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(13)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(14)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(15)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(16)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(17)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/copertina.jpeg" style="width:100%" onclick="currentSlide(18)" alt="">
      </div>
    </div>
  </div>

  <?php require "footer.html";?>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("demo");
      let captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
  </script>
    
</body>
</html>