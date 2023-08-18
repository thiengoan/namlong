<?php

$args = [
    'post_type'              => 'du-an',
    'order' => 'asc'
 ];
 
$query = new \WP_Query( $args );
?>
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-3"> 
                <div id="logo-footer" class="logo">
                    <?php get_template_part('template-parts/header/partials/element','logo'); ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-3"> 
                <div class="info">
                    <h4 class="title uppercase">THÔNG TIN LIÊN HỆ</h4>
                    <p class="uppercase"><strong><?php echo get_option('company_name')?></strong></p>
                    <p>Địa chỉ: <?php echo get_option('company_add')?></p>
                    <p>Hotline: <?php echo get_option('hotline_1')?></p>
                    <p>Email: <?php echo get_option('admin_email')?></p>
                    <p>Website: <?php echo bloginfo( 'home' )?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3"> 
                <h4 class="title uppercase">Dự án mới nhất</h4>
                <?php if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) :
                        $query->the_post();
                    ?>
                    <div class="link-project">
                        <a href="<?php echo get_permalink() ?>" alt="<?php the_title() ?>">
                            <?php the_title('<h5>','</h5>'); ?>
                        </a>
                    </div>
                <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>