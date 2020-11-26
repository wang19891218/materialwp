<?php
/**
 * Enqueue scripts and styles.
 */
function materialwp_scripts() {

	wp_enqueue_style( 'materialwp-material-icons', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons', array(), '0.0.5' );

	wp_enqueue_style( 'materialwp-style', get_stylesheet_directory_uri() . '/style.min.css', array(), '0.0.5' );

	wp_enqueue_script( 'materialwp-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	wp_enqueue_script( 'particles-js', 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js', array('jquery'), ' ', true );

	wp_enqueue_script( 'particles-js-load', get_template_directory_uri() . '/js/src/particle_background.js', array('particles-js'), ' ', true );

	$js_script = 'var str_path_json = "' . get_template_directory_uri() . '/js/src/particlesjs-config.json";';

	wp_add_inline_script('particles-js-load', $js_script, 'before');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'materialwp_scripts' );