<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<div class="zagolovok">
  <div class="container">
    <div class="zagolovok_inner">
      <div class="zagolovok_bigtext">
        <?php the_field('name_zag')?>
      </div>
      <div class="zagolovok_mintext">
        <?php the_field('zag_opis')?>
      </div>
      <a class="zagolovok_btn" href="#">Browse Sessions</a>
    </div>
  </div>
</div>
<div class="opisanie">
  <div class="container_spis">
    <div class="opisanie_inner">
      <div class="opisanie_indcomp">
        <div class="opisanie_zag">
          <img class="opisanie_zagimg" src="<?php  bloginfo('template_url'); ?>/assets/img/zagimg.png" alt="">
          <p class="opisanie_zagp">
            Individual Sessions
          </p>
        </div>
        <?php the_field('individ_sessia')?>
        <a class="opisanie_btn" href="#">See More </a>
      </div>
      <div class="opisanie_indcomp">
        <div class="opisanie_zag">
          <img class="opisanie_zagcimg" src="<?php  bloginfo('template_url'); ?>/assets/img/zagcimg.png" alt="">
          <p class="opisanie_zagcp">
            Companies Sessions
          </p>
        </div>
        <?php the_field('company_sessison')?>
        <a class="opisanie_btn" href="#">See More </a>
      </div>
    </div>
  </div>
</div>
<div class="maps" style="position:relative;overflow:hidden;">
  <a href="https://yandex.ru/maps?utm_medium=mapframe&utm_source=maps"
  style="color:#eee;font-size:12px;position:absolute;top:0px;">Яндекс.Карты</a>
  <a href="<?php the_field('mapsss')?>"
    style="color:#eee;font-size:12px;position:absolute;top:14px;">
    Карта Санкт-Петербурга с улицами и номерами домов онлайн — Яндекс.Карты</a>
    <div class="container">
      <div class="maps_inner">
        <div class="maps_bigtext">
          <?php the_field('map_name')?>
        </div>
        <div class="maps_mintext">
          <?php the_field('map_opsan')?>
        </div>
        <div class="maps_btn">
          <div class="maps_btns">
          </div>
          <a class="maps_btno" href="#">
            Search
          </a>
        </div>
      </div>
    </div>
    <iframe src="<?php the_field('maps_ins')?>" width="100%" height="560px" frameborder="1" allowfullscreen="true" style="position:relative; top:-15px;">
    </iframe>
  </div>
  <div class="fishki">
    <div class="container">
      <h2 class="fishki_h2">Our professional services</h2>
      <?php wp_nav_menu( array( 'theme_location' => 'menu-2' ) ); ?>
    </div>
  </div>
  <div class="fotoprimer">
    <div class="container">
      <div class="fotoprimer_items">
        <div class="fotoprimer_items_slick">

          <?php
          global $post;

          $myposts = get_posts([
            'numberposts' => -1,
            'category' => 5
          ]);

          if( $myposts ){
            foreach( $myposts as $post ){
              setup_postdata( $post );
              ?>
              <div class="fotoprimer_items_gallery">
                <div class="fotoprimer_items_inner">
                  <a class="fotoprimer_items-img_a" href="<?php the_field('fotoss')?>">
                    <div class="fotoprimer_items-img" style="background-image: url(<?php the_field('fotoss')?>);">
                      <div class="fotoprimer_text">
                        <h3 class="fotoprimer_items-h3"><?php the_field('name_foto')?></h3>
                        <p class="fotoprimer_items-p"><?php the_field('content_foto')?> &rarr;</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <?php
            }
          }
          wp_reset_postdata(); // Сбрасываем $post
          ?>
        </div>
        <div class="fotoprimer_items_innerb">
          <?php
          global $post;

          $myposts = get_posts([
            'numberposts' => -1,
            'category' => 6
          ]);

          if( $myposts ){
            foreach( $myposts as $post ){
              setup_postdata( $post );
              ?>
              <div class="fotoprimer_items-img" style="background-image: url(<?php the_field('fotobig')?>); height:880px;">
              </div>
              <?php
            }
          }
          wp_reset_postdata(); // Сбрасываем $post
          ?>
        </div>
      </div>

    </div>
  </div>
  <section class="recomandation">
    <div class="container">
      <div class="recomandation_inner">
        <div class="recomandation_content">
          <h3 class="recomandation_content_h3"><?php the_field('why_qus')?></h3>
          <p class="recomandation_content_p"><?php the_field('why_opisan')?></p>
          <p class="recomandation_p_btn">Подробнее</p>
          <img class="recomandation_content_img" src="<?php  bloginfo('template_url'); ?>/assets/img/arrow.png" alt="">
        </div>
        <div class="recomandation_tips">
          <h3 class="recomandation_tips_h3">5 Useful Tips</h3>
          <nav class="recomandation_tips_nav">
            <?php the_field('why_tip')?>
          </nav>
        </div>
      </div>
      <div class="recomandation_service">
        <?php the_field('why_servise')?>
      </div>
    </div>
  </div>
</section>
<section class="client">
  <div class="container">
    <h2 class="client_h2">Clients love us</h2>
    <p class="client_p">We have formed true friendships.</p>
    <div class="client_inner">
      <?php
      global $post;

      $myposts = get_posts([
        'numberposts' => -1,
        'category' => 7
      ]);

      if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post );
          ?>
          <ul class="client_div_ul">
            <li class="client_li">
              <a class="client_a" href="<?php the_field('client_foto')?>">
                <img class="client_img" src="<?php the_field('client_foto')?>" alt="">
              </a>
              <div class="client_ocenka">
                <div class="client_name">
                  <?php the_field('client_name')?>
                </div>
                <img class="client_star" src="<?php the_field('cient_star')?>" alt="">
              </div>
              <div class="client_opisanie">
                <div class="client_comen">
                  "
                </div>
                <div class="client_text">
                  <?php the_field('client_content')?>
                </div>
              </div>
            </li>
          </ul>
          <?php
        }
      }
      wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>
  </div>
</div>
</section>
<section class="about">
  <div class="container_about">
    <div class="container">
      <div class="about_inner">
        <div class="about_text">
          <?php the_field('about_opisan')?>
        </div>
        <a class="about_btn" href="#">
          About Us
        </a>
      </div>
    </div>
  </div>
</section>
<section class="blog">
  <div class="container">
    <h2 class="blog_h2">Our Blog </h2>
    <p class="blog_p">Check our latest news.</p>
    <div class="blog_inner">
      <?php
      global $post;

      $myposts = get_posts([
        'numberposts' => -1,
        'category' => 8
      ]);

      if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post );
          ?>
          <a class="blog_inner_a " href="#">
            <img class="blog_inner_img" src="<?php the_field('blog_foto')?>" alt="">
            <div class="blog_inner_content">
              <div class="blog_inner_text">
                <?php the_field('blog_content')?>
              </div>
              <div class="blog_inner_dan">
                <div class="blog_inner_comen">
                  <img class="blog_inner_comen_img" src="<?php  bloginfo('template_url'); ?>/assets/img/comen.png" alt="">
                  <div class="blog_inner_comen_text">
                    <?php the_field('blog_comment')?>
                  </div>
                </div>
                <div class="blog_inner_data">
                  <?php the_field('blog_data')?>
                </div>
              </div>
            </div>
          </a>
          <?php
        }
      }
      wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>
    <a class="blog_btn" href="#">
      See All Posts
    </a>
  </div>
</section>
<?php get_footer(); ?>
