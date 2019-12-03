<?php 
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version		1.0.0
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function see_my_cv_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'see-my-cv');
	$tabs['export'] = esc_attr__('Export', 'see-my-cv');
	
	
	return $tabs;
}


function see_my_cv_options_demo_sections() {
	$tab = see_my_cv_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'see-my-cv');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'see-my-cv');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function see_my_cv_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = see_my_cv_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => 'see-my-cv' . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'see-my-cv'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'see-my-cv') . (CMSMASTERS_THEME_STYLE_COMPATIBILITY ? '<span class="descr_note">' . esc_html__("Please note that when importing theme settings, these settings will be applied to the appropriate Theme Style (with the same name).", 'see-my-cv') . '<br />' . esc_html__("To see these settings applied, please enable appropriate", 'see-my-cv') . ' <a href="' . esc_url(admin_url('admin.php?page=cmsmasters-settings&tab=theme_style')) . '">' . esc_html__("Theme Style", 'see-my-cv') . '</a>.</span>' : ''), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => 'see-my-cv' . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'see-my-cv'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file.", 'see-my-cv') . (CMSMASTERS_THEME_STYLE_COMPATIBILITY ? '<span class="descr_note">' . esc_html__("Please note, that when exporting theme settings, you will export settings for the currently active Theme Style.", 'see-my-cv') . '<br />' . esc_html__("Theme Style can be set", 'see-my-cv') . ' <a href="' . esc_url(admin_url('admin.php?page=cmsmasters-settings&tab=theme_style')) . '">' . esc_html__("here", 'see-my-cv') . '</a>.</span>' : ''), 
			'type' => 'button', 
			'std' => esc_html__('Export Theme Settings', 'see-my-cv'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

