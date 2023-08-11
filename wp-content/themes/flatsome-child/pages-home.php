<?php
/*
Template name: Page - Home Page
*/
get_header(); ?>

<?php do_action( 'flatsome_before_page' ); ?>

<div id="content" role="main" class="content-area">
    <?php 
        get_template_part( 'layouts/slider');
        get_template_part( 'layouts/project');
        get_template_part( 'layouts/activity');
        get_template_part( 'layouts/brand');
    ?>
</div>

<?php do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>
