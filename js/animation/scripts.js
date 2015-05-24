

/* Настройки анимации */
$(document).ready(function() {

    if(null === navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad|android)/)){

		// ниже вставляем код, который НЕ БУДЕТ РАБОТАТЬ на iphone|ipod|ipad|android
		$('.scroll-animate').each(function () {
			var block = $(this);
			$(window).scroll(function() {
				var top = block.offset().top;
				var bottom = block.height()+top;
				top = top - $(window).height() + 150;
				var scroll_top = $(this).scrollTop();
				if ((scroll_top > top) && (scroll_top < bottom)) {
					if (!block.hasClass('animate')) {
						block.addClass('animate');
						block.trigger('animateIn');
					}
				} else {
					block.removeClass('animate');
					block.trigger('animateOut');
				}
			});	
		});

		$('.counts').on('animateIn', function() {
			var inter = 0;
			$(this).find('.animation').each(function() {
				var block = $(this);
				setTimeout(function() {
					block.css('opacity', 1);
					block.addClass('fadeInDown');
				}, inter*200);
				inter++;
			});
		}).on('animateOut', function() {
			$(this).find('.animation').each(function() {
				$(this).removeClass('fadeInDown');
			});
		});

		$('.hww, .reviews').on('animateIn', function() { //Vtyztv
			var inter = 0;
			$(this).find('.animation').each(function() {
				var block = $(this);
				setTimeout(function() {
					block.css('opacity', 1);
					block.addClass('fadeInUp');
				}, inter*200);
				inter++;
			});
		}).on('animateOut', function() {
			$(this).find('.animation').each(function() {
				$(this).removeClass('fadeInUp');
			});
		});
		
		$('.dc1, .dc2, .dc3, .dc4, .contacts').on('animateIn', function() {
			var inter = 0;
			$(this).find('.animation').each(function() {
				var block = $(this);
				setTimeout(function() {
					block.css('opacity', 1);
					block.addClass('fadeInUp');
				}, inter*200);
				inter++;
			});
		}).on('animateOut', function() {
			$(this).find('.animation').each(function() {
				$(this).removeClass('fadeInUp');
			});
		});

	}

	if(null !== navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad|android)/)){ 
		$('head').append('<style>.animation {visibility:visible!important}.contact_map {webkit-transform: scale(1, 1);-moz-transform: scale(1, 1);-o-transform: scale(1, 1);transform: scale(1, 1);}</style>');
	}

});


