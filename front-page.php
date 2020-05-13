<!DOCTYPE html>
<html class="sites_pages" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/img/logo.png') ?>">
     <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri('css/slick.css') ?>">  
    <?php wp_head(); ?>
  </head>
<body>
<div id="first_screen" class="container-fluid main_screen">
 <div class="header_top main_page"> 
   <nav class="navbar navbar-fixed-top">
     <div class="main_page_overlay"></div>
    <div class="inner_menu_content">
    <a class="navbar-brand" href="<?php echo site_url() ?>"><img class="logo" src="<?php echo get_theme_file_uri('/img/logo.svg') ?>"></a>
          <div class="navbar-header">
          <button id="mobile_menu" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">           
          </button>  
        </div>       
        <div class="collapse navbar-collapse scroll-nav" id="bs-example-navbar-collapse-1" >
          <ul class="nav navbar-nav white_link">
             <li class="mobile_menu_title">Меню</li>
            <li><a class="current_active" href="<?php echo site_url() ?>">Главная</a></li>
            <li><a class="changed_link" href="<?php echo site_url('/о-проекте') ?>">О проекте</a></li>
            <li><a class="changed_link" href="<?php echo site_url('/участки') ?>">Участки</a></li> 
            <li><a class="changed_link" href="<?php echo site_url('/преимущества') ?>">Преимущества</a></li>
            <li><a class="changed_link" href="<?php echo site_url('/новости') ?>">Новости</a></li>
            <li><a class="changed_link" href="<?php echo site_url('/контакты') ?>">Контакты</a></li>            
          </ul>          
        </div><!-- /.navbar-collapse --> 
        </div>     
      </nav>
    </div>
   <div class="col-md-12">
      <div  class="wow slideInUp main_screen_content" >
        <h1 class="main_title">ИННОЛОВСКИЕ ПРУДЫ</h1>
        <p class="main_subtitle">Территория комфортной жизни</p>
        <a class="main_select first_screen" href="<?php echo site_url('/участки') ?>">Выбрать участок</a>
       </div>
   </div>
</div> 
<div class="wrapper_main"> 
<div id="main_advantages_fluid"  class="container-fluid"> 
<div  id="main_advantages_block" class="container">
   <div class="col-md-12 wow slideInUp">
    <div class="col-md-4 col-xs-4 adv_wrapper">
      <div class="advantages_container">
      <span class="advan_title">Расположение </span><img class="advan_icon" src="<?php echo get_theme_file_uri('/img/main_icon1.svg') ?>" alt="Преимущества">
      <p class="advan_text smaller">Территория находится в восточной части Ломоносовского района Ленинградской области в 5 км от южного берега Финского залива. </p>
    </div>
  </div>
    <div class="col-md-4 col-xs-4 adv_wrapper">
       <div class="advantages_container">
      <span class="advan_title">Инфраструктура </span><img class="advan_icon" src="<?php echo get_theme_file_uri('/img/main_icon2.svg') ?>" alt="Преимущества">
        <p class="advan_text">Развитая инфраструктура поселка позволяет жителям наслаждаться загородной жизнью с городским комфортом.  </p>
    </div>
  </div>
    <div class="col-md-4 col-xs-4 adv_wrapper">
       <div class="advantages_container">
      <span class="advan_title">Участки </span><img class="advan_icon" src="<?php echo get_theme_file_uri('/img/main_icon3.svg') ?>" alt="Преимущества">
      <p class="advan_text">В поселке, который отгородился от городской суеты, всего 22 земельных участка и 28 квартир в таунхаусах, благодаря чему жизнь в поселке размеренна и спокойна.</p>
    </div> <!-- col-md-4 -->
    </div>  <!-- col-md-12 -->   
   </div><!-- container -->
   </div> <!-- container -->
