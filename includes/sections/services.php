<?php
/**
 * Sección SERVICIOS — SABINO COMPU SERVICE
 * Réplica en PHP nativo de la sección "ourservices" del Home Custom.
 */

$SITE = site_config();
?>
<section id="ourservices-section">
    <div class="container">
        <div class="titlebx">
            <h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-5 h-5 text-[#0066FF]"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg>
                <span><?php echo esc($SITE['services_subheading']); ?></span>
            </h5>
            <h2>
                <?php echo esc($SITE['services_heading']); ?>
                <span><?php echo esc($SITE['services_heading_span']); ?></span>
            </h2>
            <p><?php echo esc($SITE['services_description']); ?></p>
        </div>
    </div>

    <div class="container">
        <div class="ourservices-container">
            <div class="row m-0 p-0">
                <?php foreach ($SITE['services'] as $service): ?>
                    <div class="col-12 col-md-4 serbx">
                        <div class="ourservices-box">
                            <?php if (!empty($service['image'])): ?>
                                <div class="imgbx">
                                    <div class="ourservices-img">
                                        <img src="<?php echo esc($service['image']); ?>" alt="<?php echo esc($service['title']); ?>">
                                        <div class="ser-oly"></div>
                                    </div>
                                    <div class="b-box">
                                        <div class="row m-0 p-0">
                                            <div class="day"><i class="fa-regular fa-clock"></i> <?php echo esc($service['badge1'] ?? 'Consultar Tiempos'); ?></div>
                                            <div class="w-rty"><i class="far fa-check-circle"></i> <?php echo esc($service['badge2'] ?? 'Garantía'); ?></div>
                                        </div>
                                    </div>
                                    <div class="ourservices-content">
                                        <a href="index.php#ourservices-section">
                                            <div class="title"><?php echo esc($service['title']); ?></div>
                                        </a>
                                        <div class="ourservices-description">
                                            <?php echo esc($service['description']); ?>
                                        </div>
                                        <div class="s-btn">
                                            <a href="#contactar" class="js-contact-open" data-service="<?php echo esc($service['title']); ?>">
                                                Solicitar Presupuesto <i class="fa-solid fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="ourservices-content">
                                    <a href="#">
                                        <div class="title"><?php echo esc($service['title']); ?></div>
                                    </a>
                                    <div class="ourservices-description">
                                        <?php echo esc($service['description']); ?>
                                    </div>
                                    <div class="s-btn">
                                        <a href="#contactar" class="js-contact-open" data-service="<?php echo esc($service['title']); ?>">
                                            Solicitar Presupuesto <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>