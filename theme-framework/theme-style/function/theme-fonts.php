<?php
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function see_my_cv_theme_fonts() {
	$cmsmasters_option = see_my_cv_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body,
	.subpage_nav,
	.subpage_nav a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li > p, 
	.cmsmasters_open_project .cmsmasters_project_date, 
	.cmsmasters_pricing_table .feature_list li, 
	.header_top .meta_wrap {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_content_font_google_font']) . $cmsmasters_option['see-my-cv' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_content_font_font_style'] . ";
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li > p {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_content_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_content_font_line_height'] - 3) . "px;
	}
	
	.cmsmasters_open_project .project_details_item_desc .cmsmasters_project_likes a, 
	.cmsmasters_open_project .project_details_item_desc .cmsmasters_project_comments a, 
	.cmsmasters_open_profile .profile_details_item_desc .cmsmasters_profile_likes a, 
	.cmsmasters_open_profile .profile_details_item_desc .cmsmasters_profile_comments a, 
	.cmsmasters_likes a, 
	.cmsmasters_comments a {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_content_font_google_font']) . $cmsmasters_option['see-my-cv' . '_content_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['see-my-cv' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_pricing_table .feature_list li {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_content_font_font_size'] - 1) . "px;
	}
	
	.header_top .meta_wrap {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_content_font_font_size'] - 4) . "px;
	}
	
	.cmsmasters_icon_list_items li:before {
		line-height:" . $cmsmasters_option['see-my-cv' . '_content_font_line_height'] . "px;
	}
	/* Finish Content Font */


	/* Start Link Font */
	a, 
	.cmsmasters_comment_item_content a,
	.about_author_cont a, 
	.footer_nav > li > a {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_link_font_google_font']) . $cmsmasters_option['see-my-cv' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['see-my-cv' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['see-my-cv' . '_link_font_text_decoration'] . ";
	}
	
	.cmsmasters_comment_item_content a,
	.about_author_cont a {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_link_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_link_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_period {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_link_font_font_size'] - 1) . "px;
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	.navigation > li > a, 
	.top_line_nav > li > a {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_nav_title_font_google_font']) . $cmsmasters_option['see-my-cv' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['see-my-cv' . '_nav_title_font_text_transform'] . ";
	}
	
	.top_line_nav > li > a {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_nav_title_font_font_size'] - 4)  . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_nav_title_font_line_height'] - 2) . "px;
	}
	
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	.navigation ul li a,
	.top_line_nav ul li a {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['see-my-cv' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['see-my-cv' . '_nav_dropdown_font_text_transform'] . ";
	}
	
	.top_line_nav ul li a {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_nav_dropdown_font_font_size'] - 2)  . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_nav_dropdown_font_line_height'] - 2) . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		.navigation ul li a {
			font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_nav_dropdown_font_font_size'] - 2)  . "px;
			line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_nav_dropdown_font_line_height'] - 2) . "px;
		}
	}
	
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	.cmsmasters_pricing_table .cmsmasters_price_wrap,  
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_h1_font_google_font']) . $cmsmasters_option['see-my-cv' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['see-my-cv' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['see-my-cv' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_pricing_table .cmsmasters_price_wrap {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h1_font_font_size'] + 28) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_h1_font_line_height'] + 28) . "px;	
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h1_font_font_size'] + 10) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_h1_font_line_height'] + 10) . "px;
	}
	
	.cmsmasters_dropcap {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_h1_font_google_font']) . $cmsmasters_option['see-my-cv' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['see-my-cv' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['see-my-cv' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['see-my-cv' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_h1_font_google_font']) . $cmsmasters_option['see-my-cv' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['see-my-cv' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:36px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:20px; /* static */
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h1_font_line_height'] + 15) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option['see-my-cv' . '_h1_font_font_size'] + 35) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option['see-my-cv' . '_h1_font_font_size'] + 35) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['see-my-cv' . '_h1_font_line_height'] + 45) . "px;
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list_item a, 
	.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]), 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_h2_font_google_font']) . $cmsmasters_option['see-my-cv' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['see-my-cv' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['see-my-cv' . '_h2_font_text_decoration'] . ";
	}
	
	.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list_item.current_tab a {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h2_font_font_size'] + 26) . "px;
	}
	
	@media only screen and (max-width: 950px) {
		.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list_item.current_tab a {
			font-size:" . $cmsmasters_option['see-my-cv' . '_h2_font_font_size'] . "px;
		}
	}
	
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a, 
	.logo .title, 
	.widget_nav_menu .menu ul a, 
	.widget_nav_menu .menu > li > a, 
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a, 
	.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list_item a, 
	.cmsmasters_quotes_slider .cmsmasters_quote_title,
	.header_mid .slogan_wrap .slogan_wrap_inner .slogan_wrap_text, 
	.header_mid .slogan_wrap .slogan_wrap_inner .slogan_wrap_text a {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_h3_font_google_font']) . $cmsmasters_option['see-my-cv' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['see-my-cv' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['see-my-cv' . '_h3_font_text_decoration'] . ";
	}
	
	.header_mid .slogan_wrap .slogan_wrap_inner .slogan_wrap_text, 
	.header_mid .slogan_wrap .slogan_wrap_inner .slogan_wrap_text a {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h3_font_font_size'] - 10) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_h3_font_line_height'] - 10) . "px;
	}
	
	.widget_nav_menu .menu ul a {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h3_font_font_size'] - 14) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_h3_font_line_height'] - 14) . "px;
	}
	
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a, 
	.post_nav a,
	.project_details_title, 
	.project_features_title, 
	.profile_details_title, 
	.profile_features_title, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_wrap a.widget_tab_title, 
	.cmsmasters_open_profile .profile_social_icons_title, 
	.cmsmasters_comment_item .cmsmasters_comment_item_title, 
	.cmsmasters_comment_item .cmsmasters_comment_item_title a, 
	.share_posts .share_posts_title, 
	.cmsmasters_profile_horizontal .cmsmasters_profile_title, 
	.cmsmasters_profile_horizontal .cmsmasters_profile_title a, 
	.cmsmasters_quotes_grid .cmsmasters_quote_title,
	.cmsmasters_table thead th, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_counter_wrap, 
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_counter_wrap, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_h4_font_google_font']) . $cmsmasters_option['see-my-cv' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['see-my-cv' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['see-my-cv' . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_comment_item .cmsmasters_comment_item_title, 
	.cmsmasters_comment_item .cmsmasters_comment_item_title a {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h4_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_h4_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_table thead th {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h4_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_h4_font_line_height'] - 4) . "px;
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_wrap a.widget_tab_title {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h4_font_font_size'] - 6) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_h4_font_line_height'] - 6) . "px;
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_counter_wrap, 
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h4_font_font_size'] + 10) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_h4_font_line_height'] + 10) . "px;
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a, 
	.widgettitle, 
	.widgettitle a, 
	#wp-calendar th, 
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content, 
	.widget_recent_entries .post-date,
	.cmsmasters_wrap_pagination ul li span, 
	.cmsmasters_post_date, 
	.cmsmasters_open_project .cmsmasters_project_date, 
	.cmsmasters_comment_item_date, 
	.cmsmasters_slider_post_date, 
	.cmsmasters_archive_item_date,
	.cmsmasters-form-builder .form_info label, 
	.cmsmasters_pricing_table .cmsmasters_period {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_h5_font_google_font']) . $cmsmasters_option['see-my-cv' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['see-my-cv' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['see-my-cv' . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_comment_item_date, 
	.cmsmasters-form-builder .form_info label {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_h5_font_line_height'] - 2) . "px;
	}
	
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a,
	.cmsmasters_open_project .project_details_item_title, 
	.cmsmasters_open_project .project_features_item_title,
	.cmsmasters_open_profile .profile_details_item_title, 
	.cmsmasters_open_profile .profile_features_item_title,
	.post_comments .post_comments_title, 
	.comment-respond .comment-reply-title, 
	.about_author .about_author_title, 
	.cmsmasters_single_slider .cmsmasters_single_slider_title,
	.cmsmasters_pings_list h2,
	.cmsmasters_profile_subtitle, 
	.cmsmasters-form-builder .form_info > label,
	.cmsmasters_quote_subtitle_wrap, 
	.cmsmasters_quote_subtitle_wrap .cmsmasters_quote_subtitle, 
	.cmsmasters_pricing_table .pricing_title, 
	.cmsmasters_stats .cmsmasters_stat_title, 
	.cmsmasters_counters .cmsmasters_counter_title, 
	.cmsmasters_toggles .cmsmasters_toggle_title a, 
	.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_counter_wrap, 
	.cmsmasters_table tfoot td {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_h6_font_google_font']) . $cmsmasters_option['see-my-cv' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['see-my-cv' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['see-my-cv' . '_h6_font_text_decoration'] . ";
		letter-spacing:1.5px;
	}
	
	.comment-respond .comment-reply-title, 
	.post_comments .post_comments_title, 
	.about_author .about_author_title, 
	.cmsmasters_pings_list h2,
	.cmsmasters_single_slider .cmsmasters_single_slider_title {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h6_font_font_size'] + 3) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_h6_font_line_height'] + 3) . "px;
	}
	
	.cmsmasters_quote_subtitle_wrap .cmsmasters_quote_site {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_h6_font_font_size'] - 2) . "px;
	}
	
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_button_font_google_font']) . $cmsmasters_option['see-my-cv' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['see-my-cv' . '_button_font_text_transform'] . ";
	}
	
	.error_cont input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		height:" . $cmsmasters_option['see-my-cv' . '_button_font_line_height'] . "px;
	}
	
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:before {	
		line-height:" . $cmsmasters_option['see-my-cv' . '_button_font_line_height'] . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_button {
		bottom:-" . ((int) $cmsmasters_option['see-my-cv' . '_button_font_line_height'] / 2) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_pricing_item {
		padding-bottom:" . ((int) $cmsmasters_option['see-my-cv' . '_button_font_line_height'] / 2) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_pricing_item_content_wrap {
		margin-bottom:" . ((int) (-$cmsmasters_option['see-my-cv' . '_button_font_line_height'] / 2) + 40) . "px;
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['see-my-cv' . '_button_font_font_size'] . "px !important;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['see-my-cv' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['see-my-cv' . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small, 
	small > a, 
	.post_nav .sub, 
	.widget_pages ul li, 
	.widget_pages ul li a, 
	.widget_categories ul li, 
	.widget_categories ul li a, 
	.widget_meta ul li, 
	.widget_meta ul li a, 
	.widget_text ul li, 
	.widget_text ul li a, 
	.widget_archive ul li, 
	.widget_archive ul li a, 
	#wp-calendar td, 
	#wp-calendar td a, 
	#wp-calendar tfoot td a, 
	#wp-calendar caption, 
	.widget_tag_cloud a, 
	.cmsmasters_archive_type .cmsmasters_archive_item_type, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item:before,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .published, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_wrap .comm_author, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list_item a, 
	.cmsmasters_open_project .project_details_item_desc, 
	.cmsmasters_open_project .project_features_item_desc, 
	.cmsmasters_open_project .project_details_item_desc a, 
	.cmsmasters_open_project .project_features_item_desc a, 
	.cmsmasters_open_profile .profile_details_item_desc, 
	.cmsmasters_open_profile .profile_features_item_desc, 
	.cmsmasters_open_profile .profile_details_item_desc a, 
	.cmsmasters_open_profile .profile_features_item_desc a, 
	.cmsmasters_open_post .cmsmasters_post_tags, 
	.cmsmasters_open_post .cmsmasters_post_tags a, 
	.cmsmasters_project_cont_info a, 
	.cmsmasters_slider_project_cont_info a, 
	.cmsmasters_post_cont_info, 
	.cmsmasters_twitter_wrap .tweet_time, 
	.widget_custom_twitter_entries .tweet_time, 
	.cmsmasters_post_cont_info a, 
	.cmsmasters_slider_post_cont_info, 
	.cmsmasters_slider_post_cont_info a, 
	.headline_outer .cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner, 
	.headline_outer .cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a, 
	.cmsmasters-form-builder small.db, 
	form .formError .formErrorContent {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_small_font_google_font']) . $cmsmasters_option['see-my-cv' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['see-my-cv' . '_small_font_text_transform'] . ";
		letter-spacing:1.5px;
	}
	
	#wp-calendar td, 
	#wp-calendar td a {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_small_font_font_size'] + 3) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_small_font_line_height'] + 3)  . "px;
	}
	
	.cmsmasters-form-builder small.db, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_wrap a, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_wrap .comm_author, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .published {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_small_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_small_font_line_height'] - 2)  . "px;
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_small_font_google_font']) . $cmsmasters_option['see-my-cv' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['see-my-cv' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['see-my-cv' . '_small_font_line_height'] . "px !important;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	textarea,
	select,
	option,
	code {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_input_font_google_font']) . $cmsmasters_option['see-my-cv' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['see-my-cv' . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote,
	.cmsmasters_quote_content {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_quote_font_google_font']) . $cmsmasters_option['see-my-cv' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['see-my-cv' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['see-my-cv' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['see-my-cv' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_quote_font_font_style'] . ";
	}
	
	.cmsmasters_quotes_grid .cmsmasters_quote_content {
		font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_quote_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_quote_font_line_height'] - 4) . "px;
	}
	
	q {
		font-family:" . see_my_cv_get_google_font($cmsmasters_option['see-my-cv' . '_quote_font_google_font']) . $cmsmasters_option['see-my-cv' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['see-my-cv' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['see-my-cv' . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";


if ($cmsmasters_option['see-my-cv' . '_nav_title_font_font_size'] > 48) {
	$custom_css .= "
		@media only screen and (max-width: 1024px) {
			.navigation > li > a {
				font-size:" . ((int) $cmsmasters_option['see-my-cv' . '_nav_title_font_font_size'] - 32) . "px;
				line-height:" . ((int) $cmsmasters_option['see-my-cv' . '_nav_title_font_line_height'] - 32) . "px;
			}
		}
	";
} else {
	$custom_css .= "
		@media only screen and (max-width: 1024px) {
			.navigation > li > a {
				font-size:16px;
				line-height:22px;
			}
		}
	";
}
	
	return apply_filters('see_my_cv_theme_fonts_filter', $custom_css);
}

