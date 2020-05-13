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
