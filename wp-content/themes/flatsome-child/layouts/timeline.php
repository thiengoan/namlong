<style>
   .section-content-timeline{padding-left:5vw; padding-right:5vw;}
.section-content-timeline .description{margin-bottom:45px; text-align:center;}
.timeline{position:relative;}
.timeline:before{content:''; position:absolute; top:110px; left:0px; width:100%; height:7px;
                        background:#b5bfc8;
}
.timeline .items{display:flex; width:calc(100% + 60px) ; position:relative; margin-left:-30px; margin-right:-30px;}

.timeline .items .item{padding:0px 10px;}
.timeline .items .item .minute{height:100px; font-size:18px; color:#fa8d2e; text-align:center; position:relative}
.timeline .items .item .minute strong{font-weight:700; font-size:50px; display:block; line-height:0.8em;}
.timeline .items .item .minute:before{content:''; position:absolute; bottom:-24px; left:50%; transform:translateX(-50%); 
                                        width:26px; height:26px; background:#fa8d2e; border-radius:50%;

}
.timeline .items .subitems{display:flex;     padding-top: 40px; margin-left:-12px; margin-right:-12px;}
.timeline .items .subitems .subitem{padding:0px 12px;}
.timeline .items .subitems .subitem .title{ min-height:115px; display:flex; align-items:flex-end;}
.timeline .items .subitems .subitem h4{font-size:14px; text-transform:uppercase;font-weight:300; text-align:center;color: #fff;}
.timeline .items .subitems .subitem h4 small{font-size:12px; text-transform:none; display:block;}
.timeline .items .subitems .subitem h4 strong{font-weight:500;}
.timeline .items .subitems .subitem .thumb img{
    clip-path: polygon(0% 8%,41% 8%,50% 0%,59% 8%,100% 8%,100% 100%,0% 100%)
}

@media screen and (max-width:991px) {

    .timeline .items .item {
        display: flex;
        flex-direction: row;
        margin-bottom: 30px;
    }
    .timeline .items .item {
        padding: 0px 10px;
    }
    .timeline-mobile .items{display:flex; position:relative; flex-direction:row;
         width: 100%;
        margin: 0;
    }
    .timeline-mobile .items .column-left,
    .timeline-mobile .items .column-right{
        flex:0 0 50%;
        width:50%;
    }
    .timeline-mobile:before{left:50%; transform:translateX(-50%); top: 0; width:6px; height: 100%;}
    .timeline-mobile .items .item{
        flex-direction:column;
        padding-top:30px;
        border-top:solid 3px #b5bfc8;
    }
    .timeline .items .subitems .subitem .thumb{
        text-align:center;
    }
    .timeline .items .item .minute{
        width:100%;
        text-align:center;
        padding:0px 0px 15px;
        height: auto;
    }
    .timeline .items .item .minute:before{
        right: -20px;
        top: -40px;
        width: 20px;
        height: 20px;
    }
    .timeline .items .column-right .item .minute:before{
        left: -20px; right:auto;
    }
    .timeline-mobile .items .column-left{
        padding-top:210px;
    }

    .timeline .items .subitems {
        flex-direction: column;
        margin: 0px;
        padding-top: 0px;
    }

    .timeline .items .subitem {
        min-width: 150px;
    }

    /* .timeline:before{width:7px; height:100%; left:104px; top:0px;}
    .timeline .items{flex-direction:column;}
    .timeline .items .item .minute:before{    top: 20px;   left:auto;  right: 10px; transform:translateX(0px);}
    
    .timeline .items .item{display:flex; flex-direction:row; margin-bottom:30px;}
    .timeline .items .subitems{flex-direction:column; margin:0px; padding-top:0px;}
    .timeline .items .subitem{min-width:150px; }
    .timeline .items .item .minute{    padding: 0px 45px 0px 15px;     width: 150px;}
    .timeline .items .subitems .subitem{margin-bottom:25px;}
    .timeline .items .subitems .subitem .title{height:auto; min-height:50px;}
    .timeline .items .subitems .subitem .thumb{max-height:999px;}  */
   
}
</style>
<?php
$slug = $post->post_name;
if($slug == 'akari-city'){ ?>
<div class="mt-5">
    <div class="timeline animatedParent d-none d-lg-block" data-sequence="250">
        <div class="items">
            <div class="item animated fadeInUpShort go" data-id="1">
                <div class="minute">
                    <strong>01</strong>Phút
                </div>
                <div class="subitems">
                    <div class="subitem">
                        <div class="title d-flex flex-align-end">
                            <h4><small>tận hưởng</small>TẤT CẢ TIỆN ÍCH<br><strong>THƯƠNG MẠI, DỊCH VỤ</strong><br>TRẢI DỌC <strong>KHU ĐÔ THỊ</strong></h4>
                        </div>
                        <div class="thumb">
                            <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-2.jpg'; ?>" class="img-fluid" alt="tận hưởngTẤT CẢ TIỆN ÍCHTHƯƠNG MẠI, DỊCH VỤTRẢI DỌC KHU ĐÔ THỊ">
                        </div>
                    </div>
                    <div class="subitem">
                        <div class="title d-flex flex-align-end">
                            <h4><small>đến</small><strong>TRƯỜNG LIÊN CẤP<br>NGÔ THỜI NHIỆM</strong></h4>
                        </div>
                        <div class="thumb">
                            <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-3.jpg';?>" class="img-fluid" alt="đếnTRƯỜNG LIÊN CẤPNGÔ THỜI NHIỆM">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  animated fadeInUpShort go" data-id="2">
                <div class="minute">
                    <strong>10</strong>Phút
                </div>
                <div class="subitems">
                    <div class="subitem">
                        <div class="title d-flex flex-align-end">
                            <h4><small>đến</small><strong>TTTM <br>AEON MALL</strong></h4>
                        </div>
                        <div class="thumb">
                            <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-4.jpg'; ?>" class="img-fluid" alt="đếnTTTM AEON MALL">
                        </div>
                    </div>
                    <div class="subitem">
                        <div class="title d-flex flex-align-end">
                            <h4><small>đến</small><strong>BỆNH VIỆN<br>QUỐC TẾ CIH</strong></h4>
                        </div>
                        <div class="thumb">
                            <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-5.jpg'; ?>" class="img-fluid" alt="đếnBỆNH VIỆNQUỐC TẾ CIH">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  animated fadeInUpShort go" data-id="3">
                <div class="minute">
                    <strong>15</strong>Phút
                </div>
                <div class="subitems">
                    <div class="subitem">
                        <div class="title d-flex flex-align-end">
                            <h4><small>đến</small><strong>BẾN XE<br>MIỀN TÂY</strong></h4>
                        </div>
                        <div class="thumb">
                            <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-6.jpg'; ?>" class="img-fluid" alt="đếnBẾN XEMIỀN TÂY">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  animated fadeInUpShort go" data-id="4">
                <div class="minute">
                    <strong>20</strong>Phút
                </div>
                <div class="subitems">
                    <div class="subitem">
                        <div class="title d-flex flex-align-end">
                            <h4><small>đến</small><strong>CHỢ LỚN<br>Q.5, Q.6</strong></h4>
                        </div>
                        <div class="thumb">
                            <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-7.jpg'; ?>" class="img-fluid" alt="đếnCHỢ LỚNQ.5, Q.6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  animated fadeInUpShort go" data-id="5">
                <div class="minute">
                    <strong>25</strong>Phút
                </div>
                <div class="subitems">
                    <div class="subitem">
                        <div class="title d-flex flex-align-end">
                            <h4><small>đến</small><strong>TRUNG TÂM<br>Q.1</strong></h4>
                        </div>
                        <div class="thumb">
                            <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-8.jpg'; ?>" class="img-fluid" alt="đếnTRUNG TÂMQ.1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="timeline timeline-mobile d-block d-lg-none animatedParent" data-sequence="250">
        <div class="items ">
            <div class="column-left">
                <div class="item  animated fadeInUpShort" data-id="1">
                    <div class="minute">
                        <strong>10</strong>Phút
                    </div>
                    <div class="subitems">
                        <div class="subitem">
                            <div class="title d-flex flex-align-end">
                                <h4><small>đến</small><strong>TTTM <br>AEON MALL</strong></h4>
                            </div>
                            <div class="thumb">
                                <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-4.jpg'; ?>" class="img-fluid" alt="đếnTTTM AEON MALL">
                            </div>
                        </div>
                        <div class="subitem">
                            <div class="title d-flex flex-align-end">
                                <h4><small>đến</small><strong>BỆNH VIỆN<br>QUỐC TẾ CIH</strong></h4>
                            </div>
                            <div class="thumb">
                                <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-5.jpg'; ?>" class="img-fluid" alt="đếnBỆNH VIỆNQUỐC TẾ CIH">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item  animated fadeInUpShort" data-id="4">
                    <div class="minute">
                        <strong>20</strong>Phút
                    </div>
                    <div class="subitems">
                        <div class="subitem">
                            <div class="title d-flex flex-align-end">
                                <h4><small>đến</small><strong>CHỢ LỚN<br>Q.5, Q.6</strong></h4>
                            </div>
                            <div class="thumb">
                                <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-7.jpg'; ?>" class="img-fluid" alt="đếnCHỢ LỚNQ.5, Q.6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-right">
                <div class="item animated fadeInUpShort" data-id="2">
                    <div class="minute">
                        <strong>01</strong>Phút
                    </div>
                    <div class="subitems">
                        <div class="subitem">
                            <div class="title d-flex flex-align-end">
                                <h4><small>tận hưởng</small>TẤT CẢ TIỆN ÍCH<br><strong>THƯƠNG MẠI, DỊCH VỤ</strong><br>TRẢI DỌC <strong>KHU ĐÔ THỊ</strong></h4>
                            </div>
                            <div class="thumb">
                                <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-2.jpg'; ?>" class="img-fluid" alt="tận hưởngTẤT CẢ TIỆN ÍCHTHƯƠNG MẠI, DỊCH VỤTRẢI DỌC KHU ĐÔ THỊ">
                            </div>
                        </div>
                        <div class="subitem">
                            <div class="title d-flex flex-align-end">
                                <h4><small>đến</small><strong>TRƯỜNG LIÊN CẤP<br>NGÔ THỜI NHIỆM</strong></h4>
                            </div>
                            <div class="thumb">
                                <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-3.jpg'; ?>" class="img-fluid" alt="đếnTRƯỜNG LIÊN CẤPNGÔ THỜI NHIỆM">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item  animated fadeInUpShort" data-id="3">
                    <div class="minute">
                        <strong>15</strong>Phút
                    </div>
                    <div class="subitems">
                        <div class="subitem">
                            <div class="title d-flex flex-align-end">
                                <h4><small>đến</small><strong>BẾN XE<br>MIỀN TÂY</strong></h4>
                            </div>
                            <div class="thumb">
                                <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-6.jpg'; ?>" class="img-fluid" alt="đếnBẾN XEMIỀN TÂY">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item  animated fadeInUpShort" data-id="5">
                    <div class="minute">
                        <strong>25</strong>Phút
                    </div>
                    <div class="subitems">
                        <div class="subitem">
                            <div class="title d-flex flex-align-end">
                                <h4><small>đến</small><strong>TRUNG TÂM<br>Q.1</strong></h4>
                            </div>
                            <div class="thumb">
                                <img src="<?php echo ASSET_PATH . '/location/'.$slug.'/vi-tri-8.jpg'; ?>" class="img-fluid" alt="đếnTRUNG TÂMQ.1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<?php } ?>