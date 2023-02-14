<?php
/**
 * 
 */

define( 'MCS_THEME_PATH', get_stylesheet_directory() );

add_action( 'init', 'mcs_register_blocks' );
function mcs_register_blocks() {

	register_block_type( MCS_THEME_PATH . '/blocks/accordion/block.json' );

}
