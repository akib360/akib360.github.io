<?php
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version 	1.0.0
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function see_my_cv_theme_colors_secondary() {
	$cmsmasters_option = see_my_cv_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version 	1.0.0
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Header Middle Color Scheme Rules ******************/

	/* Start Header Middle Content Color */
	.header_mid,
	.header_mid input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.header_mid textarea,
	.header_mid select,
	.header_mid option {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_mid_color']) . "
	}
	/* Finish Header Middle Content Color */
	
	
	/* Start Header Middle Primary Color */
	.header_mid a, 
	.header_mid .resp_mid_nav_wrap .resp_mid_nav, 
	.header_mid .resp_mid_nav_wrap .resp_mid_nav:hover, 
	.header_mid .resp_mid_nav_wrap .resp_mid_nav.active {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_mid_link']) . "
	}
	
	.header_mid .button:hover, 
	.header_mid input[type=submit]:hover, 
	.header_mid input[type=button]:hover, 
	.header_mid button:hover, 
	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button:hover, 
	.cmsmasters_dynamic_cart:hover .cmsmasters_dynamic_cart_button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_mid_link']) . "
	}
	/* Finish Header Middle Primary Color */
	
	
	/* Start Header Middle Rollover Color */
	.header_mid a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_mid_hover']) . "
	}
	
	.header_mid .button, 
	.header_mid input[type=submit], 
	.header_mid input[type=button], 
	.header_mid button,
	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_mid_hover']) . "
	}
	
	.header_mid input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus,
	.header_mid textarea:focus,
	.header_mid select:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_header_mid_hover']) . "
	}
	/* Finish Header Middle Rollover Color */
	
	
	/* Start Header Middle Background Color */
	.header_mid .button, 
	.header_mid input[type=submit], 
	.header_mid input[type=button], 
	.header_mid button, 
	.header_mid .button:hover, 
	.header_mid input[type=submit]:hover, 
	.header_mid input[type=button]:hover, 
	.header_mid button:hover, 
	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button, 
	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button:hover, 
	.cmsmasters_dynamic_cart:hover .cmsmasters_dynamic_cart_button {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_mid_bg']) . "
	}
	
	.header_mid,
	.header_mid input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.enable_header_side .header_mid .header_mid_outer, 
	.enable_header_side .header_mid .resp_mid_nav_wrap, 
	.enable_header_side .header_mid .resp_mid_nav_wrap.active, 
	.enable_header_side .header_mid .resp_mid_nav_wrap:hover, 
	.header_mid textarea,
	.header_mid select,
	.header_mid option {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_mid_bg']) . "
	}
	
	/* Finish Header Middle Background Color */
	
	
	/* Start Header Middle Borders Color */
	.header_mid input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.header_mid textarea,
	.header_mid select,
	.header_mid option {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_header_mid_border']) . "
	}
	
	.header_mid .resp_mid_nav_wrap .resp_mid_nav:hover, 
	.header_mid .resp_mid_nav_wrap .resp_mid_nav.active {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_mid_border']) . "
	}
	
	.header_mid .resp_mid_nav_wrap .resp_mid_nav {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_header_mid_border']) . ", 0.8);
	}
	
	@media only screen and (max-width: 768px) {
		#header .header_mid .resp_mid_nav_wrap, 
		#header .header_mid .mid_search_but_wrap {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_mid_border']) . "
		}
	}
	

	
	/* Finish Header Middle Borders Color */
	
	
	/* Start Header Middle Custom Rules */
	.header_mid ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['see-my-cv' . '_header_mid_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_mid_bg']) . "
	}
	
	.header_mid ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['see-my-cv' . '_header_mid_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_mid_bg']) . "
	}
	/* Finish Header Middle Custom Rules */

/***************** Finish Header Middle Color Scheme Rules ******************/



