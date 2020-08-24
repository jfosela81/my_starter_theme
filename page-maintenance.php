<?php
/**
 * Template Name: Template Maintenance
 * Created by PhpStorm.
 * User: imove
 * Date: 31/8/17
 * Time: 14:06
 */

get_header( 'maintenance' );

if ( have_posts() ) {
    
    the_post();
    
    ?>

    <div style="background-image:url('<?=get_the_post_thumbnail_url('full')?>'); background-size:contain; background-position:center; height:100vh; background-repeat:no-repeat;">
    </div>

    <?php

}

get_footer( 'maintenance' );