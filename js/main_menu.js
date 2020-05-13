var height_block;

if(screen.width>1024){
height_block = $('#first_screen').height();
}
else{
height_block = 1;   
}
var scrolled;
window.onscroll = function() {
scrolled = window.pageYOffset || document.documentElement.scrollTop;

if(scrolled > height_block){
$(".main_page_overlay").css({"display": "none"}); 	
$(".navbar-fixed-top").css({"background": "rgb(255,255,255, 1)"}); 
if(screen.width>1024){
$(".navbar-fixed-top").css({"box-shadow": "0 2px 17px 0 rgba(201, 198, 198, 0.5)"});
$(".changed_link").css({"color": "#000"}); 
}
}

if(1 > scrolled){
$(".navbar-fixed-top").css({"background": "transparent"});
$(".navbar-fixed-top").css({"box-shadow": "0 2px 17px 0 rgba(201, 198, 198, 0.5)"});
$(".navbar-fixed-top").css({"box-shadow": "none"});

if(screen.width>1024){
$(".changed_link").css({"color": "#fff"});
$(".main_page_overlay").css({"display": "block"}); 
}
}
}
$('.more_news_slider').hover(
function(){

$('a.main_slider_link').css({'color': '#f90040'});
$('.arrowslider').addClass('red');
},
function(){
$('a.main_slider_link').css({'color': '#158704'});
$('.arrowslider').removeClass('red');
});


