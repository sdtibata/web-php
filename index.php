<?php require __DIR__ . '/controllers/ProductoController.php'; ?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Café Aurora · Café de origen colombiano</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<header class="bg-white shadow-sm">
  <nav class="navbar navbar-expand-md container">
    <a class="navbar-brand fw-bold" href="#">☕ Café Aurora</a>
    <div class="navbar-nav ms-auto">
      <a class="nav-link" href="#nosotros">Nosotros</a>
      <a class="nav-link" href="#menu">Menú</a>
      <a class="nav-link" href="#galeria">Galería</a>
      <a class="nav-link" href="#contacto">Contacto</a>
    </div>
  </nav>
</header>

<section class="hero p-0">
  <div id="carrusel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active"><img src="img/cafe-1.jpg" class="d-block w-100" alt="Taza de café"></div>
      <div class="carousel-item"><img src="./img/cafe-2.jpg" class="d-block w-100" alt="Granos de café"></div>
      <div class="carousel-item"><img src="https://picsum.photos/id/766/1200/600" class="d-block w-100" alt="Cafetería"></div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
    <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
  </div>
  <div class="container text-center py-5"><h1 class="display-5 fw-bold">Café de origen, tostado cada semana</h1></div>
</section>

<section id="nosotros">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-md-6" data-aos="fade-right">
        <h2>Nosotros</h2>
        <p>Trabajamos con fincas del Huila y del Cauca. Compramos directo, tostamos en pequeños lotes y servimos el café fresco.</p>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <img src="https://picsum.photos/id/425/700/450" class="img-fluid rounded" alt="Barista preparando café">
      </div>
    </div>
  </div>
</section>

<section id="servicios" class="bg-white">
  <div class="container">
    <h2 class="text-center mb-4">Lo que hacemos</h2>
    <div class="row g-4">
      <div class="col-md-4" data-aos="zoom-in"><div class="card tarjeta h-100 p-3"><h3 class="h5">Barra de métodos</h3><p>V60, Chemex y prensa francesa.</p></div></div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100"><div class="card tarjeta h-100 p-3"><h3 class="h5">Café para llevar</h3><p>Bolsas de 250 g y 500 g molidas a tu gusto.</p></div></div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200"><div class="card tarjeta h-100 p-3"><h3 class="h5">Talleres</h3><p>Aprende a preparar café de especialidad en casa.</p></div></div>
    </div>
  </div>
</section>

<section id="menu">
  <div class="container">
    <h2 class="mb-4">Menú</h2>
    <?php require __DIR__ . '/views/productos.php'; ?>
  </div>
</section>

<section id="galeria" class="bg-white">
  <div class="container">
    <h2 class="mb-4">Galería</h2>
    <div class="row g-3 galeria">
      <div class="col-6 col-md-3"><img src="img/cafe-1.jpg" class="img-fluid rounded" alt="Café Aurora"></div>
      <div class="col-6 col-md-3"><img src="img/cafe-2.jpg" class="img-fluid rounded" alt="Granos"></div>
      <div class="col-6 col-md-3"><img src="https://picsum.photos/id/1060/400/300" class="img-fluid rounded" alt="Preparación"></div>
      <div class="col-6 col-md-3"><img src="https://picsum.photos/id/312/400/300" class="img-fluid rounded" alt="Taza"></div>
    </div>
  </div>
</section>

<section id="testimonios">
  <div class="container text-center" data-aos="fade-up">
    <h2>Lo que dicen nuestros clientes</h2>
    <p class="lead">Sección de ejemplo para el proyecto de clase.</p>
  </div>
</section>

<section id="contacto" class="bg-white">
  <div class="container">
    <h2>Contacto</h2>
    <p>Calle 10 # 5-20, Bogotá · Lunes a sábado, 7:00 a. m. a 7:00 p. m.</p>
  </div>
</section>

<footer class="py-4 text-center">
  <small>Café Aurora · Proyecto de clase Web 26-2</small>
</footer>

<a class="whatsapp" href="https://wa.me/573000000000" target="_blank" aria-label="WhatsApp">WA</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/app.js"></script>
</body>
</html>
