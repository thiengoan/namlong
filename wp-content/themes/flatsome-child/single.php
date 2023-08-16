<?php
get_header();
?>
<div class="breadcrumb">
    <div class="container">
        <?php sb_view_breadcrumb(); ?>
    </div>
</div>
<div class="page-wrapper page-right-sidebar">
    <div class="container">
        <div class="row">
            <div id="content" class="large-8 left col-12 col-divided" role="main">
                <div class="page-inner">
                    <h3 class="entry-title uppercase"><?php the_title(); ?></h3>
                    <div class="post-meta">
                        <span class="meta-date"><i class="fa fa-calculator"></i><?php echo get_the_date(); ?></span>
                    </div>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; // end of the loop. ?>
                </div>
            </div>

            <div class="large-4 col-12">
                <?php get_template_part( 'layouts/sidebar'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
