<footer class="footer">
  <section class="carta">
    <div class="container">
      <div class="carta_in">
        <?php the_custom_logo(); ?>
        <div class="carta_link">
          <h4 class="carta_h4">Links</h4>
          <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
        </div>
        <div class="carta_resources">
          <h4 class="carta_h4">Resources</h4>
          <div class="carta_inner">
            <?php the_field('footer_resources',7)?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="info">
    <div class="container">
      <div class="info_in">
        <div class="info_inner">
          <div class="info_studio">
            <h4 class="carta_h4">Studio Inc</h4>
            <a class="info_cordinator" href="<?php the_field('con_adress_ss', 7)?>">
              <?php the_field('con_adress', 7)?>
            </a>
          </div>
          <div class="info_contact">
            <h4 class="carta_h4">Contact</h4>
            <div class="info_cordinator_tel">
              <a class="info_telsait" href="tel:<?php the_field('con_tel_z',7)?>"><?php the_field('con_tel',7)?></a>
              <a class="info_telsait" href="mailto:<?php the_field('con_mail',7)?>"><?php the_field('con_mail',7)?></a>
            </div>
          </div>
        </div>
        <div class="info_sety">
          <a class="info_sety_a"  href="<?php the_field('facebook')?>">Facebook</a>
          <a class="info_sety_a"  href="<?php the_field('instagram')?>">Instagram</a>
          <a class="info_sety_a"  href="<?php the_field('linkedin')?>">Linkedin</a>
          <a class="info_sety_a"  href="<?php the_field('Google_Rating')?>">Google Rating</a>
          <a class="info_sety_a5" href="<?php the_field('Yelp')?>">Yelp</a>
        </div>
      </div>
    </div>
  </section>
  <div class="autor">
    <div class="container">
      <div class="autor_year">
        <?php the_field('autor_year')?>. All rights reserved.
      </div>
      <a href="<?php echo get_page_link(310); ?>">
        <div class="autor_priv">
          Privacy Policy
        </div>
      </a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
