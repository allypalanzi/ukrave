//************ Hovers for Our Photos *********************//

$(function (){
        $('#una_photo').hover(function(){
			$('h3[rel="unaportlink"]').show();
        }
        ,function(){
        $('h3[rel="unaportlink"]').hide();
    });
 });

$(function (){
        $('#ally_photo').hover(function(){
        	$('h3[rel="allyportlink"]').show();
        }
        ,function(){
        $('h3[rel="allyportlink"]').hide();
    });
 });