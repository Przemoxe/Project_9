<?php

  /* Block One Template */
  $banner_subtitle = get_field('banner_subtitle') ?: 'Your banner subtitle  text';
  $banner_title = get_field('banner_title') ?: 'Your banner title text';
  $banner_description = get_field('banner_description') ?: 'Your title banner description text';
  $banner_button = get_field('banner_button') ?: 'Your banner button Url';
  $banner_image = get_field('banner_image') ?: 'Your image banner';


?>
              


<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6><?= $banner_subtitle ?></h6>
                    <h2><?= $banner_title ?></h2>
                    <p><?= $banner_description ?></p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="<?= $banner_button ?>">Free Quote</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?= $banner_image['url']?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
