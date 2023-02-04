<?php

if ( ! function_exists( 'fourteen_blog_setup' ) ) :

	function fourteen_blog_setup() {

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'fourteen_blog_setup' );