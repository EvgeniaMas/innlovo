jQuery(function($){
	$('#true_loadmore').click(function(){
		if (current_page != max_pages){
          $('#true_loadmore > .loadmore_text').text('Загружаю'); 
        }
        else{
        	return;
        }

		
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, 
			data:data, 
			type:'POST', 
			success:function(data){
				if( data ) { 					
					$('#true_loadmore').before(data); 
					$('#true_loadmore > .loadmore_text').text('Показать еще');
					current_page++; 
					if (current_page == max_pages){	
                      no_news_left();
					} 
				} else {
				   no_news_left(); 
										 
				}
			}
		});
	});
});

function no_news_left(){
$('#true_loadmore').removeClass('all_news');
$('#news_more').addClass('reversed');
$('#true_loadmore').css('cursor', 'default');	
}

$('#true_loadmore').hover(
function(){
	if($(this).hasClass('all_news')){
    $('#true_loadmore > .loadmore_text').css({'color': '#f90040'});
    $('#show_arrow').addClass('red');
	}
	else{
		return;
	} 
},
function(){
    $('#true_loadmore > .loadmore_text').css({'color': '#158704'});
   $('#show_arrow').removeClass('red');
});
