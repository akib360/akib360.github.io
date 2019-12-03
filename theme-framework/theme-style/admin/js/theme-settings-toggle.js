/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version		1.0.0
 * 
 * Theme Admin Settings Toggles Scripts
 * Created by CMSMasters
 * 
 */


(function ($) { 
	"use strict";
	
	/* Hide Theme Layout Option */
	$('input[name*="' + cmsmasters_theme_settings.shortname + '_theme_layout"]').parents('tr').hide();
	
	
	
	/* General 'Header' Tab Fields Load */
	$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]').parents('tr').hide();
	$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
	$('#' + cmsmasters_theme_settings.shortname + '_header_bot_height').parents('tr').hide();
	
	
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'side') {
		$('#' + cmsmasters_theme_settings.shortname + '_fixed_header').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_overlaps').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_mid_height').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_top_line').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_top_height').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_top_line_short_info').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_side_width').parents('tr').show();
		$('#' + cmsmasters_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
		$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_top_line_add_cont"]').parents('tr').hide();
	} else if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
		$('#' + cmsmasters_theme_settings.shortname + '_fixed_header').parents('tr').show();
		$('#' + cmsmasters_theme_settings.shortname + '_header_overlaps').parents('tr').show();
		$('#' + cmsmasters_theme_settings.shortname + '_header_mid_height').parents('tr').show();
		$('#' + cmsmasters_theme_settings.shortname + '_header_top_line').parents('tr').show();
		$('#' + cmsmasters_theme_settings.shortname + '_header_side_width').parents('tr').hide();
		
		if ($('#' + cmsmasters_theme_settings.shortname + '_header_top_line').is(':checked')) {
			$('#' + cmsmasters_theme_settings.shortname + '_header_top_height').parents('tr').show();
			$('#' + cmsmasters_theme_settings.shortname + '_header_top_line_short_info').parents('tr').show();
			$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_top_line_add_cont"]').parents('tr').show();
		} else {
			$('#' + cmsmasters_theme_settings.shortname + '_header_top_height').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_top_line_short_info').parents('tr').hide();
			$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_top_line_add_cont"]').parents('tr').hide();
		}
	}
	
	
	/* General 'Header' Tab Fields Change */
	$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]').on('change', function () {
		$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_bot_height').parents('tr').hide();
		
		if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'side') {
			$('#' + cmsmasters_theme_settings.shortname + '_fixed_header').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_overlaps').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_mid_height').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_top_line').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_top_height').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_top_line_short_info').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_side_width').parents('tr').show();
			$('#' + cmsmasters_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
			$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_top_line_add_cont"]').parents('tr').hide();
		} else if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
			$('#' + cmsmasters_theme_settings.shortname + '_fixed_header').parents('tr').show();
			$('#' + cmsmasters_theme_settings.shortname + '_header_overlaps').parents('tr').show();
			$('#' + cmsmasters_theme_settings.shortname + '_header_mid_height').parents('tr').show();
			$('#' + cmsmasters_theme_settings.shortname + '_header_top_line').parents('tr').show();
			$('#' + cmsmasters_theme_settings.shortname + '_header_side_width').parents('tr').hide();
			
			if ($('#' + cmsmasters_theme_settings.shortname + '_header_top_line').is(':checked')) {
				$('#' + cmsmasters_theme_settings.shortname + '_header_top_height').parents('tr').show();
				$('#' + cmsmasters_theme_settings.shortname + '_header_top_line_short_info').parents('tr').show();
				$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_top_line_add_cont"]').parents('tr').show();
			} else {
				$('#' + cmsmasters_theme_settings.shortname + '_header_top_height').parents('tr').hide();
				$('#' + cmsmasters_theme_settings.shortname + '_header_top_line_short_info').parents('tr').hide();
				$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_top_line_add_cont"]').parents('tr').hide();
			}
		}
	} );
} )(jQuery);

