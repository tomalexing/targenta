<?php get_header(); ?>

<!-- top -->
<div class="top">
	<?php include('top.php'); ?>
	<!-- center -->
	<div class="center">
		<!-- nav -->
		<nav class="nav">
			<?php 
				$id = 127; 
				$post = get_post($id); 
				$content = apply_filters('the_content', $post->post_content); 
				echo '<div class="nav__title">'.$content.'</div>';  
			?>
			<a class="nav__link" href="#beer">
				<?php
					query_posts(array(
						'pagename' => 'beer',
						'posts_per_page' => 1,
						'post_type' => 'page'));
						while (have_posts()) { the_post(); ?>
					<?php $title = get_field('title'); echo $title; ?>
				<?php } ?>
			</a>
			<a class="nav__link" href="#alcohol">
				<?php
					query_posts(array(
						'pagename' => 'alcohol',
						'posts_per_page' => 1,
						'post_type' => 'page'));
						while (have_posts()) { the_post(); ?>
					<?php $title = get_field('title'); echo $title; ?>
				<?php } ?>
			</a>
			<a class="nav__link" href="#beverages">
				<?php
					query_posts(array(
						'pagename' => 'beverages',
						'posts_per_page' => 1,
						'post_type' => 'page'));
						while (have_posts()) { the_post(); ?>
					<?php $title = get_field('title'); echo $title; ?>
				<?php } ?>
			</a>
			<a class="nav__link" href="#souvenirs">
				<?php
					query_posts(array(
						'pagename' => 'souvenirs',
						'posts_per_page' => 1,
						'post_type' => 'page'));
						while (have_posts()) { the_post(); ?>
					<?php $title = get_field('title'); echo $title; ?>
				<?php } ?>
			</a>
		</nav>
	</div>
</div>
<!-- fp -->
<div class="fp js-fp">
	<div class="fp__section js-fp-section">
		<!-- product -->
		<div class="product product_beer js-product">
			<div class="product__bg"></div>
			<!-- center -->
			<div class="product__center center">
				<div class="product__content">
					<?php
						query_posts(array(
							'pagename' => 'beer',
							'posts_per_page' => 1,
							'post_type' => 'page'));
							while (have_posts()) { the_post(); ?>
						<div class="product__title"><?php $title = get_field('title'); echo $title; ?></div>
						<div class="product__text">
							<?php $text = get_field('text'); echo $text; ?>
						</div>
						<a class="product__btn btn" href="#">
							<div class="btn__title"><?php $button = get_field('button'); echo $button; ?></div>
							<div class="btn__icon">
								<i class="icon icon-arrow-right"></i>
							</div>
						</a>
					<?php  } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="fp__section js-fp-section">
		<!-- product -->
		<div class="product product_alcohol js-product">
			<div class="product__bg"></div>
			<!-- center -->
			<div class="product__center center">
				<div class="product__content">
					<?php
						query_posts(array(
							'pagename' => 'alcohol',
							'posts_per_page' => 1,
							'post_type' => 'page'));
							while (have_posts()) { the_post(); ?>
						<div class="product__title"><?php $title = get_field('title'); echo $title; ?></div>
						<div class="product__text">
							<?php $text = get_field('text'); echo $text; ?>
						</div>
						<a class="product__btn btn" href="#">
							<div class="btn__title"><?php $button = get_field('button'); echo $button; ?></div>
							<div class="btn__icon">
								<i class="icon icon-arrow-right"></i>
							</div>
						</a>
					<?php  } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="fp__section js-fp-section">
		<!-- product -->
		<div class="product product_drinks js-product">
			<div class="product__bg"></div>
			<!-- center -->
			<div class="product__center center">
				<div class="product__content">
					<?php
						query_posts(array(
							'pagename' => 'beverages',
							'posts_per_page' => 1,
							'post_type' => 'page'));
							while (have_posts()) { the_post(); ?>
						<div class="product__title"><?php $title = get_field('title'); echo $title; ?></div>
						<div class="product__text">
							<?php $text = get_field('text'); echo $text; ?>
						</div>
						<a class="product__btn btn" href="#">
							<div class="btn__title"><?php $button = get_field('button'); echo $button; ?></div>
							<div class="btn__icon">
								<i class="icon icon-arrow-right"></i>
							</div>
						</a>
					<?php  } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="fp__section js-fp-section">
		<!-- product -->
		<div class="product product_souvenirs js-product">
			<div class="product__bg"></div>
			<!-- center -->
			<div class="product__center center">
				<div class="product__content">
					<?php
						query_posts(array(
							'pagename' => 'souvenirs',
							'posts_per_page' => 1,
							'post_type' => 'page'));
							while (have_posts()) { the_post(); ?>
						<div class="product__title"><?php $title = get_field('title'); echo $title; ?></div>
						<div class="product__text">
							<?php $text = get_field('text'); echo $text; ?>
						</div>
						<a class="product__btn btn" href="#">
							<div class="btn__title"><?php $button = get_field('button'); echo $button; ?></div>
							<div class="btn__icon">
								<i class="icon icon-arrow-right"></i>
							</div>
						</a>
					<?php  } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>