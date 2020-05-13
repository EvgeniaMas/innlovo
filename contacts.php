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
<div class="wrapper">
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
     <div class="wow slideInUp" >
      <p class="page_title"> Контакты</p>
       <p class="page_subtitle contacts_page">Будем рады встретить Вас на территории жилого <br class="contacts_break" >загородного комплекса в любой удобный для Вас день!</p>
      </div>
<div class="container-fluid contacts_page">
 <div class="container contacts_page_contacts">
   <div class="contacts_container col-md-12 wow slideInUp wow slideInUp">
    <div class="col-md-4 col-xs-12 contacts_data1">
      <span class="contact_title contacts_page">Адрес </span>
      <p class="contact_text address">Санкт-Петербург,<br> Иннолово </p>
    </div>
    <div class="col-md-4 col-xs-12 contacts_data2">
      <span class="contact_title contacts_page">Телефон </span>
       <p class="contact_text"><a href="tel:9450090">945-00-90</a> </p>
    </div>
    <div class="col-md-4 col-xs-12 contacts_data3">
      <span class="contact_title contacts_page">Почта</span>
      <p class="contact_text">innolovo-prudy@mail.ru</p>
    </div>     
   </div>
  </div>
</div>
<script>
var address1 = "<?php echo get_theme_file_uri('/img/map_logo.svg') ?>";
var address2 = "<?php echo get_theme_file_uri('/img/map_mark.svg') ?>";
var url2 = "<?php echo get_theme_file_uri('/consult.php') ?>";
</script>
<div class="container-fluid individual_show" >
 <div class="container form_container">    
     <form id="show_land_form"  class="form-inline individual_watch_form">
      <div class="form-group">
      <div class="required_input"> 
     <input  class="watch_form_input rfield"type="text" name="name" placeholder="Введите имя"  >
     <label class="comment" for="phone">Заполнение обязательно</label>     
       </div>
      </div>
      <div class="form-group">  
        <div class="required_input"> 
       <input  class="watch_form_input rfield" type="tel" name="phone" placeholder="Введите телефон" >
     <label class="comment" for="phone">Заполнение обязательно</label>    
      </div>
    </div>
      <div class="form-group">  
        <input class="watch_form_input " type="email" name="email" placeholder="E-mail" >
         <input type="hidden" name="action" value="запись на просмотр">
      </div>
      <button id="grounds_funds" class="individual_show__button main_select" >Отправить</button> 
     </form>
  </div>
</div>
  <div class="container-fluid map_block">
   <p class="main_block_title location_title">Удобное расположение</p>
   <div id="custom_map">
     <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript" defer></script> 
     <script src="<?php echo get_theme_file_uri('/js/map.js') ?>" defer></script> 
   </div>
  </div>
</div> <!-- конец wrapper -->
<div id="consult_modal" class="modal fade">
  <div  class="modal-dialog" role="document">
    <div id="contact_modal_content" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         <div class="col-md-12">
       <p class="form_title_choice">Запишитесь <br class="mobile_break">  на персональный просмотр</p>
        </div>
      </div>
      <div class="modal-body">
       <div class="container form_container">    
     <form   class="form-inline">
      <div class="form-group">
      <div class="required_input"> 
     <input  class="watch_form_input rfield" type="text" name="name" placeholder="Ваше имя" >
     <label class="comment" for="phone">Заполнение обязательно</label>
       </div>
      </div>
      <div class="form-group">  
        <div class="required_input"> 
       <input  class="watch_form_input rfield" type="tel" name="phone" placeholder="Телефон" >
     <label class="comment" for="phone">Заполнение обязательно</label>    
      </div>
    </div>
      <div class="form-group">  
        <input class="watch_form_input" type="email" name="email" placeholder="Email">
        <input type="hidden" name="action" value="получить консультацию">
      </div>
      <div class="form-group hidden_address">                 
      </div> 
       <a id="order_call" class="individual_show__button main_select" href="#">Заказать звонок</a>
     </form>
  </div>
    </div><!-- /.модальное окно-Содержание -->  
  </div><!-- /.модальное окно-диалог -->  
 </div><!-- /.модальное окно -->
</div>



<div id="thank_modal" class="modal fade">
  <div class="modal-dialog" role="document">
    <div id="select_modal_content" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         <div class="col-md-12">
      <p class="form_title_thank"> Спасибо за обращение!</p>
      <p class="form_subtitle_choice"> Наши специалисты скоро с Вами свяжутся!</p>
        </div>
      </div>
      <div class="modal-body modal_thank_body">
        <img class="thank_house_bg" src="<?php echo get_theme_file_uri('/img/form_thank.svg') ?>">       
    </div><!-- /.модальное окно-Содержание -->  
  </div><!-- /.модальное окно-диалог -->  
</div><!-- /.модальное окно -->
</div>
<script src="<?php echo get_theme_file_uri('/js/juery.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('/js/bootstrap.js') ?>" ></script>
<script src="<?php echo get_theme_file_uri('/js/main_page.js') ?>" defer></script> 
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

<script src="<?php echo get_theme_file_uri('/js/send.js') ?>"></script>
  <?php get_footer();

?>








