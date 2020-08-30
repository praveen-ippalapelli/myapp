/*var social_sticky_state = $('#social-sticky').attr('state');*/
let sst = 300;
if(screen.width <= 500){
	$('#social-sticky-btn').click(function(){
		if ($('#social-sticky').attr('state') == "close") {
			$( "#social-sticky" ).animate({
				left: "-1.5%"
			}, sst);
			$('#social-sticky').attr('state', 'show');
		}
		else if($('#social-sticky').attr('state') == "show") {
			$( "#social-sticky" ).animate({
				left: "-3rem"
			}, sst);
			$('#social-sticky').attr('state', 'close');
		}
	});
}