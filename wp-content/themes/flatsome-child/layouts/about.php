<?php

$args = [
    'post_slug' => 'gioi-thieu',
    'category_name' => 've-chung-toi',
    'order' => 'asc'
];
 
$query = new \WP_Query( $args );
?>
<section class="aboutus">
    <div class="container">
        <div class="row">
            <?php
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) :
                        $query->the_post();
                        ?>
                        <div class="col-lg-4 col-md-12 has-hover">
                            <div class="box-image">
                                <a href="<?php echo get_permalink() ?>" alt="<?php the_title() ?>">
                                    <div class="image-zoom-long">
                                    <?php echo get_the_post_thumbnail($query->ID(), 'medium'); ?>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            
                                <?php 
                                    the_title('<h3 class="uppercase title-main">','</h3>');
                                    the_excerpt();                                    
                                ?>   
                                <a href="<?php echo get_permalink() ?>" alt="<?php the_title() ?>" class="btn btn-readmore">Xem chi tiết</a>
                            
                        </div>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

