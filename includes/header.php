<?php
/**
 * ============================================================
 *  HEADER / LAYOUT (arriba) — SABINO COMPU SERVICE
 * ============================================================
 *  Plantilla común reescrita en PHP nativo (sin WordPress).
 *  Copia el aspecto del tema "Expert Computer Repair".
 * ============================================================
 */

$SITE  = site_config();                       // Configuración global
$COL   = $SITE['colors'];
$TITLE = $page_title ?? $SITE['site_name'];   // Título de la pestaña
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo esc($TITLE); ?></title>
    <meta name="description" content="<?php echo esc($SITE['site_tagline']); ?>">

    <!-- Tipografías -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Averia+Serif+Libre:wght@300;400;700&family=Montserrat:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/animations.css">

    <!-- Estilos personalizados (colores del customizer original) -->
    <style>
        body {
            background-color: <?php echo esc($COL['body_background']); ?>;
            background-image: url('<?php echo esc($SITE['hero_image']); ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: left top;
            max-width: 100%;
        }
        .logo h1 a, .logo p.site-title a { color: <?php echo esc($COL['site_title_color']); ?>; }
        .logo p.site-description      { color: <?php echo esc($COL['site_tagline_color']); ?>; }
        .site-logo img                { width: 122px !important; height: 122px !important; border-radius: 50% !important; object-fit: cover; }

        /* ===== Layout del encabezado: logo + título en la misma línea, descripción debajo ===== */
        #header .logobx .logo {
            display: flex !important;
            align-items: center;
            gap: 14px;
        }
        #header .logobx .site-logo { flex: 0 0 auto; }
        #header .logobx .site-branding {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 2px;
            min-width: 0;
        }
        #header .logobx .site-title        { margin: 0; line-height: 1.15; white-space: nowrap; }
        #header .logobx .site-description { margin: 0; }
        #header .logobx .logo .site-title,
        #header .logobx .logo .site-title a { font-size: 32px; }

        /* En móviles chicos, apilar (logo arriba, textos abajo) */
        @media (max-width: 600px) {
            #header .logobx .logo { flex-direction: column; align-items: flex-start; }
            #header .logobx .site-title { white-space: normal; }
        }

        /* Anchos del header en desktop (repetidos acá para evitar caché del CSS externo) */
        @media (min-width: 992px) {
            #header .logobx_m { width: 42%; }
            #header .m-mnu   { width: 44%; }
        }

        #header .top-header           { background: <?php echo esc($COL['tophead_bg']); ?>; }
        #header .phonenum a i,
        .top-header .hlbx .email a i  {
            background: <?php echo esc($COL['tophead_icon_bg']); ?>;
            color: <?php echo esc($COL['tophead_icon_text']); ?>;
        }
        .hmbxinn,
        .hmbxinn svg                  { color: <?php echo esc($COL['tophead_texticon_color']); ?>; }
        .top-header .timbx            { color: <?php echo esc($COL['tophead_text_color']); ?>; }
        .top-header .socialicons a i  { background: <?php echo esc($COL['social_icon_color']); ?>; color: #fff; }

        .m-btn .bttn2                 { color: <?php echo esc($COL['button_text_color']); ?>; }
        .m-btn .bttn2:hover           { background: <?php echo esc($COL['button_hover_bg']); ?>; }

        #footer-section .copyright p  { color: <?php echo esc($COL['footer_text_color']); ?>; }

        h1 { font-size: <?php echo esc($COL['h1_font_size'] ?? '60'); ?>px; }
        li { font-family: 'Averia Serif Libre', serif; }

        /* ===== Menú principal: texto blanco (hover igual que el theme) ===== */
        .page-template-home-custom #header,
        #header { background: transparent; }
        #header .m-mnu .primary-navigation a,
        .primary-navigation a {
            color: #ffffff;
        }
        .primary-navigation a:hover,
        .primary-navigation a:focus,
        .primary-navigation .current_page_item a {
            color: #0066FF;   /* mismo color del hover original */
        }

        /* ===== Hero: título en una sola línea, tamaño balanceado ===== */
        #slider .slider-content {
            top: 34%;
            left: 4%;
            max-width: 92%;
        }
        #slider .slider-content h2 {
            font-size: clamp(26px, 3vw, 56px);
            font-weight: 900;
            line-height: 1.15;
            letter-spacing: 0;
            text-transform: none;
            white-space: nowrap;
        }
        #slider .slider-content p {
            font-size: clamp(20px, 1.8vw, 28px);
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0.5px;
            margin: 1em 0 0.5em;
        }
        @media (max-width: 1200px) {
            #slider .slider-content h2 {
                white-space: normal;
                font-size: clamp(22px, 5vw, 42px);
            }
            #slider .slider-content p {
                font-size: clamp(17px, 3vw, 26px);
            }
            #slider .slider-content { max-width: 96%; }
        }

        /* ===== Hero: foto de fondo más baja (sección más compacta) ===== */
        @media (min-width: 1201px) {
            #slider,
            #slider .sliderbg-img img { height: 450px; }
            #slider .slider-content { top: 28%; }
        }

        /* ===== Página secundaria: mismos textos pero con colores intensos ===== */
        /* Se mantiene el fondo original; solo se intensifica el color del texto. */
        .entry-content h1,
        .entry-content p,
        .entry-content h2,
        .entry-content strong,
        .entry-content em {
            color: #ffffff;               /* blanco puro (el gris #999 apagado se vuelve blanco) */
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.35);
        }
        .entry-content h1 {
            color: #ffffff !important;
            font-size: 28px !important;
            font-weight: 800;
            margin: 0 0 1rem 0;
            padding: 0;
            background: none;
            text-align: left;
            line-height: 1.3;
            position: static;
            top: auto;
            transform: none;
        }
        .entry-content h2 {
            font-weight: 800;
            margin-top: 1.6rem;
        }
        .entry-content p {
            line-height: 1.7;
        }
        /* Features: iconos y textos en blanco nítido */
        #feature .icnbx i,
        #feature .fea-conbx h1 {
            color: #ffffff !important;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.35);
        }
        #feature .fea-conbx h1 {
            font-weight: 700 !important;
        }
        .main-content .privacy-content {
            padding-top: 0.25rem;
            margin-top: 0;
        }
        .page-template-default .main-content .wrapper {
            margin-top: 1% !important;
            margin-bottom: 3%;
        }
        .page-template-default .main-content h1 {
            color: #ffffff !important;
        }
    </style>
