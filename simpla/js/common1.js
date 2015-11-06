$(document).ready(function() {

	//smoothscroll start
	$('a[href^="#"]').on('click', function (e) {
	    e.preventDefault();
	    var target = this.hash,
	    $target = $(target);

		$('html, body').stop().animate({
		    'scrollTop': $target.offset().top
		}, 500, 'swing', function () {
		    window.location.hash = target;
		});

	 });
    //clicking
	$('.header .lang sub,.header .lang span').on('click',function(){
		$('body').toggleClass("choose-lang");
	});
	$('.header .order').on('click', function(){
		$('body').addClass("popup-is-visible");
	});

	$('.js-popup__close').on('click', function(){
		$('body').removeClass("popup-is-visible");
	});
	$('a#ord_course').on('click', function(e){
			e.preventDefault();
		$('body').addClass("popup-is-visible");
	});

	//menu
	var menuOpenClose = function menuOpenClose(){
		var scrollPos = $(document).scrollTop();
		if (scrollPos > 50)
			$('body').addClass("is-menu-open");
		else
			$('body').removeClass("is-menu-open");
	}
	$(document).on('scroll',menuOpenClose);

	//form
  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });
// effecr
  var $ripples = $('.ripples');

  $ripples.on('click', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  	$(this).removeClass('is-active');
  });


  var course_main = $('.js-slick-course__main');
  var coach_main = $('.js-slick-coach__main');
  var testimonial = $('.js-slider-testimonial');
  var partners = $('.js-slick-partners');
    //if(course_main.lenght>0){
		course_main.slick({
			speed: 600,
			dots: false,
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 2
		});
	//}
		coach_main.slick({
			speed: 600,
			dots: false,
			infinite: true,
			slidesToShow: 5,
			slidesToScroll: 2
		});

		testimonial.slick({
			speed: 600,
			dots: false,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1
		});
		
		partners.slick({
			speed: 600,
			dots: false,
			infinite: true,
			slidesToShow: 7,
			slidesToScroll: 2
		});



});