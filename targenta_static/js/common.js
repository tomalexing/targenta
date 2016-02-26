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

    var  course = null;
	$('.header .lang sub,.header .lang span').on('click',function(){
		$('body').toggleClass("choose-lang");
	});
	$('.header .order').on('click', function(){
		$('body').addClass("popup-is-visible");
	});

	$('.js-popup__close').on('click', function(){
		$('body').removeClass("popup-is-visible");
		course = null;
	});
	$('a#ord_course').on('click', function(e){
		e.preventDefault();
		$('body').addClass("popup-is-visible");
		course = $(e.target.closest('.course__pricing')).siblings()[0].childNodes[0].childNodes[0].childNodes;
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
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 5000,
		});
	//}
		coach_main.slick({
			speed: 600,
			dots: false,
			infinite: false,
			slidesToShow: 5,
			slidesToScroll: 2
		});

		testimonial.slick({
			speed: 600,
			dots: false,
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1
		});
		
		partners.slick({
			speed: 600,
			dots: false,
			infinite: false,
			slidesToShow: 5,
			slidesToScroll: 2
		});


		 function tabs(){
		// 	// hint appearance
			var hoverhandle_in = function() {
				console.log(this)
				$(this).css('visibility','visible');
				var name = $(this).data('name');
				$('.'+name).addClass('is-viewing');
				$(this).closest('.top__bg-svg')[0].classList.add('is-drawn'+name.substr(-1,1));
				$('.'+name).closest('.tab-container')[0].classList.add('is-drawn');
			}
			//hoverhandle_in.call($('.tab-hover[data-name="tab4"]'));
			var hoverhandle_out = function() {
				//console.log('out');
					console.log(this)
				$(this).css('visibility','hidden');
				var name = $(this).data('name');
				$(this).closest('.top__bg-svg')[0].classList.remove('is-drawn'+name.substr(-1,1));
				$('.'+name).closest('.tab-container')[0].classList.remove('is-drawn');
				$('.tab').removeClass('is-viewing');
				$(this).find('.system__hint').removeClass('is-visible');
				$('.' + name).removeClass('is-visible');
			}
			//hoverhandle_out.call($(['data-name="tab1"']);
			$('.tab-hover').hover(hoverhandle_in, hoverhandle_out);
			setTimeout(hoverhandle_in.bind($('.tab-hover[data-name="tab4"]')),400);
			setTimeout(hoverhandle_out.bind($('.tab-hover[data-name="tab4"]')),3000);

		 }

		tabs();


		$(".start__submit").click(function(e){

		    e.preventDefault(); // if the clicked element is a link

		    //...
		    console.log('in');

		    var data = { action: 'siteWideMessage', 'more':'values' };

		    $.post('http://simpla/wp-admin/admin-ajax.php', data, function(response) {
		        console.log(response);
		    });

		});

		var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
		var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);

		if( !isChrome && !isSafari){

			$('button:not(.order)').on('click', function(event){
				var href = $(this).children();
				if(!href.is('#ord_course')){
					window.location = $(_self).children().attr('href');
				}

			});

			$('a#ord_course').on('click', function(e){
				e.preventDefault();
				$('body').addClass("popup-is-visible");
				course = $(e.target.closest('.course__pricing')).siblings()[0].childNodes[0].childNodes[0].childNodes;
			});
		}
});


$(function() {
    $('.module__course .module__course__wrap-slider').each(function(i, elem) {
        $(elem)
            .find('.slider__item')   // Only children of this row
            .matchHeight({byRow: false}); // Row detection gets confused so disable it
    });
});

(function() {
    var indexOf = [].indexOf || function(prop) {
        for (var i = 0; i < this.length; i++) {
            if (this[i] === prop) return i;
        }
        return -1;
    };
    window.getElementsByClassName = function(className,context) {
        if (context.getElementsByClassName) return context.getElementsByClassName(className);
        var elems = document.querySelectorAll ? context.querySelectorAll("." + className) : (function() {
            var all = context.getElementsByTagName("*"),
                elements = [],
                i = 0;
            for (; i < all.length; i++) {
                if (all[i].className && (" " + all[i].className + " ").indexOf(" " + className + " ") > -1 && indexOf.call(elements,all[i]) === -1) elements.push(all[i]);
            }
            return elements;
        })();
        return elems;
    };
})();