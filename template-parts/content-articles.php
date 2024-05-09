<div class="border rounded-3 border-primary p-3 mb-3">
  <div class="h-auto">
    <h6 class="mb-0 h5 fw-bold text-primary"><?php the_title() ?></h6>
    <p class="fs-6 mb-0"><?php echo wp_trim_words( get_the_excerpt(), 25 ); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-link text-start ps-0">Leia mais</a>    
  </div>
</div>