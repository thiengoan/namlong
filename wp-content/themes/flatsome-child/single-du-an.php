<?php
/**
 * The blog template file.
 *
 * @package flatsome
 */

get_header('project');

$slug = $post->post_name;

$bg1 = '';

if($slug == 'waterpoint'){
    $bg = '#188f8d';
}

if($slug == 'akari-city'){
    $bg1 = ASSET_PATH . '/bg/'.$slug.'/bg-1.png'; 
	$bg2 = ASSET_PATH . '/bg/'.$slug.'/bg-2.png';
}

if($slug == ''){
    
}

if($slug == ''){
    
}

?>
<style>
.section{
	padding: 60px;
}
.bg1{
    background-image: url('<?php echo $bg1;?>');
}
.bg1 .title-project span{
	color: #fff;
}
.bg1 .container{
	color: #fff;
}
.bg2{
    background-image: url('<?php echo $bg2;?>');
}
.bg2 .title-project span{
	color: #f2862a;
}
.bg1 .nav>li>a {
    color: #fff;
	opacity: .8;
}
.bg1 .nav>li>a:hover,
.bg1 .nav-outline > li.active> a,
.bg1 .nav-outline >li.active > a{
	opacity: 1;
	color: #fff;
	border-radius: 0;
}
.banner p{
	margin: 0;
}
</style>

<?php if ( have_posts() ) : ?>
	<!-- pagination here -->

	<!-- the loop -->
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<?php 
		$about = get_post_meta( $post->ID,'about_meta', true ); 
		$local = get_post_meta( $post->ID,'local_meta', true ); 
		$utility = get_post_meta( $post->ID,'utility_meta', true ); 
		$ground = get_post_meta( $post->ID,'ground_meta', true ); 
		$design = get_post_meta( $post->ID,'design_meta', true ); 
		$progress = get_post_meta( $post->ID,'progress_meta', true ); 
		$pay = get_post_meta( $post->ID,'pay_meta', true ); 

		?>
		<div class="banner">
			<?php the_content(); ?>
		</div>
		<div id="content" class="content-project blog-wrapper">
			<!-- Block About -->
			<span class="scroll-to" data-label="Scroll to: #gioi-thieu" data-bullet="false" data-link="#gioi-thieu"><a name="gioi-thieu"></a></span>
			<section class="section bg2">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Giới thiệu <?php the_title() ?></span></div></h2>
					<?php echo do_shortcode($about); ?>
				</div>
			</section>
			<!-- Block Local -->
			<span class="scroll-to" data-label="Scroll to: #vi-tri" data-bullet="false" data-link="#vi-tri"><a name="vi-tri"></a></span>
			<section class="section bg1">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Vị trí <?php the_title() ?></span></div></h2>
					<?php echo do_shortcode($local); ?>
					<?php get_template_part( 'layouts/timeline'); ?>
				</div>
			</section>
			<!-- Block Utility -->
			<span class="scroll-to" data-label="Scroll to: #tien-ich" data-bullet="false" data-link="#tien-ich"><a name="tien-ich"></a></span>
			<section class="section bg2">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Tiện ích <?php the_title() ?></span></div></h2>
					<?php echo do_shortcode($utility); ?>
				</div>
			</section>
			<!-- Block About -->
			<span class="scroll-to" data-label="Scroll to: #mat-bang" data-bullet="false" data-link="#mat-bang"><a name="mat-bang"></a></span>
			<section class="section bg1">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Mặt bằng <?php the_title() ?></span></div></h2>
					<?php echo do_shortcode($ground); ?>
				</div>
			</section>
			<!-- Block About -->
			<span class="scroll-to" data-label="Scroll to: #thiet-ke" data-bullet="false" data-link="#thiet-ke"><a name="thiet-ke"></a></span>
			<section class="section bg2">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Thiết kế <?php the_title() ?></span></div></h2>
					<?php echo do_shortcode($design); ?>
				</div>
			</section>
			<!-- Block About -->
			<span class="scroll-to" data-label="Scroll to: #tien-do" data-bullet="false" data-link="#tien-do"><a name="tien-do"></a></span>
			<section class="section bg1">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Tiến độ <?php the_title() ?></span></div></h2>
					<?php echo do_shortcode($progress); ?>
				</div>
			</section>
			<!-- Block About -->
			<span class="scroll-to" data-label="Scroll to: #thanh-toan" data-bullet="false" data-link="#thanh-toan"><a name="thanh-toan"></a></span>
			<section class="section bg2 thanhtoan">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Thanh toán <?php the_title() ?></span></div></h2>
					<?php echo do_shortcode($pay); ?>
				</div>
			</section>
			<span class="scroll-to" data-label="Scroll to: #lien-he" data-bullet="false" data-link="#lien-he"><a name="lien-he"></a></span>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

<?php endif; ?>

<?php get_footer();