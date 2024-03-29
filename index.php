<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); 

if ( have_posts() ) {

	?>
	<div id="primary" class="content-area">
		<?php echo the_content(); ?>
	</div><!-- .content-area -->
	<?php 

}

get_footer();
