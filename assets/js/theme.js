jQuery(function($){
	$(document).ready(function(){
		$('.hero-carousel').slick({
			lazyLoad: 'ondemand',
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 6000,
			infinite: true,
			speed: 1000,
			fade: true,
			cssEase: 'linear'
		});


		if ($(window).scrollTop() >= 100) {
			$('.page-header').addClass('header-sticky');
		} else {
			$('.page-header').removeClass('header-sticky');
		}
	});

	$(window).scroll(function(){
		if ($(window).scrollTop() >= 100) {
			$('.page-header').addClass('header-sticky');
		} else {
			$('.page-header').removeClass('header-sticky');
		}
	});

	$('.nav-open').off('click').on('click', function(){
		if($('body').hasClass('nav-opened'))
			$('body').removeClass('nav-opened');
		else
			$('body').addClass('nav-opened');
	});

	$('.submenu-opener').off('click').on('click', function(){
		if(!$(this).hasClass('opened')) {
			$(this).next('.menu-popup').slideDown();
			$(this).addClass('opened');
		} else {
			$(this).next('.menu-popup').slideUp();
			$(this).removeClass('opened');
		}
	});

	$('.scroll-to-top').on('click',function(e){
		$("html,body").animate({scrollTop:0}, 1000);
		e.preventDefault();
		return false;
	});
	
	$('.scroll-to-top').on('touchstart',function(e){
		$("html,body").animate({scrollTop:0}, 1000);
		e.preventDefault();
		return false;
	});
});