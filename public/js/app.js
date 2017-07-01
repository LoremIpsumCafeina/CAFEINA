$(document).ready(function(){
  
  
  //------------------------------------//
  //Navbar//
  //------------------------------------//
    	var menu = $('.navbar');
    	$(window).bind('scroll', function(e){
    		if($(window).scrollTop() > 140){
    			if(!menu.hasClass('open')){
    				menu.addClass('open');
    			}
    		}else{
    			if(menu.hasClass('open')){
    				menu.removeClass('open');
    			}
    		}
    	});
  
  
  //------------------------------------//
  //Scroll To//
  //------------------------------------//
  $(".scroll").click(function(event){		
  	event.preventDefault();
  	$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
  	
  });
  
  
	//lightbox 
  $(document).ready(function(){
  //cadastro cliente
    $("#cadastroUsuario").click(function(){
      $("#lightbox1").fadeToggle("fast");
      $("#lightbox1").fadeToggle("fast");
    });
    $("#cadastroUsuario").click(function(){
      $("#lightbox1").fadeOut("fast");
      $("#lightbox1").fadeOut("fast");
    });
  });
  
});
