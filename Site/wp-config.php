<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'smartboards');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'admin-claryicon');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'C14@ry|20@16');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '%.-0!Poqfl|p}T&-*>|gQm+BC{jog)0~/D|K<L%h9HH%)S-y*doG03d0I9| i$L}');
define('SECURE_AUTH_KEY', 'Dc9Lq|9g}J4hQaV8&1tFs?I:JT-+%O-:pQuUcS?,&]q}UN;EmNi1@E=<K$W8-+& ');
define('LOGGED_IN_KEY', 'yhbo#K$(kb15]`/ UC>Nt?@6^yc84!|toEG|+x4-t(y_C$XK{38WVVMYP+MNk{2*');
define('NONCE_KEY', 'wX;QMOD;8X7]nWcX3klZ+q+U(.k,GFDnNr-|)+,#H[@?Pm6+H#!R}DS7$aXK@}3C');
define('AUTH_SALT', '87x82%3+BGNk>fRl.Cicn!Dv<LRha_W04`v.9?D+WMhffFF|t~A$WlALbD|FJ`hO');
define('SECURE_AUTH_SALT', 'QAlS*ivdq00^;xWpNkZG},`>Esm-,gQ1%t<paaQBHVdOe]c4,uINr+s)*A~3!CKe');
define('LOGGED_IN_SALT', ',kdh-(ch@B~R|O#@&.!*CKaCFJ&/Ae,#$]<8B<ELv>0.iLm8qoHdv~?6hV+~UO9t');
define('NONCE_SALT', 'u OdiJ>9[Jk60pSZa+#fh<v1Y:Ex(?dKy/$;?B)da;5$l]Lk|TuQ3!0GC(++Kw1O');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_smart';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

