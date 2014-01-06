
$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'fade',
		nextEffect	: 'fade',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 100,
				height	: 100
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

function printDiv(){
	$('.PageType_ProjectPage div.typography').printArea();
}