<?php

  /* Block Three Template */
  $blog_subtitle = get_field('blog_subtitle') ?: 'Your about subtitle  text';
  $blog_title = get_field('blog_title') ?: 'Your about title text';
  $blog_title_color2 = get_field('blog_title_color2') ?: 'Your about title color2 text';

?>           

<div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <h6><?= $blog_subtitle  ?></h6>
            <h4><?=$blog_title?> <em><?=$blog_title_color2?></em></h4>
            <div class="line-dec"></div>
          </div>
        </div>

        <?php 
           $homepagePosts = new WP_Query(array(
            'posts_per_page' => 4,
           ));
        ?>

        <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          
           <?php
           
              for($i = 1; $i == $homepagePosts->have_posts(); $i++){
                $homepagePosts->the_post();
                $blog_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                $blog_button_text = get_field('blog_button_text');  
                if($i == 1){ ?>

                  <div class="blog-post">
                    <div class="thumb">
                      <a href="<?php the_permalink(); ?>"><img class="first-img" src="<?= $blog_image ?>" alt=""></a>
                    </div>
                    <div class="down-content">
                      <span class="category">
                        <?php
                          $cat = get_the_terms($post->ID, 'category' );
                              if ( ! empty($cat )) {
                                foreach($cat as $el){
                                    echo $el->name;
                                    }
                                }
                        ?>
                      </span>
                      <span class="date"><?= get_the_date() ?></span>
                      <a href="<?php the_permalink(); ?>"><h4><?php the_title()?></h4></a>
                      <p><?php the_content(); ?></p>
                      <span class="author"><img src="<?= get_avatar_url( array('size' => 32))?>" alt="">By: <?= get_the_author()?></span>
                      <div class="border-first-button"><a href="<?php the_permalink() ?>"><?= $blog_button_text ?></a></div>
                    </div>
                  </div>


                <?php }
              }
           
           ?>
          
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-posts">
            <div class="row">

              <?php 
                
                for($i = 1; $i == $homepagePosts->have_posts(); $i++){
                  $homepagePosts->the_post();
                  $Blog_image_mini = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                  $max_posts = 4;
                  if($i > 1 && $i <= $max_posts){?>
                    
                    <div class="col-lg-12">
                      <div class="post-item <?php if($i == $max_posts) echo "last-post-item" ?>">
                        <div class="thumb">
                          <a href="#"><img src="<?= $Blog_image_mini ?>" alt=""></a>
                        </div>
                        <div class="right-content">
                          <span class="category">
                            <?php
                            $cat = get_the_terms($post->ID, 'category' );
                                if ( ! empty($cat )) {
                                  foreach($cat as $el){
                                      echo $el->name;
                                      }
                                  }
                            ?>
                          </span>
                          <span class="date">24 September 2021</span>
                          <a href="#"><h4><?php the_title() ?></h4></a>
                          <p><?php the_content();?></p>
                          
                        </div>
                      </div>
                    </div>

                  <?php }
                }
              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  