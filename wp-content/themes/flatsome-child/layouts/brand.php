<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h3 class="uppercase title-main">Đối tác</h3>
                <div class="doi-tac">
                <?php
                    echo do_shortcode('[block id="doi-tac"]');
                ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <h3 class="uppercase title-main">Khách hàng đánh giá</h3>
                <div class="khach-hang">
                <?php
                    echo do_shortcode('[block id="khach-hang-danh-gia"]');
                ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slider-company">
    <div class="container">
        <h3 class="uppercase title-main">Hình ảnh Nam Long</h3>
        <div class="row">
            <?php
                echo do_shortcode('[block id="hinh-anh-nam-long"]');
            ?>
        </div>
    </div>
</section>
