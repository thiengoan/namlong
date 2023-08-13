<?php 
$args = [
    'post_type'              => 'du-an',
    'order' => 'asc'
 ];
 
$project = new \WP_Query( $args );

$args = [
    'post_type'              => 'tin-tuc',
    'order' => 'asc'
 ];
 
$news = new \WP_Query( $args );

?>

<div class="title-sidebar">
    <span>Dự án nổi bật</span>
</div>
<div class="content-sidebar mb-3">
    <div class="row">
        <?php
            if ( $project->have_posts() ) :
                while ( $project->have_posts() ) :
                    $project->the_post();
                    ?>
                    <div class="item d-flex">
                        <div class="image col-4">
                            <a href="<?php echo get_permalink() ?>" alt="<?php the_title() ?>">
                                <?php echo get_the_post_thumbnail($project->ID(), 'medium'); ?>
                            </a>
                        </div>
                        <div class="title col-8">
                            <a href="<?php echo get_permalink() ?>" alt="<?php the_title() ?>">
                                <?php the_title('<h5 class="mb-0">','</h5>'); ?>
                            </a>
                            <span class="d-flex">
                                <i class="fa fa-map-marker mr-2" aria-hidden="true"></i><?php the_excerpt('<span>','</span>'); ?>
                            </span>
                        </div>
                    </div>   
                <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
    </div>
</div>
<div class="title-sidebar">
    <span>Tin mới</span>
</div>
<div class="content-sidebar mb-3">
    <div class="row">   
        <?php
            if ( $news->have_posts() ) :
                while ( $news->have_posts() ) :
                    $news->the_post();
                    ?>
                    <div class="item d-flex">
                            <div class="image col-4">
                                <a href="<?php echo get_permalink() ?>" alt="<?php the_title() ?>"> 
                                    <?php echo get_the_post_thumbnail($news->ID(), 'medium'); ?>
                                </a>
                            </div>
                            <div class="title col-8">
                                <a href="<?php echo get_permalink() ?>" alt="<?php the_title() ?>"> 
                                    <?php the_title('<h5 class="mb-0">','</h5>'); ?>
                                </a>
                                <span class="meta-date"><i class="fa fa-calculator"></i><?php echo get_the_date(); ?></span>
                            </div>
                        </a>
                    </div>   
                <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
    </div>
</div>