$('#show_land_form').submit(function(e) { 
e.preventDefault();
	  if ( checkInput($(this))) {
	  	var data = $(this).serialize();    
              $.ajax({
                url:url1,
                method:"POST",
                data:data,
                success:function()          
                { 
               document.getElementById("show_land_form").reset();  
               $("#select_modal").modal('hide');        
	             $("#thank_modal").modal('show');
               },               
               error:  function(xhr, str){
                 // alert('Возникла ошибка: ' + xhr.responseCode);                
               }

            }) 
	  } 
	  return false;
}); 


jQuery(function ($){
$('#order_land').click(function(e){
var current_form = $(this).parent();
    if (checkInput($(current_form))) {
      var data = $(current_form).serialize();    
              $.ajax({
                url:url1,
                method:"POST",
                data:data,
                success:function()          
                { 
               document.getElementById('show_land_form').reset();  
               $("#select_modal").modal('hide');        
               $("#thank_modal").modal('show');
               },               
               error:  function(xhr, str){
                 // alert('Возникла ошибка: ' + xhr.responseCode);                
               }

            }) 
    } 
     return false;
    })           
});






jQuery(function ($){
$('#grounds_funds').click(function(e){
var current_form = $(this).parent();
    if (checkInput($(current_form))) {
      var data = $(current_form).serialize(); 
  
              $.ajax({
                url:url2,
                method:"POST",
                data:data,
                success:function()          
                { 
               document.getElementById('show_land_form').reset();  
               $("#select_modal").modal('hide');        
               $("#thank_modal").modal('show');
               },               
               error:  function(xhr, str){
                 // alert('Возникла ошибка: ' + xhr.responseCode);                
               }

            }) 
    } 
     return false;
    })           
});



jQuery(function ($){
$('#order_call').click(function(e){
var current_form = $(this).parent();
    if (checkInput($(current_form))) {
      var data = $(current_form).serialize(); 
   
              $.ajax({
                url:url2,
                method:"POST",
                data:data,
                success:function()          
                { 
               document.getElementById('show_land_form').reset();  
               $("#consult_modal").modal('hide');        
               $("#thank_modal").modal('show');
               },               
               error:  function(xhr, str){
                 // alert('Возникла ошибка: ' + xhr.responseCode);                
               }

            }) 
    } 
     return false;
    })           
});



function checkInput(form){
     var data = [];	
     var data_check = form.find('.rfield');
      var empty_field = form.find('.comment');
       $(empty_field[0]).css('display', 'none');
       $(empty_field[1]).css('display', 'none');
        if($(data_check[0]).val() == ''){
           $(empty_field[0]).css('display', 'block');
          return false;
        }
        else if($(data_check[1]).val() == ''){
           $(empty_field[1]).css('display', 'block');
          return false;
        }
        else{          
          return true;
        }
}
