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


$('#carousel_project').carousel({
  interval: 8000
})

$('#carousel_left').carousel({
  interval: 5000
})

$('#carousel_right').carousel({
  interval: 5000
})

$('.carousel .project_small').each(function(){
  var next = $(this).next();  
  if (!next.length) {
    next = $(this).siblings(':first');
  }

    next.children(':first-child').clone().appendTo($(this));
    for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
        next = $(this).siblings(':first');
      }    
       next.children(':first-child').clone().appendTo($(this));
     }    

});




$('#carousel_left').carousel({
  interval: 3000
});
$('#carousel_right').carousel({
  interval: 3000
});



document.getElementById('hider').onclick = function() {
document.getElementById('more_about').classList.toggle('hidden_content');
document.getElementById('news_more').classList.toggle('reversed');
}
$('#hider').hover(
function(){
     $('#hider').css({'color': '#f90040'});
     $('#show_arrow').addClass('red');
},
function(){
     $('#hider').css({'color': '#158704'});
     $('#show_arrow').removeClass('red');
});



$('.arrow_image').hover(
function(){
    $(this).find('.arrow_image_path').addClass('red');

},
function(){
   
   $(this).find('.arrow_image_path').removeClass('red');
});


$('.arrows').hover(
function(){
    
  $(this).css({'background-image' : 'linear-gradient(109deg, #f80040, #ffb600'});
    $(this).find('.arrow_image_path').addClass('white');

},
function(){
   $(this).css({'background-image' : 'none'});
   $(this).find('.arrow_image_path').removeClass('white');
});