<div id="mobile_advantage_carousel"  class="container">
 <div class="variable slider">
    <div   class="sliders_container">
      <div class="slider_content">
      <div class="title_container">                    
          <span class="advan_title mobile_title">Расположение </span><img class="advan_icon" src="<?php echo get_theme_file_uri('/img/main_icon1.svg') ?>" alt="Преимущества">
        </div>
          <p class="advan_text">Территория находится в восточной части Ломоносовского района Ленинградской области в 5 км от южного берега Финского залива. </p>
    </div>
  </div>
      <div  class="sliders_container">
         <div class="slider_content">
          <div class="title_container">                         
        <span class="advan_title mobile_title">Инфраструктура </span><img class="advan_icon" src="<?php echo get_theme_file_uri('/img/main_icon2.svg') ?>" alt="Преимущества">
      </div>
        <p class="advan_text">Развитая инфраструктура поселка позволяет жителям наслаждаться загородной жизнью с городским комфортом.  </p>   
         </div>
       </div>

       <div  class="sliders_container">
         <div class="slider_content">
        <div class="title_container">                         
        <span class="advan_title mobile_title">Участки </span><img class="advan_icon" src="<?php echo get_theme_file_uri('/img/main_icon3.svg') ?>" alt="Преимущества">
        </div>
        <p class="advan_text">В поселке, который отгородился от городской суеты, всего 22 земельных участка и 28 квартир в таунхаусах, благодаря чему жизнь в поселке размеренна и спокойна.</p>
      
      </div> <!-- slider_content -->     
  </div> <!-- sliders_container  -->
 </div> <!-- slider -->
</div><!-- container-mobile -->

<div id="advantage_container_fluid" class="container-fluid">
<div class="container">
  <p class="main_block_title advantages_title">ОЦЕНИТЕ НАШИ<br class="mobile_break"> ПРЕИМУЩЕСТВА</p>
</div>
  <div class="container advantages_main_container">
    
    <div class="col-md-12 clouds_container">  
      <div class="wow slideInUp cloud first_cloud">
        <img class="cloud_1" src="<?php echo get_theme_file_uri('/img/cloud1.svg') ?>" alt="Преимущества Иннолово">
        <div class="cloud_content jury_safe">
      <p class="advantage_cloud_title">Юридическая основа проекта</p>
         <p class="advantage_cloud_text">Все реализуемые земельные участки находятся в частной собственности. Имеют категорию «земли населенных пунктов» и вид разрешенного использования «для индивидуального жилищного строительства». </p>
       </div>
    </div>
  </div>
<!-- </div> -->
    <div class="col-md-12 clouds_container">
      <div class="wow slideInUp cloud second_cloud">
         <img class="cloud_2" src="<?php echo get_theme_file_uri('/img/cloud2.svg') ?>" alt="Преимущества Иннолово">
         <div class="cloud_content">
        <p class="advantage_cloud_title">Инженерное обеспечение проекта</p>
      <p class="advantage_cloud_text">Территория для застройки уже обеспечена подъездными дорогами к каждому участку, газом (со вводом на каждый участок) и централизованным водопроводом (также со вводом на каждый участок).</p>
    </div>
  </div>
 <!-- </div>  -->
  </div>  
    <div class="col-md-12 clouds_container">
       <div id="cloud_safe" class="wow slideInUp cloud">
         <img class="cloud_3" src="<?php echo get_theme_file_uri('/img/cloud3.svg') ?>" alt="Преимущества Иннолово">
         <div class="cloud_content safe_content">
        <p class="advantage_cloud_title ">Безопасность</p>
      <p class="advantage_cloud_text"> Территория ТСН будет огорожена единым забором с автоматическим шлагбаумом на въезде и будет взята под охрану постом дежурных и ЧОП с возможностью выезда группы быстрого реагирования. </p>
    </div>
    </div>
  </div> <!-- контейнер -->
 </div>
