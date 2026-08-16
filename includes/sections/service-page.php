<?php
/**
 * ============================================================
 *  PARTIAL: PÁGINA DE SERVICIO — SABINO COMPU SERVICE
 * ============================================================
 *  Layout común de las páginas individuales de servicio.
 *  Espera la variable $SERVICE con: icon, title, desc, highlights.
 * ============================================================
 */

$SITE      = site_config();
$wa_number = preg_replace('/[^0-9]/', '', $SITE['whatsapp'] ?? $SITE['phone_link'] ?? '');
$wa_msg    = ($SITE['whatsapp_msg'] ?? 'Hola, quiero solicitar un presupuesto.') . ' Servicio: ' . ($SERVICE['title'] ?? '');
?>
<main id="main" role="main" class="main-content">
    <div class="main-content container">
        <div class="wrapper">
            <div class="entry-content service-page">

                <nav class="service-breadcrumb" aria-label="Miga de pan">
                    <a href="index.php">Inicio</a> <span aria-hidden="true">›</span>
                    <span><?php echo esc($SERVICE['title'] ?? ''); ?></span>
                </nav>

                <div class="service-card">
                    <div class="service-card__icon">
                        <i class="<?php echo esc($SERVICE['icon'] ?? 'fa-solid fa-gear'); ?>"></i>
                    </div>
                    <h1><?php echo esc($SERVICE['title'] ?? ''); ?></h1>
                    <p class="service-card__desc"><?php echo esc($SERVICE['desc'] ?? ''); ?></p>

                    <?php if (!empty($SERVICE['highlights'])): ?>
                        <ul class="service-card__list">
                            <?php foreach ($SERVICE['highlights'] as $item): ?>
                                <li><i class="fa-solid fa-circle-check"></i> <?php echo esc($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="service-card__actions">
                        <a class="service-btn service-btn--primary js-contact-open" href="#contactar" data-service="<?php echo esc($SERVICE['title'] ?? ''); ?>">
                            Solicitar Presupuesto <i class="fas fa-arrow-right"></i>
                        </a>
                        <a class="service-btn service-btn--wa" href="https://wa.me/<?php echo esc($wa_number); ?>?text=<?php echo rawurlencode($wa_msg); ?>" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-whatsapp"></i> WhatsApp <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <a class="service-back" href="index.php"><i class="fas fa-arrow-left"></i> Volver a Inicio</a>
                </div>

            </div>
            <div class="clear"></div>
        </div>
    </div>
</main>
