<?php
// Template Name: Projetos Sociais
?>

<?php get_header(); ?>

  
  <main class="container">
    <div class="row">
      <div class="col-12 d-flex flex-column justify-content-center">

        <h1 class="fw-bold text-center invisible"><?php the_title(); ?></h1>
        <img src="<?php the_field('logo-projetoSocial'); ?>" class="img-fluid mx-auto rounded-2 h-100 object-fit-cover justify-content-center mb-3" width="430">

        <h2 class="lead text-dark text-center px-5">
          <?php the_field('descricaoInicial-projetoSocial'); ?>
        </h2>

        <p class="lead text-dark text-center">
          Fale conosco:
          <?php the_field('telefones-projetoSocial'); ?>
        </p>

      </div>

    </div>

    <div class="row">
        <picture class="" style="height: 50vh;">
          <img src="<?php the_field('imagemInicial-projetoSocial'); ?>" class="img-fluid rounded-2 h-100 w-100 object-fit-cover">
        </picture>
    </div>

  </main>

  <section class="container py-5">
    <div class="row">
      <div class="col-lg-4 d-grid bg-primary-subtle rounded-4 p-4 gap-3 h-50">
        <div>
        <?php if(have_rows('informacao-projetoSocial')): while(have_rows('informacao-projetoSocial')) : the_row(); ?>
          <h5><?php the_sub_field('enunciado-projetoSocial')?></h5>
          <h6><?php the_sub_field('resposta-projetoSocial')?></h6>
        <?php endwhile; else : endif; ?>

        </div>

      </div>

      <div class="col-lg-7 p-3 ms-2">
        <p class="text-dark">
          <?php the_content(); ?>
        </p>
      </div>
    </div>

  </section>

  <section class="container d-flex flex-wrap gap-2 pb-5 justify-content-center" id="galeria">

    <?php if(have_rows('projeto-galeria')): while(have_rows('projeto-galeria')) : the_row(); ?>

      <div class="col-lg-4 col-md-9">
        <a href="<?php the_sub_field('projeto-galeria--imagem') ?>" data-toggle="lightbox" data-gallery="photo_gallery">
          <img src="<?php the_sub_field('projeto-galeria--imagem') ?>" class="img-fluid rounded-2">
        </a>
      </div>

      <div class="col-lg-4 col-md-9">
        <a href="<?php the_sub_field('projeto-galeria--imagem2') ?>" data-toggle="lightbox" data-gallery="photo_gallery">
          <img src="<?php the_sub_field('projeto-galeria--imagem2') ?>" class="img-fluid rounded-2">
        </a>
      </div>
    <?php endwhile; else : endif; ?>

  </section>

  <section id="contribua" class="container pb-5">

  <?php 
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'contribua' ); 
  
    endwhile;
  ?>

  </section>



<?php get_footer(); ?>