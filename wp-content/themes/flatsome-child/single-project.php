<?php
/**
 * The blog template file.
 *
 * @package flatsome
 */

get_header('project');

?>

<?php
// the query.
$args = array(
	'post_type' => 'project'
);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
	<!-- pagination here -->

	<!-- the loop -->
	<?php
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
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
		<?php the_content(); ?>
		<div id="content" class="blog-wrapper">
			<!-- Block About -->
			<span class="scroll-to" data-label="Scroll to: #gioi-thieu" data-bullet="false" data-link="#gioi-thieu"><a name="gioi-thieu"></a></span>
			<section class="section">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Giới thiệu <?php the_title() ?></span></div></h2>
					<?php echo $about; ?>
				</div>
			</section>
			<!-- Block Local -->
			<span class="scroll-to" data-label="Scroll to: #vi-tri" data-bullet="false" data-link="#vi-tri"><a name="vi-tri"></a></span>
			<section class="section">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Vị trí <?php the_title() ?></span></div></h2>
					<?php echo $local; ?>
				</div>
			</section>
			<!-- Block Utility -->
			<span class="scroll-to" data-label="Scroll to: #tien-ich" data-bullet="false" data-link="#tien-ich"><a name="tien-ich"></a></span>
			<section class="section">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Tiện ích <?php the_title() ?></span></div></h2>
					<?php echo $utility; ?>
				</div>
			</section>
			<!-- Block About -->
			<span class="scroll-to" data-label="Scroll to: #mat-bang" data-bullet="false" data-link="#mat-bang"><a name="mat-bang"></a></span>
			<section class="section">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Mặt bằng <?php the_title() ?></span></div></h2>
					<?php echo $ground; ?>
				</div>
			</section>
			<!-- Block About -->
			<span class="scroll-to" data-label="Scroll to: #thiet-ke" data-bullet="false" data-link="#thiet-ke"><a name="thiet-ke"></a></span>
			<section class="section">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Thiết kế <?php the_title() ?></span></div></h2>
					<?php echo $design; ?>
				</div>
			</section>
			<!-- Block About -->
			<span class="scroll-to" data-label="Scroll to: #tien-do" data-bullet="false" data-link="#tien-do"><a name="tien-do"></a></span>
			<section class="section">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Tiến độ <?php the_title() ?></span></div></h2>
					<?php echo $progress; ?>
				</div>
			</section>
			<!-- Block About -->
			<span class="scroll-to" data-label="Scroll to: #thanh-toan" data-bullet="false" data-link="#thanh-toan"><a name="thanh-toan"></a></span>
			<section class="section">
				<div class="container">
					<h2 class="text-center uppercase mb-3"><div class="title-project"><span>Thanh toán <?php the_title() ?></span></div></h2>
					<?php echo $pay; ?>
				</div>
			</section>
			<span class="scroll-to" data-label="Scroll to: #lien-he" data-bullet="false" data-link="#lien-he"><a name="lien-he"></a></span>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

<?php endif; ?>

<?php get_footer();
