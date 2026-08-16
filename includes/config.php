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
            'title'       => 'Diagnóstico, Reparación y Optimización de PC - Notebook - Netbook',
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
            'title'       => 'Reemplazo de Sistemas Operativos',
            'description' => 'Instalación, cambio y actualización de sistemas operativos (Windows, Linux y más). Dejamos tu equipo con un sistema limpio y listo para usar.',
            'image'       => 'assets/img/fondo3.jpg',
            'badge1'      => 'Consultar Tiempos',
            'badge2'      => 'Garantía',
        ],
    ],

    /* ------------------- Franja de features --------------------- */
    // Títulos, íconos y páginas de las 4 cajas (FontAwesome / Font Awesome 6).
    'features' => [
        [
            'icon'       => 'fa-solid fa-desktop',
            'title'      => 'Reparación de PC',
            'slug'       => 'servicio-reparacion-pc',
            'desc'       => 'Diagnóstico y reparación integral de computadoras de escritorio de todas las marcas. Detectamos la falla, reemplazamos los componentes dañados y dejamos tu equipo funcionando como nuevo.',
            'highlights' => [
                'Diagnóstico completo',
                'Diagnóstico de placas y fuentes',
                'Limpieza interna y cambio de pasta térmica',
                'Optimización del sistema operativo',
                'Garantía en repuestos y mano de obra',
            ],
        ],
        [
            'icon'       => 'fa-regular fa-hard-drive',
            'title'      => 'Discos y Memorias',
            'slug'       => 'servicio-discos-memorias',
            'desc'       => 'Instalación y reemplazo de discos rígidos, SSD y memorias. Ampliamos el almacenamiento y mejoramos la velocidad y el rendimiento de tu equipo.',
            'highlights' => [
                'Instalación de discos rígidos y SSD',
                'Ampliación de memoria RAM',
                'Migración a discos de estado sólido',
                'Memorias USB y tarjetas de almacenamiento',
                'Garantía en componentes y mano de obra',
            ],
        ],
        [
            'icon'       => 'fa-solid fa-laptop',
            'title'      => 'Notebooks y Netbooks',
            'slug'       => 'servicio-notebooks-netbooks',
            'desc'       => 'Reparación y mantenimiento integral de notebooks y netbooks de todas las marcas. Diagnóstico, servicio técnico y actualización de componentes para que tu equipo funcione como nuevo.',
            'highlights' => [
                'Reparación integral de notebooks y netbooks',
                'Diagnóstico y detección de fallas',
                'Mantenimiento y limpieza interna',
                'Actualización de componentes',
                'Servicio técnico con garantía',
            ],
        ],
        [
            'icon'       => 'fa-solid fa-arrows-rotate',
            'title'      => 'Cambio o Reemplazo de Sistemas Operativos',
            'slug'       => 'servicio-sistemas-operativos',
            'desc'       => 'Instalación, cambio y actualización de sistemas operativos (Windows, Linux y más). Dejamos tu equipo con un sistema limpio, actualizado y listo para usar.',
            'highlights' => [
                'Instalación de Windows y Linux',
                'Actualización y migración de SO',
                'Instalación de drivers y programas',
                'Respaldo de datos antes del cambio',
                'Activación y configuración completa',
            ],
        ],
    ],

    /* --------------------------- Estilos ------------------------ */
    // Colores guardados en el customizer del sitio original.
    'colors' => [
        'site_title_color'      => '#ffffff',
        'site_tagline_color'    => '#66c2ff',
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