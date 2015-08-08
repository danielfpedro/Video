$(function(){

	var btnLikeText = 'Seguir';
	var btnUnLikeText = 'Remover';
	var btnLikingText = 'Seguindo';

	var btnLikeClass = 'btn-default';
	var btnUnLikeClass = 'btn-danger';
	var btnLikingClass = 'btn-primary';

	$('button#btn-like').click(function(){
		var $this = $(this);
		var liked = $this.data('liked');
		if (!liked) {
			$this.removeClass('btn-default').addClass('btn-primary');
			$this.text('Seguindo');
		} else {
			$this.removeClass('btn-danger').addClass('btn-default');
			$this.text('Seguir');
		}
		$this.data('liked', !liked);
	});

	$('button#btn-like').hover(function(){
		var $this = $(this);
		var liked = $this.data('liked');
		if (liked) {
			$this.removeClass('btn-primary').addClass('btn-danger');
			$this.text('Remover');
		}
	}, function(){
		var $this = $(this);
		var liked = $this.data('liked');
		if (liked) {
			$this.removeClass('btn-danger').addClass('btn-primary');
			$this.text('Seguindo');
		}
	});

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

	//Truncar texto, precisa de largura em PX
	var $trunc = $('.truncate');
	var truncParentW = $trunc.parent().width();
	$trunc.css('width', truncParentW + 'px');

	// $('div.box-video-action-btns-row').mouseover(function(e) {
	//     e.stopPropagation();
	// }).mouseout(function(e) {
	//     e.stopPropagation();
	// });
});