<?php
/**
 * @package 	WordPress
 * @subpackage 	See My CV
 * @version		1.0.0
 * 
 * Posts Slider Post Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);


$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && see_my_cv_slider_post_check_exc_cont('post')) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;


$cmsmasters_post_format = get_post_format();

?>
<!-- Start Posts Slider Post Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_post'); ?>>
	<div class="cmsmasters_slider_post_outer">
	<?php
		echo '<div class="cmsmasters_slider_post_content_wrapper">';
			
			if ($date || $likes || $comments) {
				echo '<div class="cmsmasters_slider_post_content_wrapper_inner">';
			
					$date ? see_my_cv_get_slider_post_date('post') : '';
					
					$likes ? see_my_cv_slider_post_like('post') : '';
					
					$comments ? see_my_cv_get_slider_post_comments('post') : '';
				
				echo '</div>';
			}
		
			see_my_cv_thumb_rollover(get_the_ID(), 'cmsmasters-project-thumb', false, false, false, false, false, false, false, false, true, false, false);
		
		echo '</div>';
		
		
		if ($title || $author || $categories || $excerpt || $more) {
			echo '<div class="cmsmasters_slider_post_inner">';
				
				$title ? see_my_cv_slider_post_heading(get_the_ID(), 'post', 'h4') : '';
				
				
				if ($author || $categories) {
					echo '<div class="cmsmasters_slider_post_cont_info entry-meta">';
						
						$categories ? see_my_cv_get_slider_post_category(get_the_ID(), 'category', 'post') : '';
						
						if ($author && $categories) {
							echo '<span class="cmsmasters_slider_post_cont_info_divider">/</span>';
						}
						
						$author ? see_my_cv_get_slider_post_author('post') : '';
						
					echo '</div>';
				}
				
				
				$excerpt ? see_my_cv_slider_post_exc_cont('post') : '';
				
				
				if ($more) {
					echo '<footer class="cmsmasters_slider_post_footer entry-meta">';
						
						$more ? see_my_cv_slider_post_more(get_the_ID()) : '';
						
					echo '</footer>';
				}
				
			echo '</div>';
		}
	?>
	</div>
</article>
<!-- Finish Posts Slider Post Article  -->

