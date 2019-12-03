<?php 
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version		1.0.6
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('see_my_cv_settings_general_defaults')) {

function see_my_cv_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'see-my-cv' . '_theme_layout' => 		'liquid', 
			'see-my-cv' . '_logo_type' => 			'image', 
			'see-my-cv' . '_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'see-my-cv' . '_logo_url_retina' => 	'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'see-my-cv' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'see-my-cv', 
			'see-my-cv' . '_logo_subtitle' => 		'', 
			'see-my-cv' . '_logo_custom_color' => 	0, 
			'see-my-cv' . '_logo_title_color' => 	'', 
			'see-my-cv' . '_logo_subtitle_color' => 	'' 
		), 
		'bg' => array( 
			'see-my-cv' . '_bg_col' => 			'#ffffff', 
			'see-my-cv' . '_bg_img_enable' => 	0, 
			'see-my-cv' . '_bg_img' => 			'', 
			'see-my-cv' . '_bg_rep' => 			'no-repeat', 
			'see-my-cv' . '_bg_pos' => 			'top center', 
			'see-my-cv' . '_bg_att' => 			'scroll', 
			'see-my-cv' . '_bg_size' => 			'cover' 
		), 
		'header' => array( 
			'see-my-cv' . '_fixed_header' => 				1, 
			'see-my-cv' . '_header_overlaps' => 				0, 
			'see-my-cv' . '_header_top_line' => 				0, 
			'see-my-cv' . '_header_top_height' => 			'30', 
			'see-my-cv' . '_header_top_line_short_info' => 	'', 
			'see-my-cv' . '_header_top_line_add_cont' => 	'social', 
			'see-my-cv' . '_header_styles' => 				'side', 
			'see-my-cv' . '_header_mid_height' => 			'78', 
			'see-my-cv' . '_header_bot_height' => 			'50', 
			'see-my-cv' . '_header_side_width' => 			'80', 
			'see-my-cv' . '_header_search' => 				0, 
			'see-my-cv' . '_header_add_cont' => 				'social', 
			'see-my-cv' . '_header_add_cont_cust_html' => 	'' 
		), 
		'content' => array( 
			'see-my-cv' . '_layout' => 					'fullwidth', 
			'see-my-cv' . '_archives_layout' => 		'fullwidth', 
			'see-my-cv' . '_search_layout' => 			'fullwidth', 
			'see-my-cv' . '_other_layout' => 			'fullwidth', 
			'see-my-cv' . '_heading_alignment' => 		'left', 
			'see-my-cv' . '_heading_scheme' => 			'default', 
			'see-my-cv' . '_heading_bg_image_enable' => 	0, 
			'see-my-cv' . '_heading_bg_image' => 		'', 
			'see-my-cv' . '_heading_bg_repeat' => 		'no-repeat', 
			'see-my-cv' . '_heading_bg_attachment' => 	'scroll', 
			'see-my-cv' . '_heading_bg_size' => 			'cover', 
			'see-my-cv' . '_heading_bg_color' => 		'', 
			'see-my-cv' . '_heading_height' => 			'405', 
			'see-my-cv' . '_breadcrumbs' => 				1, 
			'see-my-cv' . '_bottom_scheme' => 			'first', 
			'see-my-cv' . '_bottom_sidebar' => 			0, 
			'see-my-cv' . '_bottom_sidebar_layout' => 	'14141414' 
		), 
		'footer' => array( 
			'see-my-cv' . '_footer_scheme' => 				'footer', 
			'see-my-cv' . '_footer_type' => 					'default', 
			'see-my-cv' . '_footer_additional_content' => 	'nav', 
			'see-my-cv' . '_footer_logo' => 					1, 
			'see-my-cv' . '_footer_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'see-my-cv' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'see-my-cv' . '_footer_nav' => 					1, 
			'see-my-cv' . '_footer_social' => 				1, 
			'see-my-cv' . '_footer_html' => 					'', 
			'see-my-cv' . '_footer_copyright' => 			'See My CV' . ' &copy; ' . date('Y') . ' / ' . esc_html__('All Rights Reserved', 'see-my-cv') 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Add Google Font */
if (!function_exists('see_my_cv_add_google_font')) {

function see_my_cv_add_google_font($fonts) {
	$fonts['Fira+Sans:400,500,700'] = 'Fira Sans';
	$fonts['Noto+Serif:400,400i'] = 'Noto Serif';
	
	
	return $fonts;
}

}

add_filter('see_my_cv_google_fonts_list_filter', 'see_my_cv_add_google_font');



/* Theme Settings Fonts Default Values */
if (!function_exists('see_my_cv_settings_font_defaults')) {

function see_my_cv_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'see-my-cv' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'16', 
				'line_height' => 		'24', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'see-my-cv' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Noto+Serif:400,400i', 
				'font_size' => 			'16', 
				'line_height' => 		'24', 
				'font_weight' => 		'400', 
				'font_style' => 		'italic', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'see-my-cv' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'see-my-cv' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:400,500,700', 
				'font_size' => 			'48', 
				'line_height' => 		'54', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'see-my-cv' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:400,500,700', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			) 
		), 
		'heading' => array( 
			'see-my-cv' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:400,500,700', 
				'font_size' => 			'52', 
				'line_height' => 		'58', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'see-my-cv' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:400,500,700', 
				'font_size' => 			'42', 
				'line_height' => 		'48', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'see-my-cv' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:400,500,700', 
				'font_size' => 			'32', 
				'line_height' => 		'38', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'see-my-cv' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:400,500,700', 
				'font_size' => 			'20', 
				'line_height' => 		'26', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'see-my-cv' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Noto+Serif:400,400i', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'400', 
				'font_style' => 		'italic', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'see-my-cv' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:400,500,700', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'see-my-cv' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Noto+Serif:400,400i', 
				'font_size' => 			'16', 
				'line_height' => 		'43', 
				'font_weight' => 		'400', 
				'font_style' => 		'italic', 
				'text_transform' => 	'none' 
			), 
			'see-my-cv' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:400,500,700', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'see-my-cv' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal' 
			), 
			'see-my-cv' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Noto+Serif:400,400i', 
				'font_size' => 			'18', 
				'line_height' => 		'30', 
				'font_weight' => 		'400', 
				'font_style' => 		'italic' 
			) 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#6e6e6e', 
		'#582dc6', 
		'#a5a5a5', 
		'#191919', 
		'#ffffff', 
		'#f6f6f6', 
		'#e5e5e5', 
		'#c4c4c4'
	);
	
	
	return $palettes;
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('see_my_cv_color_schemes_defaults')) {

function see_my_cv_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#6e6e6e', 
			'link' => 		'#582dc6', 
			'hover' => 		'#a5a5a5', 
			'heading' => 	'#191919', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f6f6f6', 
			'border' => 	'#e5e5e5' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'rgba(255,255,255,0.25)', 
			'mid_link' => 		'#ffffff', 
			'mid_hover' => 		'rgba(255,255,255,0.25)', 
			'mid_bg' => 		'#191919', 
			'mid_bg_scroll' => 	'#191919', 
			'mid_border' => 	'#582dc6', 
			'bot_color' => 		'#ffffff', 
			'bot_link' => 		'#ffffff', 
			'bot_hover' => 		'#ffffff', 
			'bot_bg' => 		'rgba(255,255,255,0)', 
			'bot_bg_scroll' => 	'#ffffff', 
			'bot_border' => 	'#e1e1e1' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#ffffff', 
			'title_link_hover' => 		'#ffffff', 
			'title_link_current' => 	'#ffffff', 
			'title_link_subtitle' => 	'rgba(255,255,255,0.5)', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0.5)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'#ffffff', 
			'dropdown_bg' => 			'rgba(88,45,198,0.97)', 
			'dropdown_border' => 		'rgba(255,255,255,0)', 
			'dropdown_link' => 			'#ffffff', 
			'dropdown_link_hover' => 	'rgba(255,255,255,0.5)', 
			'dropdown_link_subtitle' => 'rgba(255,255,255,0.5)', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'rgba(255,255,255,0.3)', 
			'link' => 					'rgba(255,255,255,0.5)', 
			'hover' => 					'#ffffff', 
			'bg' => 					'#252525', 
			'border' => 				'#252525', 
			'title_link' => 			'rgba(255,255,255,0.5)',
			'title_link_hover' => 		'#ffffff', 
			'title_link_bg' => 			'rgba(255,255,255,0)',
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_bg' => 			'#522cb5', 
			'dropdown_border' => 		'rgba(255,255,255,0)', 
			'dropdown_link' => 			'rgba(255,255,255,0.8)', 
			'dropdown_link_hover' => 	'#ffffff', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'rgba(255,255,255,0.4)', 
			'link' => 		'rgba(255,255,255,0.7)', 
			'hover' => 		'#ffffff', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#4624a6', 
			'alternate' => 	'#4624a6', 
			'border' => 	'#4624a6' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'#6e6e6e', 
			'link' => 		'#aa89ff', 
			'hover' => 		'#c4c4c4', 
			'heading' => 	'#aa89ff', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f6f6f6', 
			'border' => 	'#e5e5e5' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#6e6e6e', 
			'link' => 		'#582dc6', 
			'hover' => 		'#c4c4c4', 
			'heading' => 	'#191919', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f6f6f6', 
			'border' => 	'#e5e5e5' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#6e6e6e', 
			'link' => 		'#582dc6', 
			'hover' => 		'#c4c4c4', 
			'heading' => 	'#191919', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f6f6f6', 
			'border' => 	'#e5e5e5' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('see_my_cv_settings_element_defaults')) {

function see_my_cv_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'see-my-cv' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'see-my-cv' . '_social_icons' => array( 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'see-my-cv') . '|true|#929292|#ffffff', 
				'cmsmasters-icon-gplus-1|#|' . esc_html__('Google+', 'see-my-cv') . '|true|#929292|#ffffff', 
				'cmsmasters-icon-instagram|#|' . esc_html__('Instagram', 'see-my-cv') . '|true|#929292|#ffffff', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'see-my-cv') . '|true|#929292|#ffffff', 
				'cmsmasters-icon-youtube-play|#|' . esc_html__('YouTube', 'see-my-cv') . '|true|#929292|#ffffff' 
			) 
		), 
		'lightbox' => array( 
			'see-my-cv' . '_ilightbox_skin' => 					'dark', 
			'see-my-cv' . '_ilightbox_path' => 					'vertical', 
			'see-my-cv' . '_ilightbox_infinite' => 				0, 
			'see-my-cv' . '_ilightbox_aspect_ratio' => 			1, 
			'see-my-cv' . '_ilightbox_mobile_optimizer' => 		1, 
			'see-my-cv' . '_ilightbox_max_scale' => 				1, 
			'see-my-cv' . '_ilightbox_min_scale' => 				0.2, 
			'see-my-cv' . '_ilightbox_inner_toolbar' => 			0, 
			'see-my-cv' . '_ilightbox_smart_recognition' => 		0, 
			'see-my-cv' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'see-my-cv' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'see-my-cv' . '_ilightbox_controls_toolbar' => 		1, 
			'see-my-cv' . '_ilightbox_controls_arrows' => 		0, 
			'see-my-cv' . '_ilightbox_controls_fullscreen' => 	1, 
			'see-my-cv' . '_ilightbox_controls_thumbnail' => 	1, 
			'see-my-cv' . '_ilightbox_controls_keyboard' => 		1, 
			'see-my-cv' . '_ilightbox_controls_mousewheel' => 	1, 
			'see-my-cv' . '_ilightbox_controls_swipe' => 		1, 
			'see-my-cv' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'see-my-cv' . '_sitemap_nav' => 			1, 
			'see-my-cv' . '_sitemap_categs' => 		1, 
			'see-my-cv' . '_sitemap_tags' => 		1, 
			'see-my-cv' . '_sitemap_month' => 		1, 
			'see-my-cv' . '_sitemap_pj_categs' => 	1, 
			'see-my-cv' . '_sitemap_pj_tags' => 		1 
		), 
		'error' => array( 
			'see-my-cv' . '_error_color' => 				'#191919', 
			'see-my-cv' . '_error_bg_color' => 			'#f6f6f6', 
			'see-my-cv' . '_error_bg_img_enable' => 		0, 
			'see-my-cv' . '_error_bg_image' => 			'', 
			'see-my-cv' . '_error_bg_rep' => 			'no-repeat', 
			'see-my-cv' . '_error_bg_pos' => 			'top center', 
			'see-my-cv' . '_error_bg_att' => 			'scroll', 
			'see-my-cv' . '_error_bg_size' => 			'cover', 
			'see-my-cv' . '_error_search' => 			1, 
			'see-my-cv' . '_error_sitemap_button' => 	1, 
			'see-my-cv' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'see-my-cv' . '_custom_css' => 			'', 
			'see-my-cv' . '_custom_js' => 			'', 
			'see-my-cv' . '_gmap_api_key' => 		'', 
			'see-my-cv' . '_api_key' => 				'', 
			'see-my-cv' . '_api_secret' => 			'', 
			'see-my-cv' . '_access_token' => 		'', 
			'see-my-cv' . '_access_token_secret' => 	'' 
		), 
		'recaptcha' => array( 
			'see-my-cv' . '_recaptcha_public_key' => 	'', 
			'see-my-cv' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('see_my_cv_settings_single_defaults')) {

function see_my_cv_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'see-my-cv' . '_blog_post_layout' => 		'r_sidebar', 
			'see-my-cv' . '_blog_post_title' => 			1, 
			'see-my-cv' . '_blog_post_date' => 			1, 
			'see-my-cv' . '_blog_post_cat' => 			1, 
			'see-my-cv' . '_blog_post_author' => 		1, 
			'see-my-cv' . '_blog_post_comment' => 		1, 
			'see-my-cv' . '_blog_post_tag' => 			1, 
			'see-my-cv' . '_blog_post_like' => 			1, 
			'see-my-cv' . '_blog_post_nav_box' => 		1, 
			'see-my-cv' . '_blog_post_nav_order_cat' => 	0, 
			'see-my-cv' . '_blog_post_share_box' => 		1, 
			'see-my-cv' . '_blog_post_author_box' => 	1, 
			'see-my-cv' . '_blog_more_posts_box' => 		'popular', 
			'see-my-cv' . '_blog_more_posts_count' => 	'3', 
			'see-my-cv' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'see-my-cv' . '_portfolio_project_title' => 			1, 
			'see-my-cv' . '_portfolio_project_details_title' => 	esc_html__('Project details', 'see-my-cv'), 
			'see-my-cv' . '_portfolio_project_date' => 			1, 
			'see-my-cv' . '_portfolio_project_cat' => 			1, 
			'see-my-cv' . '_portfolio_project_author' => 		1, 
			'see-my-cv' . '_portfolio_project_comment' => 		0, 
			'see-my-cv' . '_portfolio_project_tag' => 			0, 
			'see-my-cv' . '_portfolio_project_like' => 			1, 
			'see-my-cv' . '_portfolio_project_link' => 			0, 
			'see-my-cv' . '_portfolio_project_share_box' => 		1, 
			'see-my-cv' . '_portfolio_project_nav_box' => 		1, 
			'see-my-cv' . '_portfolio_project_nav_order_cat' => 	0, 
			'see-my-cv' . '_portfolio_project_author_box' => 	1, 
			'see-my-cv' . '_portfolio_more_projects_box' => 		'popular', 
			'see-my-cv' . '_portfolio_more_projects_count' => 	'4', 
			'see-my-cv' . '_portfolio_more_projects_pause' => 	'5', 
			'see-my-cv' . '_portfolio_project_slug' => 			'project', 
			'see-my-cv' . '_portfolio_pj_categs_slug' => 		'pj-categs', 
			'see-my-cv' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'see-my-cv' . '_profile_post_title' => 			1, 
			'see-my-cv' . '_profile_post_details_title' => 	esc_html__('Profile details', 'see-my-cv'), 
			'see-my-cv' . '_profile_post_cat' => 			1, 
			'see-my-cv' . '_profile_post_comment' => 		1, 
			'see-my-cv' . '_profile_post_like' => 			1, 
			'see-my-cv' . '_profile_post_nav_box' => 		1, 
			'see-my-cv' . '_profile_post_nav_order_cat' => 	0, 
			'see-my-cv' . '_profile_post_share_box' => 		1, 
			'see-my-cv' . '_profile_post_slug' => 			'profile', 
			'see-my-cv' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('see_my_cv_project_puzzle_proportion')) {

function see_my_cv_project_puzzle_proportion() {
	return 1.2;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('see_my_cv_get_image_thumbnail_list')) {

function see_my_cv_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		60, 
			'height' => 	60, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		300, 
			'height' => 	300, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'see-my-cv') 
		), 
		'cmsmasters-profile-horizontal' => array( 
			'width' => 		360, 
			'height' => 	415, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Profile Horizontal', 'see-my-cv') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	370, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'see-my-cv') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	370, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'see-my-cv') 
		), 
		'cmsmasters-project-slider-thumb' => array( 
			'width' => 		580, 
			'height' => 	580, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Slider', 'see-my-cv') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Project', 'see-my-cv') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	470, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'see-my-cv') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'see-my-cv') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	750, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'see-my-cv') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	634, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'see-my-cv') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'see-my-cv') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('see_my_cv_project_labels')) {

function see_my_cv_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'see-my-cv'), 
		'singular_name' => 			esc_html__('Project', 'see-my-cv'), 
		'menu_name' => 				esc_html__('Projects', 'see-my-cv'), 
		'all_items' => 				esc_html__('All Projects', 'see-my-cv'), 
		'add_new' => 				esc_html__('Add New', 'see-my-cv'), 
		'add_new_item' => 			esc_html__('Add New Project', 'see-my-cv'), 
		'edit_item' => 				esc_html__('Edit Project', 'see-my-cv'), 
		'new_item' => 				esc_html__('New Project', 'see-my-cv'), 
		'view_item' => 				esc_html__('View Project', 'see-my-cv'), 
		'search_items' => 			esc_html__('Search Projects', 'see-my-cv'), 
		'not_found' => 				esc_html__('No projects found', 'see-my-cv'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'see-my-cv') 
	);
}

}

