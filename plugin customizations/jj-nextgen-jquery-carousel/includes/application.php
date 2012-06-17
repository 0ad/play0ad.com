<?php

require_once WPJJNGGJ_CAROUSEL_PLUGIN_DIR . '/includes/functions.php';
require_once WPJJNGGJ_CAROUSEL_PLUGIN_DIR . '/includes/jj_ngg_jquery_carousel.php';

add_action( 'widgets_init', create_function('', 'return register_widget("JJ_NGG_JQuery_Carousel");') );
add_shortcode( 'jj-ngg-jquery-carousel', 'jj_ngg_jquery_carousel_shortcode_handler' );

if( !is_admin() )
{
  add_action( 'init', 'WPJJNGGJ_CAROUSEL_enqueue_scripts' );
  add_action( 'init', 'WPJJNGGJ_CAROUSEL_enqueue_styles' );
}

?>