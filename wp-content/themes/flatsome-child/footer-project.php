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
    $bg = '#993e22';
}
if($slug == ''){
    
}
if($slug == ''){
    
}
?>
<style>
.absolute-footer{
    background-color: <?php echo $bg;?> !important;
    color: #fff !important;
}
.back-to-top.button.icon{
    background-color: <?php echo $bg;?> !important;
    border-radius: 0
}
.footer{
    padding: 60px 0 !important;
}
.wpcf7-submit,
.content-popup-vr input.wpcf7-form-control.wpcf7-submit{
    background-color: <?php echo $bg;?> !important;
}
</style>

<section class="frm-mail">
    <div class="container">
        <div class="box-mail">
            <div class="form-mail">
                <h3 class="title uppercase">NHẬN BÁO GIÁ</h3>
                <p>Quý khách vui lòng điền đầy đủ thông tin bên dưới, chúng tôi sẽ tư vấn và gửi thông tin mới của dự án cho Quý Khách trong thời gian sớm nhất.</p>
                    <?php
                        echo do_shortcode('[contact-form-7 id="5c97a31" title="Form liên hệ"]');
                    ?>
                <small>*Thông tin của khách hàng sẽ được bảo mật và chỉ sử dụng cho dự án này.</small>
            </div>
        </div>
    </div>
</section>

<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 cpl-sm-12 mb-3 d-flex justify-content-center align-items-center"> 
                <div id="logo-footer" class="logo">
                    <img src="<?php echo ASSET_PATH . '/logo/'.$slug.'.png'; ?>" alt="logo" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-12 mb-3"> 
                <h4 class="title uppercase">THÔNG TIN LIÊN HỆ</h4>
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