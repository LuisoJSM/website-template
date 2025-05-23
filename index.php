<?php $titulo = "Inicio - Drap Saten"; ?>
<!DOCTYPE html>
<html lang="es">
<?php include 'includes/head.php'; ?>
<body class="home">
<?php include 'includes/header.php'; ?>

<!-- HERO -->
<header class="hero">
  <div class="hero__content">
    <h2 class="hero__subtitle">Colchones Suizos</h2>
    <div class="line"></div>
    <h1 class="hero__title">DRAP SATEN</h1>
    <a href="/WEB_DRAPSATEN/catalogo.php" class="button">Ver Productos</a>
  </div>
</header>

<!-- SOBRE LA MARCA -->
<section class="brand">
  <div class="brand__title">
    <h2 class="brand__title-text">Confía en el descanso suizo</h2>
    <div class="line"></div>
    <p class="brand__intro">
      Drap Saten nace de la tradición suiza por el descanso bien hecho.  
      Diseñamos colchones pensando en la salud, la durabilidad y la calidad del sueño de quienes los disfrutan.
    </p>
  </div>

  <div class="brand__row">
    <div class="brand__col">
      <img src="/WEB_DRAPSATEN/img/img1.png" alt="Colchón premium Drap Saten" class="brand__img" />
      <h4 class="brand__heading">Materiales de alta gama</h4>
      <p class="brand__text">
        Cada colchón está fabricado con materiales seleccionados por su resistencia, confort y transpirabilidad. 
        Porque el buen descanso empieza por una buena base.
      </p>
      <a href="/WEB_DRAPSATEN/catalogo.php" class="button brand__button">Leer Más</a>
    </div>

    <div class="brand__col">
      <img src="/WEB_DRAPSATEN/img/img1.png" alt="Detalle de costura artesanal" class="brand__img" />
      <h4 class="brand__heading">Diseño cuidado al detalle</h4>
      <p class="brand__text">
        Fusionamos tecnología y artesanía para ofrecer productos únicos.  
        El resultado: colchones que se adaptan a ti y a tu forma de dormir.
      </p>
      <a href="/WEB_DRAPSATEN/catalogo.php" class="button brand__button">Leer Más</a>
    </div>
  </div>
</section>

<!-- MATERIALS -->
<section class="materials">
  <div class="materials__row">
    <div class="materials__col-text">
      <div class="materials__title">
        <h2 class="materials__title-text">Los materiales más nobles</h2>
        <div class="line"></div>
        <p class="materials__description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ab dolorem officia totam expedita dignissimos excepturi voluptatibus tempore nisi.
        </p>
      </div>
    </div>

    <div class="materials__col-images">
      <img src="/WEB_DRAPSATEN/img/coco_essenzia.webp" alt="Imagen 1" class="materials__image materials__image--1" />
      <img src="/WEB_DRAPSATEN/img/lana_essenzia.webp" alt="Imagen 2" class="materials__image materials__image--2" />
      <img src="/WEB_DRAPSATEN/img/materiales_naturales.webp" alt="Imagen 3" class="materials__image materials__image--3" />
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
