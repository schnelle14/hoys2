<script type="text/javascript">
$(document).ready(function() {
//	$(".fancybox-thumb").fancybox({
//		prevEffect	: 'none',
//		nextEffect	: 'none',
//		helpers	: {
//			title	: {
//				type: 'outside'
//			},
//			thumbs	: {
//				width	: 50,
//				height	: 50
//			}
//		}
//	});
	
	$('.fancybox-thumb').fancybox();
	
	$('.link_to_fancy').click(function(){
		$(".fancybox-thumb:first").trigger('click');
	});
	
});
</script>