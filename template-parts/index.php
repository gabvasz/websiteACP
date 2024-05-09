<article class="col-12 col-md-4" <?php post_class( array( 'class' => 'index') ); ?>>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fonteDrigor text-primary fs-2"><?php the_title() ?></h5>
      <p class="fs-6 text-black-50">Publicado em <?php echo get_the_date(); ?> </p>

      <p class="card-text poppins-regular text-dark"><?php echo wp_trim_words( get_the_excerpt() ); ?></p>
      <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leia mais</a>
    </div>
  </div>
</article>