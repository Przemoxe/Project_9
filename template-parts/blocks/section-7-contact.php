<?php

  /* Block Three Template */
  $contact_subtitle = get_field('contact_subtitle') ?: 'Your contact subtitle  text';
  $contact_title = get_field('contact_title') ?: 'Your contact title text';
  $contact_titile_image = get_field('contact_titile_image') ?: 'Your contact image title';
  $contact_phone_icon = get_field('contact_phone_icon') ?: 'Your contact phone icon';
  $contact_phone_number = get_field('contact_phone_number') ?: 'Your contact phone number';
  $contact_email_icon = get_field('contact_email_icon') ?: 'Your contact email icon ';
  $contact_email = get_field('contact_email') ?: 'Your contact email';
  $contact_adress_icon = get_field('contact_adress_icon') ?: 'Your contact adress icon';
  $contact_adress = get_field('contact_adress') ?: 'Your contact adress';
  $contact_google_maps_adress = get_field('contact_google_maps_adress');



?>           


<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6><?= $contact_subtitle ?> </h6>
            <h4><?= $contact_title ?><em><?= $contact_title_color2 ?></em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div id="contact-form">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="<?=  $contact_titile_image?>" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                    <iframe width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen id="gmap_canvas" src="https://maps.google.com/maps?q=<?=$contact_google_maps_adress?>&t=&z=13&ie=UTF8&iwloc=&output=embed" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://fmovies-online.net"></a><br><a href="https://www.embedgooglemap.net"></a>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?= $contact_phone_icon ?>" alt="">
                          <a href="#"><?= $contact_phone_number ?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?=  $contact_email_icon ?>" alt="">
                          <a href="#"><?=  $contact_email ?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?= $contact_adress_icon  ?>" alt="">
                          <a href="#"><?= $contact_adress ?></a>
                        </div>
                      </div>
                    </div>
                    [contact-form-7 id="175" title="Contact form 1"]
                  </div>
                </div>
               
              </div>
              
            </div>
           </div>
          
        </div>
      </div>
    </div>
  </div>
