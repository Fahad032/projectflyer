$(document).ready(function(){

		var	aboutSec = $('.about'),
			aboutPos = aboutSec.offset();
		
		
			function screenSplash(){
				$('#apple-screen img').each(function(i){
					$('#apple-screen img').eq(i).toggleClass('transperant');
				});
	
				setTimeout(function(){
					
						screenSplash();	
				}, 4000);
				

			};
			
			
			screenSplash();
			
			
			
			$('.dropdown').hover(function(){
				$(this).addClass('open');
			}, function(){
				$(this).removeClass('open');
			});
			
			
			
			$('#quote').on('click', function(e){
				var contactQuotePos = $('#contact-Quote').offset().top;
				e.preventDefault();
				$("html, body").animate({'scrollTop': contactQuotePos+'px' });
			});
			
			

});// end of Dom ready
