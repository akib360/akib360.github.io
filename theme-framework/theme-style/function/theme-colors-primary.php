<?php
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version 	1.0.4
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function see_my_cv_theme_colors_primary() {
	$cmsmasters_option = see_my_cv_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version 	1.0.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	{$rule}.cmsmasters_pricing_table .cmsmasters_period, 
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_inner:before, 
	{$rule}.widget_tag_cloud a, 
	{$rule}.cmsmasters-form-builder small.db, 
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}select,
	{$rule}.widget_pages ul li, 
	{$rule}.widget_pages ul li a, 
	{$rule}.widget_categories ul li, 
	{$rule}.widget_categories ul li a, 
	{$rule}.widget_meta ul li, 
	{$rule}.widget_meta ul li a, 
	{$rule}.widget_text ul li, 
	{$rule}.widget_text ul li a, 
	{$rule}.widget_archive ul li, 
	{$rule}.widget_archive ul li a, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_wrap a, 
	{$rule}#wp-calendar th, 
	{$rule}#wp-calendar td, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_comments > a, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_comments > a:hover, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_comments > a.active, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_likes > a, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_likes > a:hover, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_likes > a.active,
	{$rule}.cmsmasters_wrap_portfolio  .cmsmasters_project_comments > a, 
	{$rule}.cmsmasters_wrap_portfolio  .cmsmasters_project_comments > a:hover, 
	{$rule}.cmsmasters_wrap_portfolio  .cmsmasters_project_comments > a.active, 
	{$rule}.cmsmasters_wrap_portfolio  .cmsmasters_project_likes > a, 
	{$rule}.cmsmasters_wrap_portfolio  .cmsmasters_project_likes > a:hover, 
	{$rule}.cmsmasters_wrap_portfolio  .cmsmasters_project_likes > a.active, 
	{$rule}option {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}.cmsmasters_pricing_table .feature_list li {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_color']) . ", 0.8);
	}
	
	{$rule}input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_color']) . "
	}

	{$rule}textarea::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}textarea:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_color']) . "
	}
	
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}a,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	{$rule}.color_2,
	{$rule}.owl-buttons > div,
	{$rule}.cmsmasters_dropcap.type1,
	{$rule}.cmsmasters_likes a:hover, 
	{$rule}.cmsmasters_likes a.active, 
	{$rule}.cmsmasters_comments a:hover, 
	{$rule}.cmsmasters_comments a.active, 
	{$rule}.cmsmasters_open_project .project_details_item_desc .cmsmasters_project_likes a.active, 
	{$rule}.cmsmasters_open_profile .profile_details_item_desc .cmsmasters_profile_likes a.active, 
	{$rule}.cmsmasters_wrap_more_items.cmsmasters_loading:before,
	{$rule}.cmsmasters_header_search_form button:hover, 
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_heading_left .icon_box_heading:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap:before, 
	{$rule}.cmsmasters_quote_subtitle, 
	{$rule}.cmsmasters_post_read_more, 
	{$rule}.cmsmasters_slider_post_read_more, 
	{$rule}.cmsmasters_wrap_pagination ul li a, 
	{$rule}.cmsmasters_wrap_pagination ul li span, 
	{$rule}.cmsmasters_post_cont_info a:hover, 
	{$rule}.cmsmasters_open_project .project_details_item_desc a:hover, 
	{$rule}.cmsmasters_open_project .project_features_item_desc a:hover, 
	{$rule}.cmsmasters_open_profile .profile_details_item_desc a:hover, 
	{$rule}.cmsmasters_open_profile .profile_features_item_desc a:hover, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_cont_info a:hover, 
	{$rule}.cmsmasters_slider_post_cont_info a:hover, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title a:hover, 
	{$rule}.cmsmasters_toggles .current_toggle .cmsmasters_toggle_title a, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_price_wrap, 
	{$rule}#page .cmsmasters_social_icon:hover, 
	{$rule}.cmsmasters_open_post .cmsmasters_post_tags a:hover, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	{$rule}.bypostauthor > .comment-body .alignleft:before,
	{$rule}.widget_pages ul li a:hover, 
	{$rule}.widget_pages ul li.current_page_item a, 
	{$rule}.widget_categories ul li.current-cat a, 
	{$rule}.widget_categories ul li a:hover, 
	{$rule}.widget_meta ul li a:hover, 
	{$rule}.widget_text ul li a:hover, 
	{$rule}.widget_archive ul li a:hover, 
	{$rule}.cmsmasters_post_default .cmsmasters_post_sticky_head_wrap:before, 
	{$rule}.widget_custom_contact_info_entries > span:before, 
	{$rule}.post_nav > span:hover .cmsmasters_prev_arrow, 
	{$rule}.post_nav > span:hover .cmsmasters_next_arrow, 
	{$rule}.widget_nav_menu .menu li.current_page_item a, 
	{$rule}.widget_nav_menu .menu li.current-menu-item a, 
	{$rule}.widget_nav_menu .menu a:hover, 
	{$rule}.cmsmasters_twitter_wrap .owl-buttons > div:hover, 
	{$rule}.tweet_time:before, 
	{$rule}.error .error_subtitle span, 
	{$rule}.search_bar_wrap .search_button button:hover,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_type, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_wrap a:hover, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab a, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item:hover a, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list a:hover, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list .current_tab a, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li.current a,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li:hover a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a:hover,
	{$rule}.cmsmasters_without_title:hover .cmsmasters_post_date, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
	}

	{$rule}.cmsmasters_profile_horizontal .profile_content_wrapper .cmsmasters_img_wrap:after {
		background: -moz-linear-gradient(top,  rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0) 0%, rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0.39) 55%, rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0.5) 70%, rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 1) 100%);
		background: -webkit-linear-gradient(top,  rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0) 0%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0.39) 55%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0.5) 70%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 1) 100%);
		background: linear-gradient(to bottom,  rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0) 0%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0.39) 55%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0.5) 70%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 1) 100%);
	}
	
	{$rule}.cmsmasters_profile_horizontal .profile_content_wrapper .cmsmasters_img_wrap:before, 
	{$rule}.cmsmasters_project_grid .project_inner:before, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_inner:before, 
	{$rule}.cmsmasters_hover_slider .cmsmasters_hover_slider_thumbs a:before {
		background: -moz-linear-gradient(top, rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0) 0%, rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0.5) 50%, rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 1) 100%);
		background: -webkit-linear-gradient(top, rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0) 0%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0.5) 50%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 1) 100%);
		background: linear-gradient(to bottom, rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0) 0%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 0.5) 50%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . ", 1) 100%);
	}
	
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	" . (($scheme == 'default') ? "mark," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme} mark," : '') . "
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_header_search_form, 
	{$rule}.button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}.cmsmasters_button, 
	{$rule}.cmsmasters_table thead, 
	{$rule}.cmsmasters_post_title a:before, 
	{$rule}.cmsmasters_post_title a:after,
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_item_title a:before,
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_item_title a:after,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_title a:before, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_title a:after, 
	{$rule}.cmsmasters_slider_post_title a:before, 
	{$rule}.cmsmasters_slider_post_title a:after,
	{$rule}.cmsmasters_profile_header .cmsmasters_profile_title a:before,
	{$rule}.cmsmasters_profile_header .cmsmasters_profile_title a:after,
	{$rule}.cmsmasters_notice .notice_close:hover, 
	{$rule}.cmsmasters_toggles .current_toggle .cmsmasters_toggle_title .cmsmasters_toggle_plus span, 
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.blog.timeline .post:hover:before, 
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:after, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:after,
	{$rule}#wp-comment-cookies-consent + label:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:after, 
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus,
	{$rule}.cmsmasters_pricing_table .pricing_best .cmsmasters_pricing_item_inner, 
	{$rule}.cmsmasters_notice .notice_close:hover, 
	{$rule}.cmsmasters_table thead, 
	{$rule}textarea:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}a:hover,
	{$rule}.cmsmasters_post_date,
	{$rule}.cmsmasters_slider_post_date,
	{$rule}#page .cmsmasters_social_icon, 
	{$rule}.cmsmasters_header_search_form button, 
	{$rule}.cmsmasters_post_cont_info, 
	{$rule}.cmsmasters_post_cont_info a, 
	{$rule}.cmsmasters_slider_post_cont_info, 
	{$rule}.cmsmasters_slider_post_cont_info a, 
	{$rule}.cmsmasters_icon_wrap a:hover .cmsmasters_simple_icon,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_cont_info, 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_cont_info a, 
	{$rule}.cmsmasters_open_post .cmsmasters_post_tags, 
	{$rule}.cmsmasters_open_post .cmsmasters_post_tags a, 
	{$rule}.cmsmasters_likes a, 
	{$rule}.cmsmasters_comments a, 	
	{$rule}.comment-respond .comment-reply-title, 
	{$rule}.post_comments .post_comments_title, 
	{$rule}.about_author .about_author_title, 
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_title, 
	{$rule}.cmsmasters_pings_list h2,
	{$rule}.post_nav .sub, 
	{$rule}.cmsmasters_comment_item .cmsmasters_comment_item_date, 
	{$rule}.post_nav .cmsmasters_prev_arrow, 
	{$rule}.post_nav .cmsmasters_next_arrow, 
	{$rule}#wp-calendar tfoot td a:hover, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item:before, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item a, 
	{$rule}.cmsmasters_open_project .cmsmasters_project_date, 
	{$rule}.cmsmasters_archive_item_date,
	{$rule}.cmsmasters_open_project .project_details_item_desc a, 
	{$rule}.cmsmasters_open_project .project_features_item_desc a, 
	{$rule}.cmsmasters_twitter_wrap .owl-buttons > div,  
	{$rule}.cmsmasters_open_project .project_details_item_desc .cmsmasters_project_category, 
	{$rule}.cmsmasters_open_profile .profile_details_item_desc a, 
	{$rule}.cmsmasters_open_profile .profile_details_item_desc .cmsmasters_profile_category, 
	{$rule}.cmsmasters_open_profile .profile_features_item_desc a, 
	{$rule}.cmsmasters_open_profile .cmsmasters_profile_header .cmsmasters_profile_subtitle, 
	{$rule}.cmsmasters_profile_vertical .cmsmasters_profile_header .cmsmasters_profile_subtitle, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a:hover, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.owl-pagination .owl-page:hover, 
	{$rule}.owl-pagination .owl-page.active, 
	{$rule}.blog.timeline .post:before, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap:before, 
	" . (($scheme == 'default') ? "#slide_top:hover" : '') . " {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_hover']) . "
	}
	
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	" . (($scheme == 'default') ? ".headline_outer a:hover," : '') . "
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}fieldset legend,
	{$rule}blockquote footer,
	{$rule}table caption,
	{$rule}.img_placeholder_small, 
	{$rule}.button:hover,
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.cmsmasters_button:hover, 
	{$rule}.owl-buttons > div:hover, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_title_counter_wrap, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title, 
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_quote_content, 
	{$rule}.cmsmasters_post_read_more:hover, 
	{$rule}.post_nav a,
	{$rule}.post_nav a:hover,
	{$rule}.share_posts a:hover,
	{$rule}#wp-calendar caption, 
	{$rule}#wp-calendar tfoot td a, 
	{$rule}.widget_nav_menu .menu a, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list a, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_wrap a.widget_tab_title, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_wrap a.widget_tab_title:hover, 
	{$rule}.cmsmasters_open_project .project_details_item_title, 
	{$rule}.cmsmasters_open_project .project_features_item_title, 
	{$rule}.cmsmasters_open_profile .profile_details_item_title, 
	{$rule}.cmsmasters_open_profile .profile_features_item_title, 
	{$rule}.cmsmasters_comment_item .cmsmasters_comment_item_content a:hover,
	{$rule}.cmsmasters_slider_post_read_more:hover, 
	{$rule}.widget_tag_cloud a:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li a:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li a:hover span, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current, 
	{$rule}.cmsmasters-form-builder .form_info > label, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title a, 
	{$rule}.share_posts .share_posts_title, 
	{$rule}.widget_recent_comments ul li, 
	{$rule}.widget_recent_entries .post-date, 
	{$rule}.search_bar_wrap .search_button button, 
	{$rule}.widget_custom_twitter_entries .tweet_time, 
	{$rule}.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content,  
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_heading']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}.cmsmasters_post_read_more:before, 
	{$rule}.cmsmasters_post_read_more:after, 	
	{$rule}.cmsmasters_slider_post_read_more:before, 
	{$rule}.cmsmasters_slider_post_read_more:after, 
	{$rule}.share_posts a:after, 
	{$rule}.share_posts a:before, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .widget_tab_title:before, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .widget_tab_title:after, 
	{$rule}.cmsmasters_comment_item .cmsmasters_comment_item_content a:before,
	{$rule}.cmsmasters_comment_item .cmsmasters_comment_item_content a:after,
	{$rule}.cmsmasters_wrap_pagination .page-numbers:before, 
	{$rule}.cmsmasters_wrap_pagination .page-numbers:after,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_plus span, 
	{$rule}.cmsmasters_icon_list_items .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}form .formError .formErrorContent {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_heading']) . "
	}
	
 
	
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}mark,
	{$rule}.button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}.cmsmasters_button, 
	{$rule}.cmsmasters_notice .notice_close:hover:before, 
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close,
	{$rule}.enable_header_side .mid_nav_wrap .cmsmasters_close_nav,
	{$rule}.cmsmasters_table thead th,
	{$rule}.cmsmasters_project_grid .cmsmasters_project_grid_content_wrap *,
	{$rule}.cmsmasters_project_grid .cmsmasters_project_grid_content_wrap *:hover,
	{$rule}.cmsmasters_slider_project_content_wrap *,
	{$rule}.cmsmasters_slider_project_content_wrap *:hover,
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_img_wrap + .profile_inner .cmsmasters_profile_title a,
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_img_wrap + .profile_inner .cmsmasters_profile_title a:hover,
	{$rule}.cmsmasters_project_grid .cmsmasters_project_cont_info a:hover, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_cont_info a:hover, 
	{$rule}.headline_outer .headline_text .entry-title, 
	{$rule}#page .cmsmasters_profile_horizontal .cmsmasters_img_wrap + .profile_inner .profile_social_icons_list a, 
	{$rule}.headline_outer .cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a:hover, 
	{$rule}.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.headline_outer .cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a, 
	{$rule}.headline_outer .cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner, 
	{$rule}.cmsmasters_project_grid .cmsmasters_project_cont_info a, 
	{$rule}#page .cmsmasters_profile_horizontal .cmsmasters_img_wrap + .profile_inner .profile_social_icons_list a:hover, 
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_img_wrap + .profile_inner .cmsmasters_profile_header .cmsmasters_profile_subtitle, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_cont_info a {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . ", 0.6);
	}
	
	{$rule}.cmsmasters_header_search_form input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form input::-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form input:-ms-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	{$rule}option,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_header .cmsmasters_project_title, 
	{$rule}.cmsmasters_profile_vertical .cmsmasters_profile_header .cmsmasters_profile_subtitle, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_title a:before, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_title a:after, 
	{$rule}.cmsmasters_img_wrap + .profile_inner .cmsmasters_profile_title a:before, 
	{$rule}.cmsmasters_img_wrap + .profile_inner .cmsmasters_profile_title a:after, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_comments > a:before, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_comments > a span, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_likes > a:before, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_likes > a span, 
	{$rule}.cmsmasters_project_grid .cmsmasters_project_title a:before, 
	{$rule}.cmsmasters_project_grid .cmsmasters_project_title a:after, 
	{$rule}.cmsmasters_wrap_portfolio  .cmsmasters_project_comments > a:before, 
	{$rule}.cmsmasters_wrap_portfolio  .cmsmasters_project_comments > a span, 
	{$rule}.cmsmasters_wrap_portfolio  .cmsmasters_project_likes > a:before, 
	{$rule}.cmsmasters_wrap_portfolio  .cmsmasters_project_likes > a span {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon_wrap, 
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}select,
	{$rule}fieldset,
	{$rule}fieldset legend,
	{$rule}.img_placeholder,
	{$rule}.img_placeholder_small, 
	{$rule}.cmsmasters_featured_block,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon,
	{$rule}.gallery-item .gallery-icon,
	{$rule}.gallery-item .gallery-caption,
	{$rule}.cmsmasters_table tfoot, 
	{$rule}.cmsmasters_img.with_caption, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}#wp-comment-cookies-consent + label:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.button:hover, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}button:hover, 
	{$rule}.widget_pages ul li:before, 
	{$rule}.widget_categories ul li:before, 
	{$rule}.widget_meta ul li:before, 
	{$rule}.widget_text ul li:before, 
	{$rule}.widget_archive ul li:before, 
	{$rule}ul > li:before, 
	{$rule}.cmsmasters_button:hover, 
	{$rule}.blog.timeline:before, 
	{$rule}.owl-pagination .owl-page, 
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item:before, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_border']) . "
	}
	
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_info, 
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}option,
	{$rule}hr,
	{$rule}select,
	{$rule}.post_nav > span.cmsmasters_next_post,
	{$rule}.cmsmasters_divider,
	{$rule}#comments .cmsmasters_comment_item,
	{$rule}.cmsmasters_notice,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_widget_divider,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.cmsmasters_table tbody, 
	{$rule}.cmsmasters_table tfoot, 
	{$rule}.cmsmasters_open_project .project_details_item, 
	{$rule}.cmsmasters_open_project .project_features_item, 
	{$rule}.cmsmasters_open_profile .profile_details_item, 
	{$rule}.cmsmasters_open_profile .profile_features_item, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item_inner, 
	{$rule}.cmsmasters_icon_wrap .cmsmasters_simple_icon, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title a, 
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:after, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}#wp-comment-cookies-consent + label:before {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
	
	/* Start Custom Rules */
	{$rule}::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_hover']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_hover']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . ";
	}
	";
	
	
	if ($scheme != 'default') {
		$custom_css .= "
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_top_zigzag:before, 
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_bot_zigzag:after {
			background-image: -webkit-linear-gradient(135deg, " . $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-webkit-linear-gradient(45deg, " . $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -moz-linear-gradient(135deg, " . $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-moz-linear-gradient(45deg, " . $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -ms-linear-gradient(135deg, " . $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-ms-linear-gradient(45deg, " . $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -o-linear-gradient(135deg, " . $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-o-linear-gradient(45deg, " . $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: linear-gradient(315deg, " . $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					linear-gradient(45deg, " . $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
		}
		";
	}
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_bd_underline {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bd_underline:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, 
	{$rule}.cmsmasters_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['see-my-cv' . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return apply_filters('see_my_cv_theme_colors_primary_filter', $custom_css);
}

