<?php get_header(); ?>
<?php the_post(); ?>
<div class="container">
  <div class="polit">
    <?php the_field('name_polit') ?>
    <?php the_field('content_polit') ?>
  </div>
  <div class="korzina">
    <?php the_field('name_koz') ?>
  </div>
</div>
<?php get_footer(); ?>
