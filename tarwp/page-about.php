
<?php
/*
  Template Name: About
 */
get_header(); ?>

<!-- begin about__more  -->
<div class="about__more">
	<div class="about__more__title">
		<h2><?php echo get_the_title(168); ?></h2>
	</div>
	<?php
		query_posts(array(
			'pagename' => 'about',
			'posts_per_page' => 1,
			'post_type' => 'page'));
			while (have_posts()) { the_post(); ?>

			<div class="about__more__inner l">
				<div class="photo l-col12">
					<?php $photo = get_field('about__more-photo'); echo '<img src="'.$photo.'">'; ?>
				</div>
				<div class="description__out l-col13">
					<div class="about__more__speach">
						<?php
							$about__more__begin = get_field('about__more__begin');
							echo '<p>'.str_replace(array("\r","\n\n","\n"),array('',"\n","</p>\n<p>"),trim($about__more__begin,"\n\r")).'</p>'
						?>
						<div class="divframe">
							<p class="divframe__inner">
								<?php $title1 = get_field('about__more__table-title1'); echo '<span class="blue">'.$title1.'</span>'; ?>
								<?php $text1 = get_field('about__more__table-text1'); echo $text1; ?>
							</p>
							<p class="divframe__inner">
								<?php $title2 = get_field('about__more__table-title2'); echo '<span class="blue">'.$title2.'</span>'; ?>
								<?php $text2 = get_field('about__more__table-text2'); echo $text2; ?>
							</p>
						</div>
						<button>
							<a href="/" id="ord_about">
								<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
								<?php _e('Ближайшие программы') ?>
							</a>
						</button>
					</div>
				</div>
			</div>
			<div class="about__after">
				<?php $about__more__continue = get_field('about__more__continue'); echo $about__more__continue; ?>
			</div>
			<div class="about__after-frame">
				<p class="title"><?php $title = get_field('about__more__table-big'); echo $title; ?></p>
				<ul>
					<?php
						$text = get_field('about__more__table-big-text'); 
						echo '<li>'.str_replace(array("\r","\n\n","\n"),array('',"\n","</li>\n<li>"),trim($text,"\n\r")).'</li>'
					 ?>
				</ul>
			</div>
	<?php } ?>

	<!-- begin line  -->
	<div class="line">
	</div>
	<!-- end line -->
</div>
<!-- end about__more -->

<?php get_footer(); ?>