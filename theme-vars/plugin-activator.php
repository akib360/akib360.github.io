<?php
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version 	1.0.7
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


require_once(get_template_directory() . '/framework/class/class-tgm-plugin-activation.php');


if (!function_exists('see_my_cv_register_theme_plugins')) {

function see_my_cv_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Contact Form Builder', 'see-my-cv'), 
			'slug'					=> 'cmsmasters-contact-form-builder', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-contact-form-builder.zip', 
			'required'				=> false, 
			'version'				=> '1.4.3', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'see-my-cv'), 
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '2.2.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'see-my-cv'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '6.7.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'see-my-cv'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.4.8', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Envato Market', 'see-my-cv'), 
			'slug'					=> 'envato-market', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/envato-market.zip', 
			'required'				=> false, 
			'version'				=> '2.0.0', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Cookie Notice', 'see-my-cv'), 
			'slug'					=> 'cookie-notice', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'see-my-cv'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WordPress SEO by Yoast', 'see-my-cv'), 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		) 
	);
	
	
	$config = array( 
		'id' => 			'see-my-cv', 
		'menu' => 			'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'see-my-cv'), 
			'menu_title' => 	esc_html__('Theme Plugins', 'see-my-cv'), 
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'see-my-cv') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'see_my_cv_register_theme_plugins');

