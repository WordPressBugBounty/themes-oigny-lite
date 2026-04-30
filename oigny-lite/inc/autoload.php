<?php
/**
 * Autoload function
 *
 * @author Jegstudio
 * @package oigny-lite
 */

/**
 * Autoloader function for Oigny Lite theme classes
 *
 * @param string $class The fully-qualified class name.
 * @return void
 */
function oigny_lite_autoloader( $class ) {
    $prefix   = 'Oigny_Lite';
    $base_dir = OIGNY_LITE_DIR . 'inc/class/';
    $len      = strlen( $prefix );

    if ( strncmp( $prefix, $class, $len ) !== 0 ) {
        return;
    }

    $array_path     = explode( '\\', substr( $class, $len ) );
    $relative_class = array_pop( $array_path );
    $class_path     = strtolower( implode( '/', $array_path ) );
    $class_name     = str_replace( '_', '-', 'class-' . $relative_class . '.php' );

    $file = rtrim( $base_dir, '/' ) . '/' . $class_path . '/' . strtolower( $class_name );

    if ( is_link( $file ) ) {
        $file = readlink( $file );
    }

    if ( is_file( $file ) ) {
        require $file;
    }
}

spl_autoload_register( 'oigny_lite_autoloader' );