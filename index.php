<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <?php endwhile; else: ?>
    
    <div class="container">
      <p class="lead text-dark poppins-regular my-3"><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    </div>
    
    <?php endif ?>

<?php get_footer(); ?>