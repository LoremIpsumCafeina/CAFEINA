

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

  $(".editarNomeDiv").click(function(){
    $("#editarNome").prop("readonly", false);
  });

  $(".editarEmailDiv").click(function(){
    $("#editarEmail").prop("readonly", false);
  });

  //foto
  $('#uparFoto').click(function(){
    $('#upload').click();
  });

  //modal

    $("a[rel=modal]").click( function(ev){
        ev.preventDefault();
 
        var id = $(this).attr("href");
 
        var alturaTela = $(document).height();
        var larguraTela = $(window).width();
     
        //colocando o fundo preto
        $('#mascara').css({'width':larguraTela,'height':alturaTela});
        $('#mascara').fadeIn(1000); 
        $('#mascara').fadeTo("slow",0.8);
 
        var left = ($(window).width() /2) - ( $(id).width() / 2 );
        var top = ($(window).height() / 2) - ( $(id).height() / 2 );
     
        $(id).css({'top':top,'left':left});
        $(id).show();   
    });
 
    $("#mascara").click( function(){
        $(this).hide();
        $(".window").hide();
    });
 
    $('.fechar').click(function(ev){
        ev.preventDefault();
        $("#mascara").hide();
        $(".window").hide();
    });

  
});

  
  $('.upload').on("change", function(){
    alert('Arquivo selecionado!');

  });

  //editarComentario
  $(".editarComentarioBtn").click(function(){
    $("#editarComentarioInput").prop("readonly", false);
  });

  

