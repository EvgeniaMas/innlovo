<?php
function university_files() {
  wp_enqueue_style( 'animate', get_theme_file_uri('/css/animate.css'));

  wp_enqueue_style( 'bootstrap', get_theme_file_uri('/css/bootstrap.css'));
   

  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
  wp_enqueue_style( 'responsive', get_theme_file_uri('/css/responsive.css'));
  // wp_enqueue_style( 'slick', get_theme_file_uri('/css/slick.css'));
 }

add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('newsLandscape', 511, 370, true);
  add_image_size('large', 759, 315, true);
  
}

add_action('after_setup_theme', 'university_features');

function university_adjust_queries($query) {
  if (!is_admin() AND is_post_type_archive('program') AND is_main_query()) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);
  }

  if (!is_admin() AND is_post_type_archive('event') AND is_main_query()) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            ));
  }
}
add_action('pre_get_posts', 'university_adjust_queries');

function correct_date($cordate = ''){
if ( substr_count($cordate , '---') > 0 ){return str_replace('---', '', $cordate);}
$new_d = array(
'Январь' => ' Января ',
'Февраль' => ' Февраля ',
'Март' => ' Марта ',
'Апрель' => ' Апреля ',
'Май' => ' Мая ',
'Июнь' => ' Июня ',
'Июль' => ' Июля ',
'Август' => ' Августа ',
'Сентябрь' => ' Сентября ',
'Октябрь' => 'Октября ',
'Ноябрь' => ' Ноября ',
'Декабрь' => ' Декабря '
);
return strtr($cordate, $new_d);
}
add_filter('the_date', 'correct_date');
add_filter('get_the_date', 'correct_date');
add_filter('the_time', 'correct_date');
add_filter('get_the_time', 'correct_date');
add_filter('get_post_time', 'correct_date');
add_filter('get_comment_date', 'correct_date');
add_filter('the_modified_time', 'correct_date');
add_filter('get_the_modified_date', 'correct_date');

function true_load_posts(){ 
  $args = unserialize( stripslashes( $_POST['query'] ) );
  $args['paged'] = $_POST['page'] + 1; // следующая страница
  $args['post_status'] = 'publish';
  query_posts( $args );
   if( have_posts() ) : 
    while( have_posts() ): the_post();
 
      get_template_part( 'template-parts/content-news', get_post_format() ); 
    endwhile; 
  endif;
  die();
} 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');