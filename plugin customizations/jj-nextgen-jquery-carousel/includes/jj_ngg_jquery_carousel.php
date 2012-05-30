<?php

class JJ_NGG_JQuery_Carousel extends WP_Widget
{
  
  function JJ_NGG_JQuery_Carousel()
  {
    $widget_ops = array('classname' => 'jj-nexgen-jquery_carousel', 'description' => "Allows you to pick a gallery from the 'NextGen Gallery' plugin to use as a 'JQuery JCarousel'.");
    $this->WP_Widget('jj-nexgen-jquery_carousel', 'JJ NextGEN JQuery Carousel', $widget_ops);
  }
  
  function widget($args, $instance)
  {
    global $wpdb;
    extract($args);

    // Set params
    $title = apply_filters('widget_title', $instance['title']);
    $html_id = $this->get_val($instance, 'html_id', 'jcarousel');
    $order = $this->get_val($instance, 'order', 'asc', false);
    $shuffle = $this->get_val($instance, 'shuffle');
    $limit = $this->get_val_numeric($instance, 'max_pictures');
    $gallery = $this->get_val_numeric($instance, 'gallery');
    $skin_class = $this->get_val($instance, 'skin_class', 'jcarousel-skin-tango');
    $width = $this->get_val_numeric($instance, 'width', 75);
    $height = $this->get_val_numeric($instance, 'height', 75); 
    $gap = $this->get_val_numeric($instance, 'gap'); 
    $shortcode = $this->get_val($instance, 'shortcode');  
    
    // Set jcarousel params
    $vertical = $this->get_val($instance, 'vertical');
    $rtl = $this->get_val($instance, 'rtl');
    $start = $this->get_val($instance, 'start');
    $offset = $this->get_val($instance, 'offset');
    $size = $this->get_val($instance, 'size');
    $scroll = $this->get_val($instance, 'scroll');
    $visible = $this->get_val($instance, 'visible');
    $animation = $this->get_val($instance, 'animation');
    $easing = $this->get_val($instance, 'easing');
    $auto = $this->get_val($instance, 'auto');
    $wrap  = $this->get_val($instance, 'wrap');   

    // SQL defaults
    $sql_order = '';
    $sql_where = ' WHERE exclude = 0';
    $sql_limit = '';
    
    // Set SQL order
    if($order == 'random')
    {
      $sql_order = 'RAND()';
    }
    elseif($order == 'asc') 
    {
       $sql_order = 'galleryid ASC';
    }        
    elseif($order == 'desc') 
    {
      $sql_order = 'galleryid DESC';
    }
    elseif($order == 'sortorder')
    {
      $sql_order = 'sortorder ASC';
    }
    else
    {
      $sql_order = 'galleryid ASC';
    }

    if($gallery != '')
    {
      $sql_where .= ' AND galleryid = ' . $gallery;
    }
    
    // Set limit defaults
    if(is_numeric($limit)) 
    {
      $sql_limit = ' LIMIT 0, ' . $limit;
    }        

    $results = $wpdb->get_results("SELECT * FROM $wpdb->nggpictures" . $sql_where . " ORDER BY " . $sql_order . $sql_limit);
    $p_size = 0;
    if(is_array($results))
    {
       $p_size = count($results);
    }
    
    $output = '';                
    if($p_size > 0) 
    {         
      if($title != '')
      {      
        if($shortcode != '1')
        {      
          $output .= "\n" . $before_title . $title . $after_title;
        }
        else
        {
          $output .= "\n<h3>" . $title . "</h3>";
        }
      } 
            
      // adjust width and height of carousel
      if($width != '' && $height != '')
      {
        $size_gap = ''; 
        if($gap != '' && ($visible != '' && $visible != '1'))
        {
            $size_gap = (string)((int)$gap * ((int)$visible - 1));
        }                       
        $output .= "\n<style type=\"text/css\">";
        if($vertical == '' || $vertical == 'false')
        {
          $size_width = $width;
          if($visible != '' && $visible != '1')
          {            
            $size_width = (string)((int)$width * (int)$visible);
          }
          if($size_gap != '')
          {
            $size_width = (int)$size_width + (int)$size_gap;  
          }
          $top_offset = (string)(floor((int)$height/2)+8); 
          $output .= "\n  div#" . $html_id . "_container ." . $skin_class . " .jcarousel-container-horizontal { width: " . $size_width . "px !important; }";
          $output .= "\n  div#" . $html_id . "_container ." . $skin_class . " .jcarousel-clip-horizontal { width: " . $size_width . "px !important; height: " . $height . "px !important; }";          
          $output .= "\n  div#" . $html_id . "_container ." . $skin_class . " .jcarousel-next-horizontal { top: " . $top_offset . "px !important; }";
          $output .= "\n  div#" . $html_id . "_container ." . $skin_class . " .jcarousel-prev-horizontal { top: " . $top_offset . "px !important; }";          
          if($gap != '')
          {
            $output .= "\n  div#" . $html_id . "_container ." . $skin_class . " .jcarousel-item-horizontal { margin-right: " . $gap . "px; }";
            $output .= "\n  div#" . $html_id . "_container ." . $skin_class . " .jcarousel-direction-rtl .jcarousel-item-horizontal { margin-left: " . $gap . "px; }";
          }   
        }
        else
        {
          $size_height = $height;
          if($visible != '' && $visible != '1')
          {
            $size_height = (string)((int)$height * (int)$visible);
          }   
          if($size_gap != '')
          {
            $size_height = (int)$size_height + (int)$size_gap;  
          }             
          $left_offset = (string)(floor((int)$width/2)+8); 
          $output .= "\n  div#" . $html_id . "_container ." . $skin_class . " .jcarousel-container-vertical { width: " . $width . "px !important; height: " . $size_height . "px !important; }";            
          $output .= "\n  div#" . $html_id . "_container ." . $skin_class . " .jcarousel-clip-vertical { width: " . $width . "px !important; height: " . $size_height . "px !important; }";        
          $output .= "\n  div#" . $html_id . "_container ." . $skin_class . " .jcarousel-next-vertical { left: " . $left_offset . "px !important; }";
          $output .= "\n  div#" . $html_id . "_container ." . $skin_class . " .jcarousel-prev-vertical { left: " . $left_offset . "px !important; }";          
          if($gap != '')
          {
            $output .= "\n  div#" . $html_id . "_container ." . $skin_class . " .jcarousel-item-horizontal { margin-right: " . $gap . "px !important; }";
            $output .= "\n  div#" . $html_id . "_container ." . $skin_class . " .jcarousel-item-vertical { margin-bottom: " . $gap . "px !important; }";
          }      
        }     
        $output .= "\n  div#" . $html_id . "_container ." . $skin_class . " .jcarousel-item { width: " . $width . "px; height: " . $height . "px; }";                     
        $output .= "\n</style>";
      }     
            
      $output .= "\n<div id=\"" . $html_id . "_container\" class=\"jcarousel_container\">";      
      $output .= "\n  <ul id=\"" . $html_id . "\" class=\"" . $skin_class . "\">";
      $image_alt = null;
      $image_description = null;
      foreach($results as $result) 
      {
        $gallery = $wpdb->get_row("SELECT * FROM $wpdb->nggallery WHERE gid = '" . $result->galleryid . "'");
        foreach($gallery as $key => $value) 
        {
            $result->$key = $value;
        }        
        $image = new nggImage($result);    
        $image_alt = trim($image->alttext);   
        $image_description = trim($image->description);                   
        
        $output .= "\n    <li>";
        
        // check that alt is url with a simple validation
        $use_url = false;        
        if($image_alt != '' && (substr($image_alt, 0, 1) == '/' || substr($image_alt, 0, 4) == 'http' || substr($image_alt, 0, 3) == 'ftp'))
        {
          $use_url = true;
        }
        // if alt isn't a url make it the alt text to backwards support nextgen galleries
        elseif($image_alt != '') 
        {
          $image_description = $image_alt;
        }
      
        if($use_url)
        {
          $output .= "<a href=\"" . esc_attr($image_alt) . "\">";
        }
        
        if($image_description != '')
        {
          $image_description = "alt=\"" . esc_attr($image_description) . "\" ";
        }
        else
        {
          $image_description = '';
        }
                  
        $width_d = '';
        $height_d = '';
        if($width != '' && $height != '')
        {        
          $width_d = " width=\"" . $width . "\"";
          $height_d = " height=\"" . $height . "\"";  
        }     
        $output .= "<img src=\"" . $image->imageURL . "\" " . $image_description . $width_d . $height_d . " border=\"0\" />";
        
        if($use_url)
        {
          $output .= "</a>";
        }  
        $output .="</li>";
              
      }
      $output .= "\n  </ul>";
      $output .= "\n</div>";
    }    
    
    // JCarousel arguments
    $javascript_args = array();
    
    // Modifications if only 1 picture
    if($p_size <= 1)
    {
      $start = '';
      $offset = '';
      $size = '';      
      $scroll = '1';
      $easing = '';
      $auto = '';
      $wrap = '';
    }    
    
    if($vertical != "") { $javascript_args[] = "vertical: " . $vertical; }
    if($rtl != "") { $javascript_args[] = "rtl: ". $rtl; }     
    if($start != "") { $javascript_args[] = "start: " . $start ; }
    if($offset != "") { $javascript_args[] = "offset: " . $offset; }
    if($size != "") { $javascript_args[] = "size: " . $size; }    
    if($scroll != "") { $javascript_args[] = "scroll: " . $scroll; }
    if($visible != "") { $javascript_args[] = "visible: " . $visible; }  
    if($animation != "") { $javascript_args[] = "animation: '" . $animation . "'"; }
    if($easing != "") { $javascript_args[] = "easing: '" . $easing . "'"; }
    if($auto != "") { $javascript_args[] = "auto: " . $auto; }
    if($wrap != "") { $javascript_args[] = "wrap: '" . $wrap . "'"; }
    
    // Add javascript
    $output .= "\n<script type=\"text/javascript\">";
    // Shuffle results on random order so even if page is cached the order will be different each time
    if($order == 'random' && $shuffle == 'true')
    {
      $output .= "\n  jQuery('ul#" . $html_id . "').jj_ngg_shuffle();";
    }
    $output .= "\n  jQuery('ul#" . $html_id . "').jcarousel(";
    if(count($javascript_args) > 0)
    {
      $output .= "{" . implode(",", $javascript_args) . "}";
    }
    $output .= ");"; 
    
    // Hack to make jcarousel work with gaps       
    if($width != '') {
      $output .= "\n  jQuery('ul#" . $html_id . " li').width(" . $width . ");";
    }
    $output .= "\n</script>\n";
 
    if($shortcode != '1')
    {
      echo $before_widget . "\n<ul class=\"ul_jj_carousel\">\n    <li class=\"li_jj_carousel\">" . $output . "\n    </li>\n  </ul>\n" . $after_widget;
    }
    else
    {
      echo $output;
    }
  }

