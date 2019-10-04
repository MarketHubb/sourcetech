/* jQuery (Footer) */
(function($) {
	// Shorten product description
    // $('.model-page-description').shorten();
    
    // https://www.viralpatel.net/dynamically-shortened-text-show-more-link-jquery/
    
    	// var showChar = 200;
    	// var ellipsestext = "...";
    	// var moretext = "more";
    	// var lesstext = "less";
    	// $('.model-page-description').each(function() {
    	// 	var content = $(this).html();

    	// 	if(content.length > showChar) {

    	// 		var c = content.substr(0, showChar);
    	// 		var h = content.substr(showChar-1, content.length - showChar);

    	// 		var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

    	// 		$(this).html(html);
    	// 	}

    	// });

    	// $(".morelink").click(function(){
    	// 	if($(this).hasClass("less")) {
    	// 		$(this).removeClass("less");
    	// 		$(this).html(moretext);
    	// 	} else {
    	// 		$(this).addClass("less");
    	// 		$(this).html(lesstext);
    	// 	}
    	// 	$(this).parent().prev().toggle();
    	// 	$(this).prev().toggle();
    	// 	return false;
    	// });
    	
    	// Image thumbnail gallery
    	$('#model-page-image-container .image-thumb-container .col img').on('click', function(){
    		$('#model-page-image-container .image-thumb-container .col').each(function(){
    			$(this).removeClass('active');
    		})
    		$(this).closest('.col').addClass('active');
    		let selectedFeatureSrc = $(this).attr('src');
    		$('.model-page-featured-image').attr('src', selectedFeatureSrc);
    	})

})( jQuery );