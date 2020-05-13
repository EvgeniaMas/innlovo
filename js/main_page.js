var scrolled;
window.onscroll = function() {
    scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if(scrolled > 1){
        $(".navbar-fixed-top").css({"background": "rgb(255,255,255, 1)"});
         if(screen.width>1024){
        $(".changed_link").css({"color": "#000"});
        $(".navbar-fixed-top").css({"box-shadow": "0 2px 17px 0 rgba(201, 198, 198, 0.5)"});
    }
    }
     
    if(1 > scrolled){
    	 $(".navbar-fixed-top").css({"background": "transparent"});
    	$(".navbar-fixed-top").css({"box-shadow": "none"});
         
         
          if(screen.width>1024){
         $(".changed_link").css({"color": "#fff"});
     }
    }
}
