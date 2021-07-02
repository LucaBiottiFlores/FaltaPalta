<?php
/*
Template Name: Página HTML inicio
*/
?>
<!-- Aqui irá el código HTML -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falta Palta</title>
    <!--Hoja de estilos-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!--Google Fonts-->
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/36dbeb1a64.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="grid-container">    

    <header class="header" data-grid-area="header">
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #e98062;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">FaltaPalta</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <!--navbar end-->
    </header>
    <section class="hero" data-grid-area="hero">
      <!--Carousel-->
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="carousel-img" src="assets/img/carusel_1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img class="carousel-img" src="assets/img/carusel_2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img class="carousel-img" src="assets/img/carusel_3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!--Carousel End-->
    </section>
    <section class="about" data-grid-area="about"></section>
    <section class="music" data-grid-area="music"></section>
    <footer class="footer" data-grid-area="footer"></footer>

</div>





<!--Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>