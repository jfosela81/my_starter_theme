<?php
/**
 * Template Name: Homepage
 */

get_header(); 

if ( have_posts() ) {

	?>
	<div id="primary" class="content-area homepage">
		<?php echo the_content(); ?>
	</div><!-- .content-area -->
	<?php 

}

get_footer();
