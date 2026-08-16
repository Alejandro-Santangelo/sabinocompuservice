<?php
/**
 * ============================================================
 *  CONFIGURACIÓN DEL SITIO — SABINO COMPU SERVICE
 * ============================================================
 *  Proyecto PHP nativo (sin WordPress ni base de datos).
 *  Editá estos valores para cambiar todo el contenido del sitio.
 * ============================================================
 */

return [

    /* ------------------------- Identidad ------------------------- */
    'site_name'        => 'Sabino Compu Service',
    'site_tagline'     => 'Servicio y reparación integral de tus dispositivos',

    /* ------------------------- Contacto -------------------------- */
    'phone'            => '3548 405825',                 // Se muestra en el header
    'phone_link'       => '+543548405825',              // Se usa en el enlace tel:
    'email'            => 'sabino.ortizbergia@gmail.com',
    'whatsapp'         => '543548405825',               // Solo números, sin + (para wa.me)
    'whatsapp_msg'     => 'Hola, quiero solicitar un presupuesto.',

    /* --------------------- Barra superior ----------------------- */
    'tophead_text'     => 'Servicio Técnico NOTEBOOK - NETBOOK - PC',
    'timing_heading'   => 'Retiro y Entrega a Domicilio',
    'timing'           => 'Lunes a Sábado : De 8:00 a 20:00 Hs.',

    /* ------------------------ Botón CTA ------------------------- */
    'header_btn_text'  => 'Contactar',
    'header_btn_link'  => '#contactar',

    /* --------------------- Redes sociales ----------------------- */
    'social_twitter'   => '#',
    'social_instagram' => '#',
    'social_pinterest' => '#',
    'social_facebook'  => '#',

    /* ------------------- Logo / imágenes ------------------------ */
    'logo'             => 'assets/img/logo2.png',
    'header_image'     => 'assets/img/cropped-fondo1.jpg',
    'hero_image'       => 'assets/img/ChatGPT-Image-3-ago-2026-01_06_04-p.m.png',

    /* --------------------------- Portada ------------------------ */
    'hero_title'       => 'Diagnóstico, Reparación y Optimización de PC',
    'hero_text'        => 'Servicio y reparación integral de tus dispositivos.',
    'hero_btn1_text'   => 'Solicitar Presupuesto',
    'hero_btn1_link'   => '#contactar',
    'hero_btn2_text'   => 'Llamar Ahora',
    'hero_btn2_link'   => 'tel:+3548405825',

    /* --------------------- Sección servicios -------------------- */
    'services_subheading'    => 'Servicios Premium',
    'services_heading'       => 'Especialidad',
    'services_heading_span'  => 'Soluciones Informáticas',
    'services_description'   => 'Servicios integrales de reparación tecnológica respaldados por técnicos certificados y repuestos originales.',

    // Tarjetas de servicios (se muestran 3). Editalas y agregá más.
    'services' => [
        [
            'title'       => 'Diagnóstico, Reparación y Optimización de PC',
            'description' => 'Diagnóstico, reparación y optimización de PC, Notebook y Netbook de todas las marcas.',
            'image'       => 'assets/img/fondo1.jpg',
            'badge1'      => 'Consultar Tiempos',
            'badge2'      => 'Garantía',
        ],
        [
            'title'       => 'Mantenimiento Preventivo',
            'description' => 'Limpieza interna, cambio de pasta térmica y optimización del sistema operativo.',
            'image'       => 'assets/img/fondo2.jpg',
            'badge1'      => 'Consultar Tiempos',
            'badge2'      => 'Garantía',
        ],
        [
            'title'       => 'Recuperación de Datos',
            'description' => 'Recuperación de información de discos dañados y respaldo de tus archivos importantes.',
            'image'       => 'assets/img/fondo3.jpg',
            'badge1'      => 'Consultar Tiempos',
            'badge2'      => 'Garantía',
        ],
    ],

    /* ------------------- Franja de features --------------------- */
    // Títulos e íconos de las 8 cajas (FontAwesome / Font Awesome 6).
    'features' => [
        ['icon' => 'fa-solid fa-desktop',             'title' => 'Reparación de PC'],
        ['icon' => 'fas fa-volume-up',                'title' => 'Audio y Parlantes'],
        ['icon' => 'fa-regular fa-hard-drive',        'title' => 'Discos y Datos'],
        ['icon' => 'fa-solid fa-mobile-screen-button', 'title' => 'Reparación de Celulares'],
        ['icon' => 'fa-solid fa-print',               'title' => 'Impresoras'],
        ['icon' => 'fa-solid fa-laptop',              'title' => 'Notebooks y Netbooks'],
        ['icon' => 'fa-solid fa-microchip',           'title' => 'Placas y Micros'],
        ['icon' => 'fa-solid fa-monitor',             'title' => 'Monitores'],
    ],

    /* --------------------------- Estilos ------------------------ */
    // Colores guardados en el customizer del sitio original.
    'colors' => [
        'site_title_color'      => '#ffffff',
        'site_tagline_color'    => '#1a7aa3',
        'tophead_bg'            => '#97abbf',
        'tophead_icon_bg'       => '#42b538',
        'tophead_icon_text'     => '#ffffff',
        'tophead_text_color'    => '#000000',
        'tophead_texticon_color'=> '#ffffff',
        'social_icon_color'     => '#2141f2',
        'button_text_color'     => '#ffffff',
        'button_hover_bg'       => '#3aaa34',
        'footer_text_color'     => '#9eb0bf',
        'body_background'       => '#4184bf',
    ],

    /* --------------------------- Pie de página --------------------- */
    'footer_copy' => 'Experiencia Profesional en Dispositivos de todas las Marcas',

    /* --------------------- Pie de página links -------------------- */
    // Páginas / secciones que muestra el menú principal.
    'menu' => [
        ['label' => 'Inicio',    'href' => 'index.php'],
        ['label' => 'Servicios', 'href' => 'index.php#ourservices-section'],
        ['label' => 'Política de Privacidad', 'href' => 'privacidad.php'],
    ],
];