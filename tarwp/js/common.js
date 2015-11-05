head.ready(function() {

	// menu
	(function () {
		var btn  = $('.js-menu-btn'),
			menu = $('.js-menu');
		btn.on('click', function () {
			btn.toggleClass('is-active');
			menu.toggleClass('is-visible');
		});
	}());

	// types
	(function () {
		var fp      = $('.js-fp');
		if (fp.length) {
			fp.fullpage({
				sectionSelector: '.js-fp-section',
				anchors:['beer', 'alcohol', 'beverages', 'souvenirs'],
				verticalCentered: false
			});
		};
	}());

	// brands
	(function () {
		var brands = $('.js-brands');
		if (brands.length) {
			brands.slick({
				centerMode: true,
				variableWidth: true,
				infinity: true,
				swipe: false
			});
		};
	}());

	// go top
	(function () {
		var btn = $('.js-go-top');
		btn.on('click', function () {
			$('html, body').animate({
				scrollTop: 0
			}, 500);
		});
	}());

	
});