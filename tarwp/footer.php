<!-- begin contacts  -->
<div class="contacts" id="contacts">
	<div class="contacts__title">
		<h2>КОНТАКТЫ</h2>
	</div>
	<div class="contacts__inner l">
		<?php
			query_posts(array(
				'pagename' => 'contacts',
				'posts_per_page' => 1,
				'post_type' => 'page'));
				while (have_posts()) { the_post(); ?>
			<div class="contacts__info l-col8">
				<div class="contacts__tel"><?php echo the_field('title_phone1'); ?></div>
				<div class="contacts__tel"><?php echo the_field('title_phone2'); ?></div>
				<div class="contacts__mail">
					<a href="mailto:<?php echo the_field('email'); ?>"><?php echo the_field('email'); ?></a>
				</div>
				<div class="contacts__social">
					<?php $facebook = get_field('facebook');
						if ($facebook != '') {
							echo '<a class="contacts__fb" href="'.$facebook.'" target="_blank"><i class="icon-fb"></i></a>';
						}
					?>
					<?php $linledin = get_field('linledin'); 
						if ($linledin != '') {
							echo '<a class="contacts__li" href="'.$linledin.'" target="_blank"><i class="icon-li"></i></a>'; 
						}
					?>
					<?php $instagram = get_field('instagram');
						if ($instagram != '') {
							echo '<a class="contacts__in" href="'.$instagram.'" target="_blank"><i class="icon-in"></i></a>'; 
						}
					?>
				</div>
			</div>
		<?php } ?>
		<div class="contact__form l-col9">
			<div class="vertical-line"></div>
			 <form role="form" id="formOrder" autocomplete="on">
				<div class="contact__input">
					<input type="text" class="form-control requiredField name" value="">
					<span class="highlight"></span><span class="bar"></span>
					<label>Имя*</label>
				</div>
				<div class="contact__input">
					<input type="text" class="form-control requiredField email" value="">
					<span class="highlight"></span><span class="bar"></span>
					<label>E-mail*</label>
				</div>
				<div class="contact__input">
					<input type="text" class="form-control requiredField phone" value="">
					<span class="highlight"></span><span class="bar"></span>
					<label>Телефон*</label>
				</div>
				<div class="contact__input">
					<input type="text" class="form-control message" value="">
					<span class="highlight"></span><span class="bar"></span>
					<label>Сообщение</label>
				</div>
				<button type="button" class="start__submit">Задать вопрос
					<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
				</button>
			</form>
		</div>
	</div>
	<!-- begin footer  -->
	<div class="footer l">
		<div class="footer__logo l-col1"><a href="/"><i class="icon-flogo"></i></a></div>
		<div class="copyright l-col2">
			<p>© Все права защищены.</p>
			<p>Powered by <a href="http://www.iondigi.com">ION Digital</a></p>
		</div>

	</div>
	<!-- end footer -->

</div>
<!-- end contacts -->
</div>
<!-- load scripts -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lib/head.js"></script> 
<script> 
	head.js("<?php bloginfo('template_directory'); ?>/js/lib/jquery.js",
			"<?php bloginfo('template_directory'); ?>/js/lib/slick.min.js",

			"<?php bloginfo('template_directory'); ?>/js/common.js",
			"<?php bloginfo('template_directory'); ?>/js/common1.js"
	);
</script>
</body>
</html>