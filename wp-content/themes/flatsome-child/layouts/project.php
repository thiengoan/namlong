<?php

$args = [
    'post_type'              => 'project',
    'order' => 'asc'
 ];
 
$query = new \WP_Query( $args );
?>

<section class="projects mb-5">
    <div class="container">
        <h3 class="uppercase">Dự án nổi bật</h3>
        <div id="project">
        <?php
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) :
                    $query->the_post();
                    ?>
                    <div class="item has-hover">
                        <div class="box-image">
                            <a href="<?php echo get_permalink() ?>" alt="<?php the_title() ?>">
                                <div class="image-zoom-fade">
                                    <?php echo get_the_post_thumbnail($query->ID(), 'medium'); ?>
                                </div>
                            </a>
                        </div>
                        <div class="box-text">
                            <a href="<?php echo get_permalink() ?>" alt="<?php the_title() ?>">
                                <?php the_title('<h3>','</h3>'); ?>
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

