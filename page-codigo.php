<?php
// Template Name: Código de ética
?>

<?php get_header(); ?> 

  <section class="container" id="sobre">

    <div class="row mt-4">
      <div class="col-lg-6 py-3 d-flex flex-column justify-content-start align-items-center lead">
        <h1 class="display-5 text-start me-auto"><?php the_title(); ?></h1>

        
        
      </div>
    </div>

  </section>

  <section class="container">
    <div class="row">
      <div class="col-7 text-dark lead">
        <?php the_content(); ?>
      </div>
    </div>

    <div class="row d-flex gap-2 justify-content-center mb-3">
      
      <div class="card" style="width: 18rem;">
        <img src="<?php the_field('imagem-documento'); ?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title"><?php the_field('titulo-documento'); ?></h5>
          <a href="<?php the_field('link-documento'); ?>" class="btn btn-primary" target="_blank">Download do documento</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="<?php the_field('imagem-documento2'); ?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title"><?php the_field('titulo-documento2'); ?></h5>
          <a href="<?php the_field('link-documento2'); ?>" class="btn btn-primary" target="_blank">Download do documento</a>
        </div>
      </div>
    </div>

  </section>

<?php get_footer(); ?>