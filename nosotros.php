<?php
    $titulo = "Drap Saten - Nosotros";
    $pagina = basename($_SERVER['PHP_SELF'],'.php');
    $claseBody = $pagina;
    ob_start();
?>

<section class="intro">
    <div class="intro-titulo">
        <p>hola</p>
    </div>
</section>

<?php


$contenido = ob_get_clean();
include 'includes/layout.php';
?>


