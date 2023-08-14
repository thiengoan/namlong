<?php

$args = [
    'post_type'              => 'du-an',
    'order' => 'asc'
 ];
 
$query = new \WP_Query( $args );

$slug = $post->post_name;

$bg = '#b52828';

if($slug == 'waterpoint'){
    $bg = '#188f8d';
}
if($slug == 'akari-city'){
    $bg = '#3e0000';
}
if($slug == ''){
    
}
if($slug == ''){
    
}
?>
<style>
.footer{
    background-color: <?php echo $bg;?>;
}
</style>

<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 mb-3"> 
                <h4 class="title uppercase">LIÊN HỆ</h4>
                <p>Để tìm hiểu thông tin chi tiết, quý khách vui lòng để lại thông tin. Phòng kinh doanh của chúng tôi sẽ liên hệ quý khách trong thời gian sớm nhất.</p>      
                <div class="box-mail">
                    <div class="form-mail">
                        <?php echo do_shortcode('[contact-form-7 id="5c97a31" title="Form liên hệ"]') ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-3"> 
                <h4 class="title uppercase">THÔNG TIN LIÊN HỆ</h4>
                <div id="logo-footer" class="logo">
                    <img src="<?php echo ASSET_PATH . '/logo/'.$slug.'.png'; ?>" alt="logo" loading="lazy">
                </div>
                <div class="info mt-3">   
                    <p class="uppercase"><strong><?php echo get_option('company_name')?></strong></p>
                    <p><?php echo get_option('company_add')?></p>
                    <p>Hotline: <strong><?php echo get_option('hotline_1')?></strong></p>
                    <p>Email: <?php echo get_option('admin_email')?></p>
                    <p>Website: <?php echo bloginfo( 'home' )?></p>
                </div>
            </div>
            
        </div>
    </div>
</section>