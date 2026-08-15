<?php
/**
 * ============================================================
 *  INICIO — SABINO COMPU SERVICE
 * ============================================================
 *  Página principal del sitio PHP nativo (sin WordPress).
 * ============================================================
 */

require __DIR__ . '/../includes/functions.php';

$page_title = site_config('site_name');          // Título de la pestaña
$BODY_CLASS = 'home page-template-home';

require __DIR__ . '/../includes/header.php';
?>

<main id="main" role="main">

    <!-- Portada / Hero -->
    <?php require __DIR__ . '/../includes/sections/hero.php'; ?>

    <!-- Franja de features (8 servicios destacados) -->
    <?php require __DIR__ . '/../includes/sections/features.php'; ?>

    <!-- Servicios -->
    <?php require __DIR__ . '/../includes/sections/services.php'; ?>

</main>

<?php require __DIR__ . '/../includes/footer.php'; ?>