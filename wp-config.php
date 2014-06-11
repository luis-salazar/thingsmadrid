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
define('WP_HOME','local.thingsmadrid.com');
define('WP_SITEURL','local.thingsmadrid.com');

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'thingsmadrid');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '+P!=G9_n8?hS0aLut$e3P<JZu8)7m}U`7TGtB|J8gc97L|]d+ 7BaS#{DR,}:/Fz'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '& AP&YNtG)2?s$vl1|TH;q6r9j8}-hv<_4s:-q2o|T9)#<lcA2Ns8QjD(+zE!>Pp'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'D1]:m~?vuC9$rI,~wpv5m)b!~C7y*hBy$-lcy_  (Z.;%-5.?#&)fP:JL+vtUOP#'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'HWhUOM^W9FXG2t[Kx.6HtNhO:g_keg=]u(36$F?NmjKh&@8tY|Xlzl%eZ+X1@e{)'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '@?bZ bpgMPB9$1W?c^-)p,MxP<P+y0,l,[{%V%pzq?X#6M7?gy {DTfL097|K$i('); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '@7L/Kfr3l=c-[Lj85=|2|*h@=O+.?WY(!5KZ&(odlGH<:a}|lH$JLdLjyf?&v?R*'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'N:-bT{f7x*efEARPtp1&T1{?F-h->3nv{&UMl8= q=`09jauJ7TW&2o>py#[hM(2'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'A).pk*8tDy>Ck[(U+qZZ~sYJ(._^tL?:hJ^f+Meoin+}Ms1`dY|-y1s(q5]B8q8<'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'en');

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


