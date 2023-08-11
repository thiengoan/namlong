<?php
get_header(); 

$term = get_queried_object();
$args = array(
    'posts_per_page' => 50,
    'post_type' => $term->slug  
 );
$wp_query = new WP_Query( $args );
?>
<div class="breadcrumb">
    <div class="container">
        <?php sb_view_breadcrumb(); ?>
    </div>
</div>

<div class="page-wrapper page-right-sidebar">
    <div class="container">
        <div class="row">
            <div id="content" class="large-8 left col col-divided" role="main">
                <section class="news">
                    <div class="container">
                        <div class="row">
                            <?php
                                if ( $wp_query->have_posts() ) :
                                    while ( $wp_query->have_posts() ) :
                                        $wp_query->the_post();
                                        ?>
                                        <div class="col-3">
                                            <div class="item">
                                                <a href="<?php echo get_permalink() ?>" alt="<?php the_title() ?>">
                                                    <?php echo get_the_post_thumbnail($wp_query->ID(), 'medium'); ?>
                                                    <?php the_title('<h4 class="title-news">','</h4>'); ?>
                                                    <?php the_excerpt() ?>
                                                </a>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </section>
            </div>
            <div class="large-4 col">
                <?php get_template_part( 'layouts/sidebar'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
