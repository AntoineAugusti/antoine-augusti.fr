
		  $("#menu .content a").click(function(){
		  	var div_show = $(this).attr("data-div");
		  	$(".hide:visible").stop().slideUp(1000, function(){
		  		$(div_show).stop().slideDown(1000);
		  	});
		  });
		  
		  $("#menu .content a").mouseover(function(){
		  		var current_link = $(this);
		      $("#menu .content a").not(current_link).stop().animate({"opacity": "0.5"}, "slow");
		    }).mouseout(function(){
		     $("#menu .content a").stop().animate({"opacity": "1"}, "slow");
		    });
		  $("#menu .content a").click(function () {
			$("#menu .content a").removeClass('selected');
			$(this).addClass('selected');
			});
		  