<?php 
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version		1.0.0
 * 
 * Header Middle Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = see_my_cv_get_global_options();


echo '<div class="header_mid" ' . (($cmsmasters_option['see-my-cv' . '_header_styles'] == 'default') ? 'data-height="' . esc_attr($cmsmasters_option['see-my-cv' . '_header_mid_height']) . '"' : '') . '>' . 
	'<div class="header_mid_outer">' . 
		'<div class="header_mid_inner">';
			do_action('cmsmasters_before_header_mid', $cmsmasters_option);
			
			
			if ($cmsmasters_option['see-my-cv' . '_header_styles'] != 'default') {
				echo '<div class="header_mid_logo_section">';
			}
			
			
			do_action('cmsmasters_before_logo', $cmsmasters_option);
			echo '<div class="logo_wrap">';
				
				see_my_cv_logo();
				
			echo '</div>';
			do_action('cmsmasters_after_logo', $cmsmasters_option);
			
			
			if ($cmsmasters_option['see-my-cv' . '_header_styles'] != 'default') {
				echo '</div>' . 
					'<div class="header_mid_info_section">';
			}
		
		
			echo '<div class="resp_mid_nav_wrap">' . 
				'<a class="responsive_nav resp_mid_nav cmsmasters_theme_icon_resp_nav inactive" href="' . esc_js("javascript:void(0)") . '"></a>' . 
			'</div>';
			
			
			if (
				$cmsmasters_option['see-my-cv' . '_header_search']
			) {
				echo '<div class="mid_search_but_wrap">' . 
					'<a href="' . esc_js("javascript:void(0)") . '" class="mid_search_but cmsmasters_header_search_but cmsmasters_theme_icon_search"></a>' . 
				'</div>';
			}
			

			if (
				$cmsmasters_option['see-my-cv' . '_header_styles'] != 'default' && 
				$cmsmasters_option['see-my-cv' . '_header_add_cont_cust_html'] !== ''
			) {
				echo '<div class="slogan_wrap">' . 
					'<div class="slogan_wrap_inner">' . 
						'<div class="slogan_wrap_text">' . 
							stripslashes($cmsmasters_option['see-my-cv' . '_header_add_cont_cust_html']) . 
						'</div>' . 
					'</div>' . 
				'</div>';
			}

			
			if ($cmsmasters_option['see-my-cv' . '_header_styles'] != 'default') {
				echo '</div>';
			}
		
			
			if ($cmsmasters_option['see-my-cv' . '_header_styles'] == 'default') {
				echo '<!--  Start Navigation  -->' . 
				'<div class="mid_nav_wrap">' . 
					'<nav>';
						
						$nav_args = array( 
							'theme_location' => 	'primary', 
							'menu_id' => 			'navigation', 
							'menu_class' => 		'mid_nav navigation', 
							'link_before' => 		'<span class="nav_item_wrap">', 
							'link_after' => 		'</span>', 
							'fallback_cb' => 		'see_my_cv_fallback_menu' 
						);
						
						
						wp_nav_menu($nav_args);
						
					echo '</nav>' . 
				'</div>' . 
				'<!--  Finish Navigation  -->';
			}
			
			
			do_action('cmsmasters_after_header_mid', $cmsmasters_option);
		echo '</div>' . 
	'</div>' . 
'</div>';

if ($cmsmasters_option['see-my-cv' . '_header_styles'] == 'side') {
	echo '<!--  Start Navigation  -->' . 
	'<div class="mid_nav_wrap closed">' . 
		'<nav>';
			
			$nav_args = array( 
				'theme_location' => 	'primary', 
				'menu_id' => 			'navigation', 
				'container_class' => 	'mid_nav_container', 
				'menu_class' => 		'mid_nav navigation', 
				'link_before' => 		'<span class="nav_item_wrap">', 
				'link_after' => 		'</span>', 
				'fallback_cb' => 		'see_my_cv_fallback_menu' 
			);
			
			
			wp_nav_menu($nav_args);
			
		echo '</nav>' . 
		'<a href="#" class="cmsmasters_close_nav cmsmasters_theme_icon_cancel"></a>' . 
	'</div>' . 
	'<!--  Finish Navigation  -->';
}
