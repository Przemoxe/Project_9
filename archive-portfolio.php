<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ideo
 */

get_header();
?>

	<main id="primary" class="site-main ">
  
    <div id="blog" class=" single-background">
					<div class="container ">
					<div class="row">
						<div class="col-lg-4  offset-lg-4  wow fadeInDown pb-5" data-wow-duration="1s" data-wow-delay="0.3s">
							<div class="section-heading d-flex flex-column align-items-center text-center">
								<h6>Hello <?php echo $current_user->user_login ?></h6>
								<h4>Check Our <em>Projects</em></h4>
								<div class="line-dec "></div>
							</div>
						</div>

    <?php 
      // wykonuj dopóki są posty
        while(have_posts()){  
          // wyswietl post 
          the_post(); ?>     

                
						
						<div class="col-12 wow fadeInUp pt-5" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="blog-posts">
							<div class="row">
							
							<div class="col-lg-12">
								<div class="post-item">
								<div class="thumb blog-squares">
									<a href="#"><img src="<?php the_post_thumbnail_url() ?>" alt=""></a>
								</div>
								<div class="right-content">
									<span class="category">
										<?php
											$cat = get_the_terms( $post->ID, 'brand' );
											
											foreach($cat as $el){
												echo $el->name;
											}
										?>
									</span>

									<span class="date"><?= get_the_date() ?></span>
									<a href="#"><h4><?php the_title() ?></h4></a>
									<p class="d-block"><?= wp_trim_words(get_the_content(), 18) ?></p>
                                    <a href="<?php the_permalink()?>">read more...</a>

							</div>
						</div>
						</div>
					</div>
					</div>
				</div>  


       <?php  }

      ?>

</div>
								</div>
							</div>
	</main><!-- #main -->

<?php

get_footer();
