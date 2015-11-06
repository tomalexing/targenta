<?php get_header(); ?>
<?php include('top.php'); ?>


<?php
	query_posts(array(
		'pagename' => 'contacts',
		'posts_per_page' => 1,
		'post_type' => 'page'));
		while (have_posts()) { the_post(); ?>
	<!-- contacts -->
	<div class="contacts">
		<div id="map" class="contacts__map" style="height: 415px;"></div>
		<!-- center -->
		<div class="contacts__center center center_the_sm">
			<div class="contacts__row">
				<div class="contacts__left">
					<div class="contacts__item">
						<a class="contacts__phone" href="tel:<?php echo the_field('number_phone'); ?>"><?php echo the_field('title_phone'); ?></a>
					</div>
					<div class="contacts__item">
						<a class="contacts__mail" href="mailto:<?php echo the_field('email'); ?>"><?php echo the_field('email'); ?></a>
					</div>
					<div class="contacts__address"><?php echo the_field('address'); ?></div>
				</div>
				<div class="contacts__right">
					<!-- social -->
					<div class="social">
						<?php $vkontakte = get_field('vkontakte');
							if ($vkontakte != '') {
								echo '<a class="social__link" href="'.$vkontakte.'" target="_blank"><i class="icon icon-vkontakte"></i></a>';
							}
						?>
						<?php $facebook = get_field('facebook'); 
							if ($facebook != '') {
								echo '<a class="social__link" href="'.$facebook.'" target="_blank"><i class="icon icon-facebook"></i></a>'; 
							}
						?>
						<?php $linkedin = get_field('linkedin');
							if ($linkedin != '') {
								echo '<a class="social__link" href="'.$linkedin.'" target="_blank"><i class="icon icon-linkedin"></i></a>'; 
							}
						?>
						<?php $behance = get_field('behance');
							if ($behance != '') {
								echo '<a class="social__link" href="'.$behance.'" target="_blank"><i class="icon icon-behance"></i></a>'; 
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		var map;
		function initMap() {
			var myLatLng = {lat: <?php echo the_field('coords_lat'); ?>, lng: <?php echo the_field('coords_lng'); ?>};
			var customMapType = new google.maps.StyledMapType([
					{
						stylers: [
							{hue: '#becbcd'},
							{weight: 1.5}
						]
					}
				], {
					name: 'Custom Style'
			});
			var customMapTypeId = 'custom_style';
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 17,
				center: myLatLng,
				disableDefaultUI: true,
				scrollwheel: false,
				draggable: false,
				mapTypeControlOptions: {
					mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
				}
			});
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map
			});
			map.mapTypes.set(customMapTypeId, customMapType);
			map.setMapTypeId(customMapTypeId);
		}
	</script>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCPLx_osAJ33YNibIjaqX9uH5kbYIlNJVY&callback=initMap" async defer></script>
<?php  } ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>