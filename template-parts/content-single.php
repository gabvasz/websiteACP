<div class="container-fluid px-lg-5 py-2 d-grid">
    <div class="container h-auto">
      <?php the_post_thumbnail( 'large', array('class' => 'img-fluid h-auto mb-4 w-100 object-fit-cover rounded-3' )) ?>
    </div>

  <main class="container">
    <div class="row">
      <p class="fs-6 text-secondary">Publicado em <?php echo get_the_date(); ?> </p>

      <h1 class="display-1 text-start lh-1 text-primary fw-bold"><?php the_title(); ?></h1>


      <div class="text-light lead">
        <p class="fs-6 text-secondary">Categoria: <?php the_category( ' ') ?></p>
      </div>
    </div>
  </main>
  
  <section class="container">
    <div class="row">
      <div class="col-lg-7 pe-5 me-2"><?php the_content(); ?></div>

      <div class="container col-lg-3 bg-primary-subtle rounded-3 p-3 h-auto">
        <h5 class="text-dark h4 fw-bold">Últimos artigos</h3>
        <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                );

                $featured = new WP_Query( $args );

                if( $featured->have_posts() ):
                  while( $featured->have_posts() ): $featured->the_post();
                  ?>

                  <?php get_template_part( 'template-parts/content', 'articles' ); ?>
                  
                  <?php
                  endwhile;
                  wp_reset_postdata();
                endif;

              ?>
      </div>
    </div>

  </section>
</div>