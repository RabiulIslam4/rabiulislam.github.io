<?php
/**
 * Map For Single Image
 *
 * @package H-Code
 */
?>
<?php
/*-----------------------------------------------------------------------------------*/
/* Single Image */
/*-----------------------------------------------------------------------------------*/
    
vc_map( array(
    'name' => __('Image/Video Content Block', 'hcode-addons'),
    'description' => __( 'Create an image/video content block', 'hcode-addons' ),    
    'icon' => 'far fa-file-video h-code-shortcode-icon',
    'base' => 'hcode_single_image',
    'category' => 'H-Code',
    'params' => array(
      array(
          'type' => 'dropdown',
          'admin_label' => true,
          'heading' => __('Image/Video Content Block Style', 'hcode-addons'),
          'param_name' => 'hcode_single_image_premade_style',
          'value' => array(__('Select Image/Video Content Block Style', 'hcode-addons') => '',
                           __('Style1', 'hcode-addons') => 'single-image-style1',
                           __('Style2', 'hcode-addons') => 'single-image-style2',
                           __('Style3', 'hcode-addons') => 'single-image-style3',
                           __('Style4', 'hcode-addons') => 'single-image-style4',
                           __('Style5', 'hcode-addons') => 'single-image-style5',
                           __('Style6', 'hcode-addons') => 'single-image-style6',
                           __('Style7', 'hcode-addons') => 'single-image-style7',
                           __('Style8', 'hcode-addons') => 'single-image-style8',
                           __('Style9', 'hcode-addons') => 'single-image-style9',
                           __('Style10', 'hcode-addons') => 'single-image-style10',
                           __('Style11', 'hcode-addons') => 'single-image-style11',
                           __('Style12', 'hcode-addons') => 'single-image-style12',
                           __('Style13', 'hcode-addons') => 'single-image-style13',
                           __('Style14', 'hcode-addons') => 'single-image-style14',
                           __('Style15', 'hcode-addons') => 'single-image-style15',
                           __('Style16', 'hcode-addons') => 'single-image-style16',
                           __('Style17', 'hcode-addons') => 'single-image-style17',
                           __('Style18', 'hcode-addons') => 'single-image-style18',
                           __('Style19', 'hcode-addons') => 'single-image-style19',
                           __('Style20', 'hcode-addons') => 'single-image-style20',
                           __('Style21', 'hcode-addons') => 'single-image-style21',
                           __('Style22', 'hcode-addons') => 'single-image-style22',
                           __('Style23', 'hcode-addons') => 'single-image-style23',
                          ),
      ),
      array(
          'type' => 'hcode_preview_image',
          'heading' => __('Select pre-made style', 'hcode-addons'),
          'param_name' => 'hcode_single_image_preview_image',
      ),
      array(
          'type' => 'attach_image',
          'heading' => __('Image', 'hcode-addons' ),
          'param_name' => 'single_image_bg_image',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style2','single-image-style3','single-image-style4','single-image-style12','single-image-style15') ),
        ),
      array(
          'type' => 'attach_image',
          'heading' => __('Background Image', 'hcode-addons' ),
          'param_name' => 'single_image_bg_image_spa',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style12') ),
        ),
      array(
          'type' => 'textfield',
          'admin_label' => true,
          'heading' => __('Title', 'hcode-addons'),
          'param_name' => 'single_image_title',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style1','single-image-style2','single-image-style3','single-image-style4','single-image-style6','single-image-style7','single-image-style8','single-image-style9','single-image-style10','single-image-style11','single-image-style12','single-image-style13','single-image-style14','single-image-style15','single-image-style16','single-image-style18','single-image-style19','single-image-style20','single-image-style22','single-image-style23') ),
      ),
      array(
          'type' => 'textfield',
          'heading' => __('Small Title 1', 'hcode-addons'),
          'param_name' => 'single_image_title1',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style19') ),
      ),
      array(
          'type' => 'textfield',
          'heading' => __('Small Title 2', 'hcode-addons'),
          'param_name' => 'single_image_title2',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style19') ),
      ),
      array(
          'type' => 'textfield',
          'heading' => __('Small Title 3', 'hcode-addons'),
          'param_name' => 'single_image_title3',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style19') ),
      ),
      array(
          'type' => 'textarea_html',
          'heading' => __('Content', 'hcode-addons'),
          'param_name' => 'content',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style2','single-image-style3','single-image-style4','single-image-style5','single-image-style6','single-image-style8','single-image-style9','single-image-style10','single-image-style11','single-image-style12','single-image-style13','single-image-style14','single-image-style15','single-image-style17','single-image-style18','single-image-style20','single-image-style21','single-image-style22','single-image-style23') ),
      ),
      array(
          'type' => 'textarea',
          'heading' => __('Extra Content', 'hcode-addons'),
          'param_name' => 'extra_content',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style20')),
      ),
      array(
          'type' => 'dropdown',
          'heading' => __( 'Video Type', 'hcode-addons' ),
          'param_name' => 'video_type',
          'value' => array(__('Select Video Type', 'hcode-addons') => '',
                           __( 'Self', 'hcode-addons' ) => 'self',
                           __( 'External', 'hcode-addons' ) => 'external',
                          ),
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style4','single-image-style15')),
      ),
      array(
          'type' => 'textfield',
          'heading' => __('MP4 Video URL', 'hcode-addons'),
          'param_name' => 'single_image_mp4_video',
          'dependency'  => array( 'element' => 'video_type', 'value' => array('self') ),
      ), 
      array(
          'type' => 'textfield',
          'heading' => __('OGG Video URL', 'hcode-addons'),
          'param_name' => 'single_image_ogg_video',
          'dependency'  => array( 'element' => 'video_type', 'value' => array('self') ),
      ), 
      array(
          'type' => 'textfield',
          'heading' => __('WEBM Video URL', 'hcode-addons'),
          'param_name' => 'single_image_webm_video',
          'dependency'  => array( 'element' => 'video_type', 'value' => array('self') ),
      ), 
      array(
          'type' => 'textfield',
          'heading' => __('Youtube / Vimeo Video Embed URL', 'hcode-addons'),
          'description' => __( 'Add YOUTUBE VIDEO EMBED URL like https://www.youtube.com/embed/xxxxxxxxxx, you will get this from youtube embed iframe src code. or add VIMEO VIDEO EMBED URL like https://player.vimeo.com/video/xxxxxxxx, you will get this from vimeo embed iframe src code. Please <a href="http://wpdemos.themezaa.com/h-code/documentation/how-to-manage-youtube-and-vimeo-video-parameters/" target="_blank">click here</a> to manage video parameters like autoplay and loop video.', 'hcode-addons' ),            
          'param_name' => 'external_video_url',
          'dependency'  => array( 'element' => 'video_type', 'value' => array('external') ),
      ),
      array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Enable Loop', 'hcode-addons'),
            'param_name' => 'enable_loop',
            'value' => array(__('No', 'hcode-addons') => '0', 
                             __('Yes', 'hcode-addons') => '1'
                            ),
            'std' => '1',  
            'dependency'  => array( 'element' => 'video_type', 'value' => array('self') ),
      ),
      array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Enable Autoplay', 'hcode-addons'),
            'param_name' => 'enable_autoplay',
            'value' => array(__('No', 'hcode-addons') => '0', 
                             __('Yes', 'hcode-addons') => '1'
                            ),
            'std' => '1',  
            'dependency'  => array( 'element' => 'video_type', 'value' => array('self') ),
      ),
      array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Enable Controls', 'hcode-addons'),
            'param_name' => 'enable_controls',
            'value' => array(__('No', 'hcode-addons') => '0', 
                             __('Yes', 'hcode-addons') => '1'
                            ),
            'std' => '1',  
            'dependency'  => array( 'element' => 'video_type', 'value' => array('self') ),
      ),
      array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Enable Mute', 'hcode-addons'),
            'param_name' => 'enable_mute',
            'value' => array(__('No', 'hcode-addons') => '0', 
                             __('Yes', 'hcode-addons') => '1'
                            ),  
            'dependency'  => array( 'element' => 'video_type', 'value' => array('self') ),
      ),
      array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Full Screen', 'hcode-addons'),
            'param_name' => 'video_fullscreen',
            'value' => array(__('No', 'hcode-addons') => '0', 
                             __('Yes', 'hcode-addons') => '1'
                            ),  
            'dependency'  => array( 'element' => 'video_type', 'value' => array('external') ),
      ),
      array(
          'type' => 'textfield',
          'heading' => __('Youtube Video URL', 'hcode-addons'),
          'description' => __( 'Add YOUTUBE VIDEO URL like https://www.youtube.com/watch?v=xxxxxxxxxx, you will get this from youtube', 'hcode-addons' ),
          'param_name' => 'youtube_video_url',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style13') ),
      ),
      array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Position Relative', 'hcode-addons'),
            'param_name' => 'position_relative',
            'value' => array(__('No', 'hcode-addons') => '0', 
                             __('Yes', 'hcode-addons') => '1'
                            ),  
            'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style1','single-image-style2','single-image-style3','single-image-style4','single-image-style5','single-image-style6','single-image-style7','single-image-style8','single-image-style9','single-image-style10','single-image-style11','single-image-style12','single-image-style13','single-image-style16','single-image-style17','single-image-style19','single-image-style21','single-image-style22') ),
      ),
      array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Add Container Class', 'hcode-addons'),
            'param_name' => 'hcode_container',
            'value' => array(__('No', 'hcode-addons') => '0', 
                             __('Yes', 'hcode-addons') => '1'
                            ),
            'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style1','single-image-style2','single-image-style3','single-image-style4','single-image-style5','single-image-style6','single-image-style7','single-image-style8','single-image-style9','single-image-style10','single-image-style11','single-image-style12','single-image-style13','single-image-style16','single-image-style17','single-image-style19','single-image-style21','single-image-style22') ),
      ),
      array(
          'type' => 'textfield',
          'heading' => __('Slide Number Text', 'hcode-addons'),
          'description' => __( 'Slide Number.', 'hcode-addons' ),
          'param_name' => 'single_image_slide_number',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style11','single-image-style20') ),
      ),
      array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Scroll To Section', 'hcode-addons'),
            'param_name' => 'scroll_to_section',
            'value' => array(__('NO', 'hcode-addons') => '0', 
                             __('YES', 'hcode-addons') => '1'
                            ),
            'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style1','single-image-style2','single-image-style3','single-image-style4','single-image-style5','single-image-style6','single-image-style7','single-image-style8','single-image-style9','single-image-style10','single-image-style11','single-image-style12','single-image-style13','single-image-style14','single-image-style15','single-image-style16','single-image-style17','single-image-style21','single-image-style22') ),
      ),
      array(
          'type' => 'textfield',
          'heading' => __('Scroll To Section Id', 'hcode-addons'),
          'description' => __( 'Enter Section id like #features', 'hcode-addons' ),
          'param_name' => 'single_image_scroll_to_sectionid',
          'dependency'  => array( 'element' => 'scroll_to_section', 'value' => array('1') ),
      ), 
      array(
          'type' => 'colorpicker',
          'class' => '',
          'heading' => __( 'Text Color', 'hcode-addons' ),
          'param_name' => 'hcode_text_color',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style1','single-image-style2','single-image-style3','single-image-style4','single-image-style5','single-image-style6','single-image-style7','single-image-style8','single-image-style9','single-image-style10','single-image-style11','single-image-style12','single-image-style13','single-image-style14','single-image-style15','single-image-style16','single-image-style17','single-image-style18','single-image-style19','single-image-style20','single-image-style22') ),
          'group' => 'Color',
      ),
      array(
          'type' => 'colorpicker',
          'class' => '',
          'heading' => __( 'Title Color', 'hcode-addons' ),
          'param_name' => 'hcode_title_color',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => 'single-image-style23' ),
          'group' => 'Color',
      ),
      array(
          'type' => 'colorpicker',
          'class' => '',
          'heading' => __( 'Small Title Color', 'hcode-addons' ),
          'param_name' => 'hcode_small_title_color',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => 'single-image-style19' ),
          'group' => 'Color',
      ),
      array(
          'type' => 'colorpicker',
          'class' => '',
          'heading' => __( 'Small Title Pointer Color', 'hcode-addons' ),
          'param_name' => 'hcode_small_title_pointer_color',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => 'single-image-style19' ),
          'group' => 'Color',
      ),
      array(
          'type' => 'colorpicker',
          'class' => '',
          'heading' => __( 'Title Background Color', 'hcode-addons' ),
          'param_name' => 'hcode_title_bg_color',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style4','single-image-style8') ),
          'group' => 'Color',
      ),
      array(
          'type' => 'colorpicker',
          'class' => '',
          'heading' => __( 'Separator Color', 'hcode-addons' ),
          'param_name' => 'hcode_sep_color',
          'group' => 'Color',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style5','single-image-style6','single-image-style7','single-image-style8','single-image-style10','single-image-style11','single-image-style12','single-image-style16','single-image-style17','single-image-style20','single-image-style21') ),
      ),
      array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Add FullScreen Class', 'hcode-addons'),
          'param_name' => 'fullscreen',
          'value' => array(__('NO', 'hcode-addons') => '0', 
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style1','single-image-style2','single-image-style3','single-image-style4','single-image-style5','single-image-style6','single-image-style7','single-image-style8','single-image-style9','single-image-style10','single-image-style11','single-image-style12','single-image-style13','single-image-style16','single-image-style17','single-image-style19','single-image-style21','single-image-style22') ),
      ),
      array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Do you want to show custom newsletter?', 'hcode-addons'),
          'param_name' => 'hcode_coming_soon_custom_newsletter',
          'value' => array(__('NO', 'hcode-addons') => '0', 
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style13') ),
      ),
      array(
          'type' => 'textarea',
          'heading' => __('Add Custom Newsletter Shortcode', 'hcode-addons'),
          'param_name' => 'hcode_custom_newsletter',
          'dependency' => array( 'element' => 'hcode_coming_soon_custom_newsletter', 'value' => array('1') ),
      ),
      array(
          'type' => 'textfield',
          'heading' => __('Placeholder Text', 'hcode-addons'),
          'param_name' => 'hcode_newsletter_placeholder',
          'dependency' => array( 'element' => 'hcode_coming_soon_custom_newsletter', 'value' => array('0') ),
      ),
      array(
          'type' => 'textfield',
          'heading' => __('Subscribe Button Text', 'hcode-addons'),
          'param_name' => 'hcode_newsletter_button_text',
          'dependency' => array( 'element' => 'hcode_coming_soon_custom_newsletter', 'value' => array('0') ),
      ),
      array(
        'type'        => 'vc_link',
        'heading'     => __('First Button Config', 'hcode-addons' ),
        'param_name'  => 'first_button_config',
        'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style5','single-image-style7','single-image-style9','single-image-style12','single-image-style16','single-image-style21','single-image-style22') ),
      ),
      array(
        'type'        => 'vc_link',
        'heading'     => __('Second Button Config', 'hcode-addons' ),
        'param_name'  => 'second_button_config',
        'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style5','single-image-style7','single-image-style9','single-image-style16','single-image-style21','single-image-style22') ),
      ),
      array(
        'type' => 'colorpicker',
        'class' => '',
        'heading' => esc_html__( 'Overlay color', 'hcode-addons' ),
        'param_name' => 'hcode_overlay_color',
        'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => 'single-image-style7' ),
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
        'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => 'single-image-style7' ),
        'group' => esc_html__( 'Overlay', 'hcode-addons' ),
      ),
      array(
        'type'        => 'hcode_button_settings',
        'param_name'  => 'button_one_config_settings',
        'heading'     => esc_html__( 'Button One Configuration', 'hcode-addons' ),
        'group' => 'Button Configuration',
        'dependency' => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style5','single-image-style7','single-image-style9','single-image-style12','single-image-style16','single-image-style21','single-image-style22') ),
        'description' => __( 'You can easily set first button text-transform, font-size, line-height, letter-spacing for all devices ', 'hcode-addons' ),
        'hide_font_settings_element'=>array('icon-color','icon-hover-color')
      ),
      array(
        'type'        => 'hcode_button_settings',
        'param_name'  => 'button_two_config_settings',
        'heading'     => esc_html__( 'Button Two Configuration', 'hcode-addons' ),
        'group' => 'Button Configuration',
        'dependency' => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style5','single-image-style7','single-image-style9','single-image-style12','single-image-style16','single-image-style21','single-image-style22') ),
        'description' => __( 'You can easily set second button text-transform, font-size, line-height, letter-spacing for all devices ', 'hcode-addons' ),
        'hide_font_settings_element'=>array('icon-color','icon-hover-color')
      ),
      array(
        'type'        => 'responsive_font_settings',
        'param_name'  => 'hcode_responsive_title_font',
        'heading'     => esc_html__( 'Font Settings For Title', 'hcode-addons' ),
        'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style1','single-image-style2','single-image-style3','single-image-style4','single-image-style6','single-image-style7','single-image-style8','single-image-style9','single-image-style10','single-image-style11','single-image-style12','single-image-style13','single-image-style14','single-image-style15','single-image-style16','single-image-style18','single-image-style19','single-image-style20','single-image-style22','single-image-style23') ),
        'group' => 'Font Settings',
      ),
      array(
        'type'        => 'responsive_font_settings',
        'param_name'  => 'hcode_responsive_small_title_font',
        'heading'     => esc_html__( 'Font Settings For Small Title', 'hcode-addons' ),
        'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style19') ),
        'group' => 'Font Settings',
      ),
      array(
        'type'        => 'responsive_font_settings',
        'param_name'  => 'hcode_responsive_extra_content_font',
        'heading'     => esc_html__( 'Font Settings For Extra Content', 'hcode-addons' ),
        'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style20')),
        'group' => 'Font Settings',
      ),
      array(
        'type'        => 'responsive_font_settings',
        'param_name'  => 'hcode_responsive_number_font',
        'heading'     => esc_html__( 'Font Settings For Number', 'hcode-addons' ),
        'hide_font_settings_element_lg' => array('text-align'),
        'hide_font_settings_element_md' => array('text-align'),
        'hide_font_settings_element_sm' => array('text-align'),
        'hide_font_settings_element_xs' => array('text-align'),
        'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style11','single-image-style20')),
        'group' => 'Font Settings',
      ),
      array(
          'type' => 'hcode_custom_srcset',
          'param_name' => 'hcode_image_srcset',
          'heading' => __('Image SRCSET', 'hcode-addons' ),
          'value' => 'full',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style2','single-image-style3','single-image-style12') ),
          'group' => 'SRCSET',
      ),
      array(
          'type' => 'hcode_custom_srcset',
          'param_name' => 'hcode_bg_image_srcset',
          'heading' => __('Background Image SRCSET', 'hcode-addons' ),
          'value' => 'full',
          'dependency'  => array( 'element' => 'hcode_single_image_premade_style', 'value' => array('single-image-style12') ),
          'group' => 'SRCSET',
      ),
      $hcode_vc_extra_id,
      $hcode_vc_extra_class,
    ),
) );