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
	$('.header .lang sub,.header .lang span').on('click',function(){
		$('body').toggleClass("choose-lang");
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

		$("form#formReservation, form#formReservation1, form#formReservation2, form#formReservation3").on("submit", function(event) {
			event.preventDefault();
			//console.log($(this).serialize() );
			if(!bound) $("div").on( "click", removeErrorOnBlur );
			var $self =$(this);
		    if(!validation($self.attr("id"))) {
		        $.ajax({
		            url: $self.attr("action"),
		            data: $self.serialize(),
		            type: 'post',
		            dataType: "html",
		            success: function( data, textStatus, jQxhr ) {
		              //console.log("data is "+ data)
			            var $input= $("form#" + $self.attr("id")+" .start__submit input");
				        $input.parent().append("<strong class='success'>РЈСЃРїРµС€РЅРѕ</strong>");
				        $("form#" + $self.attr("id")+" .start__input input").on('change',function(){$input.next().fadeOut()});
						//setInterval(function(){$input.next().fadeOut()},1000);
						//$("form#" + $self.attr("id")+" .start__input input").val("") ;
						$('.js-popup-success').addClass('is-visible');

		        	}
		        });

		    }
		    return false;
		});


		function validation (formId) {
		    if($('form#'+ formId +' .success')[0] ) $('form#'+ formId +' .success').remove();
		    $('form#'+ formId +' .field-error').remove();
		    $('form#'+ formId +' .start__input').removeClass('inputError');
		    var hasError = false;
		    $('form#'+ formId +' .requiredField').each(function() {
		        if(jQuery.trim($(this).val()) == '' || jQuery.trim($(this).val()) == jQuery.trim($(this).attr('placeholder'))){
		            $(this).parent().append('<strong class="field-error">Р­С‚Рѕ РѕР±СЏР·Р°С‚РµР»СЊРЅРѕРµ РїРѕР»Рµ.</strong>');
		            $(this).parent().addClass('inputError');
		            hasError = true;
		        } else {
		            if($(this).hasClass('email')) {
		                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		                if(!emailReg.test(jQuery.trim($(this).val()))){
		                    $(this).parent().append('<strong class="field-error">Р’РІРµРґРёС‚Рµ РєРѕСЂСЂРµРєС‚РЅС‹Р№ Р°РґСЂРµСЃ РїРѕС‡С‚С‹.</strong>');
		                    $(this).parent().addClass('inputError');
		                    hasError = true;
		                } 
		            } else if($(this).hasClass('phone')) {
		                var phoneReg = /^\+?[0-9 ]*$/;
		                if(!phoneReg.test(jQuery.trim($(this).val()))){
		                    $(this).parent().append('<strong class="field-error">Р’РІРµРґРёС‚Рµ РєРѕСЂСЂРµРєС‚РЅС‹Р№ РЅРѕРјРµСЂ.</strong>');
		                    $(this).parent().addClass('inputError');
		                    hasError = true;
		                } 
		            } else if($(this).hasClass('date')) {
		                var dateReg = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
		                if(!dateReg.test(jQuery.trim($(this).val()))){
		                    $(this).parent().append('<strong class="field-error">Please enter a valid date.</strong>');
		                    $(this).parent().addClass('inputError');
		                    hasError = true;
		                } 
		            } else if($(this).hasClass('time')) {
		                var dateReg = /^[0-9]{2}:[0-9]{2}$/;
		                if(!dateReg.test(jQuery.trim($(this).val()))){
		                    $(this).parent().append('<strong class="field-error">Please enter a valid time.</strong>');
		                    $(this).parent().addClass('inputError');
		                    hasError = true;
		                } 
		            } else if($(this).hasClass('persons')) {
		                var personsReg = /^[1-9]{1}[0-9]{0,1}$/;
		                if(!personsReg.test(jQuery.trim($(this).val()))){
		                    $(this).parent().append('<strong class="field-error">Please enter a valid number of persons.</strong>');
		                    $(this).parent().addClass('inputError');
		                    hasError = true;
		                } 
		            }
		        }
			});

		    return hasError;
		}


});