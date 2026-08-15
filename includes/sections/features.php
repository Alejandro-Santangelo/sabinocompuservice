<?php
/**
 * Sección FEATURES (franja de servicios destacados) — SABINO COMPU SERVICE
 * Réplica en PHP nativo de las 8 cajas de la plantilla Home Custom.
 */

$SITE = site_config();
$FEATURES = $SITE['features'];
$colors   = ['fea-color-1', 'fea-color-2', 'fea-color-3', 'fea-color-4',
             'fea-color-5', 'fea-color-6', 'fea-color-7', 'fea-color-7'];
?>
<section id="feature">
    <div class="container">
        <div class="featurebx">
            <div class="contenbx m-0 p-0">
                <div class="row m-0 p-0">
                    <?php foreach ($FEATURES as $i => $feature): ?>
                        <div class="feabx <?php echo esc($colors[$i] ?? 'fea-color-1'); ?>">
                            <div class="feabxinn">
                                <div class="single-fea">
                                    <div class="icnbx">
                                        <i class="<?php echo esc($feature['icon']); ?>"></i>
                                    </div>
                                    <div class="fea-conbx">
                                        <h1><?php echo esc($feature['title']); ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>