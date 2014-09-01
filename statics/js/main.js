/* main js*/

;(function(win,$) {

  var scroll = {

  	attach:function() {
		$("body").on('click','#scrollTop',function() { 
  			 $('html, body').animate({scrollTop:0},1000);
  			 return false;
  		});	  		
  	},

  	displayOrNot:function() {
  		$(win).scroll(function(){
  			if($(this).scrollTop()>700) {
  				$("#scrollTop").fadeIn(500);
  			} else {
  				$("#scrollTop").fadeOut(500);
  			}
  		});
  	},

  	init:function() {
  		this.attach();
  		this.displayOrNot();
  	}
  };

  scroll.init();

})(window,jQuery);