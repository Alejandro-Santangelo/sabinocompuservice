<?php
/**
 * ============================================================
 *  HELPERS — SABINO COMPU SERVICE
 * ============================================================
 *  Funciones auxiliares del sitio PHP nativo.
 * ============================================================
 */

/** Carga (una sola vez) y devuelve la configuración del sitio. */
function site_config($key = null, $default = '')
{
    static $config = null;

    if ($config === null) {
        $config = require __DIR__ . '/config.php';
    }

    if ($key === null) {
        return $config;
    }

    return $config[$key] ?? $default;
}

/** Escapa texto para HTML (evita inyección de HTML/JS). */
function esc($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/** Devuelve true si la URL activa corresponde a la página indicada. */
function is_active_page($name)
{
    $file = basename($_SERVER['PHP_SELF'] ?? 'index.php');
    return $file === $name;
}