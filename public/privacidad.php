<?php
/**
 * ============================================================
 *  POLÍTICA DE PRIVACIDAD — SABINO COMPU SERVICE
 * ============================================================
 *  Página secundaria del sitio PHP nativo (sin WordPress).
 * ============================================================
 */

require __DIR__ . '/../includes/functions.php';

$page_title = 'Política de Privacidad — ' . site_config('site_name');
$BODY_CLASS = 'page-template-default';

require __DIR__ . '/../includes/header.php';
?>

<main id="main" role="main" class="main-content">
    <div class="main-content container">
        <div class="wrapper">

            <div class="entry-content privacy-content">
                <h1>Política de Privacidad</h1>

                <p><strong><?php echo esc(site_config('site_name')); ?></strong> ("Sabino Compu Service") se compromete a proteger la privacidad de los visitantes de este sitio. Esta política explica qué información se recopila y cómo se utiliza.</p>

                <h2>1. Información que recopilamos</h2>
                <p>Este sitio es de carácter informativo. Recopilamos únicamente los datos que nos proporciona de forma voluntaria al contactarnos a través del teléfono, correo electrónico o cualquier formulario disponible.</p>

                <h2>2. Uso de la información</h2>
                <p>La información proporcionada se utiliza exclusivamente para responder sus consultas, brindar presupuestos y coordinar el servicio técnico. No compartimos, vendemos ni alquilamos los datos personales a terceros.</p>

                <h2>3. Almacenamiento y seguridad</h2>
                <p>Los datos se conservan el tiempo necesario para cumplir el servicio solicitado y se protegen con medidas razonables de seguridad.</p>

                <h2>4. Derechos del usuario</h2>
                <p>Usted puede solicitar en cualquier momento el acceso, rectificación o eliminación de sus datos personales contactándonos al correo <?php echo htmlspecialchars(site_config('email')); ?> .</p>

                <h2>5. Enlaces a terceros</h2>
                <p>Este sitio puede contener enlaces a sitios externos. No somos responsables de las políticas de privacidad de dichos sitios.</p>

                <h2>6. Cambios en esta política</h2>
                <p>Nos reservamos el derecho de actualizar esta política de privacidad. Cualquier cambio será publicado en esta página.</p>

                <p><em>Última actualización: agosto de 2026.</em></p>
            </div>

            <div class="clear"></div>
        </div>
    </div>
</main>

<?php require __DIR__ . '/../includes/footer.php'; ?>