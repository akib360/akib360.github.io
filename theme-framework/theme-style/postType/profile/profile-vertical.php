<?php
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version		1.0.0
 * 
 * Profile Vertical Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

?>
<!-- Start Profile Vertical Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_profile_vertical'); ?>>
	<div class="profile_outer">
	<?php
	echo '<div class="profile_content_wrapper">';
	
		if (has_post_thumbnail()) {
			see_my_cv_thumb(get_the_ID(), 'cmsmasters-square-thumb', true, false, false, false, false);
		}
		
		see_my_cv_profile_heading(get_the_ID(), 'h3', $cmsmasters_profile_subtitle, 'h5');
	
	echo '</div>' . 
		'<div class="profile_inner">' . 
			'<div class="profile_heading_wrapper">';
			
				see_my_cv_profile_heading(get_the_ID(), 'h3', $cmsmasters_profile_subtitle, 'h5');
				
				see_my_cv_profile_social_icons($cmsmasters_profile_social, $profile_id);
				
			echo '</div>';
		
		see_my_cv_profile_exc_cont();
		
	echo '</div>';
	?>
	</div>
</article>
<!-- Finish Profile Vertical Article  -->

