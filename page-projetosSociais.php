<?php
// Template Name: Projetos Sociais
?>

<?php get_header(); ?>

  
  <main class="container">
    <div class="row">
      <div class="col-12 d-flex flex-column justify-content-center align-items-start">

        <img src="<?php the_field('logo-projetoSocial'); ?>" class="img-fluid mx-auto rounded-2 justify-content-center object-fit-fill mb-3" width="430" height="230">

        <div class="lead text-dark text-center px-5">
          <?php the_field('descricaoInicial-projetoSocial'); ?>
        </div>
        <div class="d-flex mx-auto">
          <p class="lead text-dark text-center">
            <?php the_field('telefones-projetoSocial'); ?>
          </p>
        </div>

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
      <div class="col-lg-9 p-3 ms-2 pt-0">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="gap-2 bg-primary-subtle p-3 rounded-4">
          <h5 class="lead fw-bold">Acompanhe nas Redes Sociais</h5>
          <a href="<?php the_field('RedeSocialfb-projetoSocial');?>" target="_blank">Facebook</a>
          <a href="<?php the_field('RedeSocialig-projetoSocial');?>" target="_blank">Instagram</a>
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