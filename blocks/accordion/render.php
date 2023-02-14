<?php
/**
 * Renders the accordion block
 */

$accordion_title       = get_field( 'accordion_title' ) ? get_field( 'accordion_title' ) : 'Inserta título';
$accordion_description = get_field( 'accordion_description' ) ? get_field( 'accordion_description' ) : 'Inserta descripción';
$block_id              = $block['id'];
?>

<div class="accordion-block" id="<?php echo esc_attr( $block_id ); ?>">

	<div class="icon-wrapper">
		<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/icon-plus.svg'); ?>"
				 class="open-icon toggle-accordion" data-target="<?php echo esc_attr( $block_id ); ?>" />
		<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/icon-minus.svg'); ?>"
				 class="close-icon toggle-accordion" data-target="<?php echo esc_attr( $block_id ); ?>" />
	</div> <!-- .icon-wrapper -->

	<div class="content-wrapper">
		<p class="accordion-title toggle-accordion" data-target="<?php echo esc_attr( $block_id ); ?>">
			<?php echo esc_html( $accordion_title ); ?>
		</p>
		<p class="accordion-description"><?php echo esc_html( $accordion_description ); ?></p>
	</div> <!-- .content-wrapper -->

</div> <!-- .accordion-block -->