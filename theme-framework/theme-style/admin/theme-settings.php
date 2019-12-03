<?php 
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version		1.0.0
 * 
 * Theme Admin Settings
 * Created by CMSMasters
 * 
 */


/* General Settings */
function see_my_cv_theme_options_general_fields($options, $tab) {
	$new_options = array();
	
	
	if ($tab == 'header') {
		$new_options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv_header_styles', 
			'title' => esc_html__('Header Styles', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'side', 
			'choices' => array( 
				esc_html__('Default Style', 'see-my-cv') . '|default', 
				esc_html__('Side Style', 'see-my-cv') . '|side' 
			) 
		);
		
		
		$new_options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv_header_side_width', 
			'title' => esc_html__('Header Side Width', 'see-my-cv'), 
			'desc' => esc_html__('pixels', 'see-my-cv'), 
			'type' => 'number', 
			'std' => '80', 
			'min' => '40',
			'max' => '150'
		);
		
		
		foreach ($options as $option) {
			if ($option['id'] == 'see-my-cv_header_styles') {
				// remove this option
			} else {
				$new_options[] = $option;
			}
		}
		
		$options = $new_options;
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'see_my_cv_theme_options_general_fields', 10, 2);



/* Font Settings */
function see_my_cv_theme_options_font_fields($options, $tab) {
	$new_options = array();
	
	
	if ($tab == 'link') {
		foreach ($options as $option) {
			if ($option['id'] == 'see-my-cv_link_hover_decoration') {
				// remove this option
			} else {
				$new_options[] = $option;
			}
		}
		
		$options = $new_options;
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_font_fields_filter', 'see_my_cv_theme_options_font_fields', 10, 2);



/* Color Settings */
function see_my_cv_theme_options_color_fields($options, $tab) {
	$new_options = array();
	
	
	if ($tab == 'header') {
		foreach ($options as $option) {
			if (
				$option['id'] == 'see-my-cv' . '_' . $tab . '_bot_color' || 
				$option['id'] == 'see-my-cv' . '_' . $tab . '_bot_link' || 
				$option['id'] == 'see-my-cv' . '_' . $tab . '_bot_hover' || 
				$option['id'] == 'see-my-cv' . '_' . $tab . '_bot_bg' || 
				$option['id'] == 'see-my-cv' . '_' . $tab . '_bot_bg_scroll' || 
				$option['id'] == 'see-my-cv' . '_' . $tab . '_bot_border' 
			) {
				// remove this options
			} elseif ($option['id'] == 'see-my-cv' . '_' . $tab . '_mid_color') {
				$option['title'] = esc_html__('Header Text Font Color', 'see-my-cv');
				
				$new_options[] = $option;
			} elseif ($option['id'] == 'see-my-cv' . '_' . $tab . '_mid_link') {
				$option['title'] = esc_html__('Header Links Font Color', 'see-my-cv');
				
				$new_options[] = $option;
			} elseif ($option['id'] == 'see-my-cv' . '_' . $tab . '_mid_hover') {
				$option['title'] = esc_html__('Header Links Font Color on Hover', 'see-my-cv');
				
				$new_options[] = $option;
			} elseif ($option['id'] == 'see-my-cv' . '_' . $tab . '_mid_bg') {
				$option['title'] = esc_html__('Header Background Color', 'see-my-cv');
				
				$new_options[] = $option;
			} elseif ($option['id'] == 'see-my-cv' . '_' . $tab . '_mid_bg_scroll') {
			} elseif ($option['id'] == 'see-my-cv' . '_' . $tab . '_mid_border') {
				$option['title'] = esc_html__('Header Border Color', 'see-my-cv');
				
				$new_options[] = $option;
			} else {
				$new_options[] = $option;
			}
		}
		
		$options = $new_options;
	} elseif ($tab == 'navigation') {
		foreach ($options as $option) {
			if (
				$option['id'] == 'see-my-cv' . '_' . $tab . '_title_link_subtitle' || 
				$option['id'] == 'see-my-cv' . '_' . $tab . '_dropdown_text' || 
				$option['id'] == 'see-my-cv' . '_' . $tab . '_dropdown_link_subtitle' 
			) {
				// remove this options
			} else {
				$new_options[] = $option;
			}
		}
		
		$options = $new_options;
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_color_fields_filter', 'see_my_cv_theme_options_color_fields', 10, 2);

