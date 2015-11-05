<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>CONCEPT.GLASS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">

	<link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/css/screen1.css">
</head>
<body>
<!-- wrapper -->
<div class="wrapper out">
<!-- begin header  -->
<div class="header">
	<div class="header__inner">
		<div class="header__row">
			<div class="header__logo">
				<a href="/">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo.svg">
					<i class="icon-logo2"></i>
				</a>
			</div>
			<div class="heeder__nav">
				<ul class="nav">
							<?php
								$menuParameters = array(
									'theme_location'  => '',
									'menu'            => 'Menu',
									'container'       => false,
									'echo'            => false,
									'items_wrap'      => '%3$s',
									'depth'           => 0,
									"walker"            => new add_span_walker()
								);
								echo strip_tags(wp_nav_menu( $menuParameters ), '<a><li>' );
							?>
							<li class="nav__item"><a href="#contacts" >КОНТАКТЫ</a></li>
				</ul>
			</div>
			<button class="order">
				<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
				<a href="#" id="ord_btn" >ЗАПИСАТЬСЯ НА ПРОГРАММУ</a>
			</button>
			<div class="lang">
				<?php echo qtranxf_generateLanguageSelectCode('both'); ?>
				<sub></sub>
			</div>
		</div>
	</div>
</div>
<!-- end header -->