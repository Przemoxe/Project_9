<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ideo
 */

get_header();
?>

	

		<?php
		while ( have_posts() ) :
			the_post();?>

				<div id="blog" class=" single-background">
					<div class="container ">
					<div class="row">
						<div class="col-lg-4  offset-lg-4  wow fadeInDown pb-5" data-wow-duration="1s" data-wow-delay="0.3s">
							<div class="section-heading d-flex flex-column align-items-center text-center">
								<h6>Hello <?php echo $current_user->user_login ?></h6>
								<div class="line-dec "></div>
							</div>
						</div>
						
						<div class="col-12 wow fadeInUp pt-5" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="blog-posts">
							<div class="row">
							
							<div class="col-lg-12">
								<div class="post-item">
								<div class="thumb">
									<a href="#"><img src="<?php the_post_thumbnail_url() ?>" alt=""></a>
								</div>
								<div class="right-content">
									<span class="category">
										<?php
											$cat = get_the_terms( $post->ID, 'category' );
											
											foreach($cat as $el){
												echo $el->name;
											}
										?>
									</span>

									<span class="date"><?php the_date() ?></span>
									<a href="#"><h4><?php the_title() ?></h4></a>
									<p class="d-block"><?= get_the_content();?></p>

								</div>
								</div>
							</div>
							
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>  

		<?php endwhile; // End of the loop.
		?>


<?php
get_footer();
