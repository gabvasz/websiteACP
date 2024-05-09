<?php get_header(); ?>


  <section class="container py-3" id="blog" data-scroll>
    <h3 class="h2 text-center text-md-start display-5 text-primary">
      Últimos artigos do blog
    </h3>
    <p class="lead text-primary text-center text-md-start">
      Fique por dentro das últimas novidades  no nosso blog.
    </p>

    <div class="row row-gap-2 mb-3 gap-2">
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 6,
          'orderby' => 'date',
          );
  
        $index = new WP_Query( $args );
  
        if( $index->have_posts() ):
          while( $index->have_posts() ): $index->the_post();
        ?>
          <?php get_template_part( 'template-parts/content', 'articles' ); ?>
            
          <?php
            endwhile;
              wp_reset_postdata();
            endif;
        ?>
      </div>
  </section>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php endwhile; ?>
            <div class="container">
              <div class="row py-3 d-flex">
                <div class="text-start col-6"><?php previous_posts_link( "Posts mais recentes" ) ?></div>
                <div class="text-end col-6"><?php next_posts_link( "Posts mais antigos" ) ?></div>
              </div>
            </div>
  <?php else: ?>

    <div class="container">
      <p class="lead text-dark poppins-regular my-3"><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    </div>

    <?php endif ?>

<?php get_footer(); ?>