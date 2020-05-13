<!DOCTYPE html>
<html class="sites_pages" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/img/logo.png') ?>">
    <?php wp_head(); ?>
  </head>
<body>
<div class="wrapper">
<div class="container-fluid"> 
  <div class="header_top bordered_navigation">
    <nav class="navbar navbar-fixed-top ">
      <div class="inner_menu_content">
        <a class="navbar-brand" href="<?php echo site_url() ?>"><img class="logo" src="<?php echo get_theme_file_uri('/img/logo.svg') ?>"></a>
          <div class="navbar-header wave_header">
          <button id="mobile_menu" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">           
          </button>          
        </div>       
        <div class="collapse navbar-collapse scroll-nav" id="bs-example-navbar-collapse-1" >
          <ul class="nav navbar-nav">
            <li class="mobile_menu_title">Меню</li>
            <li><a href="<?php echo site_url() ?>">Главная</a></li>
            <li><a href="<?php echo site_url('/о-проекте') ?>">О проекте</a></li>
            <li><a  href="<?php echo site_url('/участки') ?>">Участки</a></li> 
            <li><a href="<?php echo site_url('/преимущества') ?>">Преимущества</a></li>
            <li><a class="current_active" href="<?php echo site_url('/новости') ?>">Новости</a></li>
            <li><a  href="<?php echo site_url('/контакты') ?>">Контакты</a></li>           
          </ul>            
        </div><!-- /.navbar-collapse -->   
      </div>   
      </nav>
  </div>
</div>
<div class="wow slideInUp">
<p class="page_title">СЛЕДИТЕ <br class="mobile_break">  ЗА НАШИМИ НОВОСТЯМИ</p>
<p class="page_subtitle news_page">Узнавайте самые актуальные новости с нами! </p>
</div>
 <?php 
   // $today = date('Ymd');
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'news',
            'paged' => $paged,
            'order' => 'DESC'
          ));
while ($homepagePosts->have_posts()) {
$homepagePosts->the_post();
$video = get_field('youtube');
 ?>
 <div class="container single_news_block ">
    <div class="col-md-12 wow slideInUp ">
     <div class="col-md-6 col-xs-6 news_main_content2">
       <?php if($video){?>
        <div class="video_wrapper">
           <div id="<?php echo the_ID(); ?>" class="youtube"
            data-embed="<?php the_field('youtube'); ?>">
              <div class="video_player" id="<?php echo the_ID(); ?>container"></div>
              <div class="play-button"></div>
           </div>
        </div> 
        <?php } else { ?>
         <div class="news_image"><?php the_post_thumbnail('newsLandscape'); ?> </div> 
        <?php } ?>       
     </div>
      <div class="col-md-6 col-xs-6 news_main_content">
      <p class="news_block_title"><?php the_title(); ?></p>
      <div class="news_text"><?php the_content(); ?></div>
       <img class="clock_icon" src="<?php echo get_theme_file_uri('/img/news_clock_icon.svg') ?>" alt="Новости Иннолово"><span class="news_date"><?php the_time('j'); ?><span class="invisible_space"></span><?php the_time('F'); ?><span class="invisible_space"></span><?php the_time('Y'); ?></span>
    </div> <!-- 6 колонок -->
   </div><!-- 12 колонок -->
  </div> <!-- контейнер -->
 <?php
} wp_reset_postdata(); ?>
 </div><!-- container_fluid -->
</div> <!-- конец wrapper -->
<?php if (  $homepagePosts->max_num_pages > 1 ) : ?>
  <script>
var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
var true_posts = '<?php echo serialize($homepagePosts->query_vars); ?>';
var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
var max_pages = '<?php echo $homepagePosts->max_num_pages; ?>';
</script>
<div id="true_loadmore" class="all_news">
    <p class="loadmore_text">Показать еще</p>
     <svg  id="news_more" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="20" viewBox="0 0 16 20">
    <defs>
        <path id="a" d="M0 0h22v24H0z"/>
    </defs>
    <g fill="none" fill-rule="evenodd" transform="translate(-3 -2)">
        <mask id="b" fill="#fff">
            <use xlink:href="#a"/>
        </mask>
        <path id="show_arrow"  stroke-width="2" d="M19.932 12.307a.8.8 0 0 1-.18.285l-6.224 6.174a.8.8 0 0 1-1.131 0 .787.787 0 0 1 0-1.121l4.919-4.882H2.766a.766.766 0 0 1 0-1.53h14.546l-4.915-4.878a.788.788 0 0 1 0-1.122.804.804 0 0 1 1.131 0l6.224 6.174c.082.082.14.177.179.28.043.094.069.2.069.31a.764.764 0 0 1-.068.31z" mask="url(#b)" transform="rotate(90 11 12)"/>
    </g>
    </svg>
  </div>
   <?php endif; ?>
<div class="news_decoration_bottom">
    <img class="news_flower" src="<?php echo get_theme_file_uri('/img/news_flower.svg') ?>" alt="Иннолово">
     <img class="news_flower_bg" src="<?php echo get_theme_file_uri('/img/news_flower_bg.svg') ?>" alt="Иннолово">
</div> 
<script src="<?php echo get_theme_file_uri('/js/juery.js') ?>" defer></script>
<script src="<?php echo get_theme_file_uri('/js/bootstrap.js') ?>" defer></script>
<script src="<?php echo get_theme_file_uri('/js/main_page.js') ?>" defer></script> 
<script src="<?php echo get_theme_file_uri('/js/video.js') ?>" defer></script>
<script src="<?php echo get_theme_file_uri('/js/loadmore.js') ?>" defer></script>
<script src="<?php echo get_theme_file_uri('/js/wow.js') ?>"></script>
<script>
new WOW().init();
var scroll = window.pageYOffset, array = [];
wow.boxes.forEach(function (box) {
var pos = $(box).position(), height = $(box).height();
if (pos.top + height < scroll) {
$(box).addClass("visible_wow");
} else {
array.push(box);
}
});
wow.boxes = array;
</script> 
  <?php get_footer();
?>