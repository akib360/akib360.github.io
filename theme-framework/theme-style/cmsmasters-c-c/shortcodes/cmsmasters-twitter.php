<?php
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version		1.0.0
 * 
 * Content Composer Twitter Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$out = '';


$unique_id = $shortcode_id;


if ($user != '') {
	$autoplay = ($autoplay != 'true' ? 'false' : ((int) $speed * 1000));
	$control = ($control == 'true' ? 'true' : 'false');
	
	$out .= '<div class="cmsmasters_twitter_wrap' . (($classes != '') ? ' ' . esc_attr($classes) : '') . '"' . 
		(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
		(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
	'>' . 
		"<div" . 
			" id=\"cmsmasters_twitter_" . esc_attr($unique_id) . "\"" . 
			" class=\"cmsmasters_owl_slider owl-carousel cmsmasters_twitter\"" . 
			" data-auto-play=\"" . esc_attr($autoplay) . "\"" . 
			" data-transition-style=\"fade\"" . 
			" data-pagination=\"" . esc_attr($control) . "\"" . 
			" data-navigation=\"" . esc_attr($control) . "\"" . 
		">";
			
			$tweets = cmsmasters_get_tweets($user, $count);
			
			if ($tweets != '') {
				foreach ($tweets as $t) {
					$out .= '<div class="cmsmasters_twitter_item cmsmasters_owl_slider_item">' . "\n" . 
						'<span class="cmsmasters_twitter_item_content">' . "\n" . $t['text'] . '</span>' . "\n" . 
						(($date == 'true') ? '<abbr class="tweet_time cmsmasters_theme_icon_user_twitter" class="published">' . human_time_diff( $t['time'], current_time('timestamp') ) . ' ' . esc_html__('ago', 'see-my-cv') . '</abbr>' : '') . 
					'</div>' . "\n";
				}
			} else {
				echo '<div class="cmsmasters_notice cmsmasters_notice_error cmsmasters_theme_icon_cancel">' . "\n" . 
					'<div class="notice_content">' . "\n" . 
						'<p>' . esc_html__('Please add your Twitter API keys', 'see-my-cv') . ', ' . '<a target="_blank" href="http://docs.cmsmasters.net/admin2/twitter-functionality/">' . esc_html__('read more how', 'see-my-cv') . '</a></p>' . "\n" . 
					'</div>' . "\n" . 
				'</div>' . "\n";
			}
			
		$out .= '</div>' . 
	'</div>';
}


print $out;

