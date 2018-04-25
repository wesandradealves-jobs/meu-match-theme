<?php get_header(); ?>
<div class="container">
  <?php
  if ( is_front_page()||is_home() ){
  ?>
  <?php if ( have_posts () ) : while (have_posts()):the_post();?>
  <?php
  the_content();
  ?>
  <?php endwhile; ?>
  <?php endif; ?>
  <?php } else { ?>
  <?php if ( have_posts () ) : while (have_posts()):the_post();?>
  <?php
  the_content();
  ?>
  <?php endwhile; ?>
  <?php endif; ?>
  <?php } ?>
</div>
<?php get_footer(); ?>