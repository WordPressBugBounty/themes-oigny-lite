<?php
/**
 * Theme Functions
 *
 * @author Jegstudio
 * @package oigny-lite
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'OIGNY_LITE_VERSION' ) || define( 'OIGNY_LITE_VERSION', '1.1.0' );
defined( 'OIGNY_LITE_DIR' ) || define( 'OIGNY_LITE_DIR', trailingslashit( get_template_directory() ) );

defined( 'GUTENVERSE_COMPANION_REQUIRED_VERSION' ) || define( 'GUTENVERSE_COMPANION_REQUIRED_VERSION', '2.3.3' );
defined( 'GUTENVERSE_LIBRARY_SERVER' ) || define( 'GUTENVERSE_LIBRARY_SERVER', 'https://gutenverse.com' );

require get_parent_theme_file_path( 'inc/autoload.php' );

Oigny_Lite\Init::instance();
