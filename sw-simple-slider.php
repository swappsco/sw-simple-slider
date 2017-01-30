<?php
/*
Plugin Name: Sw Simple Slider
Plugin URI: http://swapps.io
Author: Swapps Development Team
Version: 0.2.1
Author URI: https://www.swapps.io/
*/

define( 'SW_SLIDER_VERSION', '0.1' );
define( 'SW_SLIDER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

function slider_post_types_register() {
  register_post_type( 'slider',
    array(
      'labels' => array(
        'name' => __( 'Sliders' ),
        'singular_name' => __( 'Slider' ),
        'add_new' => __( 'Add New Slider' ),
        'add_new_item' => __( 'Add New Slider' ),
        'edit' => __( 'Edit' ),
        'edit_item' => __( 'Edit Slider' ),
        'new_item' => __( 'New Slider' ),
        'view' => __( 'View Slider' ),
        'view_item' => __( 'View Slider' ),
        'search_items' => __( 'Search Sliders' ),
        'not_found' => __( 'No Sliders' ),
        'not_found_in_trash' => __( 'No Sliders in the Trash' ),
      ),
      'hierarchical' => false,
      'public' => true,
      'menu_position' => 25,
      'menu_icon' => 'dashicons-images-alt',
      'has_archive' => 'sliders',
      'supports' => array( 'title', 'editor', 'thumbnail'),
      'description' => "Easy, simple sliders."
    )
  );
}

add_action( 'init', 'slider_post_types_register' );

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_57f7f700465bb',
  'title' => 'Slide',
  'fields' => array (
    array (
      'sub_fields' => array (
        array (
          'force_crop' => 'yes',
          'crop_type' => 'hard',
          'preview_size' => 'medium_large',
          'save_format' => 'object',
          'save_in_media_library' => 'yes',
          'target_size' => 'custom',
          'library' => 'all',
          'retina_mode' => 'no',
          'key' => 'field_57f7f790421d3',
          'label' => 'Slide Image',
          'name' => 'image',
          'type' => 'image_crop',
          'instructions' => '',
          'required' => 1,
          'conditional_logic' => array (
            array (
              array (
                'field' => 'field_588faa04951de',
                'operator' => '!=',
                'value' => 'text',
              ),
            ),
          ),
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'width' => 1200,
          'height' => 600,
        ),
        array (
          'default_value' => '',
          'maxlength' => '',
          'placeholder' => 'Title of slide',
          'prepend' => '',
          'append' => '',
          'key' => 'field_57f7f7f8421d4',
          'label' => 'Slide Title',
          'name' => 'title',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
        ),
        array (
          'default_value' => '',
          'maxlength' => '',
          'placeholder' => 'Secondary title of slider',
          'prepend' => '',
          'append' => '',
          'key' => 'field_57f7f86d421d5',
          'label' => 'Second Title',
          'name' => 'title_2',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
        ),
        array (
          'default_value' => '',
          'new_lines' => 'wpautop',
          'maxlength' => '',
          'placeholder' => 'Description of slide',
          'rows' => '',
          'key' => 'field_57f7f883421d6',
          'label' => 'Description',
          'name' => 'description',
          'type' => 'textarea',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
        ),
        array (
          'default_value' => '',
          'maxlength' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'key' => 'field_57f7f8b6421d7',
          'label' => 'Button Label',
          'name' => 'call_to_action_text',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
        ),
        array (
          'post_type' => array (
          ),
          'taxonomy' => array (
          ),
          'allow_null' => 0,
          'multiple' => 0,
          'allow_archives' => 1,
          'key' => 'field_57f7f8d6421d8',
          'label' => 'Button Link',
          'name' => 'link',
          'type' => 'page_link',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
        ),
      ),
      'min' => 0,
      'max' => 0,
      'layout' => 'block',
      'button_label' => 'Add Slide',
      'collapsed' => '',
      'key' => 'field_57f7f705421d2',
      'label' => 'Add slides',
      'name' => 'slide',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
    ),
    array (
      'multiple' => 0,
      'allow_null' => 0,
      'choices' => array (
        'full' => 'Full Width Slider',
        'text' => 'Text Slider',
      ),
      'default_value' => array (
        0 => 'full',
      ),
      'ui' => 0,
      'ajax' => 0,
      'placeholder' => '',
      'return_format' => 'value',
      'key' => 'field_588faa04951de',
      'label' => 'Slider type',
      'name' => 'slider_type',
      'type' => 'select',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'slider',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array (
    0 => 'the_content',
    1 => 'excerpt',
    2 => 'custom_fields',
    3 => 'discussion',
    4 => 'comments',
    5 => 'featured_image',
  ),
  'active' => 1,
  'description' => '',
));

endif;

function display_slider($name) {
  $output = '';
  $args = array( 
    'post_type' => 'slider',
    'name' => $name
  );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
    if( have_rows('slide') ):
      $output = '<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">';
      $output .= '<ol class="carousel-indicators">';
      $i=0;
      while( have_rows('slide') ): the_row();
        if ($i == 0) {
          $output .= '<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>';
        }
        else{
          $output .= '<li data-target="#bs-carousel" data-slide-to="'.$i.'"></li>';
        }
        $i++;
      endwhile;
      $output .= '</ol>';
      $output .= '<div class="carousel-inner">';
      $z = 0;
      while( have_rows('slide') ): the_row();
        $slide_image = get_sub_field('image');
        $slide_title = get_sub_field('title');
        $slide_title2 = get_sub_field('title_2');
        $slide_description = get_sub_field('description');
        $slide_link = get_sub_field('link');
        $slide_cta = get_sub_field('call_to_action_text');
        $output .= '<div class="item slides ';
        if ($z==0) { 
          $output .= 'active';
        } 
        $output .= '">';
        $output .= ' <img class="center-block img-responsive" width="200" src="'.$slide_image['url'].'" alt="'.$slide_image['alt'].'" />';
        $output .= '<div class="carousel-caption"><hgroup>';
        $output .= '<h1>'.$slide_title.'</h1>';
        $output .= '<h3>'.$slide_title2.'</h3>';
        $output .= '</hgroup>';
        $output .= '<p>'.$slide_description.'</p>';
        $output .= '<a href="'. $slide_link .'">';
        $output .= '<button class="btn btn-primary btn-lg" role="button">';
        $output .= $slide_cta; 
        $output .= '</button></a>';
        $output .= '</div></div>';
        $z++;
      endwhile;
      $output .= '</div>';
      $output .= '<a class="left carousel-control hidden-xs" href="#bs-carousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>';
      $output .= '<a class="right carousel-control hidden-xs" href="#bs-carousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>';
      $output .= '</div>';
    else :
    endif;
  endwhile;

  return $output;
}

function sw_slider_shortcode($atts) {
  $atts = shortcode_atts( array(
      'name' => '',
  ), $atts, 'sw_slider' );
  $name = $atts['name'];
  $output = '<section class="sw-slider">';
  $output .= display_slider($name);
  $output .= '</section>';
  return $output;
}

add_shortcode( 'sw_slider', 'sw_slider_shortcode');

function get_sw_slider($name)
{
  $slider = get_page_by_path( $name, OBJECT, 'slider' );
  return $slider;
}

/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'sw_slider_meta_boxes_setup' );
add_action( 'load-post-new.php', 'sw_slider_meta_boxes_setup' );

