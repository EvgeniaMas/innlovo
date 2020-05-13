<?php
/*
Template Name: Контакты
*/
?>
<!DOCTYPE html>
<html class="sites_pages" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/img/logo.png') ?>">
    <?php wp_head(); ?>
  </head>
<body>
<div class="wrapper404">
<div class="container-fluid"> 
  <div class="header_top bordered_navigation ">
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
            <li><a href="<?php echo site_url('/участки') ?>">Участки</a></li> 
            <li><a href="<?php echo site_url('/преимущества') ?>">Преимущества</a></li>
            <li><a href="<?php echo site_url('/новости') ?>">Новости</a></li>
            <li><a class="current_active" href="<?php echo site_url('/контакты') ?>">Контакты</a></li>           
          </ul>            
        </div><!-- /.navbar-collapse -->   
      </div>   
      </nav>
  </div>
</div>
<div class="container"><p class="no_page">Страница не найдена</p>
<a class="no_page_link" href="<?php echo site_url() ?>">Вернуться на главную страницу</a>

</div>

</div>
 
<script src="<?php echo get_theme_file_uri('/js/juery.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('/js/bootstrap.js') ?>" ></script>
<script src="<?php echo get_theme_file_uri('/js/main_page.js') ?>" defer></script> 
  <?php get_footer();

?>








