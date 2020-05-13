<!-- <!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body> -->
<!--     <header class="site-header">
    <div class="container">
      <a href="<?php echo site_url() ?>"><img class="logo" src="<?php echo get_theme_file_uri('/img/logo.svg') ?>" alt="Логотип">  </a>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/') ?>">Главная</a></li>
            <li <?php if (get_post_type() == 'program') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('program') ?>">О проекте</a></li>
            <li <?php if (get_post_type() == 'event' OR is_page('past-events')) echo 'class="current-menu-item"';  ?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Участки</a></li>
            <li><a href="#">Преимущества</a></li>
            <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/новости'); ?>">Новости</a></li>
            <li <?php if (get_post_type() == 'contacts') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/контакты'); ?>">Контакты</a></li>
          </ul>
        </nav>
        
      </div>
    </div>
  </header>
 -->