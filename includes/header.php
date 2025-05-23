<nav class="navbar">
  <h1 class="navbar__logo">Drap Saten</h1>
  <ul class="navbar__links">
    <li class="navbar__item <?= basename($_SERVER['PHP_SELF']) === 'index.php' ? 'navbar__item--active' : '' ?>">
      <a href="/WEB_DRAPSATEN/index.php" class="navbar__link">Home</a>
    </li>
    <li class="navbar__item <?= basename($_SERVER['PHP_SELF']) === 'nosotros.php' ? 'navbar__item--active' : '' ?>">
      <a href="/WEB_DRAPSATEN/nosotros.php" class="navbar__link">Nosotros</a>
    </li>
    <li class="navbar__item <?= basename($_SERVER['PHP_SELF']) === 'catalogo.php' ? 'navbar__item--active' : '' ?>">
      <a href="/WEB_DRAPSATEN/catalogo.php" class="navbar__link">Catálogo</a>
    </li>
    <li class="navbar__item">
      <a href="#contacto" class="button">Contacto</a>
    </li>
  </ul>
  <img src="/WEB_DRAPSATEN/img/menu-btn.png" alt="Menú" class="navbar__menu-btn" />
</nav>