// add_filter('cmsmasters_project_labels_filter', 'see_my_cv_project_labels');


if (!function_exists('see_my_cv_pj_categs_labels')) {

function see_my_cv_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'see-my-cv'), 
		'singular_name' => 			esc_html__('Project Category', 'see-my-cv') 
	);
}

}

// add_filter('cmsmasters_pj_categs_labels_filter', 'see_my_cv_pj_categs_labels');


if (!function_exists('see_my_cv_pj_tags_labels')) {

function see_my_cv_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'see-my-cv'), 
		'singular_name' => 			esc_html__('Project Tag', 'see-my-cv') 
	);
}

}

// add_filter('cmsmasters_pj_tags_labels_filter', 'see_my_cv_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('see_my_cv_profile_labels')) {

function see_my_cv_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'see-my-cv'), 
		'singular_name' => 			esc_html__('Profiles', 'see-my-cv'), 
		'menu_name' => 				esc_html__('Profiles', 'see-my-cv'), 
		'all_items' => 				esc_html__('All Profiles', 'see-my-cv'), 
		'add_new' => 				esc_html__('Add New', 'see-my-cv'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'see-my-cv'), 
		'edit_item' => 				esc_html__('Edit Profile', 'see-my-cv'), 
		'new_item' => 				esc_html__('New Profile', 'see-my-cv'), 
		'view_item' => 				esc_html__('View Profile', 'see-my-cv'), 
		'search_items' => 			esc_html__('Search Profiles', 'see-my-cv'), 
		'not_found' => 				esc_html__('No Profiles found', 'see-my-cv'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'see-my-cv') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'see_my_cv_profile_labels');


if (!function_exists('see_my_cv_pl_categs_labels')) {

function see_my_cv_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'see-my-cv'), 
		'singular_name' => 			esc_html__('Profile Category', 'see-my-cv') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'see_my_cv_pl_categs_labels');

