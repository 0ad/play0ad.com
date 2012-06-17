<?php

function WPJJNGGJ_CAROUSEL_plugin_url( $path = '' )
{
  return plugins_url( $path, WPJJNGGJ_CAROUSEL_PLUGIN_BASENAME );
}

function WPJJNGGJ_CAROUSEL_enqueue_scripts()
{
  if( !is_admin() )
  {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery-jcarousel', WPJJNGGJ_CAROUSEL_plugin_url( 'script/jquery.jcarousel.min.js' ), array('jquery'), '', false );
    wp_enqueue_script( 'jquery-shuffle', WPJJNGGJ_CAROUSEL_plugin_url( 'script/jquery.jj_ngg_shuffle.js' ), array('jquery'), '', false );
  }
}

function WPJJNGGJ_CAROUSEL_enqueue_styles()
{
  if( !is_admin() )
  {
    wp_enqueue_style( 'jquery-plugins-jcarousel-skin-tango', WPJJNGGJ_CAROUSEL_plugin_url( 'skins/tango/skin.css' ), array(), '', 'all' );
  }
}

function WPJJNGGJ_CAROUSEL_use_default($instance, $key)
{
  return !array_key_exists($key, $instance) || trim($instance[$key]) == '';
}

function jj_ngg_jquery_carousel_shortcode_handler($atts)
{
  $instance = array();
  foreach($atts as $att => $val)
  {
    $instance[wp_specialchars($att)] = wp_specialchars($val);
  }

  // Set defaults
  if(WPJJNGGJ_CAROUSEL_use_default($instance, 'html_id')) { $instance['html_id'] = 'jcarousel'; }
  if(WPJJNGGJ_CAROUSEL_use_default($instance, 'order')) { $instance['order'] = 'random'; }
  if(WPJJNGGJ_CAROUSEL_use_default($instance, 'scroll')) { $instance['scroll'] = '1'; }
  if(WPJJNGGJ_CAROUSEL_use_default($instance, 'visible')) { $instance['visible'] = '1'; }
  if(WPJJNGGJ_CAROUSEL_use_default($instance, 'wrap')) { $instance['wrap'] = 'circular'; }
  $instance['shortcode'] = '1';

  ob_start();
  the_widget("JJ_NGG_JQuery_Carousel", $instance, array());
  $output = ob_get_contents();
  ob_end_clean();

  return $output;
}

?>