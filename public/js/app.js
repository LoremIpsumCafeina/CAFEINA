

$(document).ready(function(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  
  
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
  
  
  // modal cadastro
	$(function(){
    var modalBg = $('.modal-background');
    var modal = $('.modal');

    $('.mostrarModal').click(function(){
      modalBg.fadeIn(200);
      modal.fadeIn(200);
    });

    modalBg.click(function(){
      $(this).fadeOut(200);
      modal.fadeOut(200);
    });
  });

  // modal login
  $(function(){
    var modalBg = $('.modal-background2');
    var modal = $('.modal2');

    $('.mostrarModal2').click(function(){
      modalBg.fadeIn(200);
      modal.fadeIn(200);
    });

    modalBg.click(function(){
      $(this).fadeOut(200);
      modal.fadeOut(200);
    });
  });

  

  



  
});
