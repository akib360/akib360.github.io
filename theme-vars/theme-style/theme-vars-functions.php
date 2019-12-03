<?php
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version 	1.0.0
 * 
 * Theme Vars Functions
 * Created by CMSMasters
 * 
 */


/* Register CSS Styles */
function see_my_cv_vars_register_css_styles() {
	wp_enqueue_style('see-my-cv-theme-vars-style', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/vars-style.css', array('see-my-cv-retina'), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'see_my_cv_vars_register_css_styles');

