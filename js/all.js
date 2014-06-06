
jQuery(document).ready(function($) {
   		
		$(".menu-item-has-children").mouseenter(
			function(event){
				event.stopPropagation();
				if ($(this).children('.sub-menu').hasClass('open')){
						
				} else {
					$(this).addClass('borderBottom');
					$(this).children('.sub-menu').addClass('open');	
				}	
			}
		);
		$('.menu-item-has-children').mouseleave(
			function(event){
				event.stopPropagation();
				if ($(this).children('.sub-menu').hasClass('open')){
					$(this).removeClass('borderBottom');
					$(this).children('.sub-menu').removeClass('open');
				} else {
					$(this).removeClass('borderBottom');
					$(this).children('.sub-menu').removeClass('open');
				}
			}
		);
		$("#header .weixin").mouseenter(
			function(event){
				event.stopPropagation();
				if ($('#header .QR').hasClass('open')){
						
				} else {
					$('#header .QR').addClass('open');	
				}	
			}
		);
		$("#header .weixin").mouseleave(
			function(event){
				event.stopPropagation();
				if ($('#header .QR').hasClass('open')){
					$('#header .QR').removeClass('open');	
				} else {
					$('#header .QR').removeClass('open');	
				}	
			}
		);	
		$(".content .weixin").mouseenter(
			function(event){
				event.stopPropagation();
				if ($('.content .QR').hasClass('open')){
						
				} else {
					$('.content .QR').addClass('open');	
				}	
			}
		);
		$(".content .weixin").mouseleave(
			function(event){
				event.stopPropagation();
				if ($('.content .QR').hasClass('open')){
					$('.content .QR').removeClass('open');	
				} else {
					$('.content .QR').removeClass('open');	
				}	
			}
		);				
});
