<!-- menu -->
<div class="menu js-menu">
	<a class="menu__logo" href="/">
		<span class="menu__logo-pic"></span>
	</a>
	<nav class="menu__nav">
		<?php
			$menuParameters = array(
				'theme_location'  => '',
				'menu'            => 'Menu',
				'container'       => false,
				'echo'            => false,
				'items_wrap'      => '%3$s',
				'depth'           => 0,
			);
			echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
		?>
	</nav>
	<div class="menu__foot">
		<div class="menu__contacts">
			<a class="menu__phone" href="tel:+380442388312">+38 044 238 83 12</a>
			<a class="menu__mail" href="mailto:info@concept.glass">info@concept.glass</a>
		</div>
		<div class="menu__lang">
			<?php echo qtranxf_generateLanguageSelectCode('both'); ?>
		</div>
	</div>
	<button class="menu__btn js-menu-btn"></button>
</div>