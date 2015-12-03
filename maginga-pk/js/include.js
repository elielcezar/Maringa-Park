  	jQuery("#car").owlCarousel({
  		navigation : true,
	  	items : 6,
	  	itemsCustom : false,
	    itemsDesktop : [1280,4],
	    itemsDesktopSmall : [980,3],
	    itemsTablet: [768,2],
	    itemsTabletSmall: false,
	    itemsMobile : [479,1],

	    lazyLoad : true,

		singleItem : false,
		itemsScaleUp : false,

	  	navigationText : ["prev","next"],
	    rewindNav : true,
	    scrollPerPage : true,
	    pagination : false,
		paginationNumbers: false,

		responsive: true,
		autoHeight : true,
		autoPlay : true,
		
	});

	jQuery("#car2").owlCarousel({
  		navigation : true,
	  	items : 6,
	  	itemsCustom : false,
	    itemsDesktop : [1280,6],
	    itemsDesktopSmall : [980,4],
	    itemsTablet: [768,4],
	    itemsTabletSmall: false,
	    itemsMobile : [479,3],

	  	navigationText : ["prev","next"],
	    rewindNav : true,
	    scrollPerPage : true,
	    pagination : false,
		paginationNumbers: false,

		responsive: true,
		autoHeight : true,
		autoPlay : true,

	});

	jQuery("#car3").owlCarousel({
  		navigation : true,
	  	items : 3,
	  	itemsCustom : false,
	    itemsDesktop : [1280,3],
	    itemsDesktopSmall : [980,2],
	    itemsTablet: [768,2],
	    itemsTabletSmall: false,
	    itemsMobile : [479,1],

	    lazyLoad : true,

		singleItem : false,
		itemsScaleUp : false,

	  	navigationText : ["prev","next"],
	    rewindNav : true,
	    scrollPerPage : true,
	    pagination : false,
		paginationNumbers: false,

		responsive: true,
		autoHeight : true,
		autoPlay : true,
	});

    jQuery("html, body").niceScroll({	
		cursorborder: "#3b3b3b",
		cursorwidth: "6px",
		autohidemode: "false",
	}).resize();

    jQuery(document).ready(function() {
		jQuery(".various").fancybox({
			maxWidth	: 900,
			maxHeight	: 400,
			fitToView	: false,
			width		: '70%',
			height		: '70%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	});
