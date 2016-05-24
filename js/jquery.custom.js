(function($){
	
	"use strict";
	
    $(document).ready(function(){
		
		/* Hero height
		================================================== */
		var windowHeight = $(window).height();
		
		$('.hero').height( windowHeight );
		
		$(window).resize(function() {
			
			var windowHeight = $(window).height();
			$('.hero').height( windowHeight );
			
		});
		
				
		/* Header / Navigation Animation
		================================================== */		
		var $header = $( '#header-section' );
		
		$( '.ha-waypoint' ).each( function(i) {
			
			/* needed vars */
			var $this = $( this ),
				animClassDown = $this.data( 'animateDown' ),
				animClassUp = $this.data( 'animateUp' );
			
			$this.waypoint(function(direction) {
				
				if( direction === 'down' && animClassDown ) {
					$header.attr('class', 'ha-header ' + animClassDown );
				}
				else if( direction === 'up' && animClassUp ){
					$header.attr('class', 'ha-header ' + animClassUp );
				}			
			
			}, { offset: '-1px' } );
			
		});
		var counterSlide=0;
		$('.main-slider').flexslider({
						animation: "fade",
						directionNav:false,
						slideshow:false,
						animationSpeed: 1000, 
						initDelay: 0,         
						useCSS: true, 
						touch:false,
						video: false,
						start: function(slider) { //to handle first slide when slider first loads
						counterSlide=0;
					ut_word_rotator();
							var currSlide = slider.slides.eq(slider.currentSlide);
							currSlide.find('.flex-caption').addClass("animate-in");
					
						},
						before: function(slider) { // handles rest of slides
						
							var nextSlide = slider.slides.eq(slider.animatingTo);
							var currSlide = slider.slides.eq(slider.currentSlide);
							if(currSlide==0){$('.bg-white').fadeOut();}else{$('.bg-white').fadeIn();}
							currSlide.find('.flex-caption').addClass("animate-out").removeClass("animate-in"); 
							nextSlide.find('.flex-caption').addClass("animate-in").removeClass("animate-out"); 
					
						}  ,
						after: function(slider) { 
						
						
						}
					});
		
		/* Word Rotator
		================================================== */		
		var ut_word_rotator = function() {
        	var counter = 0;                
			var ut_rotator_words = [
				'We are <span>purple dash</span>',
				'SERVICES  <span>WORLDWIDE</span>',
				'We love <span>brands</span>',
				'We love <span>Coding</span>',
				'We are <span>creative</span>',
				'We are <span>ENTHUSIASTS </span>',
				'We are <span>passionate</span>',
				'We are <span>curious</span>',
				'We love to <span>Design</span>',
			] ;
		
			setInterval(function() {
			$('.hero-holder').animate({ opacity : 1 });
				console.log('counter -> ' + counter);
				console.log('counterSlide -> ' + counterSlide);
				if(counter==ut_rotator_words.length){counter=0;}
				if(counterSlide==0){
					
					$('.main-slider').flexslider("next") ;
					counterSlide++;
					
					$(".hero-title").fadeOut(500,'',function(){
						$(this).html(ut_rotator_words[counter]).fadeIn(500);
						counter++
					});
					
					
					}else{
						if(counter%3==0){
							console.log('aqui 1');
							counterSlide++;
							$('.main-slider').flexslider("next") ;
							$(".hero-title").fadeOut(500,'',function(){
						$(this).html(ut_rotator_words[counter]).fadeIn(500);
						counter++
					});
							}else{
							console.log('aqui 2');
								$(".hero-title").fadeOut(500,'',function(){
						$(this).html(ut_rotator_words[counter]).fadeIn(500);
						counter++
					});
								}
						}
				if(counterSlide==4){
							console.log('aqui 3');
					counterSlide=0;
					$('.hero-holder').fadeOut(500);
					counter--;
					$(".hero-title").html(''/*ut_rotator_words[counter]*/).fadeOut(500);
				}
				
			}, 3000 );
		}
		
		
		
		var ut_word_rotator2 = function() {
                
			var ut_rotator_words2 = [
				'WE ARE CREATIVE',
				'WE ARE AWESOME',
				'WE ARE FOCUS',
				'WE ARE COOL',
				'WE ARE CURIOUS',
				'WE LOVE CHALLENGES'
			] ,
			counter2 = 0;                
			
			setInterval(function() {
			$(".we-are").fadeOut(function(){
					$(this).html(ut_rotator_words2[counter2=(counter2+1)%ut_rotator_words2.length]).fadeIn();
				});
			}, 3000 );
		}
		
		//ut_word_rotator2();
		
	var ut_word_rotator3 = function() {
                
			var ut_rotator_words3 = [
				" <h2 class='ut-parallax-quote-title '>Design is not just what it looks like and feels like. Design is how it works. .</h2><span class='ut-parallax-quote-name'>- Steve Jobs</span>",
						" <h2 class='ut-parallax-quote-title '>Logic will get you from A to Z. Imagination will take you everywhere. </h2><span class='ut-parallax-quote-name'>- Albert Einstein</span>",
								" <h2 class='ut-parallax-quote-title '>An essential aspect of creativity is not being afraid to fail. </h2>",
										" <h2 class='ut-parallax-quote-title '>Design is where science and art break even.</h2>"
				
			] ,
			counter3 = 0;                
			
			setInterval(function() {
			$(".quotes").fadeOut(function(){
					$(this).html(ut_rotator_words3[counter3=(counter3+1)%ut_rotator_words3.length]).fadeIn();
				});
			}, 8000 );
		}
		
		ut_word_rotator3();
		
		
			
		
		
		
		/* Slogan / Welcome Message Animation
		================================================== */
		$(window).load(function() {
			
			
			
		});
		
		/* YouTube Background Video
		================================================== */
		/* only play video on desktop devices */
		if( !device.tablet() && !device.mobile() ) {
			
			$(".player").mb_YTPlayer();
						
		} else {
			
			/* as a fallback we add a special class to the header which displays a poster image */ 
			$('.hero').addClass('hero-poster-image');
			
			/* re attach the inital background image classes from index.html */
			$('#parallax-section-2').addClass('parallax-banner-2');			
			$('#service-section').addClass('parallax-banner-3');
			$('#social-section').addClass('parallax-banner-4');
			$('#contact-section').addClass('parallax-banner-5');
			$('#counter-section').addClass('parallax-banner-6');
			
			/* hide player */
			$(".player").hide();
			
		}
		
		
		/* Parallax Effect - disabled for mobile devices
		================================================== */	
		if( !device.tablet() && !device.mobile() ) {
			
			$('.parallax-banner-1').parallax("50%", 0.4); // Welcome Image
			$('.parallax-banner-2').parallax("50%", 0.4); // Philosophy 
			$('.parallax-banner-3').parallax("50%", 0.4); // Service
			$('.parallax-banner-4').parallax("50%", 0.4); // Connected
			$('.parallax-banner-5').parallax("50%", 0.4); // Contact
			$('.parallax-banner-6').parallax("50%", 0.4); // Counter
			
			/* Since there is an issue with fixed background on mobile devices we add this style attribute in here */
			$('.parallax-section').each(function(index, element) {
                $(this).addClass('fixed');
            });
			
		}
		
		/* Scroll to Main
		================================================== */
		$('.logo a[href*=#]').click( function(event) { 
				
			event.preventDefault();
			
			$('#ut-navigation a').removeClass('selected');
			$('#ut-navigation a:first-child').addClass('selected');
			
			$.scrollTo( $(this).attr('href') , 650, { easing: 'swing' , offset: -105 , 'axis':'y' } );			
			
		});
		
		$('#to-about-section').click( function(event) {
			
			event.preventDefault();
			$.scrollTo( $('.wrap') , 650, {  offset: 1 , 'axis':'y' } );
			
		});
				
		/* Scroll to Sections
		================================================== */
		$('#ut-navigation a[href*=#]').click( function(event) { 
				
			event.preventDefault();
			$.scrollTo( $(this).attr('href') , 650, { easing: 'swing' , offset: 5 , 'axis':'y' } );			
			
		});
		
		
		$('#cta-section a[href*=#]').click( function(event) { 
				
			event.preventDefault();
			$.scrollTo( $(this).attr('href') , 650, { easing: 'swing' , offset: 5 , 'axis':'y' } );			
			
		});
		
		/* Scroll to Top
		================================================== */
		$(window).scroll(function() {
			if($(this).scrollTop() !== 0) {
				$('.toTop').fadeIn();    
			} else {
				$('.toTop').fadeOut();
			}
		});
		 
		$('.toTop').click(function() {
			$('body,html').animate({ scrollTop:0 } , 1000);
		});  
		
		
		
		
		/* reflect scrolling in navigation
		================================================== */
		$('.nav-waypoint').each(function() {
        	
			$(this).waypoint( function( direction ) {
				
				if( direction === 'down' ) {
				
					var containerID = $(this).find('section:first').attr('id');
					
					/* update navigation */
					$('#ut-navigation a').removeClass('selected');
					$('#ut-navigation a[href*=#'+containerID+']').addClass('selected');
				
				}
							
			} , { offset: '150px' } );
			
			$(this).waypoint( function( direction ) {
				
				if( direction === 'up' ) {
				
					var containerID = $(this).find('section:first').attr('id');
					
					/* update navigation */
					$('#ut-navigation a').removeClass('selected');
					$('#ut-navigation a[href*=#'+containerID+']').addClass('selected');
				
				}
							
			} , { offset: function() { return -$(this).height() + 155; } });
			  	  
        });
		
		/* Maginfic POPUP for Portfolio
		================================================== */
		$('.portfolio-popup').magnificPopup({
			type: 'image',
			removalDelay: 500, //delay removal by X to allow out-animation
			callbacks: {
			beforeOpen: function() {
				   this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
				   this.st.mainClass = 'mfp-zoom-in';
				}
			},
			closeOnContentClick: true,
			fixedContentPos: false
		});
		
		$('.portfolio-popup-video').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-zoom-in',
			removalDelay: 160,
			preloader: false,	
			fixedContentPos: false
		});
		$('.portfolio-ajax').magnificPopup({
			disableOn: 700, 
			type: 'ajax',
			ajax: {
  settings: null, // Ajax settings object that will extend default one - http://api.jquery.com/jQuery.ajax/#jQuery-ajax-settings
  // For example:
  // settings: {cache:false, async:false}

  cursor: 'mfp-ajax-cur', // CSS class that will be added to body during the loading (adds "progress" cursor)
  tError: '<a href="%url%">The content</a> could not be loaded.' //  Error message, can contain %curr% and %total% tags if gallery is enabled
}
		});
		
		/* Flexslider with Video
		================================================== */
		
		/*$(window).load(function(){
			
			// Vimeo API nonsense
		  	var player = document.getElementById('player_1');
		  	$f(player).addEvent('ready', ready);
		  
			function addEvent(element, eventName, callback) {
				(element.addEventListener) ? element.addEventListener(eventName, callback, false) : element.attachEvent(eventName, callback, false);
			}
			
			function ready(player_id) {
				var froogaloop = $f(player_id);
			  
				froogaloop.addEvent('play', function(data) {
				  $('.flexslider').flexslider("pause");
				});
				
				froogaloop.addEvent('pause', function(data) {
				  $('.flexslider').flexslider("play");
				});
			}
			
			$('.flexslider').fitVids().flexslider({
				animation: "slide",
				controlNav: "thumbnails",
				smoothHeight: true,
				start: function(slider){
			  		$('body').removeClass('loading');
				},
				before: function(slider){
					$f(player).api('pause');
			  	}
		  	});
			
		}); */
		
		/* Flexslider without Video
		================================================== */
		$(window).load(function(){
			
			$('.flexslider').flexslider({
				
				animation: "slide",
				controlNav: "thumbnails",
				smoothHeight: true,
				start: function(slider){
			  		$('body').removeClass('loading');
				}

		  	});
			
		});
		
		
		/* Testimonial Carousel
		================================================== */
		$("#avatarSlider").flexslider({
			animation: "fade",
			directionNav:false,
			controlNav:false,
			smoothHeight: true,
			animationLoop:true,
			slideshowSpeed: 3000,		
			slideToStart: 0,
		});
		
		$("#quoteSlider").flexslider({
			animation: "fade",
			directionNav:true,
			controlNav:false,		
			smoothHeight: true,
			animationLoop:true,
			sync: "#avatarSlider",
			slideshowSpeed: 3000,			
			slideToStart: 0,
		});
		
		
		
		/* Contact Form
		================================================== */
		
		/* placeholder fix for older browser */
		if( !Modernizr.csstransforms3d ) {
			$('[placeholder]').focus(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
					input.val('');
					input.removeClass('placeholder');
				}
			}).blur(function() {
				var input = $(this);
				if (input.val() == '' || input.val() == input.attr('placeholder')) {
					input.addClass('placeholder');
					input.val(input.attr('placeholder'));
				}
			}).blur().parents('form').submit(function() {
				$(this).find('[placeholder]').each(function() {
					var input = $(this);
					if (input.val() == input.attr('placeholder')) {
						input.val('');
					}
				})
			});
		}
		

		/* form processing */
		$("#contact-form").submit(function(){
			
			$(this).find('[placeholder]').each(function() {
				
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
					input.val('');
				}
				
			});
			var ruta = $('#ruta').val();
			var processor = ruta + "/contact.php",
				str = $(this).serialize();
			
			$("#contact-form .success-message, #contact-form .alert-message, #contact-form .error-message ").hide();
			
			$.ajax({
				   
			   type: "POST",
			   url: processor,
			   data: str,
			   success: function(data) {
				   	
					$("#contact-form").append('<span class="feedback"></span>');
				    				   
					if(data === 'OK') {
					
						$("#contact-form .success-message").fadeIn();
						$("#contact-form").each(function(){
							this.reset();
						});
					  
					} else if (data === 'ERROR') {
					
						$("#contact-form .error-message").fadeIn();
					
					} else {
						
						$("#contact-form .alert-message").fadeIn().html( data );
						
					}
				   
			   }
				   
			});
		
			return false;
			
		});
		
		
		/* Milestone Counter
		================================================== */		
		$('#counter-section').waypoint(function(direction) {			
								
			if( direction === 'down' ) {
				
				$('.counter').each(function(){
											
					var counter = $(this).data('counter');
					
					if( !$(this).find('.count').hasClass('animated') ) {
											
						$(this).find('.count').countTo({
							from: 0,
							to: counter,
							speed: 2000,
							refreshInterval: 100,
							onComplete: function() {
								$(this).addClass('animated');
							}
						});
					
					}
					
				});
										
			}
				
		} , { offset: '50%' } );
		
		
		/* Scroll Animations
		================================================== */
		
		/* about section */
		function animate_about() {
				
			$('.about-box').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.animate({opacity: 1} , 600 );
				},  k * 50 );
				
			});
		
		}
		
		/* member box */
		function animate_member() {
				
			$('.member-box').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.animate({opacity: 1} , 600 );
				},  k * 50 );
				
			});
		
		}
		
		/* service section */
		function animate_service() {
				
			$('.box-fade').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.animate({opacity: 1} , 600 );
				},  k * 50 );
				
			});
		
		}
		
		/* portfolio section */
		function animate_portfolio() {
				
			$('.portfolio-section .portfolio-box').css('opacity' , 0).each(function( k ) {
			
				var el = $(this);
				
				$(this).waypoint(function(direction) {
					
					if( direction === 'down' && !$(this).hasClass('animated') ) {
						
						setTimeout ( function () {
							el.animate({opacity: 1} , 600 );
						}, k * 50 );
						
					}							
				
				}, { offset: '80%' } );
				
			});
		
		}
		
		/* counter section */
		function animate_counter() {
				
			$('.counter-box').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.animate({opacity: 1} , 600 );
				},  k * 50 );
				
			});
		
		}
		
		/* client section */
		function animate_clients() {
				
			$('.client-logo').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.animate({opacity: 1} , 600 );
				},  k * 50 );
				
			});
		
		}
		
		/* social section */
		function animate_social() {
				
			$('.social-network .social-link').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.animate({opacity: 1} , 600 );
				},  k * 50 );
				
			});
		
		}
		
		function animate_sections() {
		
			$('.wrap').waypoint(function(direction) {
												
				if( direction === 'down' && !$(this).hasClass('animated') ) {
					
					setTimeout ( function () {
							$('#about-section header').find('.section-title').animate({ opacity: 1 });
					}, 200 );
					
					setTimeout ( function () {
							$('#about-section header').find('.section-slogan').animate({ opacity: 1 });
					}, 600 );
					
					setTimeout( animate_about , 1000 );
					
					$(this).addClass('animated');
						
				}
				
			} , { offset: '95%' } );
			
			
			/* first parallax section */
			$('#parallax-section-2').waypoint(function(direction) {
				
				if( direction === 'down' && !$(this).hasClass('animated') ) {
					
					setTimeout ( function () {
							$('#parallax-section-2 header').find('.parallax-title').animate({ opacity: 1 });
					}, 200 );
					
					setTimeout ( function () {
							$('#parallax-section-2 header').find('.parallax-slogan').animate({ opacity: 1 });
					}, 600 );
					
					$(this).addClass('animated');
										
				}
			
			} , { offset: '95%' } );
			
			
			
			/* team section */
			$('#team-section').waypoint( function( direction ) {
								
				if( direction === 'down' && !$(this).hasClass('animated') ) {
					
					setTimeout ( function () {
							$('#team-section header').find('.section-title').animate({ opacity: 1 });
					}, 200 );
					
					setTimeout ( function () {
							$('#team-section header').find('.section-slogan').animate({ opacity: 1 });
					}, 600 );
					
					setTimeout( animate_member , 1000);
					
					$(this).addClass('animated');
						
				}
				
			} , { offset: '95%' } );
			
			
			$('#service-section').waypoint( function( direction ) {
								
				if( direction === 'down' && !$(this).hasClass('animated') ) {
					
					setTimeout ( function () {
							$('#service-section header').find('.parallax-title').animate({ opacity: 1 });
					}, 200 );
					
					setTimeout ( function () {
							$('#service-section header').find('.parallax-slogan').animate({ opacity: 1 });
					}, 600 );
					
					setTimeout( animate_service , 1000);
					
					$(this).addClass('animated');			
					
				}
			
			} , { offset: '70%' } );
			
						
			$('#portfolio-section').waypoint( function( direction ) {
								
				if( direction === 'down' && !$(this).hasClass('animated') ) {
					
					setTimeout ( function () {
							$('#portfolio-section header').find('.section-title').animate({ opacity: 1 }).addClass('animated');
					}, 200 );
					
					setTimeout ( function () {
							$('#portfolio-section header').find('.section-slogan').animate({ opacity: 1 }).addClass('animated');
					}, 600 );
					
					setTimeout( animate_portfolio , 1000);
					
					$(this).addClass('animated');		
					
				}
			
			} , { offset: '80%' } );
			

			$('#counter-section').waypoint( function( direction ) {
								
				if( direction === 'down' && !$(this).hasClass('animated') ) {
					
					setTimeout ( function () {
							$('#counter-section header').find('.parallax-title').animate({ opacity: 1 });
					}, 200 );
					
					setTimeout ( function () {
							$('#counter-section header').find('.parallax-slogan').animate({ opacity: 1 });
					}, 600 );
					
					setTimeout( animate_counter , 1000);
					
					$(this).addClass('animated');			
					
				}
			
			} , { offset: '70%' } );			
			

			$('#social-section').waypoint( function( direction ) {
								
				if( direction === 'down' && !$(this).hasClass('animated') ) {
					
					setTimeout ( function () {
							$('#social-section header').find('.parallax-title').animate({ opacity: 1 });
					}, 200 );
					
					setTimeout ( function () {
							$('#social-section header').find('.parallax-slogan').animate({ opacity: 1 });
					}, 600 );
					
					setTimeout( animate_social , 1000);	
					
					$(this).addClass('animated');		
					
				}
			
			} , { offset: '80%' } );
			
			
			/* testimonial-section*/		
			$('#client-section').waypoint( function( direction ) {
				
				if( direction === 'down' && !$(this).hasClass('animated') ) {
										
					setTimeout( animate_clients , 300 );	
					
					$(this).addClass('animated');
									
				}
			
			} , { offset: '90%' } );
			
			
			/* testimonial-section*/		
			$('#testimonial-section').waypoint( function( direction ) {
				
				if( direction === 'down' && !$(this).hasClass('animated') ) {
					
					setTimeout ( function () {
							$('#testimonial-section header').find('.section-title').animate({ opacity: 1 });
					}, 200 );
					
					setTimeout ( function () {
							$('#testimonial-section header').find('.section-slogan').animate({ opacity: 1 });
					}, 600 );
					
					setTimeout ( function () {
							$('.ut-testimonials').animate({ opacity: 1 });
					}, 600 );
					
					$(this).addClass('animated');
									
				}
			
			} , { offset: '80%' } );
			
					
			$('#contact-section').waypoint( function( direction ) {
								
				if( direction === 'down' && !$(this).hasClass('animated') ) {
					
					setTimeout ( function () {
							$('#contact-section header').find('.parallax-title').animate({ opacity: 1 });
					}, 200 );
					
					setTimeout ( function () {
							$('#contact-section header').find('.parallax-slogan').animate({ opacity: 1 });
					}, 600 );
					
					setTimeout ( function () {
							$('.contact-wrap').animate({ opacity: 1 });
					}, 600 );
					
					$(this).addClass('animated');		
					
				}
			
			} , { offset: '80%' } );		
		
		
		}
		
		/* no animation for mobile and ie 8 */
		if( !device.tablet() && !device.mobile() && Modernizr.csstransitions ) {
			animate_sections();
		}
		
	});
	
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
	
})(jQuery);

