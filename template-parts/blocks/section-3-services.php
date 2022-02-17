<?php

  /* Block Three Template */
  $services_subtitle = get_field('services_subtitle') ?: 'Your about subtitle  text';
  $services_title = get_field('services_title') ?: 'Your about title text';
  $services_title_color2 = get_field('services_title_color2') ?: 'Your about title color2 text';
  $services = get_field('services');


?>


<div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6><?= $services_subtitle ?></h6>
            <h4><?= $services_title ?> <em><?= $services_title_color2 ?></em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">

                    <?php
                        $counter = 0;
                        $services_tab_length = count($services) - 1;

                        foreach($services as $service){?>

                            <div class="<?php if($counter == 0) echo "first-thumb active"; if($counter == $services_tab_length) echo "last-thumb"; ?>">
                                <div class="thumb">
                                    
                                    <span class="icon"><img src="<?= $service['icon-image']['url'] ?>" alt=""></span>
                                    <?= $service['services_type'] ?>
                                </div>
                            </div>

                         <?php   
                            $counter++;
                        }
                    ?>
       
                  </div>
                </div> 

                <div class="col-lg-12">
                  <ul class="nacc">

                    <?php 
                        $counter_Content = 0;
                        foreach($services as $service){?>
                            
                            <li class="<?php if($counter_Content == 0) echo "active"?>">
                                <div>
                                    <div class="thumb">
                                    <div class="row">
                                        <div class="col-lg-6 align-self-center">
                                        <div class="left-text">
                                            <h4><?= $service['service-content-title']?></h4>
                                            <p><?= $service['service_content_description']?></p>
                                            <div class="ticks-list">
                                                <?php 
                                                    $ticks = $service['ticks_list'];
                                                    foreach($ticks as $tick){ ?>
                                                        <span><i class="fa fa-check"></i> <?= $tick['tick']; ?></span>
                                                    <?php
                                                    
                                                    }
                                                ?>
                                            </div>
                                            <p><?= $service['service_content2_description']?></p>
                                        </div>
                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                        <div class="right-image">
                                            <img src="<?= $service['service_image']['url'] ?>" alt="">
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </li>

                        <?php
                            $counter_Content++;
                        }
                        
                    ?>

                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>