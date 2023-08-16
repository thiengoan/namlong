<?php
get_header(); 

$term = get_queried_object();

if($term->slug == 'du-an'){
    $args = [
        'post_type'              => 'du-an',
        'order' => 'asc'
    ];
}else{
    $args = array(
        'posts_per_page' => 50,
        'category_name' => $term->slug 
    );
}

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
            <div id="content" class="large-8 left col-12 col-divided" role="main">
                <h3 class="uppercase title-main"><?php echo $term->name; ?></h3>
                <section class="activity" style="background-color: unset">
                    <div class="container">
                        <div class="row">
                            <?php
                                if ( $wp_query->have_posts() ) :
                                    while ( $wp_query->have_posts() ) :
                                        $wp_query->the_post();
                                        ?>
                                        <div class="col-6">
                                            <div class="item">
                                                <div class="box-image">
                                                    <a href="<?php echo get_permalink() ?>" alt="<?php the_title() ?>">
                                                        <?php echo get_the_post_thumbnail($wp_query->ID(), 'medium'); ?>
                                                    </a>
                                                </div>
                                                <div class="box-text">
                                                    <a href="<?php echo get_permalink() ?>" alt="<?php the_title() ?>">
                                                        <?php the_title('<h3>','</h3>'); ?>
                                                    </a>
                                                </div>
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
            <div class="large-4 col-12">
                <?php get_template_part( 'layouts/sidebar'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
