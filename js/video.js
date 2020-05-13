(function() {


var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player;
      function onYouTubeIframeAPIReady(container,id) {
        player = new YT.Player(container, {
          videoId: id,
          events: {
            'onReady': onPlayerReady            
          }
        });
      }
      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

  var youtube = document.querySelectorAll( ".youtube" );  
  for (var i = 0; i < youtube.length; i++) {    
    var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";
    var image = new Image();
        image.src = source;
        image.addEventListener( "load", function() {
          youtube[ i ].appendChild( image );
        }( i ) );    
        youtube[i].addEventListener( "click", function() {       
         var id = this.dataset.embed;
             var container = (this).getAttribute('id')+"container"; 
                onYouTubeIframeAPIReady(container, id);

        } );  
  };
 
} )();  