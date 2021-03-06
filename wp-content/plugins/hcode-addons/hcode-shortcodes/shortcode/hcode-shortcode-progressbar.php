<?php
/**
 * Shortcode For Progressbar
 *
 * @package H-Code
 */
?>
<?php
/*-----------------------------------------------------------------------------------*/
/* Progressbar */
/*-----------------------------------------------------------------------------------*/
$global_inside_title = null;
if ( ! function_exists( 'hcode_progress_shortcode' ) ) {
    function hcode_progress_shortcode( $atts, $content = null ) {
       extract( shortcode_atts( array(
                    'progress_show_width' => '',
                    'progress_show_inside_title' => ''
                ), $atts ) );
       global $global_inside_title;
       $global_inside_title = $progress_show_inside_title;

       $show_width = ($progress_show_width=='1') ? 'progress-bar-style2' : '';
       $inside_title = ($progress_show_inside_title=='1') ? 'progress-bar-style3 white-text' : '';
       
        $output ='<div class="progress-bar-main '.$show_width.' '.$inside_title.'">';
           $output .= do_shortcode($content);
        $output .='</div>';
        return $output;
    }
}
add_shortcode( 'hcode_progress', 'hcode_progress_shortcode' );

if ( ! function_exists( 'hcode_progress_content_shortcode' ) ) {
    function hcode_progress_content_shortcode( $atts, $content = null ) {
        extract( shortcode_atts( array(
                    'progress_title' => '',
                    'progress_subtitle' => '',
                    'progress_height' => '',
                    'progress_width' => '',
                    'progress_color' => '',
                    'progress_show_gradient' => '',
                    'hcode_responsive_title_font' => '',
                    'hcode_responsive_subtitle_font' => '',
                ), $atts ) );

        global $global_inside_title, $font_settings_array;
        $title_responsive_id = $title_responsive_style = $title_responsive_class = $subtitle_responsive_id = $subtitle_responsive_style = $subtitle_responsive_class = '';
        $progress_subtitle = ($progress_subtitle) ? $progress_subtitle : '';

        //For Text Align 
        if( !empty( $hcode_responsive_title_font ) ) {
            $title_responsive_id = uniqid('hcode-font-setting-');
            $title_responsive_style = Hcode_Responsive_Font_Settings::generate_css( $hcode_responsive_title_font, $title_responsive_id );
            $title_responsive_class = ' '.$title_responsive_id;
        }
        ( !empty( $title_responsive_style ) ) ? $font_settings_array[] = $title_responsive_style : '';

        //For Text Align 
        if( !empty( $hcode_responsive_subtitle_font ) ) {
            $subtitle_responsive_id = uniqid('hcode-font-setting-');
            $subtitle_responsive_style = Hcode_Responsive_Font_Settings::generate_css( $hcode_responsive_subtitle_font, $subtitle_responsive_id );
            $subtitle_responsive_class = ' '.$subtitle_responsive_id;
        }
        ( !empty( $subtitle_responsive_style ) ) ? $font_settings_array[] = $subtitle_responsive_style : '';

        $inside_title = ($global_inside_title == '1') ? '' : '<div class="progress-name'.$subtitle_responsive_class.'"><strong class="black-text'.$title_responsive_class.'">'.$progress_title.'</strong>'.$progress_subtitle.'</div>';
        if(empty($inside_title)){
            $in_title = $progress_title;
        }else{
            $in_title = '';
        }

        $show_gradient = ($progress_show_gradient=='1') ? 'progress-bar-striped' : '';
        $height = (!empty($progress_height)) ? 'style="height:'.$progress_height.'px"' : '';

    	$output='<div class="progress-bar-sub">';
            $output .='<div class="progress" '.$height.'>';
                $output .='<div class="progress-bar '.$show_gradient.'" role="progressbar" aria-valuenow="'.$progress_width.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$progress_width.'%;background-color:'.$progress_color.'">'.$in_title;
                    if($progress_width):
                        $output .='<span>'.$progress_width.'%</span>';
                    endif;
                $output .='</div>';
            $output .='</div>';
            $output .= $inside_title;
        $output .='</div>';
        return $output;
    }
}
add_shortcode( 'hcode_progress_content', 'hcode_progress_content_shortcode' );