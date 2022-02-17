<?php

  /* Block Three Template */
  $portfolio_subtitle = get_field('portfolio_subtitle') ?: 'Your about subtitle  text';
  $portfolio_title = get_field('portfolio_title') ?: 'Your about title text';
  $portfolio_title_color2 = get_field('portfolio_title_color2') ?: 'Your about title color2 text';
  
  

  
?>           

<div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6><?= $portfolio_subtitle ?></h6>
            <h4><?= $portfolio_title ?> <em><?= $portfolio_title_color2 ?></em></h4>
            <div>

            </div>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            
          <?php 
            $portfolio_choose_ids = get_field('porfolio_choose');
              foreach($portfolio_choose_ids as $portfolio_choose_id){
                foreach($portfolio_choose_id as $el){
                  
                  $get_portfolio_title = get_the_title($el);
                  $get_the_permalink = get_the_permalink($el);
                  $get_portolio_image = wp_get_attachment_url( get_post_thumbnail_id($el), 'thumbnail' ); 
                  ?>

                    <div class="item">
                      <a href="<?= $get_the_permalink ?>">
                        <div class="portfolio-item">
                        <div class="thumb">
                          <img src="<?=  $get_portolio_image ?>" alt="">
                        </div>
                        <div class="down-content">
                          <h4><?= $get_portfolio_title ?></h4>
                          <span>
                           <?php
                                $brand = get_the_terms($el, 'brand' );
                                        if ( ! empty($brand)) {
                                          foreach($brand as $el){
                                           echo $el->name;
                                        }
                                    }
                                ?>
                          </span>
                        </div>
                      </div>
                      </a>  
                    </div>
                  
                <?php }
              }
            ?>



          </div>
        </div>
      </div>
    </div>
  </div>