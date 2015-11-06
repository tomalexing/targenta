<?php get_header(); ?>
<?php include('top.php'); ?>
<!-- about -->
<div class="about">
	<!-- center -->
	<div class="about__center center center_the_sm">
		<?php
			query_posts(array(
				'pagename' => 'company',
				'posts_per_page' => 1,
				'post_type' => 'page'));
				while (have_posts()) { the_post(); ?>
			<div class="about__content">
				<?php $title1 = get_field('title1'); echo '<div class="about__title">'.$title1.'</div>'; ?>
				<?php $text1 = get_field('text1'); echo '<div class="about__text">'.$text1.'</div>'; ?>
				<?php $title2 = get_field('title2'); echo '<div class="about__title">'.$title2.'</div>'; ?>
				<?php $text2 = get_field('text2'); echo '<div class="about__text">'.$text2.'</div>'; ?>
				<?php $title3 = get_field('title3'); echo '<div class="about__title">'.$title3.'</div>'; ?>
				<?php $text3 = get_field('text3'); echo '<div class="about__text">'.$text3.'</div>'; ?>
			</div>
			<div class="about__content">
				<div class="about__text">
					<?php $text4 = get_field('text4'); echo $text4; ?>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<!-- center -->
<div class="center">
	<!-- team -->
	<div class="team">
		<div class="team__title"><?php echo get_the_title(24); ?></div>
		<div class="team__list">
			<?php
				query_posts(array(
					'showposts' => 100,
					'post_type' => 'team',
					'orderby'=>'menu_order',
					'order'=>'ASC'));
					while (have_posts()) { the_post(); ?>
				
				<div class="team__item">
					<div class="team__ava">
						<?php $photo = get_field('photo'); echo '<img class="team__photo" src="'.$photo.'">'; ?>
						<?php $photo_emotion = get_field('photo_emotion'); echo '<img class="team__photo-emotion" src="'.$photo_emotion.'">'; ?>
					</div>
					<div class="team__name"><?php echo the_field('name'); ?></div>
					<div class="team__position"><?php echo the_field('position'); ?></div>
				</div>
			<?php } ?>
		</div>
		<!-- center -->
		<div class="team__center center center_the_sm">
			<div class="team__content">
				<?php 
					$id = 24; 
					$post = get_post($id); 
					$content = apply_filters('the_content', $post->post_content); 
					echo $content;  
				?>
			</div>
		</div>
	</div>
</div>
<!-- client -->
<div class="client">
	<!-- center -->
	<div class="client__center center center_the_sm">
		<div class="client__title"><?php echo get_the_title(29); ?></div>
		<div class="client__content">
			<?php 
				$id = 29; 
				$post = get_post($id); 
				$content = apply_filters('the_content', $post->post_content); 
				echo $content;  
			?>
		</div>
	</div>
	<div class="client__bg">
		<!-- center -->
		<div class="client__center center">
			<div class="client__list">
				<?php
					query_posts(array(
						'showposts' => 100,
						'post_type' => 'clients',
						'orderby'=>'menu_order',
						'order'=>'ASC'));
						while (have_posts()) { the_post(); ?>
					<div class="client__item">
						<a class="client__link" href="/client/<?php echo $post->post_name; ?>">
							<img class="client__logo" src="<?php echo the_field('logo'); ?>">
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- go -->
<div class="go">
	<button class="go__btn js-go-top">
		<i class="icon icon-go-up"></i>
	</button>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>