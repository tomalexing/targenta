<?php get_header(); ?>
<!-- main -->
<div class="main">
	<div class="main__logo"></div>
	<div class="main__title"><?php echo get_the_title(89); ?></div>
	<video class="main__video" autoplay="autoplay">
		<source src="<?php bloginfo('template_directory'); ?>/video/video.webm" type="video/webm">
		<source src="<?php bloginfo('template_directory'); ?>/video/video.mp4" type="video/mp4">
		<source src="<?php bloginfo('template_directory'); ?>/video/video.ogv" type="video/ogg">
	</video>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
