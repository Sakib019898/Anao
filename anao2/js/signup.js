$(document).ready(function(){
	$('.tab').click(function(){
		var x =  $(this).attr('id');
		if(x=='traveler'){
			$('#customer').removeClass('select');
			$('#traveler').addClass('select');
			$('#travelerbox').show();
			$('#customerbox').hide();
		}
		else{
			$('#traveler').removeClass('select');
			$('#customer').addClass('select');
			$('#customerbox').show();
			$('#travelerbox').hide();
		}
	});
});