/***************** Start Navigation Color Scheme Rules ******************/

	/* Start Navigation Title Link Color */
	ul.navigation > li > a {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_navigation_title_link']) . "
	}
	
	ul.navigation > li > a .cmsmasters_resp_nav_toggle_inner, 
	ul.navigation > li > a .cmsmasters_resp_nav_toggle_inner:before, 
	ul.navigation > li > a .cmsmasters_resp_nav_toggle_inner:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_navigation_title_link']) . "
	}
	/* Finish Navigation Title Link Color */
	
	
	/* Start Navigation Title Link Hover Color */
		ul.navigation > li > a:hover,
		ul.navigation > li:hover > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_navigation_title_link_hover']) . "
		}
		
		ul.navigation > li:hover > a .cmsmasters_resp_nav_toggle_inner, 
		ul.navigation > li:hover > a .cmsmasters_resp_nav_toggle_inner:before, 
		ul.navigation > li:hover > a .cmsmasters_resp_nav_toggle_inner:after, 
		ul.navigation > li > a:hover .cmsmasters_resp_nav_toggle_inner:before, 
		ul.navigation > li > a:hover .cmsmasters_resp_nav_toggle_inner:after {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_navigation_title_link_hover']) . "
		}
	/* Finish Navigation Title Link Hover Color */
	
	
	/* Start Navigation Title Link Current Color */
		ul.navigation > li.menu-item.current-menu-item > a, 
		ul.navigation > li.menu-item.current-menu-ancestor > a, 
		ul.navigation > li > a .nav_tag {
			" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_navigation_title_link_current']) . "
		}
		
		ul.navigation > li.menu-item.current-menu-item > a .cmsmasters_resp_nav_toggle_inner, 
		ul.navigation > li.menu-item.current-menu-item > a .cmsmasters_resp_nav_toggle_inner:before, 
		ul.navigation > li.menu-item.current-menu-item > a .cmsmasters_resp_nav_toggle_inner:after, 
		ul.navigation > li.menu-item.current-menu-ancestor > a .cmsmasters_resp_nav_toggle_inner, 
		ul.navigation > li.menu-item.current-menu-ancestor > a .cmsmasters_resp_nav_toggle_inner:before, 
		ul.navigation > li.menu-item.current-menu-ancestor > a .cmsmasters_resp_nav_toggle_inner:after {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_navigation_title_link_current']) . "
		}
	/* Finish Navigation Title Link Current Color */
	
	
	/* Start Navigation Title Link Background Color */
	ul.navigation > li > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_navigation_title_link_bg']) . "
	}
	/* Finish Navigation Title Link Background Color */
	
	
	/* Start Navigation Title Link Hover Background Color */
	ul.navigation > li > a:hover,
	ul.navigation > li:hover > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_navigation_title_link_bg_hover']) . "
	}
	/* Finish Navigation Title Link Hover Background Color */
	
	
	/* Start Navigation Title Link Current Background Color */
	ul.navigation > li.menu-item.current-menu-item > a, 
	ul.navigation > li.menu-item.current-menu-ancestor > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_navigation_title_link_bg_current']) . "
	}
	/* Finish Navigation Title Link Current Background Color */
	
	
	/* Start Navigation Title Link Border Color */
	ul.navigation > li {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_navigation_title_link_border']) . "
	}
	/* Finish Navigation Title Link Border Color */
	
	
	/* Start Navigation Dropdown Background Color */
	
	.enable_header_default ul.navigation ul, 
	.enable_header_default ul.navigation .menu-item-mega-container, 
	.enable_header_side .mid_nav_wrap nav {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_navigation_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.mid_nav_wrap nav {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_navigation_dropdown_bg']) . "
		}
	}
	
	/* Finish Navigation Dropdown Background Color */
	
	
	/* Start Navigation Dropdown Border Color */
	ul.navigation ul, 
	ul.navigation .menu-item-mega-container {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_navigation_dropdown_border']) . "
	}
	/* Finish Navigation Dropdown Border Color */
	
	
	/* Start Navigation Dropdown Link Color */
	.navigation li a {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_navigation_dropdown_link']) . "
	}
	
	.navigation li a .cmsmasters_resp_nav_toggle_inner,
	.navigation li a .cmsmasters_resp_nav_toggle_inner:before,
	.navigation li a .cmsmasters_resp_nav_toggle_inner:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_navigation_dropdown_link']) . "
	}
	/* Finish Navigation Dropdown Link Color */
	
	
	/* Start Navigation Dropdown Link Hover Color */
	.navigation li > a:hover,
	.navigation li.current-menu-item > a, 
	ul.navigation li > ul li:hover > a, 
	.navigation li.current-menu-ancestor > a, 
	.navigation li a .nav_tag {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_navigation_dropdown_link_hover']) . "
	}
	
	.navigation li > a:hover .cmsmasters_resp_nav_toggle_inner, 
	.navigation li > a:hover .cmsmasters_resp_nav_toggle_inner:before, 
	.navigation li > a:hover .cmsmasters_resp_nav_toggle_inner:after, 
	.navigation li.current-menu-item > a .cmsmasters_resp_nav_toggle_inner, 
	.navigation li.current-menu-item > a .cmsmasters_resp_nav_toggle_inner:before, 
	.navigation li.current-menu-item > a .cmsmasters_resp_nav_toggle_inner:after, 
	.navigation li.current-menu-ancestor > a .cmsmasters_resp_nav_toggle_inner, 
	ul.navigation li > ul li:hover > a .cmsmasters_resp_nav_toggle_inner, 
	ul.navigation li > ul li:hover > a .cmsmasters_resp_nav_toggle_inner:before, 
	ul.navigation li > ul li:hover > a .cmsmasters_resp_nav_toggle_inner:after, 
	.navigation li.current-menu-ancestor > a .cmsmasters_resp_nav_toggle_inner:before, 
	.navigation li.current-menu-ancestor > a .cmsmasters_resp_nav_toggle_inner:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_navigation_dropdown_link_hover']) . "
	}
	/* Finish Navigation Dropdown Link Hover Color */
	
	
	/* Start Navigation Dropdown Link Hover Highlight Color */
	.navigation li > a:hover,
	.ul.navigation li > ul li:hover > a, 
	.navigation li.current-menu-item > a, 
	.navigation li.current-menu-ancestor > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_navigation_dropdown_link_highlight']) . "
	}
	/* Finish Navigation Dropdown Link Hover Highlight Color */
	
	
	/* Start Navigation Dropdown Link Border Color */
	.navigation li {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_navigation_dropdown_link_border']) . "
	}
	/* Finish Navigation Dropdown Link Border Color */

