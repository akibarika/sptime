jQuery(document).ready(function($) {
   		function slideDown(o){
			o.addClass('open');
			if(!o.data('topbefore')){
				o.data('topbefore', parseInt(o.css('top')));
				o.data('topafter', o.data('topbefore')+5);
			}
			o.stop(false,false).animate({
				top: o.data('topafter'),
				opacity:1
			},300);
		}
		function slideUp(o){
			if(!o.data('topbefore')){
				o.data('topbefore', parseInt(o.css('top')));
				o.data('topafter', o.data('topbefore')+5);
			}
			o.stop(false,false).animate({
				top: o.data('topbefore'),
				opacity:0
			},300,
				function(){
					o.removeClass('open');
				});
		}
		
		$(".menu-item").hover(
			function(){
				$(this).addClass('borderBottom');
				if ($(this).has('.sub-menu')){
					slideDown($(this).children('.sub-menu'));
				}
			},
			function(){
				$(this).removeClass('borderBottom');
				if ($(this).has('.sub-menu')){
					slideUp($(this).children('.sub-menu'))
				}
			}
		);
		$("#header .weixin").hover(
			function(){
				slideDown($('#header .QR'));
			},
			function(){
				slideUp($('#header .QR'));
			}
		);
		$(".content .weixin").hover(
			function(){
				slideDown($('.content .QR'));
			},
			function(){
				slideUp($('.content .QR'));
			}
		);
		$(window).scroll(function() {
			var scrolltop = $(document).scrollTop();
			if(scrolltop > 1000 
			&& scrolltop < $('body').height() -$(window).height() -300){
				if($('.go-up').css('position') == 'static'){
					$('.go-up').css('position','fixed');
					$('.go-up').css('bottom','-50px');
					$('.go-up').css('right','50px');
					if(!$('.go-up').is(":animated") || $('.go-up').css('position') == 'static'){
						$('.go-up').animate(
						{ bottom : 50}, 100 );
					}
				}
			}else{
				if(!$('.go-up').is(":animated") || $('.go-up').css('position') == 'fixed' ){
					$('.go-up').animate(
						{ bottom : -50}, 100,
						function(){
							$('.go-up').css('position','static');
						}
					);
				}
			}
		});
});
