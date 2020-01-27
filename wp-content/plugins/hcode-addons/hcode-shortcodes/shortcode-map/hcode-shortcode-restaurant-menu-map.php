<?php
/**
 * Map For Restaurant Menu Slider
 *
 * @package H-Code
 */
?>
<?php 
/*-----------------------------------------------------------------------------------*/
/* Restaurant Menu Slider */
/*-----------------------------------------------------------------------------------*/

vc_map( 
  array(
      'name' => __( 'Restaurant Menu Slider' , 'hcode-addons' ), //Name of your shortcode for human reading inside element list
      'base' => 'hcode_restaurant_menu', //Shortcode tag. For [my_shortcode] shortcode base is my_shortcode
      'category' => 'H-Code',
      'description' => __( 'Create a restaurant menu slider', 'hcode-addons' ), //Short description of your element, it will be visible in 'Add element' window
      'class' => '', //CSS class which will be added to the shortcode's content element in the page edit screen in Visual Composer backend edit mode
      'as_parent' => array('only' => 'hcode_restaurant_menu_slide_content'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
      'icon' => 'h-code-shortcode-icon fas fa-arrows-alt-h', //URL or CSS class with icon image.
      'js_view' => 'VcColumnView',
      'params' => array( //List of shortcode attributes. Array which holds your shortcode params, these params will be editable in shortcode settings page      
          array(
              'type' => 'hcode_custom_switch_option',
              'class' => '',
              'heading' => __('Show Pagination', 'hcode-addons'),
              'param_name' => 'show_pagination',
              'value' => array(__('OFF', 'hcode-addons') => '0', 
                               __('ON', 'hcode-addons') => '1'
                              ),
              'description' => __( 'Select ON to show pagination in slider', 'hcode-addons' ),
          ),
          array(
              'type' => 'dropdown',
              'heading' => __('Pagination Style', 'hcode-addons'),
              'param_name' => 'show_pagination_style',
              'value' => array(__('Select Pagination Style', 'hcode-addons') => '',
                               __('Dot Style', 'hcode-addons') => '0',
                               __('Line Style', 'hcode-addons') => '1',
                               __('Round Style', 'hcode-addons') => '2',
                              ),
              'dependency' => array( 'element' => 'show_pagination', 'value' => array('1') ),
          ),
          array(
              'type' => 'dropdown',
              'heading' => __('Pagination Color Style', 'hcode-addons'),
              'param_name' => 'show_pagination_color_style',
              'value' => array(__('Select Pagination Color Style', 'hcode-addons') => '',
                               __('Dark Style', 'hcode-addons') => '0',
                               __('Light Style', 'hcode-addons') => '1'
                              ),
              'dependency' => array( 'element' => 'show_pagination', 'value' => array('1') ),
          ),
          array(
              'type' => 'hcode_custom_switch_option',
              'class' => '',
              'heading' => __('Show Navigation', 'hcode-addons'),
              'param_name' => 'show_navigation',
              'value' => array(__('OFF', 'hcode-addons') => '0', 
                               __('ON', 'hcode-addons') => '1'
                              ),
              'description' => __( 'Select ON to show navigation in slider', 'hcode-addons' ),
          ),
          array(
              'type' => 'dropdown',
              'heading' => __('Navigation Style', 'hcode-addons'),
              'param_name' => 'show_navigation_style',
              'value' => array(__('Select Navigation Style', 'hcode-addons') => '',
                               __('Next/Prev Black Arrow', 'hcode-addons') => '0',
                               __('Next/Prev White Arrow', 'hcode-addons') => '1'
                              ),
              'dependency' => array( 'element' => 'show_navigation', 'value' => array('1') ),
          ),
          array(
              'type' => 'hcode_animation_style',
              'heading' => __('Animation In', 'hcode-addons'),
              'param_name' => 'transition_style',
              'group' => 'Slider Configuration',
          ),
          array(
              'type' => 'hcode_animation_style',
              'heading' => __('Animation Out', 'hcode-addons'),
              'param_name' => 'transition_animation_out',
              'group' => 'Slider Configuration',
          ),
          array(
                'type' => 'hcode_custom_switch_option',
                'class' => '',
                'heading' => __('Loop', 'hcode-addons'),
                'param_name' => 'loop',
                'value' => array(__('False', 'hcode-addons') => '0', 
                                 __('True', 'hcode-addons') => '1'
                                ),
                'description' => __( 'Select TRUE to loop slider', 'hcode-addons' ),                
                'group' => 'Slider Configuration',
          ),
          array(
              'type' => 'hcode_custom_switch_option',
              'class' => '',
              'heading' => __('Autoplay', 'hcode-addons'),
              'param_name' => 'autoplay',
              'value' => array(__('False', 'hcode-addons') => '0', 
                               __('True', 'hcode-addons') => '1'
                              ),
              'description' => __( 'Select TRUE to autoplay slider', 'hcode-addons' ),
              'group' => 'Slider Configuration',
          ),
          array(
              'type' => 'hcode_custom_switch_option',
              'class' => '',
              'heading' => __('Stop On Hover', 'hcode-addons'),
              'param_name' => 'stoponhover',
              'value' => array(__('False', 'hcode-addons') => '0', 
                               __('True', 'hcode-addons') => '1'
                              ),
              'description' => __( 'Select TRUE to stop autoplay when hover on slider', 'hcode-addons' ),
              'dependency'  => array( 'element' => 'autoplay', 'value' => array('1') ),
              'group' => 'Slider Configuration',
          ),
          array(
              'type' => 'dropdown',
              'heading' => __('Slide Delay Time', 'hcode-addons'),
              'param_name' => 'slidespeed',
              'value' => array(__('Slide Delay Time', 'hcode-addons') => '',
                               __('500', 'hcode-addons') => '500',
                               __('600', 'hcode-addons') => '600',
                               __('700', 'hcode-addons') => '700',
                               __('800', 'hcode-addons') => '800',
                               __('900', 'hcode-addons') => '900',
                               __('1000', 'hcode-addons') => '1000',
                               __('1100', 'hcode-addons') => '1100',
                               __('1200', 'hcode-addons') => '1200',
                               __('1300', 'hcode-addons') => '1300',
                               __('1400', 'hcode-addons') => '1400',
                               __('1500', 'hcode-addons') => '1500',
                               __('2000', 'hcode-addons') => '2000',
                               __('3000', 'hcode-addons') => '3000',
                               __('4000', 'hcode-addons') => '4000',
                               __('5000', 'hcode-addons') => '5000',
                               __('6000', 'hcode-addons') => '6000',
                               __('7000', 'hcode-addons') => '7000',
                               __('8000', 'hcode-addons') => '8000',
                               __('9000', 'hcode-addons') => '9000',
                               __('10000', 'hcode-addons') => '10000',
                               __('Custom', 'hcode-addons') => 'custom',
                              ),
              'description' => __('Select slide delay time (1ms = 100)', 'hcode-addons'),
              'dependency'  => array( 'element' => 'autoplay', 'value' => array('1') ),
              'group' => 'Slider Configuration',
          ),
          array(
             'type'        => 'textfield',
             'heading'     => __('Custom Slide Delay Time', 'hcode-addons' ),
             'description' => __('Add custom slide delay time to this slider. Like "2000"', 'hcode-addons' ),
             'param_name'  => 'custom_slidespeed',
             'dependency' => array( 'element' => 'slidespeed', 'value' => 'custom' ),
             'group' => 'Slider Configuration',
          ),
          array(
              'type' => 'dropdown',
              'heading' => __('Slide Speed', 'hcode-addons'),
              'param_name' => 'slidedelay',
              'admin_label' => true,
              'value' => array(__('Select Slide Speed', 'hcode-addons') => '',
                               __('500', 'hcode-addons') => '500',
                               __('600', 'hcode-addons') => '600',
                               __('700', 'hcode-addons') => '700',
                               __('800', 'hcode-addons') => '800',
                               __('900', 'hcode-addons') => '900',
                               __('1000', 'hcode-addons') => '1000',
                               __('1100', 'hcode-addons') => '1100',
                               __('1200', 'hcode-addons') => '1200',
                               __('1300', 'hcode-addons') => '1300',
                               __('1400', 'hcode-addons') => '1400',
                               __('1500', 'hcode-addons') => '1500',
                               __('2000', 'hcode-addons') => '2000',
                               __('3000', 'hcode-addons') => '3000',
                               __('4000', 'hcode-addons') => '4000',
                               __('5000', 'hcode-addons') => '5000',
                               __('6000', 'hcode-addons') => '6000',
                               __('7000', 'hcode-addons') => '7000',
                               __('8000', 'hcode-addons') => '8000',
                               __('9000', 'hcode-addons') => '9000',
                               __('10000', 'hcode-addons') => '10000',
                               __('Custom', 'hcode-addons') => 'custom',
                              ),
              'std' => '700',
              'description' => __('Select slide speed', 'hcode-addons'),
              'dependency'  => array( 'element' => 'autoplay', 'value' => array('1') ),
              'group' => 'Slider Configuration',
          ),
          array(
             'type'        => 'textfield',
             'heading'     => __('Custom Slide Speed', 'hcode-addons' ),
             'description' => __('Add custom slide speed to this slider. Like "2000"', 'hcode-addons' ),
             'param_name'  => 'custom_slidedelay',
             'dependency' => array( 'element' => 'slidedelay', 'value' => 'custom' ),
             'group' => 'Slider Configuration',
          ),
          array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => esc_html__( 'Overlay color', 'hcode-addons' ),
            'param_name' => 'hcode_overlay_color',
            'group' => esc_html__( 'Overlay', 'hcode-addons' ),
          ),
          array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Overlay opacity', 'hcode-addons'),
            'param_name' => 'hcode_overlay_opacity',
            'value' => array( esc_html__( 'Default opacity','hcode-addons') => '',
                              '0'  => '0',
                              '0.1'  => '0.1',
                              '0.2'  => '0.2',
                              '0.3'  => '0.3',
                              '0.4'  => '0.4',
                              '0.5'  => '0.5',
                              '0.6'  => '0.6',
                              '0.7'  => '0.7',
                              '0.8'  => '0.8',
                              '0.9'  => '0.9',
                              '1.0'  => '1.0',
                            ),
            'group' => esc_html__( 'Overlay', 'hcode-addons' ),
          ),
          array(
             'type'        => 'textfield',
             'heading'     => __('Slider ID', 'hcode-addons' ),
             'description' => 'Optional - Define element id (The id attribute specifies a unique id for an HTML element)',
             'param_name'  => 'hcode_slider_id',
             'group'       => 'Slider ID & Class'
          ),
          array(
             'type'        => 'textfield',
             'heading'     => __('Slider Extra Class', 'hcode-addons' ),
             'description' => 'Optional - add additional CSS class to this element, you can define multiple CSS class with use of space like "Class1 Class2"',
             'param_name'  => 'hcode_slider_class',
             'group'       => 'Slider ID & Class'
          ),
      ),
  )
);
vc_map( 
  array(
      'name' => __('Add Menu', 'hcode-addons'),
      'description' => 'Add Menu Content',
      'base' => 'hcode_restaurant_menu_slide_content',
      'as_child' => array('only' => 'hcode_restaurant_menu'), // Use only|except attributes to limit parent (separate multiple values with comma)
      'icon' => 'h-code-shortcode-icon fas fa-arrows-alt-h', //URL or CSS class with icon image.
      'params' => array(
          array(
              'type' => 'attach_image',
              'admin_label' => true,
              'heading' => __('Menu Image', 'hcode-addons'),
              'param_name' => 'image',
          ),
          array(
              'type' => 'attach_image',
              'heading' => __('Content Image', 'hcode-addons'),
              'param_name' => 'content_image',
          ),
          array(
              'type' => 'textfield',
              'admin_label' => true,
              'heading' => __('Title', 'hcode-addons'),
              'description' => __( 'Title', 'hcode-addons' ),
              'param_name' => 'title',
          ),
          array(
              'type' => 'textfield',
              'heading' => __('Subtitle', 'hcode-addons'),
              'description' => __( 'SubTitle', 'hcode-addons' ),
              'param_name' => 'subtitle',
          ),
          array(
              'type' => 'textarea_html',
              'heading' => __('Content', 'hcode-addons'),
              'description' => __( 'Content.', 'hcode-addons' ),
              'param_name' => 'content',
          ),
          array(
              'type' => 'colorpicker',
              'class' => '',
              'heading' => __( 'Title Color', 'hcode-addons' ),
              'param_name' => 'hcode_title_color',
              'group' => 'Style',
          ),
          array(
              'type' => 'colorpicker',
              'class' => '',
              'heading' => __( 'Subtitle Color', 'hcode-addons' ),
              'param_name' => 'hcode_subtitle_color',
              'group' => 'Style',
          ),
          array(
              'type'        => 'responsive_font_settings',
              'param_name'  => 'hcode_responsive_title_font',
              'heading'     => esc_html__( 'Font Settings For Title', 'hcode-addons' ),
              'group' => 'Font Settings',
          ),
          array(
              'type'        => 'responsive_font_settings',
              'param_name'  => 'hcode_responsive_subtitle_font',
              'heading'     => esc_html__( 'Font Settings For Subtitle', 'hcode-addons' ),
              'group' => 'Font Settings',
          ),
          array(
              'type' => 'hcode_custom_srcset',
              'param_name' => 'hcode_menu_image_srcset',
              'heading' => __('Menu Image SRCSET', 'hcode-addons' ),
              'value' => 'full',
              'group' => 'SRCSET',
          ),
          array(
              'type' => 'hcode_custom_srcset',
              'param_name' => 'hcode_content_image_srcset',
              'heading' => __('Content Image SRCSET', 'hcode-addons' ),
              'value' => 'full',
              'group' => 'SRCSET',
          ),
        ),
    ) 
);
/* Main Slider class*/
if(class_exists('WPBakeryShortCodesContainer')){ 
  class WPBakeryShortCode_hcode_restaurant_menu extends WPBakeryShortCodesContainer { }
}
if(class_exists('WPBakeryShortCode')){
  class WPBakeryShortCode_hcode_restaurant_menu_slide_content extends WPBakeryShortCode { }
}