  function get_val($instance, $key, $default = '', $escape = true)
  {
    $val = '';
    if(isset($instance[$key]))
    {
      $val = trim($instance[$key]);
    }
    if($val == '')
    {
      $val = $default;
    }
    if($escape)
    {
      $val = esc_attr($val);
    }
    return $val;
  }
  
  function get_val_numeric($instance, $key, $default = '')
  {
    $val = $this->get_val($instance, $key, $default, false);
    if($val != '' && !is_numeric($val))
    {
      $val = '';
    }
    return $val;
  }

  function form($instance)
  {
    global $wpdb;
    $instance = wp_parse_args((array) $instance, array(
      'title' => '',
      'gallery' => '',
      'html_id' => 'jcarousel',
      'order' => 'random',
      'shuffle' => 'false',
      'max_pictures' => '',
      'skin_class' => '',
      'width' => '75',
      'height' => '75',
      'gap' => '10',
      
      // jcarousel settings
      'vertical' => '',
      'rtl' => '',
      'start' => '',
      'offset' => '',
      'size' => '',
      'scroll' => '1',
      'visible' => '1',
      'animation' => '',
      'easing' => '',
      'auto' => '3',
      'wrap' => 'circular'
    ));
    $order_values = array('random' => 'Random', 'asc' => 'Latest First', 'desc' => 'Oldest First', 'sortorder' => 'NextGen Sortorder');
    $wrap_values = array('circular' => 'Circular', 'first' => 'First', 'last' => 'Last', '' => 'None');
    $galleries = $wpdb->get_results("SELECT * FROM $wpdb->nggallery ORDER BY name ASC");
?>
  <p>
    <label for="<?php echo $this->get_field_id('title'); ?>"><strong>Widget title:</strong></label><br />
    <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>"  class="widefat" />
  </p>
  <p>
    <label><strong>Select a gallery to use:</strong></label><br />
    <?php if(is_array($galleries) && count($galleries) > 0) { ?>
      <select id="<?php echo $this->get_field_id('gallery'); ?>" name="<?php echo $this->get_field_name('gallery'); ?>" class="widefat">
        <option value="">All images</option>
        <?php 
          $gallery_selected = '';        
          foreach($galleries as $gallery)
          {       
            if($gallery->gid == $instance['gallery'])
            {
              $gallery_selected = " selected=\"selected\"";
            }
            else
            {
              $gallery_selected = "";
            }
            echo "<option value=\"" . $gallery->gid . "\"" . $gallery_selected . ">" . $gallery->name . "</option>";
        } ?>
      </select>
    <?php }else{ ?>
      No galleries found
    <?php } ?>
  </p>  
  <p>
    <label for="<?php echo $this->get_field_id('order'); ?>"><strong>Order:</strong></label><br />
    <select id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>" class="widefat">
      <?php 
        $order_selected = '';        
        foreach($order_values as $key => $value) 
        {       
          if($key == $instance['order'])
          {
            $order_selected = " selected=\"selected\"";
          }
          else
          {
            $order_selected = "";
          }
          echo "<option value=\"" . $key . "\"" . $order_selected . ">" . $value . "</option>";
      } ?>
    </select>
  </p>
  <p>
    <label><strong>Shuffle:</strong> <small>(Only for random order)</small></label><br />
    <input type="radio" id="<?php echo $this->get_field_id('shuffle'); ?>_true" name="<?php echo $this->get_field_name('shuffle'); ?>" value="true" style="vertical-align: middle;"<?php if($instance['shuffle'] == 'true') { echo " checked=\"checked\""; } ?> /><label for="<?php echo $this->get_field_id('shuffle'); ?>_true" style="vertical-align: middle;">true</label>
    <input type="radio" id="<?php echo $this->get_field_id('shuffle'); ?>_false" name="<?php echo $this->get_field_name('shuffle'); ?>" value="false" style="vertical-align: middle;"<?php if($instance['shuffle'] == 'false') { echo " checked=\"checked\""; } ?> /><label for="<?php echo $this->get_field_id('shuffle'); ?>_false" style="vertical-align: middle;">false</label>          
  </p>   
  <p>
    <label for="<?php echo $this->get_field_id('max_pictures'); ?>"><strong>Max pictures:</strong> (Leave blank for all)</label><br />
    <input type="text" id="<?php echo $this->get_field_id('max_pictures'); ?>" name="<?php echo $this->get_field_name('max_pictures'); ?>" value="<?php echo $instance['max_pictures']; ?>" size="3" />
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('html_id'); ?>"><strong>HTML id:</strong></label><br />
    <input type="text" id="<?php echo $this->get_field_id('html_id'); ?>" name="<?php echo $this->get_field_name('html_id'); ?>" value="<?php echo $instance['html_id']; ?>" class="widefat" />
  </p> 
  <p>
    <label for="<?php echo $this->get_field_id('skin_class'); ?>"><strong>Skin class:</strong> (Tango skin is default)</label><br />
    <input type="text" id="<?php echo $this->get_field_id('skin_class'); ?>" name="<?php echo $this->get_field_name('skin_class'); ?>" value="<?php echo $instance['skin_class']; ?>" class="widefat" />
  </p> 
  <p>
    <label for="<?php echo $this->get_field_id('width'); ?>"><strong>Image width:</strong></label><br />
    <input type="text" id="<?php echo $this->get_field_id('width'); ?>" name="<?php echo $this->get_field_name('width'); ?>" value="<?php echo $instance['width']; ?>" size="3" />
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('height'); ?>"><strong>Image height:</strong></label><br />
    <input type="text" id="<?php echo $this->get_field_id('height'); ?>" name="<?php echo $this->get_field_name('height'); ?>" value="<?php echo $instance['height']; ?>" size="3" />
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('gap'); ?>"><strong>Image gap:</strong></label><br />
    <input type="text" id="<?php echo $this->get_field_id('gap'); ?>" name="<?php echo $this->get_field_name('gap'); ?>" value="<?php echo $instance['gap']; ?>" size="3" />
  </p>        
  <div class="javascript_settings" style="display: none; border: 1px solid #cccccc; background-color: #f0f0f0;">
    <div style="padding: 10px;">
      <p><a href="http://sorgalla.com/projects/jcarousel/#Configuration" target="jj_nextgen_jquery">Visit JCarousel configuration page</a></p>
      <p>Leave blank to use defaults.</p>      
      <p>
        <label><strong>vertical:</strong></label>
        <input type="radio" id="<?php echo $this->get_field_id('vertical'); ?>_default" name="<?php echo $this->get_field_name('vertical'); ?>" value="" style="vertical-align: middle;"<?php if($instance['vertical'] == '') { echo " checked=\"checked\""; } ?> /><label for="<?php echo $this->get_field_id('vertical'); ?>_default" style="vertical-align: middle;">default</label>
        <input type="radio" id="<?php echo $this->get_field_id('vertical'); ?>_true" name="<?php echo $this->get_field_name('vertical'); ?>" value="true" style="vertical-align: middle;"<?php if($instance['vertical'] == 'true') { echo " checked=\"checked\""; } ?> /><label for="<?php echo $this->get_field_id('vertical'); ?>_true" style="vertical-align: middle;">true</label>
        <input type="radio" id="<?php echo $this->get_field_id('vertical'); ?>_false" name="<?php echo $this->get_field_name('vertical'); ?>" value="false" style="vertical-align: middle;"<?php if($instance['vertical'] == 'false') { echo " checked=\"checked\""; } ?> /><label for="<?php echo $this->get_field_id('vertical'); ?>_false" style="vertical-align: middle;">false</label>          
      </p>
      <p>
        <label><strong>rtl:</strong></label>
        <input type="radio" id="<?php echo $this->get_field_id('rtl'); ?>_default" name="<?php echo $this->get_field_name('rtl'); ?>" value="" style="vertical-align: middle;"<?php if($instance['rtl'] == '') { echo " checked=\"checked\""; } ?> /><label for="<?php echo $this->get_field_id('rtl'); ?>_default" style="vertical-align: middle;">default</label>
        <input type="radio" id="<?php echo $this->get_field_id('rtl'); ?>_true" name="<?php echo $this->get_field_name('rtl'); ?>" value="true" style="vertical-align: middle;"<?php if($instance['rtl'] == 'true') { echo " checked=\"checked\""; } ?> /><label for="<?php echo $this->get_field_id('rtl'); ?>_true" style="vertical-align: middle;">true</label>
        <input type="radio" id="<?php echo $this->get_field_id('rtl'); ?>_false" name="<?php echo $this->get_field_name('rtl'); ?>" value="false" style="vertical-align: middle;"<?php if($instance['rtl'] == 'false') { echo " checked=\"checked\""; } ?> /><label for="<?php echo $this->get_field_id('rtl'); ?>_false" style="vertical-align: middle;">false</label>          
      </p>
      <p>
        <label for="<?php echo $this->get_field_id('start'); ?>"><strong>start:</strong></label>
        <input type="text" id="<?php echo $this->get_field_id('start'); ?>" name="<?php echo $this->get_field_name('start'); ?>" value="<?php echo $instance['start']; ?>" size="3" />
      </p>
      <p>
        <label for="<?php echo $this->get_field_id('offset'); ?>"><strong>offset:</strong></label>
        <input type="text" id="<?php echo $this->get_field_id('offset'); ?>" name="<?php echo $this->get_field_name('offset'); ?>" value="<?php echo $instance['offset']; ?>" size="3" />
      </p> 
      <p>
        <label for="<?php echo $this->get_field_id('size'); ?>"><strong>size:</strong></label>
        <input type="text" id="<?php echo $this->get_field_id('size'); ?>" name="<?php echo $this->get_field_name('size'); ?>" value="<?php echo $instance['size']; ?>" size="3" />
      </p> 
      <p>
        <label for="<?php echo $this->get_field_id('scroll'); ?>"><strong>scroll:</strong> (images to scroll at once)</label><br />
        <input type="text" id="<?php echo $this->get_field_id('scroll'); ?>" name="<?php echo $this->get_field_name('scroll'); ?>" value="<?php echo $instance['scroll']; ?>" size="3" />
      </p>
      <p>
        <label for="<?php echo $this->get_field_id('visible'); ?>"><strong>visible:</strong> (images to display at once)</label><br />
        <input type="text" id="<?php echo $this->get_field_id('visible'); ?>" name="<?php echo $this->get_field_name('visible'); ?>" value="<?php echo $instance['visible']; ?>" size="3" />
      </p>
      <p>
        <label for="<?php echo $this->get_field_id('animation'); ?>"><strong>animation:</strong></label><br />
        <input type="text" id="<?php echo $this->get_field_id('animation'); ?>" name="<?php echo $this->get_field_name('animation'); ?>" value="<?php echo $instance['animation']; ?>" class="widefat" />
      </p>
      <p>
        <label for="<?php echo $this->get_field_id('easing'); ?>"><strong>easing:</strong></label><br />
        <input type="text" id="<?php echo $this->get_field_id('easing'); ?>" name="<?php echo $this->get_field_name('easing'); ?>" value="<?php echo $instance['easing']; ?>" class="widefat" />
      </p>
      <p>
        <label for="<?php echo $this->get_field_id('auto'); ?>"><strong>auto:</strong> (seconds to go to next image)</label><br />
        <input type="text" id="<?php echo $this->get_field_id('auto'); ?>" name="<?php echo $this->get_field_name('auto'); ?>" value="<?php echo $instance['auto']; ?>" size="3" />
      </p>
      <p>
        <label for="<?php echo $this->get_field_id('wrap'); ?>"><strong>wrap:</strong></label>
        <select id="<?php echo $this->get_field_id('wrap'); ?>" name="<?php echo $this->get_field_name('wrap'); ?>">
          <?php 
            $wrap_selected = '';        
            foreach($wrap_values as $key => $value) 
            {       
              if($key == $instance['wrap'])
              {
                $wrap_selected = " selected=\"selected\"";
              }
              else
              {
                $wrap_selected = "";
              }
              echo "<option value=\"" . $key . "\"" . $wrap_selected . ">" . $value . "</option>";
          } ?>
        </select>
      </p>                                                                                                                                      
    </div>
  </div>  
  <p><a href="#" onclick="jQuery(this).parent().prev('div.javascript_settings').toggle();return false;">JCarousel Settings</a></p>     
<?php
  }

  function update($new_instance, $old_instance)
  {
    $new_instance['title'] = esc_attr($new_instance['title']);
    return $new_instance;
  }
}