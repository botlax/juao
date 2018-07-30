

(function($) {

	var	$window = $(window),
		$body = $('body'),
		$wrapper = $('#wrapper'),
		$header = $('#header'),
		$nav = $('#nav'),
		$main = $('#main'),
		$navPanelToggle, $navPanel, $navPanelInner;

	// Breakpoints.
		breakpoints({
			default:   ['1681px',   null       ],
			xlarge:    ['1281px',   '1680px'   ],
			large:     ['981px',    '1280px'   ],
			medium:    ['737px',    '980px'    ],
			small:     ['481px',    '736px'    ],
			xsmall:    ['361px',    '480px'    ],
			xxsmall:   [null,       '360px'    ]
		});

		$window.on('load', function() {
			if($('#nav-wrapper').length){
				$('#header-main #social-nav2').css({top:'-' + $('#header-main').offset().top + 'px'});
				$('#header-main').css({position: 'relative'});
				$('#main-nav2').css({opacity: 0});
			}
		});

		$(document).scroll(function(){
			var wScroll = $(document).scrollTop();
			var winHeight = $(window).height();

			if($('#nav-wrapper').length){

				if( (wScroll - $('#nav-wrapper').offset().top) >= 0 ){
					$('#header-main #social-nav2').css({top: 0 + 'px'});
					$('#header-main').css({position: 'fixed'});
					$('#main-nav2').css({opacity: 1});
				}
				else{
					$('#header-main #social-nav2').css({top: '' + (wScroll - $('#header-main').offset().top) + 'px'});
					$('#header-main').css({position: 'relative'});
					$('#main-nav2').css({opacity: 0});
				}
			}

			if($('#team').length){

				var teamScroll = wScroll - ($('#team').offset().top - winHeight);

				if( teamScroll >= 0 ){
					$('#team').css({'background-position':'0% '+((teamScroll/2)-(winHeight/2))+'px'});
				}
				else{
					$('#team').css({'background-position':'0% -'+winHeight/2+'px'});
				}
			}

			
		});

	// Scrolly.
		$('.scrolly').scrolly();

				breakpoints.on('>medium', function() {

					
				});

			// Hide intro on scroll (<= small).
			breakpoints.on('<=small', function() {

					

			});

	if($('.clients-wrapper').length){
		$('.clients-wrapper > article img').hover(function(){
			$(this).parent().addClass('show');
		},function(){
			$(this).parent().removeClass('show');
		});
	}

	$('.vjs-poster, .vjs-big-play-button').each(function(){
		$(this).click(function(){
			$(this).parent().parent().find('.content-wrapper').fadeOut(500);
			$(this).parent().parent().find('.vjs-close').addClass('show');
			$(this).parent().addClass('vjs-playing vjs-has-started');
			$(this).parent().attr('id');
			var videoPlayer = videojs($(this).parent().attr('id'));
		});
	});


	$('.project-poster').each(function(){
		$(this).click(function(){
			$(this).parent().find('.project-close').show();
			$(this).parent().find('.project-poster').hide();
			$(this).parent().find('.content-wrapper').hide();
			$(this).hide();
		});
	});

	$('.project-close').each(function(){
		$(this).click(function(){
			$(this).parent().find('.project-poster').show();
			$(this).parent().find('.content-wrapper').show();
			$(this).hide();
		});
	});

	$('.vjs-close').each(function(){
		$(this).click(function(){
			$(this).removeClass('show');
			$(this).parent().find('.content-wrapper').fadeIn(500);
			videoId = $(this).parent().find('div[id^=project-video]').attr('id');
			var videoPlayer = videojs(videoId);
			videoPlayer.pause();
			videoPlayer.currentTime(0);
			$(this).parent().find('div[id^=project-video]').removeClass('vjs-playing vjs-has-started');
			$(this).parent().find('div[id^=project-video]').addClass('vjs-paused');
		});
	});


	//Mobile Toggle

	var rotate, spread;

	var transformNav = function(){
		var elem = $(this);
		elem.addClass('align');

		rotate = setTimeout(function(){
			elem.addClass('rotate');
		},300);

		spread = setTimeout(function(){
			elem.addClass('spread');
		},600);
	};

	var revertNav = function(){
		clearTimeout(rotate);
		clearTimeout(spread);
		var elem = $(this);
		elem.removeClass('spread');

		setTimeout(function(){
			elem.removeClass('rotate');
		},300);

		setTimeout(function(){
			elem.removeClass('align');
		},600);
	};

	$('.mobile-toggle').hover(transformNav,revertNav);

	$('.mobile-toggle').click(function(){
		transformNav;
		$('.mobile-nav-container').addClass('show');

		setTimeout(function(){
			$('#mobile-nav').addClass('show');
		},300);

		setTimeout(function(){
			$('.mobile-nav-container #mobile-nav ul li a').each(function(i){
  				setTimeout(function(){
  					$('.mobile-nav-container #mobile-nav ul li a').eq(i).addClass('show');
  				},100 * (i+1));
  			});
		},500);

	});

	$('.close-mobile-nav, .mobile-nav-overlay').click(function(){
		
		$('.mobile-nav-container #mobile-nav ul li a').each(function(i){
			setTimeout(function(){
				$('.mobile-nav-container #mobile-nav ul li a').eq(i).removeClass('show');
			},100 * (i+1));
		});

		setTimeout(function(){
			$('#mobile-nav').removeClass('show');
		},500);

		setTimeout(function(){
			$('.mobile-nav-container').removeClass('show');
		},800);

		setTimeout(revertNav ,1000);
	});


		
	if($('.project-slider').length){
		$('.project-slider').slick({
	        autoplay: true,
	  		slidesToScroll: 1,
	  		swipeToSlide: false,
	  		arrows: false,
	  		fade: true,
	  		pauseOnFocus: false,
	  		pauseOnHover: false,
	     });
	}
	
})(jQuery);

