$(function(){


	$('.box-video').hover(function(e) {
	    $(this).find('.img-overlay').fadeIn('fast');
	    $(this).find('.box-video-action-btns, .box-artists-actions-btns').stop().fadeIn('slow');
	}, function(e) {
		$(this).find('.img-overlay').fadeOut('fast');
	    $(this).find('.box-video-action-btns, .box-artists-actions-btns').stop().fadeOut('slow');
	    $('[data-toggle="dropdown"]').parent().removeClass('open');
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