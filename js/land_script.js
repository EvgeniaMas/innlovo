var distance;
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
window.onload = function() {
var occupied = [];
var ordered = []; 
var busy = document.getElementsByClassName('occupied_grounds'); 
var bron = document.getElementsByClassName('ordered_grounds'); 
for (var i=0; i<busy.length; i++){
occupied.push(busy[i].innerHTML);
} 
for (var i=0; i<occupied.length; i++){  
var id = Number(occupied[i]);
var schema = id+"schema";
document.getElementById(id).style.fill = "#EF0000";
document.getElementById(schema).style.fill = "#EF0000";
document.getElementById(schema).style.stroke = "#EF0000";
} 
for (var i=0; i<bron.length; i++){
ordered.push(bron[i].innerHTML);
} 
for (var i=0; i<ordered.length; i++){
var id = Number(ordered[i]);
var schema = id+"schema";
document.getElementById(id).style.fill = "#ff8c00";
document.getElementById(schema).style.fill = "#ff8c00";
document.getElementById(schema).style.stroke = "#ff8c00";
} 
};

var initTable1 = function () {
var table = $('#ground_table');
var oTable = table.dataTable({
responsive: true,

"order": [
[0, 'asc']
],
// set the initial value
"pageLength": 6,
"dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row '<'table_controls'p>>", // horizobtal scrollable datatable
});
}

jQuery(document).ready(function() {
initTable1();
});

var min_zoom;
var x;
var lands_map = document.getElementById('map');

if(screen.width<1600){
min_zoom = 1.45;
}
else if(screen.width<768 && screen.width<1025){
min_zoom = 1.45;
}
else if(screen.width<768){
 min_zoom = 2.3; 
}
else{
  min_zoom= 1.2;
}
x = min_zoom;

var button_plus = document.getElementById('zoom_in');
var button_minus = document.getElementById('zoom_out');      
button_plus.addEventListener('click', function(e) {


if(x<min_zoom){
x = min_zoom;
}
else{
x = (x+0.1);
lands_map.style.transform = 'scale(' + x + ')';  
}
});

button_minus.addEventListener('click', function(e) { 
if(x<min_zoom){
return false;
 }
 else{
  x = (x-0.1);
  lands_map.style.transform = 'scale(' + x + ')';

}
});
var buttonItems = document.querySelectorAll('.map_land'),
index, button;
var selected_land;
for (index = 0; index < buttonItems.length; index++) {
button = buttonItems[index];
button.addEventListener('click', function (event) {        
event.preventDefault();
selected_land = event.target.getAttribute('id');       
var modal_id = "#" + selected_land+"modal";
var modal = document.getElementById(modal_id);    
$(modal_id).modal('show');
});
}
var textItems = document.querySelectorAll('.map_text'),
index2, text;
var selected_land;
for (index2 = 0; index2 < textItems.length; index2++) {
text = textItems[index2];
text.addEventListener('click', function (event) {        
event.preventDefault();
selected_lands = event.target.getAttribute('data-id');       
var modal_ids = "#" + selected_lands+"modal";
var modals = document.getElementById(modal_ids);    
$(modal_ids).modal('show');
});
}

function open_choice_land(choice){
$('#select_modal').modal('show'); 
document.getElementById('address_input').value = choice;
}

 $('#order_consult').click(function(){
    $('#consult_modal').modal('show');
});
