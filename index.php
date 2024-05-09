<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        
      <div class="container py-5">
        <h1><?php the_title(); ?></h1>
        
        <div class="row">
          <div class="col-9 lead">
            <?php the_content();?>
          </div>
        </div>
      </div>
    <?php endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

get_footer();
?>