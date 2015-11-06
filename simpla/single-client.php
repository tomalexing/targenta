<?php get_header(); ?>
<?php include('top.php'); ?>



<?php

	query_posts(array('showposts' => 20,
		'post_type' => 'productions',
		'client' => $post->post_name,
		'orderby'=>'menu_order',
		'order'=>'ASC'));
	while (have_posts()) { the_post(); ?>

	<!-- product -->
	<div class="product product_alcohol">
		<!-- center -->
		<div class="product__center center center_sm">
			<!-- back -->
			<a class="back" href="#">
				<i class="icon icon-arrow-left"></i>
			</a>
			<!-- title -->
			<div class="title">ПРОДУКЦИЯ</div>
			<!-- list -->
			<div class="list">
				<!-- item -->
				<div class="item">
					<img class="item__pic" src="<?php echo the_field('picture'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	

<?php } ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>