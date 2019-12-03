<?php 
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version 	1.0.0
 * 
 * Profile Options Functions
 * Created by CMSMasters
 * 
 */


if (!function_exists('see_my_cv_get_custom_profile_meta_fields')) {
function see_my_cv_get_custom_profile_meta_fields() {
	$cmsmasters_option = see_my_cv_get_global_options();
	
	
	$cmsmasters_global_bottom_sidebar = (isset($cmsmasters_option['see-my-cv' . '_bottom_sidebar']) && $cmsmasters_option['see-my-cv' . '_bottom_sidebar'] !== '') ? (($cmsmasters_option['see-my-cv' . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_bottom_sidebar_layout = (isset($cmsmasters_option['see-my-cv' . '_bottom_sidebar_layout'])) ? $cmsmasters_option['see-my-cv' . '_bottom_sidebar_layout'] : '14141414';
	
	$cmsmasters_global_profile_post_title = (isset($cmsmasters_option['see-my-cv' . '_profile_post_title']) && $cmsmasters_option['see-my-cv' . '_profile_post_title'] !== '') ? (($cmsmasters_option['see-my-cv' . '_profile_post_title'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_profile_post_details_title = (isset($cmsmasters_option['see-my-cv' . '_profile_post_details_title']) && $cmsmasters_option['see-my-cv' . '_profile_post_details_title'] !== '') ? $cmsmasters_option['see-my-cv' . '_profile_post_details_title'] : '';
	
	$cmsmasters_global_profile_post_share_box = (isset($cmsmasters_option['see-my-cv' . '_profile_post_share_box']) && $cmsmasters_option['see-my-cv' . '_profile_post_share_box'] !== '') ? (($cmsmasters_option['see-my-cv' . '_profile_post_share_box'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_bg = (isset($cmsmasters_option['see-my-cv' . '_theme_layout']) && $cmsmasters_option['see-my-cv' . '_theme_layout'] === 'boxed') ? true : false;
	
	
	$cmsmasters_option_name = 'cmsmasters_profile_';
	
	
	$tabs_array = array();
	
	
	$tabs_array['cmsmasters_profile'] = array( 
		'label' => esc_html__('Profile', 'see-my-cv'), 
		'value'	=> 'cmsmasters_profile' 
	);
	
	
	$tabs_array['cmsmasters_layout'] = array( 
		'label' => esc_html__('Layout', 'see-my-cv'), 
		'value'	=> 'cmsmasters_layout' 
	);
	
	
	if ($cmsmasters_global_bg) {
		$tabs_array['cmsmasters_bg'] = array( 
			'label' => esc_html__('Background', 'see-my-cv'), 
			'value'	=> 'cmsmasters_bg' 
		);
	}
	
	
	$tabs_array['cmsmasters_heading'] = array( 
		'label' => esc_html__('Heading', 'see-my-cv'), 
		'value'	=> 'cmsmasters_heading' 
	);
	
	
	$custom_profile_meta_fields = array( 
		array( 
			'id'	=> $cmsmasters_option_name . 'tabs', 
			'type'	=> 'tabs', 
			'std'	=> 'cmsmasters_profile', 
			'options' => $tabs_array 
		), 
		array( 
			'id'	=> 'cmsmasters_profile', 
			'type'	=> 'tab_start', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> esc_html__('Profile Title', 'see-my-cv'), 
			'desc'	=> esc_html__('Show', 'see-my-cv'), 
			'id'	=> $cmsmasters_option_name . 'title', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_profile_post_title 
		), 
		array( 
			'label'	=> esc_html__('Subtitle', 'see-my-cv'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'subtitle', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Profile Details Title', 'see-my-cv'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'details_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_profile_post_details_title 
		), 
		array( 
			'label'	=> esc_html__('Social Icons', 'see-my-cv'), 
			'desc'	=> esc_html__('Add social icons for this profile', 'see-my-cv'), 
			'id'	=> $cmsmasters_option_name . 'social', 
			'type'	=> 'social', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Profile Info', 'see-my-cv'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'features', 
			'type'	=> 'repeatable_multiple', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Profile Features 1 Title', 'see-my-cv'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'features_one_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Profile Features 1', 'see-my-cv'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'features_one', 
			'type'	=> 'repeatable_multiple', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Profile Features 2 Title', 'see-my-cv'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'features_two_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Profile Features 2', 'see-my-cv'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'features_two', 
			'type'	=> 'repeatable_multiple', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Profile Features 3 Title', 'see-my-cv'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'features_three_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Profile Features 3', 'see-my-cv'), 
			'desc'	=> '', 
			'id'	=> $cmsmasters_option_name . 'features_three', 
			'type'	=> 'repeatable_multiple', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Sharing Box', 'see-my-cv'), 
			'desc'	=> esc_html__('Show', 'see-my-cv'), 
			'id'	=> $cmsmasters_option_name . 'sharing_box', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_profile_post_share_box 
		), 
		array( 
			'id'	=> 'cmsmasters_profile', 
			'type'	=> 'tab_finish' 
		), 
		array( 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Page Color Scheme', 'see-my-cv'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_page_scheme', 
			'type'	=> 'select_scheme', 
			'hide'	=> 'false', 
			'std'	=> 'default' 
		), 
		array( 
			'label'	=> esc_html__('Bottom Sidebar', 'see-my-cv'), 
			'desc'	=> esc_html__('Show', 'see-my-cv'), 
			'id'	=> 'cmsmasters_bottom_sidebar', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_bottom_sidebar 
		), 
		array( 
			'label'	=> esc_html__('Choose Bottom Sidebar', 'see-my-cv'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bottom_sidebar_id', 
			'type'	=> 'select_sidebar', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Choose Bottom Sidebar Layout', 'see-my-cv'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bottom_sidebar_layout', 
			'type'	=> 'select', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_bottom_sidebar_layout, 
			'options' => array( 
				'11' => array( 
					'label' => '1/1',
					'value'	=> '11' 
				), 
				'1212' => array( 
					'label' => '1/2 + 1/2',
					'value'	=> '1212' 
				), 
				'1323' => array( 
					'label' => '1/3 + 2/3',
					'value'	=> '1323' 
				), 
				'2313' => array( 
					'label' => '2/3 + 1/3',
					'value'	=> '2313' 
				), 
				'1434' => array( 
					'label' => '1/4 + 3/4',
					'value'	=> '1434' 
				), 
				'3414' => array( 
					'label' => '3/4 + 1/4',
					'value'	=> '3414' 
				), 
				'131313' => array( 
					'label' => '1/3 + 1/3 + 1/3',
					'value'	=> '131313' 
				), 
				'121414' => array( 
					'label' => '1/2 + 1/4 + 1/4',
					'value'	=> '121414' 
				), 
				'141214' => array( 
					'label' => '1/4 + 1/2 + 1/4',
					'value'	=> '141214' 
				), 
				'141412' => array( 
					'label' => '1/4 + 1/4 + 1/2',
					'value'	=> '141412' 
				), 
				'14141414' => array( 
					'label' => '1/4 + 1/4 + 1/4 + 1/4',
					'value'	=> '14141414' 
				) 
			) 
		), 
		array( 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'tab_finish' 
		) 
	);
	
	
	return $custom_profile_meta_fields;
}
}

