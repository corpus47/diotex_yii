$('.selectpicker').selectpicker();
		
$('.datepicker').datepicker({
	language: 'hu',
	weekStart: 1,
	format: 'yyyy.mm.dd.',
	startDate: '0d',
	autoclose: true,
	/*<input pattern="\d*" readonly -> mobile number */
});

$('#productsTab a').click(function (e) {
	e.preventDefault()
	$(this).tab('show')
});

$(window).load(function(){
	$('#basicModal').modal('show');
});

(function($) {
	fakewaffle.responsiveTabs(['xs']);
})(jQuery);

// collapse close opened item
$(document).on('click','.navbar-collapse.in',function(e) {
	if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
		$(this).collapse('hide');
	}
});

$(function () {
	$('.panel-group').on('shown.bs.collapse', function (e) {
    	var offset = $('.panel.panel-default > .panel-collapse.in').offset();
	    if(offset) {
	        $('html,body').animate({
	            scrollTop: $('.panel-collapse.in').siblings('.panel-heading').offset().top
	        }, 500); 
	    }
	});
});

$(function(){
	$(".uni-select select").uniform();
});


$(document).ready(function () {
  $('.tooltip-right').tooltip({
    placement: 'right',
    viewport: {selector: 'body', padding: 2}
  })
  $('.tooltip-bottom').tooltip({
    placement: 'bottom',
    viewport: {selector: 'body', padding: 2}
  })
  $('.tooltip-viewport-right').tooltip({
    placement: 'right',
    viewport: {selector: '.container-viewport', padding: 2}
  })
  $('.tooltip-viewport-bottom').tooltip({
    placement: 'bottom',
    viewport: {selector: '.container-viewport', padding: 2}
  })
});




$('.references-slider').slick({
  autoplay: true,
  autoplaySpeed: 4000,
  dots:true,
  arrows:false,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


$('.about-slider').slick({
  autoplay: true,
  autoplaySpeed: 4000,
  dots:true,
  arrows:false,
});


$('.home-slider').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 400,
  dots:true,
  arrows:true,
  prevArrow: '<i class="arrow fa fa-angle-left"></i>',
  nextArrow: '<i class="arrow fa fa-angle-right"></i>',
});



$( document ).ready(function() {
	$(".GoToArrow").click(function(e){e.preventDefault(); $("html, body").animate({ scrollTop: $('.main').offset().top-150 }, 1000); });
});



if ($(window).innerWidth() <= 767) {
	$('.categories h5').click(function(e){
		e.preventDefault();
		$('.categories ul').slideToggle();
	});
	
	$('.labels h5').click(function(e){
		e.preventDefault();
		$('.labels ul').slideToggle();
	});
}