<?php get_header(); ?>
<!-- main -->
<!-- <div class="main">
	<div class="main__logo"></div>
	<div class="main__title"><?php //echo get_the_title(89); ?></div>
	
</div> -->
<!-- begin top  -->
<div class="top">
	<div class="top__inner">
		<div class="top__center">
			<div class="top__center-inner">
				<h1><?php echo get_post_custom_values('main_title', 89)[0]; ?></h1>
				<p class="sub"><?php echo get_post_custom_values('sub_title', 89)[0]; ?></p>
				<p class="group_btn">
					<button class="--bigger">
						<a href=<?php $basename=get_site_url(); echo $basename.'/about'?>>
							<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
							<?php _e('DETAILS ABOUT SCHOOL', 'targenta') ?>
						</a>
					</button>
					<button class="--bigger">
						<a href="/">
							<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
							<?php _e('PROGRAMS', 'targenta') ?>
						</a>
					</button>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- end top -->

<div class="course__main --remove-buttons">
	<div class="course__main__title">
		<h2>ПРОГРАММЫ</h2>
	</div>
	<div class="course__wrap-slider js-slick-course__main">
	<?php
		query_posts(array(
			'showposts' => 100,
			'post_type' => 'programm',
			'orderby'=>'menu_order',
			'order'=>'ASC'));
			while (have_posts()) { the_post(); $id = get_the_ID(); ?>
				<div class="slider__item">
					<div class="course__main__wrap-backgradient ">
						<div class="course__main__block">

								<div class="course__main-desc">
									<div class="course__name"><h2><?php echo the_field('course_name'); ?></h2></div>
									<div class="course__data"><span><?php echo the_field('time_start'); ?></span> - <span><?php echo the_field('time_end'); ?></span></div>
									<p><?php echo the_field('course_about-short'); ?></p>
								</div>
								<div class="course__main-more"><a href="<?php echo get_permalink($id); ?>">ПОДРОБНЕЕ</a><i class="icon-arrow-right"></i></div>
						</div>
					</div>
				</div>
	<?php } ?>
	</div>
</div>
<!-- end course -->		

<div class="course__main-btn">
	<button class="--change-color">
		<a href="/">
			<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
			Все программы
		</a>
	</button>
</div>
<!-- begin line  -->
	<div class="line">
	</div>
	<!-- end line -->
<?php get_footer(); ?>
