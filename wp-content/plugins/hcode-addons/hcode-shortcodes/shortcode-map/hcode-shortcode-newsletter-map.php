<?php
/**
 * Map For Newsletter
 *
 * @package H-Code
 */
?>
<?php
/*-----------------------------------------------------------------------------------*/
/* Newsletter */
/*-----------------------------------------------------------------------------------*/

vc_map( array(
  'name' => __('Newsletter Block', 'hcode-addons'),
  'description' => __('Place a newsletter block', 'hcode-addons'),
  'icon' => 'far fa-list-alt h-code-shortcode-icon',
  'base' => 'hcode_newsletter',
  'category' => 'H-Code',
  'params' => array(
        array(
            'type' => 'dropdown',
            'heading' => __('Block Style', 'hcode-addons'),
            'param_name' => 'hcode_newsletter_premade_style',
            'admin_label' => true,
            'value' => array(__('Select Block Style', 'hcode-addons') => '',
                             __('Newsletter Block 1', 'hcode-addons') => 'hcode-newsletter-block1',
                             __('Newsletter Block 2', 'hcode-addons') => 'hcode-newsletter-block2',
                             __('Newsletter Block 3', 'hcode-addons') => 'hcode-newsletter-block3',
                            ),
        ),
        array(
            'type' => 'hcode_preview_image',
            'heading' => __('Select pre-made style', 'hcode-addons'),
            'param_name' => 'hcode_newsletter_preview_image',
        ),
        array(
          'type' => 'hcode_custom_switch_option',
          'heading' => __('Custom Icon', 'hcode-addons'),
          'param_name' => 'custom_icon',
          'value' => array(__('NO', 'hcode-addons') => '0',
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency'  => array( 'element' => 'hcode_newsletter_premade_style', 'value' => array('hcode-newsletter-block1')),
        ),
        array(
          'type' => 'attach_image',
          'heading' => __('Custom Icon Image', 'hcode-addons'),
          'param_name' => 'custom_icon_image',
          'dependency' => array( 'element' => 'custom_icon', 'value' => '1' ),
          'description' => __( 'Recommended size: Extra Large - 60px X 60px, Large - 50px X 50px, Medium - 40px X 40px, Small - 25px X 25px, Extra Small - 18px X 18px', 'hcode-addons' ),
        ),
        array(
            'type' => 'hcode_icon',
            'heading' => __('Select Icon', 'hcode-addons'),
            'param_name' => 'hcode_newsletter_icon',
            'dependency' => array( 'element' => 'custom_icon', 'value' => '0' ),
        ),
        array(
            'type' => 'textfield',
            'heading' => __('Title', 'hcode-addons'),
            'param_name' => 'hcode_newsletter_title',
            'admin_label' => true,
            'dependency'  => array( 'element' => 'hcode_newsletter_premade_style', 'value' => array('hcode-newsletter-block1')),
        ),
        array(
            'type' => 'textfield',
            'heading' => __('Subtitle', 'hcode-addons'),
            'param_name' => 'hcode_newsletter_subtitle',
            'admin_label' => true,
            'dependency'  => array( 'element' => 'hcode_newsletter_premade_style', 'value' => array('hcode-newsletter-block1')),
        ),
        array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Do you want to show custom newsletter?', 'hcode-addons'),
            'param_name' => 'hcode_coming_soon_custom_newsletter',
            'value' => array(__('NO', 'hcode-addons') => '0', 
                             __('YES', 'hcode-addons') => '1'
                            ),
            'dependency' => array( 'element' => 'hcode_newsletter_premade_style', 'value' => array('hcode-newsletter-block1','hcode-newsletter-block2','hcode-newsletter-block3') ),
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
            'value' => 'ENTER YOUR EMAIL...',
            'dependency' => array( 'element' => 'hcode_coming_soon_custom_newsletter', 'value' => array('0') ),
        ),
        array(
            'type' => 'textfield',
            'heading' => __('Subscribe Button Text', 'hcode-addons'),
            'param_name' => 'hcode_newsletter_button_text',
            'value' => 'Subscribe Now!',
            'dependency' => array( 'element' => 'hcode_coming_soon_custom_newsletter', 'value' => array('0') ),
        ),
        array(
            'type' => 'dropdown',
            'heading' => __('Icon Size', 'hcode-addons'),
            'param_name' => 'hcode_newsletter_icon_size',
            'value' => array(__('Select icon size', 'hcode-addons') => '',
                             __('Extra Large', 'hcode-addons') => 'extra-large-icon', 
                             __('Large', 'hcode-addons') => 'large-icon',
                             __('Medium', 'hcode-addons') => 'medium-icon',
                             __('Small', 'hcode-addons') => 'small-icon',
                             __('Extra Small', 'hcode-addons') => 'extra-small-icon',
                            ),
            'dependency'  => array( 'element' => 'hcode_newsletter_premade_style', 'value' => array('hcode-newsletter-block1')),
            'group' => 'Color',
        ),
        array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => __( 'Icon Color', 'hcode-addons' ),
            'param_name' => 'hcode_newsletter_icon_color',
            'dependency'  => array( 'element' => 'hcode_newsletter_premade_style', 'value' => array('hcode-newsletter-block1')),
            'group' => 'Color',
        ),
        array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => __( 'Title Color', 'hcode-addons' ),
            'param_name' => 'hcode_newsletter_title_color',
            'dependency'  => array( 'element' => 'hcode_newsletter_premade_style', 'value' => array('hcode-newsletter-block1')),
            'group' => 'Color',
        ),
        array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => __( 'Subtitle Color', 'hcode-addons' ),
            'param_name' => 'hcode_newsletter_subtitle_color',
            'dependency'  => array( 'element' => 'hcode_newsletter_premade_style', 'value' => array('hcode-newsletter-block1')),
            'group' => 'Color',
        ),
        array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Required Padding Setting?', 'hcode-addons'),
            'param_name' => 'padding_setting',
            'value' => array(__('No', 'hcode-addons') => '0', 
                             __('Yes', 'hcode-addons') => '1'
                            ),
            'dependency'  => array( 'element' => 'hcode_newsletter_premade_style', 'value' => array('hcode-newsletter-block1','hcode-newsletter-block2','hcode-newsletter-block3')),
            'group' => 'Style',
          ),
          array(
            'type' => 'hcode_custom_desktop_padding',
            'param_name' => 'desktop_padding',
            'heading' => __('Padding (For Desktop Device)', 'hcode-addons' ),
            'value' => '',
            'dependency' => array( 'element' => 'padding_setting', 'value' => array('1') ),
            'group' => 'Style',
          ),
          array(
            'type' => 'textfield',
            'heading' => __('Custom Padding (For Desktop Devices)', 'hcode-addons' ),
            'param_name' => 'custom_desktop_padding',
            'dependency' => array( 'element' => 'desktop_padding', 'value' => array('custom-desktop-padding') ),
            'description' => __( 'Specify padding like (10px 12px 10px 12px or 10px or 10%...)', 'hcode-addons' ),
            'group' => 'Style',
          ),
          array(
            'type' => 'hcode_custom_ipad_padding',
            'param_name' => 'ipad_padding',
            'heading' => __('Padding (For iPad Device)', 'hcode-addons' ),
            'value' => '',
            'dependency' => array( 'element' => 'padding_setting', 'value' => array('1') ),
            'group' => 'Style',
          ),
          array(
            'type' => 'textfield',
            'heading' => __('Custom Padding (For iPad Devices)', 'hcode-addons' ),
            'param_name' => 'custom_ipad_padding',
            'dependency' => array( 'element' => 'ipad_padding', 'value' => array('custom-ipad-padding') ),
            'description' => __( 'Specify padding like (10px 12px 10px 12px or 10px or 10%...)', 'hcode-addons' ),
            'group' => 'Style',
          ),
          array(
            'type' => 'hcode_custom_mobile_padding',
            'param_name' => 'mobile_padding',
            'heading' => __('Padding (For Mobile Device)', 'hcode-addons' ),
            'value' => '',
            'dependency' => array( 'element' => 'padding_setting', 'value' => array('1') ),
            'group' => 'Style',
          ),
          array(
            'type' => 'textfield',
            'heading' => __('Custom Padding (For Mobile Devices)', 'hcode-addons' ),
            'param_name' => 'custom_mobile_padding',
            'dependency' => array( 'element' => 'mobile_padding', 'value' => array('custom-mobile-padding') ),
            'description' => __( 'Specify padding like (10px 12px 10px 12px or 10px or 10%...)', 'hcode-addons' ),
            'group' => 'Style',
          ),
          array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Required Margin Setting?', 'hcode-addons'),
            'param_name' => 'margin_setting',
            'value' => array(__('No', 'hcode-addons') => '0', 
                             __('Yes', 'hcode-addons') => '1'
                            ),
            'dependency'  => array( 'element' => 'hcode_newsletter_premade_style', 'value' => array('hcode-newsletter-block1','hcode-newsletter-block2','hcode-newsletter-block3')),
            'group' => 'Style',
          ),
          array(
            'type' => 'hcode_custom_desktop_margin',
            'param_name' => 'desktop_margin',
            'heading' => __('Margin (For Desktop Device)', 'hcode-addons' ),
            'value' => '',
            'dependency' => array( 'element' => 'margin_setting', 'value' => array('1') ),
            'group' => 'Style',
          ),
          array(
            'type' => 'textfield',
            'heading' => __('Custom Margin (For Desktop Devices)', 'hcode-addons' ),
            'param_name' => 'custom_desktop_margin',
            'dependency' => array( 'element' => 'desktop_margin', 'value' => array('custom-desktop-margin') ),
            'description' => __( 'Specify margin like (10px 12px 10px 12px or 10px or 10%...)', 'hcode-addons' ),
            'group' => 'Style',
          ),
          array(
            'type' => 'hcode_custom_ipad_margin',
            'param_name' => 'ipad_margin',
            'heading' => __('Margin (For iPad Device)', 'hcode-addons' ),
            'value' => '',
            'dependency' => array( 'element' => 'margin_setting', 'value' => array('1') ),
            'group' => 'Style',
          ),
          array(
            'type' => 'textfield',
            'heading' => __('Custom Margin (For iPad Devices)', 'hcode-addons' ),
            'param_name' => 'custom_ipad_margin',
            'dependency' => array( 'element' => 'ipad_margin', 'value' => array('custom-ipad-margin') ),
            'description' => __( 'Specify margin like (10px 12px 10px 12px or 10px or 10%...)', 'hcode-addons' ),
            'group' => 'Style',
          ),
          array(
            'type' => 'hcode_custom_mobile_margin',
            'param_name' => 'mobile_margin',
            'heading' => __('Margin (For Mobile Device)', 'hcode-addons' ),
            'value' => '',
            'dependency' => array( 'element' => 'margin_setting', 'value' => array('1') ),
            'group' => 'Style',
          ),
          array(
            'type' => 'textfield',
            'heading' => __('Custom Margin (For Mobile Devices)', 'hcode-addons' ),
            'param_name' => 'custom_mobile_margin',
            'dependency' => array( 'element' => 'mobile_margin', 'value' => array('custom-mobile-margin') ),
            'description' => __( 'Specify margin like (10px 12px 10px 12px or 10px or 10%...)', 'hcode-addons' ),
            'group' => 'Style',
          ),
          array(
            'type'        => 'hcode_button_settings',
            'param_name'  => 'button_config_settings',
            'heading'     => esc_html__( 'Button Configuration', 'hcode-addons' ),
            'group' => 'Button Configuration',
            'description' => __( 'You can easily set button text-transform, font-size, line-height, letter-spacing for all devices ', 'hcode-addons' ),
            'hide_font_settings_element'=>array('icon-color','icon-hover-color')
          ),
          array(
              'type'        => 'responsive_font_settings',
              'param_name'  => 'hcode_responsive_title_font',
              'heading'     => esc_html__( 'Font Settings For Title', 'hcode-addons' ),
              'dependency'  => array( 'element' => 'hcode_newsletter_premade_style', 'value' => array('hcode-newsletter-block1')),
              'group' => 'Font Settings',
          ),
          array(
              'type'        => 'responsive_font_settings',
              'param_name'  => 'hcode_responsive_subtitle_font',
              'heading'     => esc_html__( 'Font Settings For Subtitle', 'hcode-addons' ),
              'dependency'  => array( 'element' => 'hcode_newsletter_premade_style', 'value' => array('hcode-newsletter-block1')),
              'group' => 'Font Settings',
          ),
          array(
            'type' => 'hcode_custom_srcset',
            'param_name' => 'hcode_icon_image_srcset',
            'heading' => __('Icon Image SRCSET', 'hcode-addons' ),
            'value' => 'full',
            'dependency' => array( 'element' => 'custom_icon', 'value' => '1' ),
            'group' => 'SRCSET',
          ),
        $hcode_vc_extra_id,
        $hcode_vc_extra_class,
  ),
) );