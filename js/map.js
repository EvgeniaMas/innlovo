var width_icon, height_icon, width_small, height_small, len, lan;
if (document.body.clientWidth<768){
width_icon = 140;
height_icon = 22;
width_small = 10;
height_small = 10;
len = 59.780626303151685;
lan = 29.96611830688471;
}
else{ 
width_icon = 261;
height_icon = 40;
width_small = 16;
height_small = 16;
len = 59.78095626105727;
lan = 29.965270728836007;
}
ymaps.ready(function(){
var map = new ymaps.Map("custom_map", {
center: [len, lan],
zoom: 16,
controls: ['zoomControl']                  
});
map.behaviors       
.disable('scrollZoom')
.disable('Zoom'); 
var spb = new ymaps.Placemark(
[59.780626303151685,29.96611830688471], {
},
{
iconImageHref: address1, 
iconImageSize: [width_icon, height_icon],           
iconLayout: 'default#image'
}
);
var spb2 = new ymaps.Placemark(
[59.78057221137946,29.965420932540848], {
},
{
iconImageHref: address2, 
iconImageSize: [width_small, width_small],           
iconLayout: 'default#image'
}
);




map.geoObjects    
.add(spb).add(spb2); 


spb.events.add('click', function () {
      $('#consult_modal').modal('show');
}); 
       
});



  
  