</div>
</div>
<div class="container-fluid ">
<img class="advantage_info" src="<?php echo get_theme_file_uri('/img/main_adv.jpg') ?>">
</div>    
  <div class="container">
    <p class="main_block_title news_title"> Последние новости проекта</p> 
  </div>
  <div class="container last_news_container">
      <div class="col-md-12">
             <div id="main_page_carousel" class="carousel slide"> 
                <div class="carousel-inner"> 
                   <figure class="item active">
                      <div class="col-md-12 slider_container_items">
                        <div class="col-md-6 col-xs-12 main_slider_left">
                          <div class="main_slider_data">
                        <p class="main_slider_date">20.03</p>
                        <p class="main_slider_title"> Добро пожаловать на Инноловские пруды!</p>
                        <p class="main_slider_subtitle">Узнавайте самые актуальные новости с нами!</p>
                        <span class="more_news_slider"><a class="main_slider_link" href="<?php echo site_url('/новости') ?>"> ПОДРОБНЕЕ </a>
                          <svg  xmlns="http://www.w3.org/2000/svg" width="41" height="32" viewBox="0 0 41 32">
                          <path class="arrowslider" fill-rule="evenodd"  stroke-width="2" d="M39.853 16.658c-.085.223-.21.431-.39.611L25.977 30.5a1.748 1.748 0 0 1-2.45 0 1.673 1.673 0 0 1 0-2.403l10.658-10.46H2.66A1.65 1.65 0 0 1 1 15.994c0-.904.743-1.64 1.66-1.64h31.516L23.526 3.904a1.675 1.675 0 0 1 0-2.405 1.756 1.756 0 0 1 2.451 0L39.463 14.73c.177.175.303.379.388.598.093.203.149.428.149.666 0 .238-.056.46-.147.664z"/>
                          </svg>
                        </span>
                         </div>
                        </div>
                        <div  class="col-md-6 col-xs-12 slider_image  static_image" ></div>
                    </div>  
                    </figure>
                    <?php 
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'news',            
            'order' => 'DESC'
          ));
while ($homepagePosts->have_posts()) {
$homepagePosts->the_post();
$video = get_field('youtube');
 ?>
 <figure class="item">
    <div class="col-md-12 slider_container_items">
      <div class="col-md-6 col-xs-12 main_slider_left">
        <div class="main_slider_data">
         <p class="main_slider_date"><?php the_time('d.m'); ?></p>
         <p class="main_slider_title"> <?php the_title(); ?></p>
           <p class="main_slider_subtitle">Узнавайте самые актуальные новости с нами!</p>
             <span class="more_news_slider"><a class="main_slider_link" href="<?php echo site_url('/новости') ?>"> ПОДРОБНЕЕ </a>
                <svg  xmlns="http://www.w3.org/2000/svg" width="41" height="32" viewBox="0 0 41 32">
                <path class="arrowslider" fill-rule="evenodd"  stroke-width="2" d="M39.853 16.658c-.085.223-.21.431-.39.611L25.977 30.5a1.748 1.748 0 0 1-2.45 0 1.673 1.673 0 0 1 0-2.403l10.658-10.46H2.66A1.65 1.65 0 0 1 1 15.994c0-.904.743-1.64 1.66-1.64h31.516L23.526 3.904a1.675 1.675 0 0 1 0-2.405 1.756 1.756 0 0 1 2.451 0L39.463 14.73c.177.175.303.379.388.598.093.203.149.428.149.666 0 .238-.056.46-.147.664z"/>
                </svg>
                </span>
            </div>
      </div>
      <div class="col-md-6 col-xs-12 slider_image mobile_slides">
         <?php 
         if(the_post_thumbnail()){
          the_post_thumbnail(); 
         } ?>        
      </div>
      <div  class="col-md-6 col-xs-12 slider_image desktop_slides">
        <?php if($video){?>
        <div  class="col-xs-12 slider_image  static_image" ></div>
        <?php } else { ?>
         <?php the_post_thumbnail('large'); ?> 
        <?php } ?>
      </div>
  </div>  
  </figure>
<?php } wp_reset_postdata(); ?>           
                </div>   
            <div class="main_carousel_control"> 
                 <a class="left carousel-control" href="#main_page_carousel" role="button" data-slide="prev">
                 <span class="arrow_slider" aria-hidden="true"><img class="arrow_image" src="<?php echo get_theme_file_uri('/img/arrow_left.png') ?>" alt="slider_arrow"></span></a>
                  <ol class="carousel-indicators">
                    <li data-target="#main_page_carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#main_page_carousel" data-slide-to="1"></li>
                    <li data-target="#main_page_carousel" data-slide-to="2"></li>
                    <li data-target="#main_page_carousel" data-slide-to="3"></li>
                  </ol>                   
                 <a class="right carousel-control" href="#main_page_carousel" role="button" data-slide="next">
                 <span class="arrow_slider" aria-hidden="true"><img class="arrow_image" src="<?php echo get_theme_file_uri('/img/arrow_right.png') ?>" alt="slider_arrow"></span> </a>  
              </div>
          </div><!-- End Carousel --> 
      </div>
   </div>


