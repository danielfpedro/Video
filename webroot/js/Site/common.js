$(function(){


	$('.box-video').hover(function(e) {
	    $(this).find('.image-wrap img').stop().fadeTo('fast', 0.5);
	    $(this).find('.box-video-action-btns').stop().fadeIn('slow');
	}, function(e) {
		$(this).find('.image-wrap img').stop().fadeTo('fast', 1);
	    $(this).find('.box-video-action-btns').stop().fadeOut('slow');
	    $('[data-toggle="dropdown"]').parent().removeClass('open');
	});
	// $('div.box-video-action-btns-row').mouseover(function(e) {
	//     e.stopPropagation();
	// }).mouseout(function(e) {
	//     e.stopPropagation();
	// });
});