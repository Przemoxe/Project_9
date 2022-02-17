<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ideo
 */
$obj_menu_1 =  wp_get_nav_menu_object('menu-1');

$header_menu_location_email = get_field('header_menu_location_email', $obj_menu_1);
$header_menu_location_phone = get_field('header_menu_location_phone', $obj_menu_1);
$header_menu_location_facebook = get_field('header_menu_location_facebook', $obj_menu_1);
$header_menu_location_behance = get_field('header_menu_location_behance', $obj_menu_1);
$header_menu_location_twitter = get_field('header_menu_location_twitter', $obj_menu_1);
$header_menu_location_dribbble = get_field('header_menu_location_dribbble', $obj_menu_1);
$header_menu_location_logo = get_field('header_menu_location_logo', $obj_menu_1) ?: "edit menu in wp-panel" ;
$header_menu_free_quote_url = get_field('header_menu_free_quote_url', $obj_menu_1);
$header_menu_free_quote_text = get_field('header_menu_free_quote_text', $obj_menu_1);


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	
	<?php wp_head(); ?>
</head>

<body>



<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
</div>
  <!-- Pre-header Starts -->
 <div class="pre-header">
   <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-6">
          <ul class="info">
            <?php 
              if($header_menu_location_email){?>
                  <li><a href="#"><i class="fa fa-envelope"></i> <?= $header_menu_location_email ?></a></li>
             <?php }
            ?>
            <?php 
              if($header_menu_location_phone){?>
                  <li><a href="tel:<?=$header_menu_location_phone ?>"><i class="fa fa-phone"></i> <?= $header_menu_location_phone ?></a></li>
             <?php }
            ?>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-6">
          <ul class="social-media">
            <?php 
              if($header_menu_location_facebook){?>
                  <li><a href="<?= $header_menu_location_facebook ?>"><i class="fa fa-facebook"></i></a></li>
             <?php }
            ?>
            <?php 
              if($header_menu_location_behance){?>
                  <li><a href="<?= $header_menu_location_behance ?>"><i class="fa fa-behance"></i></a></li>
             <?php }
            ?>
            <?php 
              if($header_menu_location_twitter){?>
                  <li><a href="<?= $header_menu_location_twitter ?>"><i class="fa fa-twitter"></i></a></li>
             <?php }
            ?>
            <?php 
              if($header_menu_location_dribbble){?>
                  <li><a href="<?= $header_menu_location_dribbble ?>"><i class="fa fa-dribbble"></i></a></li>
             <?php }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Pre-header End -->
   <!-- ***** Header Area Start ***** -->
   
  <header class="header-area header-sticky slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="<?= get_home_url() ?>" class="logo">
              <img src="<?= $header_menu_location_logo ?>" alt="">
            </a>

            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->

            <ul class="nav">
              <?php 

                  $menuHeader = wp_get_nav_menu_items('menu-1');
                  foreach($menuHeader as $menu){
                   ?>
                  <li class="scroll-to-section "><a href="<?= $menu->url?>"><?= $menu->title ?></a></li>
                <?php
                }

              ?>
              
              <li class="scroll-to-section"><div class="border-first-button"><a href="<?= $header_menu_free_quote_url ?>"><?= $header_menu_free_quote_text ?></a></div></li> 
            </ul>  
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->


