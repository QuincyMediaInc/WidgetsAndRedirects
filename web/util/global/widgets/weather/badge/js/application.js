var slideSpeed = 750;

var slideCount = 0;

var currentSlide = 0;

$(document).ready(function(){
	
	slideCount=parseInt($('#container').attr('slidecount'));
	
	setInterval('rotate()',3000);
	
});

function rotate() {

	$('#rotate .item_' + currentSlide).fadeOut('fast', function(){
		
		
		if(currentSlide == slideCount - 1){
			currentSlide = 0;
		} else {
			currentSlide++;
		}
		
		$('#rotate .item_' + currentSlide).fadeIn('fast');
			
	});


};



	
	
	
