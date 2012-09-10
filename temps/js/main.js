// JavaScript Document

jQuery(document).ready(function() {
    
	var mainDeals = jQuery.parseJSON(mainDealCarousels);
	
	
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
		jQuery('.jcarousel-control a').bind('click', function() {
			jQuery('.jcarousel-control li.selected').removeClass('selected');
			carousel.scroll(jQuery.jcarousel.intval(jQuery(this).attr('data')));
			jQuery(this).children('li').addClass('selected');
			return false;
		});
	};
	
	/**
	 * This is the callback function which receives notification
	 * when an item becomes the first one in the visible range.
	 */
	function mycarousel_itemFirstInCallback(carousel, item, idx, state) {
		
		jQuery('.jcarousel-control li.selected').removeClass('selected');
		jQuery('.jcarousel-control a:nth-child('+idx+') li').addClass('selected');
		
		var index = idx -1;
		
		var obj = mainDeals.deals[index];
		
		jQuery('#mainDealCarouselInfoTitle').html(obj.title);
		jQuery('#mainDealCarouselInfoSave').html(obj.saving+"% savings");
		jQuery('#mainDealCarouselInfoLink').attr('href',obj.link);
		
	};
	
	
	
	
	jQuery('#mainDealsCarousel').jcarousel({
        scroll: 1,
		auto: 3,
		wrap: "both",
		buttonNextHTML: "<div id='mainDealCarouselNext'></div>",
		buttonPrevHTML: "<div id='mainDealCarouselPrevious'></div>",
	
        initCallback:   mycarousel_initCallback,

        buttonNextCallback:   mycarousel_buttonNextCallback,
        buttonPrevCallback:   mycarousel_buttonPrevCallback,

        itemFirstInCallback:  mycarousel_itemFirstInCallback,
        
    });
});
