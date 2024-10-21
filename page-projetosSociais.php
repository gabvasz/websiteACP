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
    <div class="row col-6">
      <div class="gap-2 bg-primary-subtle p-3 rounded-4 d-flex align-content-center flex-shrink-1">
             <div class="d-flex flex-column align-content-center"> 
              <h5 class="lead fw-bold text-primary-emphasis mb-0">Acompanhe nas Redes Sociais</h5>
              <p class="text-primary mb-0">Clique nos ícones para acessar.</p>
              </div>

              <a href="<?php the_field('RedeSocialfb-projetoSocial');?>" class="icon-link link-light icon-link-hover p-2" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook text-primary-emphasis" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg>
              </a>

              <a href="<?php the_field('RedeSocialig-projetoSocial');?>" class="icon-link link-light icon-link-hover p-2" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram text-primary-emphasis" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                </svg>
              </a>
          
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