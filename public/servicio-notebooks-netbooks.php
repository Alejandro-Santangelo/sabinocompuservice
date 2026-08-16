<?php
/**
 * ============================================================
 *  SERVICIO: NOTEBOOKS Y NETBOOKS — SABINO COMPU SERVICE
 * ============================================================
 *  Página individual del servicio (PHP nativo, sin WordPress).
 * ============================================================
 */

require __DIR__ . '/../includes/functions.php';

$SITE    = site_config();
$SERVICE = service_by_slug('servicio-notebooks-netbooks');
if (!$SERVICE) {
    $SERVICE = ['icon' => 'fa-solid fa-gear', 'title' => 'Servicio', 'desc' => '', 'highlights' => []];
}

$page_title = ($SERVICE['title'] ?? 'Servicio') . ' — ' . $SITE['site_name'];
$BODY_CLASS = 'page-template-default';

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/sections/service-page.php';
require __DIR__ . '/../includes/footer.php';