</head>
<body class="<?php echo esc($BODY_CLASS ?? 'home'); ?>">

<a class="screen-reader-text skip-link" href="#main">Saltar al contenido</a>

<header id="header">
    <!-- ======= Barra superior ======= -->
        <div class="top-header">
            <div class="container">
                <div class="row m-0 p-0">

                    <div class="hlbx">
                        <div class="row m-0 p-0">
                            <div class="phonenum">
                                <a href="tel:<?php echo esc(preg_replace('/[^0-9+]/', '', $SITE['phone_link'])); ?>">
                                    <i class="fas fa-phone" aria-hidden="true"></i>
                                    <?php echo esc($SITE['phone']); ?>
                                </a>
                            </div>
                            <div class="email">
                                <a href="mailto:<?php echo esc($SITE['email']); ?>">
                                    <i class="far fa-envelope" aria-hidden="true"></i>
                                    <?php echo esc($SITE['email']); ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="hmbx">
                        <div class="hmbxinn blink">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg>
                            <?php echo esc($SITE['tophead_text']); ?> <span>premium</span>
                        </div>
                    </div>

                    <div class="hrbx">
                        <div class="row p-0 m-0">
                            <div class="timing">
                                <div class="timbx">
                                    <i class="fa-regular fa-clock"></i>
                                    <?php echo esc($SITE['timing_heading']); ?> <br>
                                    <b><?php echo esc($SITE['timing']); ?></b>
                                </div>
                            </div>
                            <div class="socialicons">
                                <a href="<?php echo esc($SITE['social_twitter']); ?>"><i class="fa-brands fa-twitter"></i></a>
                                <a href="<?php echo esc($SITE['social_instagram']); ?>"><i class="fa-brands fa-instagram"></i></a>
                                <a href="<?php echo esc($SITE['social_pinterest']); ?>"><i class="fa-brands fa-pinterest-p"></i></a>
                                <a href="<?php echo esc($SITE['social_facebook']); ?>"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- ======= Barra de navegación ======= -->
        <div class="header-box">
            <div class="close-sticky top-head">
                <div class="container">
                    <div class="row m-0 p-0">
<div class="logobx_m">
                            <div class="logobx">
                                <div class="logo">
                                    <div class="site-logo">
                                        <a href="index.php"><img src="<?php echo esc($SITE['logo']); ?>" alt="<?php echo esc($SITE['site_name']); ?>"></a>
                                    </div>
                                    <div class="site-branding">
                                        <p class="site-title"><a href="index.php" rel="home"><?php echo esc($SITE['site_name']); ?></a></p>
                                        <p class="site-description"><?php echo esc($SITE['site_tagline']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="m-mnu">
                            <div class="menu-section">
                                <div class="header">
                                    <div class="menubox">
                                        <div class="toggle-menu responsive-menu">
                                            <button role="tab" class="resToggle"><i class="fas fa-bars"></i><span class="screen-reader-text">Abrir menú</span></button>
                                        </div>
                                        <div id="menu-sidebar" class="nav sidebar">
                                            <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="Menú superior">
                                                <div class="main-menu-navigation clearfix">
                                                    <ul id="primary-menu-list" class="clearfix mobile_nav">
                                                        <?php foreach ($SITE['menu'] as $item): ?>
                                                            <li>
                                                                <a href="<?php echo esc($item['href']); ?>"><?php echo esc($item['label']); ?></a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                                <a href="javascript:void(0)" class="closebtn responsive-menu pt-0"><i class="fas fa-times"></i><span class="screen-reader-text">Cerrar menú</span></a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="m-btn">
                            <a class="bttn2 js-contact-open" href="#contactar">
                                <?php echo esc($SITE['header_btn_text']); ?>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</header>