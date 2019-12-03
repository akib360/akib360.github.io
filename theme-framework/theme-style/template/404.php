<?php
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version 	1.0.0
 * 
 * 404 Error Page Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = see_my_cv_get_global_options();

?>

</div>

<!--  Start Content  -->
<div class="entry">
	<div class="error">
		<div class="error_bg">
			<div class="error_inner">
				<h1 class="error_title"><?php echo esc_html__('Oops!', 'see-my-cv'); ?></h1>
				<h2 class="error_subtitle"><span><?php echo esc_html__("404", 'see-my-cv'); ?></span><?php echo esc_html__("Error", 'see-my-cv'); ?></h2>
			</div>
			<div class="error_cont">
				<?php 
				if ($cmsmasters_option['see-my-cv' . '_error_search']) { 
					get_search_form(); 
				}
				
				
				if ($cmsmasters_option['see-my-cv' . '_error_sitemap_button'] && $cmsmasters_option['see-my-cv' . '_error_sitemap_link'] != '') {
					echo '<div class="error_button_wrap"><a href="' . esc_url($cmsmasters_option['see-my-cv' . '_error_sitemap_link']) . '" class="button">' . esc_html__('Sitemap', 'see-my-cv') . '</a></div>';
				}
				?>
			</div>
		</div>
	</div>
</div>
<div class="content_wrap fullwidth">
<!--  Finish Content  -->