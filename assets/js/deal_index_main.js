// JavaScript Document

jQuery(document).ready(function() {
    

	/**
	 * This is the callback function which receives notification
	 * about the state of the next button.
	 */
	function mycarousel_buttonNextCallback(carousel, button, enabled) {

	};
	
	/**
	 * This is the callback function which receives notification
	 * about the state of the prev button.
	 */
	function mycarousel_buttonPrevCallback(carousel, button, enabled) {
		
	};
	
	/**
	 * This is the callback function which receives notification
	 * right after initialisation of the carousel
	 */
	function mycarousel_initCallback(carousel, state) {
		jQuery('#dealCarouselThumbnail li').bind('click', function() {
			jQuery('#dealCarouselThumbnail li.selected').removeClass('selected');
			jQuery(this).addClass('selected');
			carousel.scroll(jQuery.jcarousel.intval(jQuery(this).attr('data')));
			return false;
		});
	};
	
	/**
	 * This is the callback function which receives notification
	 * when an item becomes the first one in the visible range.
	 */
	function mycarousel_itemFirstInCallback(carousel, item, idx, state) {
		jQuery('#dealCarouselThumbnail li.selected').removeClass('selected');
		jQuery('#dealCarouselThumbnail li:nth-child('+idx+')').addClass('selected');
		
		
		/*
		jQuery('.jcarousel-control li.selected').removeClass('selected');
		jQuery('.jcarousel-control a:nth-child('+idx+') li').addClass('selected');
		
		var index = idx -1;
		
		var obj = mainDeals.deals[index];
		
		jQuery('#mainDealCarouselInfoTitle').html(obj.title);
		jQuery('#mainDealCarouselInfoSave').html(obj.saving+"% savings");
		jQuery('#mainDealCarouselInfoLink').attr('href',obj.link);
		*/
	};
	
	/*
	jQuery('#dealCarousel').hover(function() {
		jQuery('#dealCarouselNext,#dealCarouselPrevious').fadeIn();	
	},function() {
		//if( !jQuery('#dealCarouselNext').is(':hover') && !jQuery('#dealCarouselPrevious').is(':hover')) {
		if( !jQuery('#dealCarouselNext').hasClass('hover') && !jQuery('#dealCarouselPrevious').hasClass('hover') ) {
			jQuery('#dealCarouselNext,#dealCarouselPrevious').fadeOut();
		}
		//}
	});
	
	jQuery('#dealCarouselNext,#dealCarouselPrevious').hover(function(){
		jQuery(this).addClass('hover');
	}, function() {
		jQuery(this).removeClass('hover');
	});
	
	*/
	
	jQuery('#dealCarousel').jcarousel({
        scroll: 1,
		wrap: "both",
		buttonNextHTML: "<div id='dealCarouselNext' ></div>",
		buttonPrevHTML: "<div id='dealCarouselPrevious' ></div>",
	
        initCallback:   mycarousel_initCallback,

        buttonNextCallback:   mycarousel_buttonNextCallback,
        buttonPrevCallback:   mycarousel_buttonPrevCallback,

        itemFirstInCallback:  mycarousel_itemFirstInCallback,
        
    });
	
	jQuery("#tabs").tabs();
	
	//jQuery('#dealCarouselNext,#dealCarouselPrevious').hide();
	
	
});
