<?php
/**
 * Map For Team Member
 *
 * @package H-Code
 */
?>
<?php
/*-----------------------------------------------------------------------------------*/
/* Team Member */
/*-----------------------------------------------------------------------------------*/

vc_map( array(
      'name' => __( 'Team Member', 'hcode-addons' ),
      'base' => 'hcode_team_member',
      'category' => 'H-Code',
      'icon' => 'h-code-shortcode-icon fas fa-users',
      'description' => __( 'Add team members', 'hcode-addons' ),
      'params' => array(
        array(
          'type' => 'dropdown',
          'admin_label' => true,
          'class' => '',
          'heading' => __('Team Style', 'hcode-addons'),
          'param_name' => 'hcode_team_member_premade_style',
          'value' => array(__('Select Team Style', 'hcode-addons') => '',
                           __('Team Style1', 'hcode-addons') => 'team-style-1',
                           __('Team Style2', 'hcode-addons') => 'team-style-2',
                           __('Team Style3', 'hcode-addons') => 'team-style-3',
                           __('Team Style4', 'hcode-addons') => 'team-style-4',
                           __('Team Style5', 'hcode-addons') => 'team-style-5',
                           __('Team Style6', 'hcode-addons') => 'team-style-6',
                           __('Team Style7', 'hcode-addons') => 'team-style-7',
                          ),
        ),
        array(
          'type' => 'hcode_preview_image',
          'heading' => __('Select pre-made style for tab', 'hcode-addons'),
          'param_name' => 'hcode_team_member_preview_image',
        ),
        array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Show Image Position', 'hcode-addons'),
          'param_name' => 'hcode_team_member_image_position',
          'value' => array(__('Right', 'hcode-addons') => '0', 
                           __('Left', 'hcode-addons') => '1'
                          ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-6') ),
        ),
        array(
          'type' => 'attach_image',
          'heading' => 'Team Image',
          'param_name' => 'hcode_team_member_image',
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'not_empty' => true ),
        ),
        array(
          'type' => 'textfield',
          'admin_label' => true,
          'heading' => __( 'Team Member Title', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_title',
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'not_empty' => true ),
        ),
        array(
          'type' => 'textfield',
          'heading' => __( 'Team Member Designation', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_designation',
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
        ),
        array(
          'type' => 'textfield',
          'heading' => __( 'Team Member Headline', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_headline',
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-3','team-style-7') ),
        ),
        array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Show Separator', 'hcode-addons'),
          'param_name' => 'hcode_team_member_separator',
          'value' => array(__('NO', 'hcode-addons') => '0', 
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-2','team-style-4','team-style-5','team-style-6','team-style-7') ),
        ),
        array(
          'type' => 'textarea_html',
          'heading' => __('Short Content', 'hcode-addons'),
          'param_name' => 'content',
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'not_empty' => true ),
        ),
        array(
            'type' => 'hcode_custom_switch_option',
            'heading' => esc_html__( 'Link On Title', 'hcode-addons'),
            'param_name' => 'title_enable_link',
            'value' => array(
               __('NO', 'hcode-addons') => '0', 
               __('YES', 'hcode-addons') => '1'
            ),
            'std' => '0',
             'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-2','team-style-3','team-style-4','team-style-5','team-style-6','team-style-7') ),
        ),
        array(
            'type' => 'textfield',
            'heading' =>esc_html__( 'Link / URL', 'hcode-addons'),
            'param_name' => 'title_link_url',
            'admin_label' => true,
            'dependency'  => array( 'element' => 'title_enable_link', 'value' => '1' ),
            'description' => esc_html__( 'Enter full URL with http, like http://www.example.com', 'hcode-addons' ),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Link Target', 'hcode-addons'),
            'param_name' => 'title_link_target',
            'value' => array(
                esc_html__('Self', 'hcode-addons') => '_self', 
                esc_html__('New tab / window', 'hcode-addons') => '_blank',
            ),
            'dependency'  => array( 'element' => 'title_enable_link', 'value' => '1' ),
        ),
        array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => __( 'Title Text Color', 'hcode-addons' ),
            'param_name' => 'hcode_title_color',
            'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-2','team-style-3','team-style-4','team-style-5','team-style-6','team-style-7') ),
            'group' => 'Style',
        ),
        array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => __( 'Separator Color', 'hcode-addons' ),
            'param_name' => 'hcode_separator_color',
            'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-2','team-style-4','team-style-5','team-style-6','team-style-7') ),
            'group' => 'Style',
        ),
        array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => __( 'Designation Text Color', 'hcode-addons' ),
            'param_name' => 'hcode_designation_color',
            'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
            'group' => 'Style',
        ),
        array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => __( 'Headline Color', 'hcode-addons' ),
            'param_name' => 'hcode_headline_color',
            'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-3','team-style-7') ),
            'group' => 'Style',
        ),
        array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => __( 'Background Color', 'hcode-addons' ),
            'param_name' => 'hcode_team_bg_color',
            'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-7') ),
            'group' => 'Style',
        ),
        array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => __( 'Designation Box Background Color', 'hcode-addons' ),
            'param_name' => 'hcode_team_designation_bg_color',
            'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-7') ),
            'group' => 'Style',
        ),
        array(
            'type' => 'colorpicker',
            'class' => '',
            'heading' => __( 'Icon Color', 'hcode-addons' ),
            'param_name' => 'hcode_team_icon_color',
            'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
            'group' => 'Style',
        ),
        array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Show Facebook Icon', 'hcode-addons'),
            'param_name' => 'hcode_team_member_fb',
            'value' => array(__('NO', 'hcode-addons') => '0', 
                             __('YES', 'hcode-addons') => '1'
                            ),
            'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
            'group'       => 'Social Icons',
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Facebook URL', 'hcode-addons' ),
            'param_name' => 'hcode_team_member_fb_url',
            'dependency' => array( 'element' => 'hcode_team_member_fb', 'value' => array('1') ),
            'group'       => 'Social Icons',
        ),
        array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Show Twitter Icon', 'hcode-addons'),
            'param_name' => 'hcode_team_member_tw',
            'value' => array(__('NO', 'hcode-addons') => '0', 
                             __('YES', 'hcode-addons') => '1'
                            ),
            'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
            'group'       => 'Social Icons',
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Twitter URL', 'hcode-addons' ),
            'param_name' => 'hcode_team_member_tw_url',
            'dependency' => array( 'element' => 'hcode_team_member_tw', 'value' => array('1') ),
            'group'       => 'Social Icons',
        ),
        array(
            'type' => 'hcode_custom_switch_option',
            'class' => '',
            'heading' => __('Show Google-plus Icon', 'hcode-addons'),
            'param_name' => 'hcode_team_member_googleplus',
            'value' => array(__('NO', 'hcode-addons') => '0', 
                             __('YES', 'hcode-addons') => '1'
                            ),
            'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
            'group'       => 'Social Icons',
        ),
        array(
          'type' => 'textfield',
            'heading' => __( 'Google-plus URL', 'hcode-addons' ),
            'param_name' => 'hcode_team_member_googleplus_url',
            'dependency' => array( 'element' => 'hcode_team_member_googleplus', 'value' => array('1') ),
            'group'       => 'Social Icons',
        ),
        array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Show Dribbble Icon', 'hcode-addons'),
          'param_name' => 'hcode_team_member_db',
          'value' => array(__('NO', 'hcode-addons') => '0', 
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'textfield',
          'heading' => __( 'Dribbble URL', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_db_url',
          'dependency' => array( 'element' => 'hcode_team_member_db', 'value' => array('1') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Show Youtube Icon', 'hcode-addons'),
          'param_name' => 'hcode_team_member_yt',
          'value' => array(__('NO', 'hcode-addons') => '0', 
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'textfield',
          'heading' => __( 'Youtube URL', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_yt_url',
          'dependency' => array( 'element' => 'hcode_team_member_yt', 'value' => array('1') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Show Linkedin Icon', 'hcode-addons'),
          'param_name' => 'hcode_team_member_li',
          'value' => array(__('NO', 'hcode-addons') => '0', 
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'textfield',
          'heading' => __( 'Linkedin URL', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_li_url',
          'dependency' => array( 'element' => 'hcode_team_member_li', 'value' => array('1') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Show Instagram Icon', 'hcode-addons'),
          'param_name' => 'hcode_team_member_ig',
          'value' => array(__('NO', 'hcode-addons') => '0', 
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'textfield',
          'heading' => __( 'Instagram URL', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_ig_url',
          'dependency' => array( 'element' => 'hcode_team_member_ig', 'value' => array('1') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Show Pinterest Icon', 'hcode-addons'),
          'param_name' => 'hcode_team_member_pi',
          'value' => array(__('NO', 'hcode-addons') => '0', 
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'textfield',
          'heading' => __( 'Pinterest URL', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_pi_url',
          'dependency' => array( 'element' => 'hcode_team_member_pi', 'value' => array('1') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Show GitHub Icon', 'hcode-addons'),
          'param_name' => 'hcode_team_member_gh',
          'value' => array(__('NO', 'hcode-addons') => '0', 
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'textfield',
          'heading' => __( 'GitHub URL', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_gh_url',
          'dependency' => array( 'element' => 'hcode_team_member_gh', 'value' => array('1') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Show Xing Icon', 'hcode-addons'),
          'param_name' => 'hcode_team_member_xing',
          'value' => array(__('NO', 'hcode-addons') => '0', 
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'textfield',
          'heading' => __( 'Xing URL', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_xing_url',
          'dependency' => array( 'element' => 'hcode_team_member_xing', 'value' => array('1') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Show VK Icon', 'hcode-addons'),
          'param_name' => 'hcode_team_member_vk',
          'value' => array(__('NO', 'hcode-addons') => '0', 
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'textfield',
          'heading' => __( 'VK URL', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_vk_url',
          'dependency' => array( 'element' => 'hcode_team_member_vk', 'value' => array('1') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Show Website Icon', 'hcode-addons'),
          'param_name' => 'hcode_team_member_ws',
          'value' => array(__('NO', 'hcode-addons') => '0', 
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'textfield',
          'heading' => __( 'Website URL', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_ws_url',
          'dependency' => array( 'element' => 'hcode_team_member_ws', 'value' => array('1') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'hcode_custom_switch_option',
          'class' => '',
          'heading' => __('Show Email Icon', 'hcode-addons'),
          'param_name' => 'hcode_team_member_email',
          'value' => array(__('NO', 'hcode-addons') => '0', 
                           __('YES', 'hcode-addons') => '1'
                          ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'textfield',
          'heading' => __( 'Email Address', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_email_url',
          'dependency' => array( 'element' => 'hcode_team_member_email', 'value' => array('1') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'textarea_raw_html',
          'heading' => __( 'Custom Icon & Link Code', 'hcode-addons' ),
          'param_name' => 'hcode_team_member_custom_link',
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
          'group'       => 'Social Icons',
        ),
        array(
          'type' => 'responsive_font_settings',
          'param_name' => 'hcode_team_member_title_font_settings',
          'heading' => esc_html__( 'Font Settings For Team Member Title', 'hcode-addons' ),
          'group' => 'Font Settings',
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-2','team-style-3','team-style-4','team-style-5','team-style-6','team-style-7') ),
        ),
        array(
          'type' => 'responsive_font_settings',
          'param_name' => 'hcode_team_member_designation_font_settings',
          'heading' => esc_html__( 'Font Settings For Team Member Designation', 'hcode-addons' ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
          'group' => 'Font Settings',
        ),
        array(
          'type' => 'responsive_font_settings',
          'param_name' => 'hcode_team_member_headline_font_settings',
          'heading' => esc_html__( 'Font Settings For Team Member Headline', 'hcode-addons' ),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-3','team-style-7') ),
          'group' => 'Font Settings',
        ),
        array(
          'type' => 'responsive_font_settings',
          'param_name' => 'hcode_team_member_icon_font_settings',
          'heading' => esc_html__( 'Font Settings For Team Member Icon', 'hcode-addons' ),
          'hide_font_settings_element_lg' => array('text-align','font-transform'),
          'hide_font_settings_element_md' => array('text-align','font-transform'),
          'hide_font_settings_element_sm' => array('text-align','font-transform'),
          'hide_font_settings_element_xs' => array('text-align','font-transform'),
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'value' => array('team-style-1','team-style-3','team-style-4','team-style-6','team-style-7') ),
          'group' => 'Font Settings',
        ),
        array(
          'type' => 'hcode_custom_srcset',
          'param_name' => 'hcode_image_srcset',
          'heading' => __('Image SRCSET', 'hcode-addons' ),
          'value' => 'full',
          'dependency' => array( 'element' => 'hcode_team_member_premade_style', 'not_empty' => true ),
          'group' => 'SRCSET',
        ),
        $hcode_vc_extra_id,
        $hcode_vc_extra_class,
      )
    ) );