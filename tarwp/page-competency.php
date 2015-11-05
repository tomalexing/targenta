<?php get_header(); ?>
<?php include('top.php'); ?>
<!-- services -->
<div class="services">
	<?php
		query_posts(array(
			'showposts' => 100,
			'post_type' => 'competency',
			'orderby'=>'menu_order',
			'order'=>'ASC'));
			while (have_posts()) { the_post(); ?>

		<div class="services__row">
			<div class="services__col">
				<div class="services__content">
					<div class="services__title"><?php echo the_field('title'); ?></div>
					<div class="services__text">
						<?php echo the_field('text'); ?>
					</div>
				</div>
			</div>
			<div class="services__col" style="background-image: url(<?php $picture = get_field('picture'); echo $picture; ?>);"></div>
		</div>
	<?php } ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>