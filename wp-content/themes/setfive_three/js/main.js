jQuery(document).ready(function($){
   
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
	   });
	   
   }
   
   if( jQuery(".entry-content .content-sidebar").length ){
	   enableSidebarScrollspy();
   }
   
});