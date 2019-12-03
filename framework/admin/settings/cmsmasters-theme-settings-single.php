<?php 
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version		1.0.6
 * 
 * Admin Panel Post, Project, Profile Settings
 * Created by CMSMasters
 * 
 */


function see_my_cv_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'see-my-cv');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'see-my-cv');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'see-my-cv');
	}
	
	
	return apply_filters('cmsmasters_options_single_tabs_filter', $tabs);
}


function see_my_cv_options_single_sections() {
	$tab = see_my_cv_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'see-my-cv');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'see-my-cv');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'see-my-cv');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_sections_filter', $sections, $tab);
} 


function see_my_cv_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = see_my_cv_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = see_my_cv_settings_single_defaults();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_post_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'see-my-cv') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_post_date'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_post_author'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_post_tag'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_post_nav_order_cat', 
			'title' => esc_html__('Posts Navigation Order by Category', 'see-my-cv'), 
			'desc' => esc_html__('enable', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_post_nav_order_cat'] 
		);
		
		if (class_exists('Cmsmasters_Content_Composer')) {
			$options[] = array( 
				'section' => 'post_section', 
				'id' => 'see-my-cv' . '_blog_post_share_box', 
				'title' => esc_html__('Sharing Box', 'see-my-cv'), 
				'desc' => esc_html__('show', 'see-my-cv'), 
				'type' => 'checkbox', 
				'std' => $defaults[$tab]['see-my-cv' . '_blog_post_share_box'] 
			);
		}
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_post_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_more_posts_box'], 
			'choices' => array( 
				esc_html__('Show Related Posts', 'see-my-cv') . '|related', 
				esc_html__('Show Popular Posts', 'see-my-cv') . '|popular', 
				esc_html__('Show Recent Posts', 'see-my-cv') . '|recent', 
				esc_html__('Hide More Posts Box', 'see-my-cv') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'see-my-cv'), 
			'desc' => esc_html__('posts', 'see-my-cv'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'see-my-cv' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'see-my-cv'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'see-my-cv'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['see-my-cv' . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_title'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'see-my-cv'), 
			'desc' => esc_html__('Enter a project details block title', 'see-my-cv'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_date'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_author'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_comment'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_tag'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_like'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_link'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_nav_order_cat', 
			'title' => esc_html__('Projects Navigation Order by Category', 'see-my-cv'), 
			'desc' => esc_html__('enable', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'see-my-cv'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_more_projects_box'], 
			'choices' => array( 
				esc_html__('Show Related Projects', 'see-my-cv') . '|related', 
				esc_html__('Show Popular Projects', 'see-my-cv') . '|popular', 
				esc_html__('Show Recent Projects', 'see-my-cv') . '|recent', 
				esc_html__('Hide More Projects Box', 'see-my-cv') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'see-my-cv'), 
			'desc' => esc_html__('projects', 'see-my-cv'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'see-my-cv'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'see-my-cv'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'see-my-cv'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'see-my-cv'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_project_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'see-my-cv'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'see-my-cv'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_pj_categs_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'see-my-cv' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'see-my-cv'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'see-my-cv'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_portfolio_pj_tags_slug'], 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'see-my-cv' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_profile_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'see-my-cv' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'see-my-cv'), 
			'desc' => esc_html__('Enter a profile details block title', 'see-my-cv'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_profile_post_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'see-my-cv' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_profile_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'see-my-cv' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_profile_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'see-my-cv' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_profile_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'see-my-cv' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_profile_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'see-my-cv' . '_profile_post_nav_order_cat', 
			'title' => esc_html__('Profiles Navigation Order by Category', 'see-my-cv'), 
			'desc' => esc_html__('enable', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_profile_post_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'see-my-cv' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'see-my-cv'), 
			'desc' => esc_html__('show', 'see-my-cv'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['see-my-cv' . '_profile_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'see-my-cv' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'see-my-cv'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'see-my-cv'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_profile_post_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'see-my-cv' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'see-my-cv'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'see-my-cv'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['see-my-cv' . '_profile_pl_categs_slug'], 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_fields_filter', $options, $tab);
}

