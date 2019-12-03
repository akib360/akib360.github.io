<?php 
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version		1.0.0
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function see_my_cv_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'see-my-cv');
	$tabs['link'] = esc_attr__('Links', 'see-my-cv');
	$tabs['nav'] = esc_attr__('Navigation', 'see-my-cv');
	$tabs['heading'] = esc_attr__('Heading', 'see-my-cv');
	$tabs['other'] = esc_attr__('Other', 'see-my-cv');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function see_my_cv_options_font_sections() {
	$tab = see_my_cv_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'see-my-cv');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'see-my-cv');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'see-my-cv');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'see-my-cv');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'see-my-cv');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function see_my_cv_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = see_my_cv_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = see_my_cv_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'see-my-cv' . '_link_font', 
			'title' => esc_html__('Links Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'see-my-cv' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['see-my-cv' . '_link_hover_decoration'], 
			'choices' => see_my_cv_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'see-my-cv' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'see-my-cv' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'see-my-cv' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'see-my-cv' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'see-my-cv' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'see-my-cv' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'see-my-cv' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'see-my-cv' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'see-my-cv' . '_button_font', 
			'title' => esc_html__('Button Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'see-my-cv' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'see-my-cv' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'see-my-cv' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['see-my-cv' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

