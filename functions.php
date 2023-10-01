<?php
/**
 *
 * Brando child theme functions and definitions
 * 
 * @package Brando
 * @author  Themezaa <info@themezaa.com>
 * 
 */

if ( ! function_exists( 'brando_child_style' ) ) {
	function brando_child_style() {
	    wp_enqueue_style( 'brando-parent-style', get_template_directory_uri(). '/style.css', array( 'bootstrap','animate','et-line-icons','brando-font-awesome','magnific-popup','owl-carousel','pull-menu-sideslide' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'brando_child_style' );






