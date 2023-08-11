<?php
$args = [
   'post_type'              => 'slider',
   'order' => 'asc'
];

$slider = new \WP_Query( $args );

$args = [
    'post_type'              => 'tin-tuc',
    'order' => 'asc'
 ];
 
$news = new \WP_Query( $args );
?>
<div class="row">
    <div class="col-lg-4 col-12">
        <h3 class="uppercase">Tin tức nổi bật</h3>
        <section class="news">
        <?php
            if ( $news->have_posts() ) :
                while ( $news->have_posts() ) :
                    $news->the_post();
                    ?>
                    <div class="item">
                        <a href="<?php echo get_permalink() ?>" alt="<?php the_title() ?>"> 
                            <?php the_title('<h3 class="title-news">','</h3>'); ?>
                        </a>
                        <?php the_excerpt(); ?>
                    </div>
                <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
        </section>
    </div>
    <div class="col-lg-8 col-12">
        <div id="slider">
            <?php
            if ( $slider->have_posts() ) :
                while ( $slider->have_posts() ) :
                    $slider->the_post();
                    ?>
                    <div>
                        <img width="100%" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
                <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
