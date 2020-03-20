(function($) {
"use strict";

	$(".xs-single-portfolio-item").hover(
	  function() {
	    $( this ).siblings().addClass("event_img_text_show");
		  }, function() {
	    $( this ).siblings().removeClass("event_img_text_show");
		  }
	);

})(jQuery);
