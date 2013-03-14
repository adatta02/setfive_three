jQuery(document).ready(function($){
    
   if( $(".leave-reply").length ){
       $(".leave-reply").parents("a:first").click(function(){
           $(window).scrollTop( $("#disqus_thread").offset().top );
           return false;
       });
   }
    
   $(".main-nav a, .footer-text a").each(function(){
       $(this).data("color", $(this).css("color"));
   });
   
   $(".main-nav a, .footer-text a").hover(function(){
       $(this).animate({color: "#EA4C88"}, 150);
   }, function(){
       $(this).animate({color: $(this).data("color")}, 150);
   });   
   
   $(".metro-tile").click(function(){
	   window.location = $(this).find("a:first").attr("href");
	   return false;
   });
   
   $('#quote-carousel').bind("slid", function(e){
	   $(".carousel-ticker img").attr("src", "/wp-content/themes/setfive_three/images/button-white.png");								
	   var index = $('#quote-carousel .active').index('#quote-carousel .item');
	   $(".carousel-ticker img:eq(" + index + ")").attr("src", "/wp-content/themes/setfive_three/images/button-blue.png");		
   });

   $(".carousel-ticker a").click(function(){
	   $(".carousel-ticker img").attr("src", "/wp-content/themes/setfive_three/images/button-white.png");
	   var index = $(this).index(".carousel-ticker a");
	   $('#quote-carousel').carousel(index);
	   return false;
   });
   
   $("[data-provide='contact-form']").submit(function(){
	   
	  var isError = false;
	  $.each($(this).find("input:text, textarea"), function(){
		 if( $(this).val().length == 0 ){
			 isError = true;
			 $(this).css("border", "1px solid red");
		 }else{
			 $(this).css("border", "");
		 }
	  });
	  
	  if( isError ){
		  return false;
	  }
	  
	  $(this).find("[name='contact[is_human]']").val("0xDEADBEEF");
	  $.post( $(this).attr("action"), $(this).serialize() );
	  
	  var dialog = $(this).find("[data-provide='contact-success']");
	  dialog.slideDown();	  
	  window.setTimeout(function(){dialog.slideUp();}, 4000);	  
	  return false;
   });
   
   function enableSidebarScrollspy(){
   
	   var sidebarZeroColor = jQuery.Color( jQuery("div.content-sidebar h4:first").css("background-color") );
	   var sidebarTargetColor = jQuery.Color( "#EA4C88" );
	   
	   var sidebarPosition = $(".entry-content .content-sidebar").position();
	   var entryContentOffsets = { };   
	   var el;
	   
	   $(".entry-content h3").each(function(){		   
		   el = $(this).nextAll("*:first").length ? $(this).nextAll("*:first") : $(this);		   
	       entryContentOffsets[ $(this).text() ] = el.position().top;
	   });	   
	   
	   jQuery("div.content-sidebar h4 a").click(function(){       
	       var pos = 0;
	       
	       if( jQuery(this).text() in entryContentOffsets ){
	           pos = jQuery(".entry-content h3:contains(" + jQuery(this).text() + ")").position().top;
	       }
	       
	       jQuery(window).scrollTop( pos + 1 ).scroll();
	       	       
	       return false;
	   });
	   
	   $(window).scroll(function(){
	       
	       var scrollSidebar = function(){
	           
	           var windowTop = jQuery(window).scrollTop() > 0 ? jQuery(window).scrollTop() : 1;
	           var diff = 0;
	           
	           if( jQuery(".entry-content .content-sidebar").position().top - sidebarPosition.top < windowTop ){
	               diff = jQuery(window).scrollTop() - jQuery(".entry-content .content-sidebar").position().top;               
	           }
	           
	           diff = diff > 0 ? diff : 0;
	           
	           jQuery(".entry-content .content-sidebar").animate({"padding-top": diff}, 150);	           
	           
	           jQuery("div.content-sidebar h4").each(function(){
	               var pos = $(this).text() in entryContentOffsets ? entryContentOffsets[ $(this).text() ] : 0;
	               var percent = (windowTop / pos) < 1 ? (windowTop / pos) : 1;               	               
	               var newBg = sidebarZeroColor.transition( sidebarTargetColor, percent );    	               
	               
	               $(this).animate( {"background-color": newBg.toHexString() } );
	           });
	       }
	       
	       if( window.sidebarTimeout ){
	           window.sidebarTimeout = window.clearTimeout( window.sidebarTimeout );
	       }
	       
	       window.sidebarTimeout = window.setTimeout( scrollSidebar, 200 );       
	   }).scroll();
	   
   }
   
   if( jQuery(".entry-content .content-sidebar").length ){
	   enableSidebarScrollspy();
   }
   
   var hash = window.location.hash.replace("#", "");
   if( hash.length ){
	   $("a:contains(" + hash + ")").click();
   }
   
});