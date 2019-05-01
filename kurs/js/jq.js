$(document).ready(function(){
	const menu = $(".menu_horizontal > div > a");
	var headerH = $("header").height();
	var menuH = $(".menu_horizontal").height();
	var footerH = $("footer").height();
    var windowH = $(window).height();
    
    $(".contentLogIn").css("min-height", windowH-footerH-menuH-headerH+39+"px");

	$(".component_right").css("min-height", windowH-footerH-menuH-headerH+39+"px");
	var contentRightHeight = $(".component_right").height();
	$(".component_left").css("height", contentRightHeight+39+"px");
	
	$(document).hover(function(){
		contentRightHeight = $(".component_right").height();
		$(".component_left").css("height", contentRightHeight+39+"px");
	});
	menu.click(function(){
		$(this).siblings().slideToggle();
	});
	menu.mouseover(function(){
		$(this).parent().animate({backgroundColor: '#fafafa'},400);
		$(this).animate({backgroundColor: '#0082ff',color: 'white'},400);
		$(this).mouseout(function(){
			$(this).parent().animate({backgroundColor: '#0082ff'},200);
			$(this).animate({backgroundColor: '#fafafa',color: '#0082ff'},300);
		});
	});
	$(".button").click(function(){
		$("#english").css("visibility","visible");
	});
});