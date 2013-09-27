$('document').ready(function(){
	$('.navigation li').hover(
		function(){
			if($(this).hasClass('hover')){
				$(this).stop(true, false).animate({'height': '30px'}, 150);
			}
		},
		function(){
			if($(this).hasClass('hover')){
				$(this).stop(true, false).animate({'height': '26px'}, 150);
			}
		}
	);
	
	//$('.navigation ul.dropdown a').css('opacity', 0);
	
	$('.navigation li.blog').hover(
		function(){
			if(!$(this).hasClass('hover')){
				$(this).find('ul.dropdown').stop(true, false).slideDown(150);
			}
		},
		function(){
			if(!$(this).hasClass('hover')){
				$(this).find('ul.dropdown').stop(true, false).slideUp(150);
			}
		}
	);
	
	$('#gen-y').click(function(){
		$('#recession').slideDown();
		$('#push-up').animate({'top':'-30px'});	
	});
	
	$('#recession').click(function(){
		$('#growth').slideDown();
		$('#push-up').animate({'top':'-60px'});		
	});
	
	$(".fancybox").fancybox(); 
});