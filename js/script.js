$(function() {

	// $("input[type=tel]").inputmask("+7 ( 999 ) 999 - 99 - 99",{ showMaskOnFocus: true, showMaskOnHover: false });

	// $(".form-file input[type=file]").change(function () {
	// 	let thisGroup = $(this).closest('.form-file');
	// 	let textField = thisGroup.find('.form-file-name');
	// 	var filename = $(this).val().replace(/.*\\/, "");
	// 	if (filename === '') {
	// 		thisGroup.removeClass('is-selected');
	// 		textField.text('Файл не выбран');
	// 	} else {
	// 		thisGroup.addClass('is-selected');
	// 		textField.text(filename);
	// 	}
	// });
	
	try {
		$('.js-select').styler();
	} catch (err) {
		console.log('Не найден елемент для стилизации Styler')
	}

	let rellax;
	try {
		rellax = new Rellax('.rellax', {
			speed: 0.5,
			center: true,
			round: true,
			vertical: true,
		});
	} catch (err) {
		console.log('rellax не найден на странице')
	}
	
	$('[data-fancybox]').fancybox({
		backFocus : false
	});


	$('.hamburger').click(function (e) {
		e.preventDefault();
		$(this).toggleClass('is-active');
		$('.header-nav').toggleClass('is-open');
		$('body').toggleClass('no-scroll');
	});
	
	$('.header-mmenu-title, .header-nav .btn-cross, .body-shadow').click(function (e) {
		e.preventDefault();
		$('.hamburger').trigger('click');
	});


	try {
		var myAccordion = new $.Zebra_Accordion('.accordion', {
			'collapsible': true,
			expanded_class: 'is-active',
			show: false
		});
	} catch (err) {
		console.log('myAccordion не найден на странице')
	}
	

	let photoCarousel = $('.photo-gallery .owl-carousel');
	if (photoCarousel.length > 0) {
		photoCarousel.owlCarousel({
			loop: true,
			margin: 15,
			nav: false,
			dots: false,
			autoWidth: true,
			navText: [],
			center: true,
			responsive: {
				0: {
					items: 2,
					autoWidth: false,
				},
				576: {
					items: 3,
					autoWidth: false,
				},
				992: {
					items: 3,
				},
			}
		});
	}

	let certCarousel = $('.about-cert .owl-carousel');
	if (certCarousel.length > 0) {
		certCarousel.owlCarousel({
			loop: false,
			margin: 15,
			nav: true,
			dots: false,
			navText: [],
			responsive: {
				0: {
					items: 1,
					center: true,
					autoWidth: true,
				},
				576: {
					items: 2,
					center: false,
					autoWidth: false,
				},
				768: {
					items: 1,
					autoWidth: true,
				},
				640: {
					items: 4,
					autoWidth: true,
				}
			}
		});
	}
	let heiCarousel = $('.about-hei .owl-carousel');
	if (heiCarousel.length > 0) {
		heiCarousel.owlCarousel({
			loop: false,
			margin: 15,
			nav: true,
			dots: false,
			navText: [],
			responsive: {
				0: {
					items: 1,
					center: true,
					autoWidth: true,
				},
				576: {
					items: 2,
					center: false,
					autoWidth: false,
				},
				768: {
					items: 1,
					autoWidth: true,
				},
				992: {
					autoWidth: true,
				},
				1200: {
					items: 2
				}
			}
		});
	}
	let reviewsCarousel = $('.about-reviews .owl-carousel');
	if (reviewsCarousel.length > 0) {
		reviewsCarousel.owlCarousel({
			loop: false,
			margin: 15,
			nav: true,
			dots: false,
			navText: [],
			autoWidth: true,
			items: 1,
			responsive: {
				0: {
					rtl: false,
					autoWidth: false,
				},
				768: {
					rtl: true,
				}
			}
		});
	}
	let studentsCarousel = $('.students-slider .owl-carousel');
	if (studentsCarousel.length > 0) {
		studentsCarousel.owlCarousel({
			loop: true,
			margin: 16,
			nav: true,
			mouseDrag: false,
			responsive: {
				0: {
					items: 1,
					center: true,
					autoWidth: true,
				},
				576: {
					items: 2,
					autoWidth: false,
				},
				768: {
					items: 3
				},
				992: {
					items: 3
				},
				1300: {
					items: 4
				}
			}
		})
	}

	function checkResizing() {
		let mediaQuery = document.body.clientWidth;

		if (mediaQuery <= 767) {
			if (rellax) {
				rellax.destroy();
			}
			$('.page').on('click', '.r-tabs .r-tabs-accordion-title', function (e) {
				var anchor = $(this);
				
				$('html, body').stop().animate({
					scrollTop: anchor.offset().top - 50
				}, 500);
			});
		}
	};
	checkResizing();


	$(window).resize(function () {
		$('.accordion .item-content').addClass('h-auto');
		checkResizing();
	});

	// при смене ориентации
	window.addEventListener("orientationchange", function () {
		checkResizing();
	}, false);


	
	var mac = navigator.platform.match(/(Mac|iPhone|iPod|iPad)/i) ? true : false;

  if (!mac) {
    $("html").easeScroll();
	} 
	
	$("img").on("dragstart", function(event) { event.preventDefault(); });

	try {
		var wow = new WOW({
			boxClass: 'wow', // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset: 0, // distance to the element when triggering the animation (default is 0)
			mobile: false, // trigger animations on mobile devices (default is true)
			live: true, // act on asynchronously loaded content (default is true)
			scrollContainer: null // optional scroll container selector, otherwise use window
		});
		wow.init();
	} catch (err) {
		console.log('Не найден елемент для WoW')
	}
	

	$('.preloader').addClass('is-hidden')
	setTimeout(function() {
		$('.preloader').remove();
	}, 300);
});
