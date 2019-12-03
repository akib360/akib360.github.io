<?php 
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version 	1.0.1
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function see_my_cv_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'see-my-cv');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'see-my-cv');
	}

	$tabs['lightbox'] = esc_attr__('Lightbox', 'see-my-cv');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'see-my-cv');
	$tabs['error'] = esc_attr__('404', 'see-my-cv');
	$tabs['code'] = esc_attr__('Custom Codes', 'see-my-cv');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'see-my-cv');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function see_my_cv_options_element_sections() {
	$tab = see_my_cv_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'see-my-cv');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'see-my-cv');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'see-my-cv');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'see-my-cv');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'see-my-cv');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'see-my-cv');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'see-my-cv');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function see_my_cv_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = see_my_cv_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = see_my_cv_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'see-my-cv' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['see-my-cv' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'see-my-cv' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['see-my-cv' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'see-my-cv') . '|dark', 
				esc_html__('Light', 'see-my-cv') . '|light', 
				esc_html__('Mac', 'see-my-cv') . '|mac', 
				esc_html__('Metro Black', 'see-my-cv') . '|metro-black', 
				esc_html__('Metro White', 'see-my-cv') . '|metro-white', 
				esc_html__('Parade', 'see-my-cv') . '|parade', 
				esc_html__('Smooth', 'see-my-cv') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'see-my-cv'), 
			'desc' => esc_html__('Sets path for switching windows', 'see-my-cv'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'see-my-cv') . '|vertical', 
				esc_html__('Horizontal', 'see-my-cv') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'see-my-cv'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'see-my-cv'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'see-my-cv'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'see-my-cv'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'see-my-cv'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'see-my-cv'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'see-my-cv'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'see-my-cv'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'see-my-cv'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'see-my-cv'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'see-my-cv'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'see-my-cv'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'see-my-cv') . '|center', 
				esc_html__('Fit', 'see-my-cv') . '|fit', 
				esc_html__('Fill', 'see-my-cv') . '|fill', 
				esc_html__('Stretch', 'see-my-cv') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'see-my-cv'), 
			'desc' => esc_html__('Sets buttons be available or not', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'see-my-cv'), 
			'desc' => esc_html__('Enable the arrow buttons', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'see-my-cv'), 
			'desc' => esc_html__('Sets the fullscreen button', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'see-my-cv'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'see-my-cv'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'see-my-cv'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'see-my-cv'), 
			'desc' => esc_html__('Sets the swipe navigation', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'see-my-cv' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'see-my-cv'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'see-my-cv' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'see-my-cv' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'see-my-cv' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'see-my-cv' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'see-my-cv' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'see-my-cv' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'see-my-cv' . '_error_color', 
			'title' => esc_html__('Text Color', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['see-my-cv' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'see-my-cv' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['see-my-cv' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'see-my-cv' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'see-my-cv' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'see-my-cv'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'see-my-cv'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['see-my-cv' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'see-my-cv' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'see-my-cv') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'see-my-cv') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'see-my-cv') . '|repeat-y', 
				esc_html__('Repeat', 'see-my-cv') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'see-my-cv' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['see-my-cv' . '_error_bg_pos'], 
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
			'section' => 'error_section', 
			'id' => 'see-my-cv' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'see-my-cv') . '|scroll', 
				esc_html__('Fixed', 'see-my-cv') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'see-my-cv' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['see-my-cv' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'see-my-cv') . '|auto', 
				esc_html__('Cover', 'see-my-cv') . '|cover', 
				esc_html__('Contain', 'see-my-cv') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'see-my-cv' . '_error_search', 
			'title' => esc_html__('Search Line', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'see-my-cv' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'see-my-cv' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'see-my-cv' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['see-my-cv' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'see-my-cv' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['see-my-cv' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'see-my-cv' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'see-my-cv' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'see-my-cv' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_api_secret'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'see-my-cv' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_access_token'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'see-my-cv' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_access_token_secret'], 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'see-my-cv' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'see-my-cv' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

