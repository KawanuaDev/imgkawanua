//@codekit-prepend 'jquery.js';
//@codekit-prepend 'jquery.mobile.custom.js';
//@codekit-prepend 'nprogress.js';
//@codekit-prepend 'fastclick.js';
//@codekit-prepend 'SocialShare.js';
//@codekit-prepend 'jquery.viewport.js';

;(function($) {
	'use strict';
	NProgress.start();
	
	$(function(){		
		FastClick.attach(document.body);
    
    $('.grid .item').each(function(){
      var a = $('<a target="_blank"></a>');
      a.attr('href', $(this).find('img').attr('src'));
      $(this).append(a);
    });
    
    
    $('#nav ul li a').click(function(e){
      var href = $(this).attr("href"),
          offsetTop = href === "#" ? 0 : $(href).offset().top - 20;
      $('html, body').stop().animate({ 
          scrollTop: offsetTop
      }, 300);
      e.preventDefault();
    });
    
    
    
    
    var lastId,
        topMenu = $("#nav"),
        topMenuHeight = 25,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function(){
          var item = $($(this).attr("href"));
          if (item.length) { return item; }
        });
    
    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function(e){
      var href = $(this).attr("href"),
          offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
      $('html, body').stop().animate({ 
          scrollTop: offsetTop
      }, 300);
      e.preventDefault();
    });
    
    
    
		
		$(window).bind('scroll scrollstart scrollstop touchmove',function(){
      // Get container scroll position
      var fromTop = $(this).scrollTop()+topMenuHeight;
      
      // Get id of current scroll item
      var cur = scrollItems.map(function(){
       if ($(this).offset().top < fromTop)
         return this;
      });
      // Get the id of the current element
      cur = cur[cur.length-1];
      var id = cur && cur.length ? cur[0].id : "";
      
      if (lastId !== id) {
         lastId = id;
         // Set/remove active class
         menuItems
           .parent().removeClass("active")
           .end().filter("[href=#"+id+"]").parent().addClass("active");
      }
    });
    
	});
	
	$(window).load(function(){
		NProgress.done();
	});
	
	$(window).resize(function(){
	});

	
})(jQuery);


/*
	// Sync AJAX Request
	var remote = $.ajax({
    type: "GET",
    url: remote_url,
    async: false
	}).responseText;
	
*/