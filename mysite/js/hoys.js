
$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'fade',
		nextEffect	: 'fade',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
	
	$('.link_to_fancy').click(function(){
		$(".fancybox-thumb:first").trigger('click');
	});
	
	if ($('body').hasClass('PageType_ProjectPage')){
		$('li.navtext a:contains("PROJECTS")').addClass('current');
	}
	
});
