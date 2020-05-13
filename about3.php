<?php
/*
Template Name: О проекте
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
    <div class="project_navigation"></div>
    <img class="desktop_project" src="<?php echo get_theme_file_uri('/img/project_bg.jpg') ?>" alt="Иннолово">  
      <img class="mobile_project" src="<?php echo get_theme_file_uri('/img/about_mobile_bg.png') ?>" alt="Иннолово"> 
       <img class="phone_project" src="<?php echo get_theme_file_uri('/img/about_phone_bg.png') ?>" alt="Иннолово">    
    <div class="project_page_overlay"></div>
       <nav class="navbar navbar-fixed-top">
        <div class="inner_menu_content">
         <a class="navbar-brand" href="<?php echo site_url() ?>"><img class="logo" src="<?php echo get_theme_file_uri('/img/logo.svg') ?>"></a>
             <div class="navbar-header">
                  <button id="mobile_menu" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                </button>            
            </div>       
         <div class="collapse navbar-collapse scroll-nav" id="bs-example-navbar-collapse-1" >
          <ul class="nav navbar-nav white_link">
            <li class="mobile_menu_title">Меню</li>
            <li><a class="changed_link" href="<?php echo site_url() ?>">Главная</a></li>
            <li><a class="current_active" href="<?php echo site_url('/о-проекте') ?>">О проекте</a></li>
            <li><a class="changed_link" href="<?php echo site_url('/участки') ?>">Участки</a></li> 
            <li><a class="changed_link" href="<?php echo site_url('/преимущества') ?>">Преимущества</a></li>
            <li><a class="changed_link" href="<?php echo site_url('/новости') ?>">Новости</a></li>
            <li><a class="changed_link" href="<?php echo site_url('/контакты') ?>">Контакты</a></li>            
          </ul>          
        </div><!-- /.navbar-collapse --> 
        </div>     
      </nav>
      <div class="project_top_content wow slideInUp">
        <p class="project_block_title">ИННОЛОВСКИЕ ПРУДЫ</p>
        <p class="project_subtitle">Лучший проект комфорт-класса, реализуемый на территории Аннинского <br class="desktop_break"> городского поселения Ломоносовского района Ленинградской области.</p> 
     </div>
</div>
<div class="container-fluid">   
 <div class="col-md-12 project_top">
  <div class="col-md-4 project_top_left">
   <div id="carousel_left" class="carousel slide" data-ride="carousel">
    <div id="carousel_left_items" class="carousel-inner">
     <div class="item active">
      <img src="<?php echo get_theme_file_uri('/img/project1_slide1.jpg') ?>" alt="Иннолово">
     </div>
    <div class="item">
      <img src="<?php echo get_theme_file_uri('/img/project1_slide2.jpg') ?>" alt="Иннолово">
    </div>
    <div class="item">
      <img src="<?php echo get_theme_file_uri('/img/project1_slide3.jpg') ?>" alt="Иннолово">
    </div> <!-- item -->
  </div><!-- carosel_inner -->
 </div><!-- carousel -->
<div class="project_slider_control2">
  <a class="right carousel-control" href="#carousel_left" role="button" data-slide="next">
     <svg  class="arrow_image" xmlns="http://www.w3.org/2000/svg" width="41" height="32" viewBox="0 0 41 32">
     <path class="arrow_image_path" class="arrowslider" fill-rule="evenodd"  stroke-width="2" d="M39.853 16.658c-.085.223-.21.431-.39.611L25.977 30.5a1.748 1.748 0 0 1-2.45 0 1.673 1.673 0 0 1 0-2.403l10.658-10.46H2.66A1.65 1.65 0 0 1 1 15.994c0-.904.743-1.64 1.66-1.64h31.516L23.526 3.904a1.675 1.675 0 0 1 0-2.405 1.756 1.756 0 0 1 2.451 0L39.463 14.73c.177.175.303.379.388.598.093.203.149.428.149.666 0 .238-.056.46-.147.664z"/>
     </svg>
   </a>   
</div><!-- col-md-4 -->
</div> 
<div class="col-md-8 project_first_text_block">
  <p class="project_text wow slideInUp">В посёлке Иннолово уже создана комфортная среда: неподалёку лес, чистый воздух и тишина, новый клуб с интересными кружками для детей и взрослых, симпатичная "Австрийская Деревня", а на берегу одного из двух очаровательных прудов строится наш проект. Эти пруды давно являются излюбленным местом для рыбалки и отдыха жителей поселения, но для жителей нашего мини-посёлка будет более 50 метров собственной береговой полосы - как песчаной, так и укреплённой.<br>
  <br>
   <span id="more_about" class="hidden_content">Проект подразумевает продажу земельных участков для индивидуального жилищного строительства, а также строительство минимаркета и нескольких небольших аккуратных таунхаусов вдоль шоссе, объединенных единой закрытой территорией с выходом на земли общего пользования на берегу пруда. Всего застраиваться будут 22 участка ИЖС и 28 квартир в таунхаусах. При этом деревенская идиллия расположена всего в пяти минутах езды от развязки КАД "Петергоф - Велигонты", менее чем в получасе от метро "Проспект Ветеранов".</span> 
   <span id ="hider">ПОДРОБНЕЕ
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
   </span>
  </p>  
<p class="project_text_green">
Рядом с въездом на территорию ТСН будет построен мини-торговый центр: магазин шаговой доступности продовольственных и бытовых товаров, а также кафе, парикмахерская, мастерская мелкого ремонта и другие заведения сферы услуг.</p>
 </div>
</div> 
<!-- </div> -->
<div class="container-fluid green_text_mobile_container first">
<div class="col-md-12">
<p class="project_text_green_mobile">
Рядом с въездом на территорию ТСН будет построен мини-торговый центр: магазин шаговой доступности продовольственных и бытовых товаров, а также кафе, парикмахерская, мастерская мелкого ремонта и другие заведения сферы услуг.</p>
</div>
</div>
<div class="container-fluid carousel_project_container">
  <div class="col-md-12 project_small_block">
    <div class="col-xs-4 col-md-3 small_slider_container">
      <div class="small_slider_arrows">
      <a  href="#carousel_project" role="button" data-slide="next">
          <svg class="arrows left" xmlns="http://www.w3.org/2000/svg" width="43" height="32" viewBox="0 0 43 32">
           <path class="arrow_image_path" fill-rule="evenodd" stroke="#158704" stroke-width="2" d="M2.147 16.658c.085.223.21.431.39.611L16.023 30.5a1.748 1.748 0 0 0 2.45 0 1.673 1.673 0 0 0 0-2.403L7.815 17.636H39.34A1.65 1.65 0 0 0 41 15.994a1.65 1.65 0 0 0-1.66-1.64H7.824l10.65-10.451a1.675 1.675 0 0 0 0-2.405 1.756 1.756 0 0 0-2.451 0L2.537 14.73c-.177.175-.303.379-.387.598-.094.203-.15.428-.15.666 0 .238.056.46.147.664z"/>
           </svg> 
      </a> 
      <a class="right carousel-control" href="#carousel_project" role="button" data-slide="prev">
      <svg  class="arrows right" xmlns="http://www.w3.org/2000/svg" width="41" height="32" viewBox="0 0 41 32">
        <path class="arrow_image_path" class="arrowslider" fill-rule="evenodd"  stroke-width="2" d="M39.853 16.658c-.085.223-.21.431-.39.611L25.977 30.5a1.748 1.748 0 0 1-2.45 0 1.673 1.673 0 0 1 0-2.403l10.658-10.46H2.66A1.65 1.65 0 0 1 1 15.994c0-.904.743-1.64 1.66-1.64h31.516L23.526 3.904a1.675 1.675 0 0 1 0-2.405 1.756 1.756 0 0 1 2.451 0L39.463 14.73c.177.175.303.379.388.598.093.203.149.428.149.666 0 .238-.056.46-.147.664z"/>
       </svg>

         </a> 
      </div>
    </div>
    <div class="col-md-9 col-xs-8">
        <div class="row">
    <div class="carousel slide" id="carousel_project">
      <div  class="carousel-inner">
        <div class="project_small item active">
          <div class="col-xs-3 item_row_three">
          <div class="project_advantage_blocks first">
              <img  class="small_slider_icon" src="<?php echo get_theme_file_uri('/img/project_icon1.svg') ?>" alt="Иннолово">
              <p class="project_advantage_blocks__title">50 метров </p>
              <p class="project_advantage_blocks__text">Собственной береговой полосы - как песчаной, так и укрепленной </p>
             </div>
          </div>
        </div>
        <div class="project_small item">
          <div class="col-xs-3 item_row_three">
            <div class="project_advantage_blocks second">
              <img  class="small_slider_icon" src="<?php echo get_theme_file_uri('/img/project_icon2.svg') ?>" alt="Иннолово">
              <p class="project_advantage_blocks__title">22 участка </p>
              <p class="project_advantage_blocks__text double">ИЖС </p>
              <p class="project_advantage_blocks__title">28 квартир участка </p>
              <p class="project_advantage_blocks__text double">в Таунхаусах</p>
             </div>
          </div>
        </div>
        <div class="project_small item">
          <div class="col-xs-3 item_row_three">
            <div class="project_advantage_blocks third">
              <img  class="small_slider_icon" src="<?php echo get_theme_file_uri('/img/project_icon3.svg') ?>" alt="Иннолово">
              <p class="project_advantage_blocks__title">< 30 минут</p>
              <p class="project_advantage_blocks__text">от метро 
                «Проспект Ветеранов» </p>
             </div>
          </div>
        </div>
        <div class="project_small item">
          <div class="col-xs-3 item_row_three">
            <div class="project_advantage_blocks forth">
              <img  class="small_slider_icon" src="<?php echo get_theme_file_uri('/img/project_icon4.svg') ?>" alt="Иннолово">
              <p class="project_advantage_blocks__title">Мини-торговый центр</p>
              <p class="project_advantage_blocks__text">Продовольственный магазин и другие разнообразные заведения сферы услуг </p>
             </div>
          </div>
        </div>
      </div>      
    </div>
    </div>
   </div>
 </div>
</div>
<div class="container carousel_project_cont">
  <div class="row">
      <div class="col-md-12">
            <div id="carousel_project_mobile" class="carousel slide ">
                <div class="carousel-inner project_small_block">           
                  <figure class="item active">                     
                    <div class="project_advantage_blocks first">
                      <img  class="small_slider_icon" src="<?php echo get_theme_file_uri('/img/project_icon1.svg') ?>" alt="Иннолово">
                     <p class="project_advantage_blocks__title">50 метров </p>
                    <p class="project_advantage_blocks__text">Собственной береговой полосы - как песчаной, так и укрепленной </p>
                   </div>          
                  </figure>
                  <figure class="item">                      
                    <div class="project_advantage_blocks second">
                     <img  class="small_slider_icon" src="<?php echo get_theme_file_uri('/img/project_icon2.svg') ?>" alt="Иннолово">
                    <p class="project_advantage_blocks__title">22 участка </p>
                    <p class="project_advantage_blocks__text double">ИЖС </p>
                    <p class="project_advantage_blocks__title">28 квартир участка </p>
                    <p class="project_advantage_blocks__text double">в Таунхаусах</p>
                    </div>   
                  </figure>  
                  <figure class="item">                        
                    <div class="project_advantage_blocks third">
                     <img  class="small_slider_icon" src="<?php echo get_theme_file_uri('/img/project_icon3.svg') ?>" alt="Иннолово">
                    <p class="project_advantage_blocks__title">< 30 минут</p>
                    <p class="project_advantage_blocks__text">от метро 
                    «Проспект Ветеранов» </p>
                   </div>  
                 </figure> 
                  <figure class="item">                        
                    <div class="project_advantage_blocks forth">
                     <img  class="small_slider_icon" src="<?php echo get_theme_file_uri('/img/project_icon4.svg') ?>" alt="Иннолово">
                     <p class="project_advantage_blocks__title">Мини-торговый центр</p>
                      <p class="project_advantage_blocks__text">Продовольственный магазин и другие разнообразные заведения сферы услуг </p>
                     </div>
                  </figure> 
                </div>   
                <div class="main_carousel_control">                 
                  <ol class="carousel-indicators">
                    <li data-target="#carousel_project_mobile" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel_project_mobile" data-slide-to="1"></li>
                    <li data-target="#carousel_project_mobile" data-slide-to="2"></li>
                    <li data-target="#carousel_project_mobile" data-slide-to="3"></li>
                  </ol> 
              </div>
          </div><!-- End Carousel --> 
       </div>
     </div>
  </div>
</div>
<div class="container-fluid">   
<div class="col-md-12 project_bottom_block">
<div class="col-md-8 project2_block">
<p class="project_block2_title">ДЕРЕВНЯ ИННОЛОВО </p>
<p class="project_block2_subtitle">справочная информация</p>
<p class="project_text innolovo wow slideInUp ">Деревня находится на дороге Разбегаево-Аннино-Горелово (Аннинское шоссе), которое соединяет деревню с п. Аннино (с одной стороны) и с п.Велигонты (выезд на КАД). С запада и востока деревня Иннолово граничит с лесными массивами. <br>
<br>
Площадь деревни 170 гектаров, вся территория (за исключением рекреационных и общественно-деловых зон) предназначена для застройки индивидуальными и малоэтажными домами. В 2008-2010 годах на её территории был построен известный коттеджный квартал «Австрийская деревня». </p>
<p class="project_text_green">
Иннолово (фин.Innala) впервые обозначена на карте Санкт-Петербургской губернии 1792  года, А.М. Вильбрехта, как <br class="desktop_break"> Ингелова.</p>
</div>
<div class="col-md-4 project_top_right">
    <!-- Bootstrap 3 -->
<div id="carousel_right" class="carousel slide" data-ride="carousel">
  <div id="carousel_right_items" class="carousel-inner">
    <div class="item active">
      <img src="<?php echo get_theme_file_uri('/img/project1_slide1.jpg') ?>" alt="Иннолово">
    </div>
    <div class="item">
      <img src="<?php echo get_theme_file_uri('/img/project1_slide2.jpg') ?>" alt="Иннолово">
    </div>
    <div class="item">
      <img src="<?php echo get_theme_file_uri('/img/project1_slide3.jpg') ?>" alt="Иннолово">
    </div>
  </div>
  <div class="project_slider_control">
  <a class="right carousel-control" href="#carousel_right" role="button" data-slide="next">
   <svg class="arrow_image" xmlns="http://www.w3.org/2000/svg" width="43" height="32" viewBox="0 0 43 32">
    <path class="arrow_image_path" fill-rule="evenodd" stroke="#158704" stroke-width="2" d="M2.147 16.658c.085.223.21.431.39.611L16.023 30.5a1.748 1.748 0 0 0 2.45 0 1.673 1.673 0 0 0 0-2.403L7.815 17.636H39.34A1.65 1.65 0 0 0 41 15.994a1.65 1.65 0 0 0-1.66-1.64H7.824l10.65-10.451a1.675 1.675 0 0 0 0-2.405 1.756 1.756 0 0 0-2.451 0L2.537 14.73c-.177.175-.303.379-.387.598-.094.203-.15.428-.15.666 0 .238.056.46.147.664z"/>
     </svg> 
   </a> 
  </div>
 </div>
</div>
 </div>
</div> 
<div class="container-fluid green_text_mobile_container second">
<div class="col-md-12">
<p class="project_text_green_mobile">
Иннолово (фин.Innala) впервые обозначена на карте Санкт-Петербургской губернии 1792  года, А.М. Вильбрехта, как Ингелова.</p>
</div>
</div>
<div class="container-fluid project_document_block"> 
<img class="flower_bg left" src="<?php echo get_theme_file_uri('/img/project_flower1.svg') ?>" alt="Об Иннолово">
<img class="flower_bg right" src="<?php echo get_theme_file_uri('/img/project_flower2.svg') ?>" alt="Об Иннолово">
<div class="container document_blocks">
      <p class="documant_block_title">Посмотрите наши документы</p>
      <div class="col-md-12">
        <div class="col-md-4 doc_container">
          <div class="document_links_container">
          <a class="document_link" target="_blank" href="#"></a>
          <p class="project_document_title">Кадастровый паспорт </p>
            </div>
        </div>
        <div class="col-md-4 doc_container">
          <div class="document_links_container">
           <a class="document_link" target="_blank" href="#"></a>
          <p class="project_document_title">Условия вступления в ТСН </p>
             </div>
        </div>
        <div class="col-md-4 doc_container">
          <div class="document_links_container">
           <a class="document_link" target="_blank" href="#"></a>
          <p class="project_document_title">Кадастровый паспорт </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- конец wrapper -->
<script src="<?php echo get_theme_file_uri('/js/juery.js') ?>" defer></script>
<script src="<?php echo get_theme_file_uri('/js/bootstrap.js') ?>" defer></script>
<script src="<?php echo get_theme_file_uri('js/custom_script.js') ?>" defer></script>
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