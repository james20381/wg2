<?php
/**
 * Enqueue scripts and styles.
 */
function strappress_scripts() {
	if ( is_front_page() ) {
		wp_enqueue_style( 'front-page-style', get_stylesheet_directory_uri() . '/front-page.min.css' );
	} else {
		wp_enqueue_style( 'blog-pages-style', get_stylesheet_directory_uri() . '/blog-pages.min.css' );
	}
		wp_enqueue_script( 'strappress-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'strappress_scripts' );