/* Meta box setup function. */
function sw_slider_meta_boxes_setup() {
  /* Add meta boxes on the 'add_meta_boxes' hook. */

  add_action( 'add_meta_boxes', 'sw_slider_metaboxes' );
}

function sw_slider_metaboxes()
{
  $screen = get_current_screen();
  if( 'add' != $screen->action ){
    add_meta_box( 
      'sw_shortcode_box', 
      esc_html__( 'Shortcode for this slider' ), 
      'display_shortcode', 
      'slider', 
      'side', 
      'high' 
    );
  }
}

function get_shortcode($name) {
  return '[sw_slider name="'. $name . '"]';
}

function display_shortcode($post) {
  $shortcode = get_shortcode($post->post_name);
  ?>
  <p>
    <label for="sw_shortcode">Shortcode:</label>
    <br>
    <textarea name="sw_shortcode" disabled="disabled" style="width: 100%"
      id="sw_shortcode"><?php echo esc_html($shortcode); ?></textarea>
  </p>
  <?php
}

/**
 * Returns the array with the asociate slides
 *
 * This is a very versatile function. You can use for get all
 * slides info for render yout custom html
 * @param  WP_Post Objec $slider A object post type = slider
 * @return array        Array of slides
 */
function get_slides_array($slider)
{
  $slides = get_fields($slider->ID);
  return $slides['slide'];
}
