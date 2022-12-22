jQuery(document).ready(function ($) {
	$( ".menu-toggle" ).click(function() {
		$( "#primary-menu" ).slideToggle();
		$( this ).toggleClass('menu-open')
	});
	// Accordion
	$( ".il_accordion-header" ).click(function() {
		$( this ).siblings( ".il_accordion-body" ).slideToggle();
		$( this ).parent('.il_accordion-item ').toggleClass('open')
	});
	// Tabs
	$('.il_tabs_nav li:first-child').addClass('active');
	$('.il_tabs_nav a').click(function() {

		// Check for active
		$('.il_tabs_nav li').removeClass('active');
		$(this).parent().addClass('active');

		// Display active tab
		let currentTab = $(this).attr('href');
		$('.il_tabs_content .il_tab').hide();
		$(currentTab).show();

		return false;
	  });


	  // Home Hero Triggers

	  $( ".si_close" ).click(function() {
		$( ".si_triggers a" ).removeClass('si_open');
		$( ".tg_slidein.si_open" ).slideToggle().removeClass('si_open');
	});

	$( ".si_trigger.si_open" ).parent().css( "background-color", "red" );


	  $( ".si_triggers a.si-1" ).click(function() {
		$( ".si_triggers a.si-1" ).toggleClass('si_open');
		$( ".si_triggers a:not(.si-1)" ).removeClass('si_open');
		$( ".tg_slidein.si-1" ).slideToggle().toggleClass('si_open');
		$( ".tg_slidein.si_open:not(.si-1)" ).slideToggle().removeClass('si_open');
	});
	$( ".si_triggers a.si-2" ).click(function() {
		$( ".si_triggers a.si-2" ).toggleClass('si_open');
		$( ".si_triggers a:not(.si-2)" ).removeClass('si_open');
		$( ".tg_slidein.si-2" ).slideToggle().toggleClass('si_open');
		$( ".tg_slidein.si_open:not(.si-2)" ).slideToggle().removeClass('si_open');
	});
	$( ".si_triggers a.si-3" ).click(function() {
		$( ".si_triggers a.si-3" ).toggleClass('si_open');
		$( ".si_triggers a:not(.si-3)" ).removeClass('si_open');
		$( ".tg_slidein.si-3" ).slideToggle().toggleClass('si_open');
		$( ".tg_slidein.si_open:not(.si-3)" ).slideToggle().removeClass('si_open');
	});
	$( ".si_triggers a.si-4" ).click(function() {
		$( ".si_triggers a.si-4" ).toggleClass('si_open');
		$( ".si_triggers a:not(.si-4)" ).removeClass('si_open');
		$( ".tg_slidein.si-4" ).slideToggle().toggleClass('si_open');
		$( ".tg_slidein.si_open:not(.si-4)" ).slideToggle().removeClass('si_open');
	});
	$( ".si_triggers a.si-5" ).click(function() {
		$( ".si_triggers a.si-5" ).toggleClass('si_open');
		$( ".si_triggers a:not(.si-5)" ).removeClass('si_open');
		$( ".tg_slidein.si-5" ).slideToggle().toggleClass('si_open');
		$( ".tg_slidein.si_open:not(.si-5)" ).slideToggle().removeClass('si_open');
	});

		// Technologies

		$( ".tg_trigger-1" ).click(function() {
			$( ".tg_trigger-1" ).toggleClass('si_open');
			$( ".tg_trigger.si_open:not(.tg_trigger-1)" ).removeClass('si_open');
			$( ".tg_modal-1" ).slideToggle().toggleClass('si_open');
			$( ".tg_modal.si_open:not(.tg_modal-1)" ).slideToggle().removeClass('si_open');
		});

		$( ".tg_trigger-2" ).click(function() {
			$( ".tg_trigger-2" ).toggleClass('si_open');
			$( ".tg_trigger.si_open:not(.tg_trigger-2)" ).removeClass('si_open');
			$( ".tg_modal-2" ).slideToggle().toggleClass('si_open');
			$( ".tg_modal.si_open:not(.tg_modal-2)" ).slideToggle().removeClass('si_open');
		});

		$( ".tg_trigger-3" ).click(function() {
			$( ".tg_trigger-3" ).toggleClass('si_open');
			$( ".tg_trigger.si_open:not(.tg_trigger-3)" ).removeClass('si_open');
			$( ".tg_modal-3" ).slideToggle().toggleClass('si_open');
			$( ".tg_modal.si_open:not(.tg_modal-3)" ).slideToggle().removeClass('si_open');
		});


		// Initialize Lightbox Carousel

		$('.carousel-main').flickity({
			// options
			cellAlign: 'left',
			contain: true,
			pageDots: false,
		  });

		  $( ".il_lb_triggers a" ).click(function() {
			$( ".il_lb_carousel_wrap" ).addClass('is-open');
		});
		$( ".il_lb_carousel_wrap .close" ).click(function() {
			$( ".il_lb_carousel_wrap" ).removeClass('is-open');
		});

		// Team

		$( ".il_team_member" ).click(function() {
			$( this ).next( ".member_text" ).slideToggle();
			$(".il_team_member").not(this).next( ".member_text" ).hide();
		});
		$( ".member_text .close" ).click(function() {
			$( this ).parent().slideToggle();
		});
});