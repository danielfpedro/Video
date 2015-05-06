$(function(){


	$('.box-video').hover(function(e) {
	    $(this).find('.img-overlay').stop().fadeIn('slow');
	    $(this).find('.video-btns-action').stop().fadeIn('fast');
	}, function(e) {
		$(this).find('.img-overlay').stop().fadeOut('slow');
	    $(this).find('.video-btns-action').stop().fadeOut('fast');
	});

	$('#player-wrap').click(function(){
		var url = $('#player').attr('data-url');
		$('#player-wrap').css({'background-image': 'none', 'background-color': '#000'});
		$('#player-placeholder').hide();
		$('#player').attr('src', url).show();
	});

	// $('div.box-video-action-btns-row').mouseover(function(e) {
	//     e.stopPropagation();
	// }).mouseout(function(e) {
	//     e.stopPropagation();
	// });
});