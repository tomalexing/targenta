$(document).ready(function() {

	// //smoothscroll start
	// $('a[href^="#"]').on('click', function (e) {
	//     e.preventDefault();
	//     $(document).off("scroll");

	//     $('.start_nav a').each(function () {
	//         $(this).removeClass('is-active');
	//     })
	//     $(this).addClass('is-active');

	//     var target = this.hash,
	//         menu = target;
	//     $target = $('[name='+target.substring(1)+']');

	// 	$('html, body').stop().animate({
	// 	    'scrollTop': $target.offset().top 
	// 	}, 500, 'swing', function () {
	// 	    window.location.hash = target;
	// 	    $(document).on("scroll", onScroll);
	// 	});
	// 	$('.mobile__menu').trigger('click');
		

	// });
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
});