$(function(){
	$('#datepicker').datepicker({
		changeMonth: true,
      	changeYear: true,
      	dateFormat: 'dd-mm-yy',
      	yearRange: '1900:'+(new Date).getFullYear()
	});
	$('.list_slide ul li').on('itemshown',function(){
		var cur_active_height = $(this).find('.content_slide_container').height();
		if(cur_active_height != 'undefined'){
			$(this).parent('.uk-slideshow-items').css('height',cur_active_height+'px')
		}
	});

	$( window ).resize(function() {
		$('.list_slide ul li').trigger('itemshown');
	});
});