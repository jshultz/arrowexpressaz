$(document).ready(function() {

$(".stripeMe tr").mouseover(function() {$(this).addClass("over");}).mouseout(function() {$(this).removeClass("over");});
$(".stripeMe tr:even").addClass("alt");						   

			$(function(){
				  /*
$("#datepicker").datepicker({dateFormat: 'yy-mm-dd'}); 
*/

$('input').filter('.datepicker').datepicker({dateFormat: 'yy-mm-dd',  minDate: +1});

			 });

    $( "#requestQuote" ).validate({
        rules: {
            human: "required",
            human_again: {
                equalTo: "#human"
            }
        }
    });

    $( "#emailContact" ).validate({
        rules: {
            human: "required",
            human_again: {
                equalTo: "#human"
            }
        }
    });

        
	jQuery(function(){
		jQuery('ul.sf-menu').superfish();
	});
	
		$('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});

}); 

