$(function(){

	$('#header').addClass('header-opaque');
	$(window).scroll(function(){
		var $this = $(this);
		if ($this.scrollTop() > 50) {
			$('#header').removeClass('header-opaque');
		} else {
			$('#header').addClass('header-opaque');
		}
	});

});