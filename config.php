<?php
/**
 * Configuración global del proyecto GlucuTrack
 */

// Definir la base URL de forma dinámica
// Detecta si estamos en localhost o en producción
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$base_dir = dirname($_SERVER['SCRIPT_NAME']);

// Limpiar el base_dir para evitar problemas con subcarpetas en entornos locales
// Si el script está en la raíz, dirname devuelve \ o /
$base_dir = ($base_dir === '\\' || $base_dir === '/') ? '' : $base_dir;

define('BASE_URL', $protocol . '://' . $host . $base_dir . '/');
?>