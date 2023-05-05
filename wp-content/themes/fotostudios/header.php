<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('description'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header_inner">
      <div class="header_left">
            <a href="/" class="header-logo">
  <?php
  $header_logo = get_theme_mod('header_logo');
  $img = wp_get_attachment_image_src($header_logo, 'full');
  if ($img) :
    ?>
    <img src="<?php echo $img[0]; ?>" alt="">
  <?php endif; ?>
</a>
        <button class="menu_btn" type="button" name="menu">
          <img title="Меню" src="<?php  bloginfo('template_url'); ?>/assets/img/menua.png" alt="">
        </button>
             <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
      </div>
      <div class="header_right">
        <a class="header_btn" href="<?php echo get_page_link(317); ?>">Book Now</a>
        <button class="sety_btn" type="button" name="button">
          <img  title="Мы в соцсетях" src="<?php  bloginfo('template_url'); ?>/assets/img/wifi.png" alt="">
        </button>
        <nav class="icon">
          <ul class="icon_list">
            <li class="icon_item">
              <a class="icon_link" href="<?php the_field('facebook')?>"><img class="icon_img" src="<?php  bloginfo('template_url');?>/assets/img/face.png" alt=""></a>
            </li>
            <li class="icon_item">
              <a class="icon_link" href="<?php the_field('instagram')?>"><img class="icon_img" src="<?php  bloginfo('template_url'); ?>/assets/img/inst.png" alt=""></a>
            </li>
            <li class="icon_item">
              <a class="icon_link" href="<?php the_field('linkedin')?>"><img class="icon_img" src="<?php  bloginfo('template_url'); ?>/assets/img/in.png" alt=""></a>
            </li>
            <li class="icon_item">
              <a class="icon_link" href="<?php the_field('Google_Rating')?>"><img class="icon_img" src="<?php  bloginfo('template_url'); ?>/assets/img/vibber.png" alt=""></a>
            </li>
            <li class="icon_item">
              <a class="icon_link" href="<?php the_field('Yelp')?>"><img class="icon_img" src="<?php  bloginfo('template_url'); ?>/assets/img/google.png" alt=""></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
