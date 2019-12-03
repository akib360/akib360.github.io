<?php 
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version 	1.0.5
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function see_my_cv_options_general_tabs() {
	$cmsmasters_option = see_my_cv_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'see-my-cv');
	
	if ($cmsmasters_option['see-my-cv' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'see-my-cv');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'see-my-cv');
	}
	
	$tabs['header'] = esc_attr__('Header', 'see-my-cv');
	$tabs['content'] = esc_attr__('Content', 'see-my-cv');
	$tabs['footer'] = esc_attr__('Footer', 'see-my-cv');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function see_my_cv_options_general_sections() {
	$tab = see_my_cv_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'see-my-cv');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'see-my-cv');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'see-my-cv');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'see-my-cv');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'see-my-cv');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'see-my-cv');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function see_my_cv_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = see_my_cv_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = see_my_cv_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'see-my-cv' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'see-my-cv') . '|liquid', 
				esc_html__('Boxed', 'see-my-cv') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'see-my-cv' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'see-my-cv') . '|image', 
				esc_html__('Text', 'see-my-cv') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'see-my-cv' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'see-my-cv'), 
			'desc' => esc_html__('Choose your website logo image.', 'see-my-cv'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['see-my-cv' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'see-my-cv' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'see-my-cv'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'see-my-cv'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['see-my-cv' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'see-my-cv' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'see-my-cv' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'see-my-cv' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'see-my-cv'), 
			'desc' => esc_html__('enable', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'see-my-cv' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['see-my-cv' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'see-my-cv' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['see-my-cv' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'see-my-cv' . '_bg_col', 
			'title' => esc_html__('Background Color', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['see-my-cv' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'see-my-cv' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'see-my-cv' . '_bg_img', 
			'title' => esc_html__('Background Image', 'see-my-cv'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'see-my-cv'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['see-my-cv' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'see-my-cv' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'see-my-cv') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'see-my-cv') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'see-my-cv') . '|repeat-y', 
				esc_html__('Repeat', 'see-my-cv') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'see-my-cv' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['see-my-cv' . '_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'see-my-cv') . '|top left', 
				esc_html__('Top Center', 'see-my-cv') . '|top center', 
				esc_html__('Top Right', 'see-my-cv') . '|top right', 
				esc_html__('Center Left', 'see-my-cv') . '|center left', 
				esc_html__('Center Center', 'see-my-cv') . '|center center', 
				esc_html__('Center Right', 'see-my-cv') . '|center right', 
				esc_html__('Bottom Left', 'see-my-cv') . '|bottom left', 
				esc_html__('Bottom Center', 'see-my-cv') . '|bottom center', 
				esc_html__('Bottom Right', 'see-my-cv') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'see-my-cv' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'see-my-cv') . '|scroll', 
				esc_html__('Fixed', 'see-my-cv') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'see-my-cv' . '_bg_size', 
			'title' => esc_html__('Background Size', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'see-my-cv') . '|auto', 
				esc_html__('Cover', 'see-my-cv') . '|cover', 
				esc_html__('Contain', 'see-my-cv') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'see-my-cv' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => see_my_cv_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'see-my-cv'), 
			'desc' => esc_html__('enable', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'see-my-cv'), 
			'desc' => esc_html__('enable', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'see-my-cv'), 
			'desc' => esc_html__('pixels', 'see-my-cv'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['see-my-cv' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'see-my-cv'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'see-my-cv') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['see-my-cv' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'see-my-cv') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'see-my-cv') . '|social', 
				esc_html__('Top Line Navigation', 'see-my-cv') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'see-my-cv') . '|default', 
				esc_html__('Compact Style Left Navigation', 'see-my-cv') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'see-my-cv') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'see-my-cv') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'see-my-cv'), 
			'desc' => esc_html__('pixels', 'see-my-cv'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['see-my-cv' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'see-my-cv'), 
			'desc' => esc_html__('pixels', 'see-my-cv'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['see-my-cv' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv' . '_header_search', 
			'title' => esc_html__('Header Search', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'see-my-cv') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'see-my-cv') . '|social', 
				esc_html__('Header Custom HTML', 'see-my-cv') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'see-my-cv' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'see-my-cv'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'see-my-cv') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['see-my-cv' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['see-my-cv' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['see-my-cv' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['see-my-cv' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'see-my-cv'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['see-my-cv' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'see-my-cv') . '|left', 
				esc_html__('Right', 'see-my-cv') . '|right', 
				esc_html__('Center', 'see-my-cv') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_heading_scheme', 
			'title' => esc_html__('Heading Custom Color Scheme by Default', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['see-my-cv' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'see-my-cv'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'see-my-cv'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['see-my-cv' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'see-my-cv') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'see-my-cv') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'see-my-cv') . '|repeat-y', 
				esc_html__('Repeat', 'see-my-cv') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'see-my-cv') . '|scroll', 
				esc_html__('Fixed', 'see-my-cv') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'see-my-cv') . '|auto', 
				esc_html__('Cover', 'see-my-cv') . '|cover', 
				esc_html__('Contain', 'see-my-cv') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'see-my-cv'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['see-my-cv' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'see-my-cv'), 
			'desc' => esc_html__('pixels', 'see-my-cv'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['see-my-cv' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Custom Color Scheme', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['see-my-cv' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'see-my-cv' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['see-my-cv' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'see-my-cv' . '_footer_scheme', 
			'title' => esc_html__('Footer Custom Color Scheme', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['see-my-cv' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'see-my-cv' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'see-my-cv') . '|default', 
				esc_html__('Small', 'see-my-cv') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'see-my-cv' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'see-my-cv') . '|none', 
				esc_html__('Footer Navigation', 'see-my-cv') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'see-my-cv') . '|social', 
				esc_html__('Custom HTML', 'see-my-cv') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'see-my-cv' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'see-my-cv' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'see-my-cv'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'see-my-cv'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['see-my-cv' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'see-my-cv' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'see-my-cv'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'see-my-cv'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['see-my-cv' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'see-my-cv' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'see-my-cv' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'see-my-cv' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'see-my-cv'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'see-my-cv') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['see-my-cv' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'see-my-cv' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);	
}

