<<<<<<< HEAD
$('.mobilelink').click(function(){
  $('#navarrow').css('margin-top','-221px');
});

=======
// ************** SMOOTH SCROLL ***************//

    

$(function (){
    
  $("a.anchorLink").anchorAnimate()
});

jQuery.fn.anchorAnimate = function(settings) {

  settings = jQuery.extend({
    speed : 1100
  }, settings); 
  
  return this.each(function(){
    var caller = this
    $(caller).click(function (event) {  
      event.preventDefault()
      var locationHref = window.location.href
      var elementClick = $(caller).attr("href")
      
      var destination = $(elementClick).offset().top;
      $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
        window.location.hash = elementClick
      });
        return false;
    })
  })
}

// ************** END SMOOTH SCROLL ***************//

  




>>>>>>> css/js cleaning
//************ Mobile Nav Pulldown *********************//
$(function (){
  $('#mobilenavbutton').toggle(function(){
    $('#mobilenav').css('margin-top','0px');
    $("#navarrow").css({
    '-webkit-transform': 'rotate(180deg)',
    '-moz-transform': 'rotate(180deg)',
    '-ms-transform': 'rotate(180deg)',
    '-o-transform': 'rotate(180deg)',
    'transform': 'rotate(180deg)',
  })},
    function(){
    $('#mobilenav').css('margin-top','-221px');    
    $("#navarrow").css({
    '-webkit-transform': 'rotate(0deg)',
    '-moz-transform': 'rotate(0deg)',
    '-ms-transform': 'rotate(0deg)',
    '-o-transform': 'rotate(0deg)',
    'transform': 'rotate(0deg)',
  });
});
  });
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



//************ FIT TEXT *********************//
/*
* FitText.js 1.0
*
* Copyright 2011, Dave Rupert http://daverupert.com
* Released under the WTFPL license 
* http://sam.zoy.org/wtfpl/
*
* Date: Thu May 05 14:23:00 2011 -0600
*/

(function( $ ){
    
  $.fn.fitText = function( kompressor, options ) {
       
    // Setup options
    var compressor = kompressor || 1,
        settings = $.extend({
          'minFontSize' : Number.NEGATIVE_INFINITY,
          'maxFontSize' : Number.POSITIVE_INFINITY
        }, options);
    
    return this.each(function(){

      // Store the object
      var $this = $(this); 
        
      // Resizer() resizes items based on the object width divided by the compressor * 10
      var resizer = function () {
        $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
      };

      // Call once to set.
      resizer();
                
      // Call on resize. Opera debounces their resize by default. 
      $(window).on('resize', resizer);
        
    });

  };

})( jQuery );

//************ END FITTEXT *********************//


