<?php get_header(); ?>
<?php include('top.php'); ?>


<?php
	query_posts(array(
		'pagename' => 'horeca',
		'posts_per_page' => 1,
		'post_type' => 'page'));
		while (have_posts()) { the_post(); ?>
	<!-- horeca -->
	<div class="horeca">
		<!-- center -->
		<div class="horeca__center center">
			<div class="horeca__wrap">
				<div class="horeca__content">
					<?php echo the_field('text'); ?>
				</div>
				<a class="horeca__btn btn" href="#">
					<div class="btn__title"><?php echo the_field('button'); ?></div>
					<div class="btn__icon">
						<i class="icon icon-arrow-right"></i>
					</div>
				</a>
			</div>
		</div>
		<div class="horeca__bg"></div>
	</div>
<?php } ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>