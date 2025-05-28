<?php
$titulo = "DRAP SATEN - Colcón Bio Latex Crino";
    $pagina = basename($_SERVER['PHP_SELF'],'.php');
$claseBody = $pagina;
ob_start();
?>


<section class="producto">
  <div class="producto__fila">
    
    <div class="producto__columna producto__columna--imagen">
      <img src="/WEB_DRAPSATEN/img/productos/biolatexcrino_principal" alt="Colchón Bio Latex Crino" class="producto__imagen" />
    </div>

    <div class="producto__columna producto__columna--contenido">
      <h1 class="producto__titulo">Colchón Bio Latex Crino</h1>
      <p class="producto__descripcion">
        El colchón Bio Latex Crino está fabricado con materiales 100% naturales. Ofrece una firmeza media-alta y gran adaptabilidad, ideal para quienes buscan descanso ecológico y saludable.
      </p>
    </div>

  </div>
</section>




<?php 
$contenido = ob_get_clean();
include __DIR__ . '/../includes/layout.php';
?>