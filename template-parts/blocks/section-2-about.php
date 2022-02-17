<?php

  /* Block Two Template */
  $about_image = get_field('about_image') ?: 'Your about image';
  $about_subtitle = get_field('about_subtitle') ?: 'Your about subtitle  text';
  $about_title = get_field('about_title') ?: 'Your about title text';
  $about_title_color2 = get_field('about_title_color2') ?: 'Your about title color2 text';
  $about_description = get_field('about_description') ?: 'Your about banner description text';
  $about_percentage_repeater = get_field('about_percentage_repeater');



?>


<div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?= $about_image['url'] ?>" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6><?= $about_subtitle ?></h6>
                  <h4><?= $about_title ?> <em><?= $about_title_color2 ?></em></h4>
                  <div class="line-dec"></div>
                </div>
                <p><?= $about_description ?></p>
                <div class="row">
                    <?php 
                        $counter = 0;
                        foreach($about_percentage_repeater as $item){
                            ?>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="skill-item <?php if($counter==0)echo "first-skill-item"; elseif($counter==1) echo "second-skill-item"; elseif($counter==2) echo "third-skill-item" ?>  wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                    <div class="progress" data-percentage="<?= $item['about_number_value']?>">
                                        <span class="progress-left">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                        <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                        <div>
                                            <?= $item['about_number_value'] . "%" ?><br>
                                            <span><?= $item['about_signature']?></span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        <?php 
                        $counter++;
                        }
                        
                    ?>


                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>