/***************** Finish Navigation Color Scheme Rules ******************/



/***************** Start Header Top Color Scheme Rules ******************/

	/* Start Header Top Content Color */
	.header_top {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_top_color']) . "
	}
	/* Finish Header Top Content Color */
	
	
	/* Start Header Top Primary Color */
	.header_top a, 
	.header_top .header_top_but:hover, 
	.header_top .header_top_but.opened, 
	.header_top .responsive_top_nav {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_top_link']) . "
	}
	
	.header_top .responsive_top_nav:hover, 
	.header_top .responsive_top_nav.active {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_top_link']) . "
	}
	/* Finish Header Top Primary Color */
	
	
	/* Start Header Top Rollover Color */
	.header_top a:hover,
	.header_top .meta_wrap [class^=cmsmasters-icon-]:before,
	.header_top .meta_wrap [class*= cmsmasters-icon-]:before,
	.header_top .header_top_but {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_top_hover']) . "
	}
	
	.header_top .responsive_top_nav {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_top_hover']) . "
	}
	/* Finish Header Top Rollover Color */
	
	
	/* Start Header Top Background Color */
	.header_top .responsive_top_nav:hover, 
	.header_top .responsive_top_nav.active {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_top_bg']) . "
	}
	
	.header_top {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_top_bg']) . "
	}
	/* Finish Header Top Background Color */
	
	
	/* Start Header Top Borders Color */
	.header_top .header_top_but {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_header_top_border']) . "
	}
	/* Finish Header Top Borders Color */
	
	
	/* Start Header Top Custom Rules */
	.header_top ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['see-my-cv' . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_top_bg']) . "
	}
	
	.header_top ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['see-my-cv' . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_top_bg']) . "
	}
	/* Finish Header Top Custom Rules */

/***************** Finish Header Top Color Scheme Rules ******************/



/***************** Start Header Top Navigation Color Scheme Rules ******************/

	/* Start Header Top Navigation Title Link Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_top_title_link']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Color */
	
	
	/* Start Header Top Navigation Title Link Hover Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a:hover,
		ul.top_line_nav > li:hover > a,
		ul.top_line_nav > li.current-menu-item > a,
		ul.top_line_nav > li.current-menu-ancestor > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_top_title_link_hover']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Hover Color */
	
	
	/* Start Header Top Navigation Title Link Background Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_top_title_link_bg']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Background Color */
	
	
	/* Start Header Top Navigation Title Link Hover Background Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a:hover,
		ul.top_line_nav > li:hover > a,
		ul.top_line_nav > li.current-menu-item > a,
		ul.top_line_nav > li.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_top_title_link_bg_hover']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Hover Background Color */
	
	
	/* Start Header Top Navigation Title Link Border Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_header_top_title_link_border']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Border Color */
	
	
	/* Start Header Top Navigation Dropdown Background Color */
	@media only screen and (max-width: 1024px) {
		ul.top_line_nav {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_top_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_top_dropdown_bg']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Background Color */
	
	
	/* Start Header Top Navigation Dropdown Border Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_header_top_dropdown_border']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Border Color */
	
	
	/* Start Header Top Navigation Dropdown Link Color */
	.top_line_nav li a {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_top_dropdown_link']) . "
	}
	/* Finish Header Top Navigation Dropdown Link Color */
	
	
	/* Start Header Top Navigation Dropdown Link Hover Color */
	.top_line_nav li > a:hover,
	.top_line_nav li.current-menu-item > a {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_top_dropdown_link_hover']) . "
	}
	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul li:hover > a, 
		ul.top_line_nav ul li.current-menu-ancestor > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_header_top_dropdown_link_hover']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Link Hover Color */
	
	
	/* Start Header Top Navigation Dropdown Link Hover Highlight Color */
	.top_line_nav li > a:hover,
	.top_line_nav li.current-menu-item > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_top_dropdown_link_highlight']) . "
	}
	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul li:hover > a,
		ul.top_line_nav ul li.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_header_top_dropdown_link_highlight']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Link Hover Highlight Color */
	
	
	/* Start Header Top Navigation Dropdown Link Border Color */
	.top_line_nav li {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_header_top_dropdown_link_border']) . "
	}
	/* Finish Header Top Navigation Dropdown Link Border Color */

/***************** Finish Header Top Navigation Color Scheme Rules ******************/

";
	
	
	return apply_filters('see_my_cv_theme_colors_secondary_filter', $custom_css);
}

