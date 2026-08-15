<?php
/**
 * Sección HERO (portada) — SABINO COMPU SERVICE
 * Réplica del "slider" de la plantilla Home Custom en PHP nativo.
 */

$SITE = site_config();
?>
<section id="slider" class="mw-100">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="row m-0 p-0">
                    <div class="sliderbg-img">
                        <img src="<?php echo esc($SITE['hero_image']); ?>" alt="<?php echo esc($SITE['hero_title']); ?>">
                        <div class="grid-overlay"></div>
                        <div class="s-oly"></div>
                    </div>
                    <div class="slider-content">
                        <h2><?php echo $SITE['hero_title']; ?></h2>
                        <p><?php echo esc($SITE['hero_text']); ?></p>
                        <div class="read-btn">
                            <a class="btn1 js-contact-open" href="#contactar">
                                <?php echo esc($SITE['hero_btn1_text']); ?> <i class="fas fa-arrow-right"></i>
                            </a>
                            <a class="btn2" href="<?php echo esc($SITE['hero_btn2_link']); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <?php echo esc($SITE['hero_btn2_text']); ?>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>