<script>
var address1 = "<?php echo get_theme_file_uri('/img/map_logo.svg') ?>";
var address2 = "<?php echo get_theme_file_uri('/img/map_mark.svg') ?>";
var url2 = "<?php echo get_theme_file_uri('/consult.php') ?>";
</script>
<div class="container">
<p class="main_block_title individual_title"> Запишитесь <br class="mobile_break"> на персональный просмотр</p>
</div> 
<div class="container-fluid individual_show" >
 <div class="container form_container">    
     <form id="show_land_form" class="form-inline individual_watch_form">
      <div class="form-group">
      <div class="required_input"> 
     <input  class="watch_form_input rfield"type="text" name="name" placeholder="Ваше имя" >
     <label class="comment" for="name">Заполнение обязательно</label>     
       </div>
      </div>
      <div class="form-group">  
        <div class="required_input"> 
       <input  class="watch_form_input rfield" type="tel" name="phone" placeholder="Телефон">
     <label class="comment" for="phone">Заполнение обязательно</label>    
      </div>
    </div>
      <div class="form-group">  
        <input class="watch_form_input" type="email" name="email" placeholder="E-mail">
        <input type="hidden" name="action" value="запись на просмотр">
      </div>
      <button id="grounds_funds" class="individual_show__button main_select" >Отправить</button> 
     </form>
  </div>
</div>
<!-- </div> -->
<div class="container-fluid map_block">
   <p class="main_block_title location_title">Удобное расположение</p>
   <div id="custom_map">
     <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript" defer></script>
    <script src="<?php echo get_theme_file_uri('/js/map.js') ?>" defer></script>
   </div>
  </div>
<div class="container-fluid contact_block main_page">
 <div class="container contacts_page_contacts">
   <div class="contacts_container col-md-12 wow slideInUp wow slideInUp">
    <div class="col-md-4 col-xs-12 contacts_data1">
      <span class="contact_title">Адрес </span>
      <p class="contact_text address">Санкт-Петербург,<br> Иннолово </p>
    </div>
    <div class="col-md-4 col-xs-12 contacts_data2">
      <span class="contact_title">Телефон </span>
       <p class="contact_text"><a href="tel:9450090">945-00-90</a> </p>
    </div>
    <div class="col-md-4 col-xs-12 contacts_data3">
      <span class="contact_title">Почта</span>
      <p class="contact_text">innolovo-prudy@mail.ru</p>
    </div>     
   </div>
  </div>
</div>
 <div class="container-fluid individual_choice">
  <div class="container">
   <div class="col-md-12">
      <p class="individual_choice__text">ПОМЕНЯЙ <br class="mobile_break"> СВОЙ ОБРАЗ ЖИЗНИ!</p>
       <a id="change_life" class="main_select choice_button" href="<?php echo site_url('/участки') ?>">Выбрать участок</a>
      </div>
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
<script src="<?php echo get_theme_file_uri('/js/main_menu.js') ?>" defer></script> 
<script src="<?php echo get_theme_file_uri('/js/video.js') ?>" defer></script>
<script src="<?php echo get_theme_file_uri('/js/send.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/slick.min.js') ?>"></script>
<script>
      $(".variable").slick({
       infinite: true,
        variableWidth: true,        
        arrows : false,      
        speed: 2500,
        dots: true,
        autoplay:true,
         autoplaySpeed:4000,
      });      
         

</script>


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