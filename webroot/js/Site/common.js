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

	$('#modal-playlists').on('show.bs.modal', function (event) {
		var modal = $(this);
		modal.find('.modal-body').html('Carregando...');	
	});
	$('#modal-playlists').on('show.bs.modal', function (event) {
		var modal = $(this);
		var url = modal.data('base-url');
		var timeoutValue = 1000;
		setTimeout(function(){
			modal.find('.modal-body').load(url);	
		}, timeoutValue);	
	});

	// $('div.box-video-action-btns-row').mouseover(function(e) {
	//     e.stopPropagation();
	// }).mouseout(function(e) {
	//     e.stopPropagation();
	// });
});