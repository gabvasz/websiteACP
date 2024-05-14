<?php
// Template Name: Página Inicial
?>

<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <main>

  <div class="container">
    <div class="row py-2 d-flex justify-content-center mx-auto">
      
      <div class="col-lg-7 d-flex align-items-center justify-content-center">
        <h1 class="display-5 text-primary text-center text-lg-start fw-bold">
          <?php the_field('titulo-hero');?>
        </h1>
      </div>

      <div class="col-lg-5 d-flex align-items-center justify-content-center">
        <iframe width="560" height="315" class="rounded-3" src="https://www.youtube.com/embed/gQJKO0jOkkE?si=A_BliuT5lfRbx5s-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

      </div>
      
    </div>
  </div>
  </main>

  <section class="container py-2" id="projetos"">
    <h2 class="fw-bold h2 text-primary-subtle text-center mb-4">Conheça nossos projetos</h2>

    <div class="row">
      <div class="col-12">

      <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active text-primary-subtle" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">Lar Hermínia Scheleder</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link text-primary-subtle" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">CEI Miriam</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link text-primary-subtle" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab" aria-controls="tab-3" aria-selected="false">Instituto Social Vó Durvina</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link text-primary-subtle" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab-4" type="button" role="tab" aria-controls="tab-4" aria-selected="false">Amor que Comove</button>
        </li>
        
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
          <div class="row p-md-2 d-flex justify-content-center align-content-center">
            
              <div class="col-lg-4 d-flex justify-content-center align-content-center">
                <picture class="d-flex">
                  <img src="<?php echo get_field('imagemInicial-projetoSocial', 76); ?>"  class="img-fluid rounded-3 object-fit-cover">
                </picture>
              </div>

              <div class="col-lg-6 ms-lg-3 d-grid align-content-center py-3">
                <div class="d-flex align-content-center justify-content-center">
                  <picture class="mb-3">
                    <img src="<?php echo get_field('logo-projetoSocial', 76); ?>" width="230" class="img-fluid">
                  </picture>
                </div>

                <p class="text-dark mb-0"><?php echo get_field('descricaoInicial-projetoSocial', 76); ?></p>

                <a class="icon-link icon-link-hover" href="<?php echo get_permalink( '76' ); ?>">
                  Veja mais sobre o projeto
                </a>
              </div>
         
          </div>
        </div>
        

        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
          <div class="row p-md-2 d-flex justify-content-center align-content-center">
            <div class="col-lg-4 d-flex justify-content-center align-content-center">
                  <picture class="d-flex">
                    <img src="<?php echo get_field('imagemInicial-projetoSocial', 78); ?>"  class="img-fluid rounded-3 object-fit-cover">
                  </picture>
                </div>

                <div class="col-lg-6 ms-lg-3 d-grid align-content-center py-3">
                  <div class="d-flex align-content-center justify-content-center">
                    <picture class="mb-3">
                      <img src="<?php echo get_field('logo-projetoSocial', 78); ?>" width="230" class="img-fluid">
                    </picture>
                  </div>

                  <p class="text-dark mb-0"><?php echo get_field('descricaoInicial-projetoSocial', 78); ?></p>

                  <a class="icon-link icon-link-hover" href="<?php echo get_permalink( '78' ); ?>">
                    Veja mais sobre o projeto
                  </a>
            </div>
          </div>

        </div>

        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

          <div class="row p-md-2 d-flex justify-content-center align-content-center">
            <div class="col-lg-4 d-flex justify-content-center align-content-center">
                <picture class="d-flex">
                  <img src="<?php echo get_field('imagemInicial-projetoSocial', 80); ?>"  class="img-fluid rounded-3 object-fit-cover">
                </picture>
            </div>

            <div class="col-lg-6 ms-lg-3 d-grid align-content-center py-3">
                <div class="d-flex align-content-center justify-content-center">
                  <picture class="mb-3">
                    <img src="<?php echo get_field('logo-projetoSocial', 80); ?>" width="230" height="20" class="img-fluid object-content-fit">
                  </picture>
                </div>

                <p class="text-dark mb-0"><?php echo get_field('descricaoInicial-projetoSocial', 80); ?></p>

                <a class="icon-link icon-link-hover" href="<?php echo get_permalink( '80' ); ?>">
                  Veja mais sobre o projeto
                </a>
            </div>
          </div>

        </div>

        <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

          <div class="row p-md-2 d-flex justify-content-center align-content-center">
            <div class="col-lg-4 d-flex justify-content-center align-content-center">
                <picture class="d-flex">
                  <img src="<?php echo get_field('imagemInicial-projetoSocial', 82); ?>"  class="img-fluid rounded-3 object-fit-cover">
                </picture>
            </div>

            <div class="col-lg-6 ms-lg-3 d-grid align-content-center py-3">
              <div class="d-flex align-content-center justify-content-center">
                <picture class="mb-3">
                  <img src="<?php echo get_field('logo-projetoSocial', 82); ?>" width="230" class="img-fluid">
                </picture>
              </div>

              <p class="text-dark mb-0"><?php echo get_field('descricaoInicial-projetoSocial', 82); ?></p>

              <a class="icon-link icon-link-hover" href="<?php echo get_permalink( '82' ); ?>">
                Veja mais sobre o projeto
              </a>
            </div>
          </div>

        </div>

        </div>
      </div>
      </div>
    </div>

  </section>

  <section class="container py-2" id="sobre">
    <h2 class="fw-bold text-primary-subtle text-center">Sobre a Associação Comunitária Presbiteriana</h2>

    <div class="row mt-4">
      <div class="col-lg-6 d-flex justify-content-ceneter">
        <picture class="object-fit-cover">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acp.webp" alt="" srcset="" class="img-fluid rounded-3">
        </picture>
      </div>

      <div class="col-lg-6 py-3 d-flex flex-column justify-content-start align-items-center text-dark lead">
        
          <?php the_field('texto-sobre'); ?>

          <a href="<?php echo get_permalink( '107' ); ?>" class="btn btn-outline-primary me-auto">Saiba mais sobre a Associação</a>
        
      </div>
    </div>

  </section>

  <section id="contribua" class="bg-secondary my-4 rounded-5 container border border-primary border-5 border-start-0 border-bottom-0">
    <div class="row p-3 p-md-5 align-content-center">
      <div class="col-lg-6 d-flex align-items-center justify-content-center mb-4 mb-lg-0">
        <picture class="object-fit-cover">
          <img 
            src="<?php the_field('imagem-Contribua'); ?>"
            class="img-fluid rounded-3">
        </picture>
      </div>

    <div class="col-lg-6 d-grid align-content-center">
      <h2 class="text-uppercase display-4 text-wrap fw-bold text-light lh-1">contribua <br>para nossos projetos sociais</h2>

        <div class="d-flex gap-2 flex-wrap">
          <a href="<?php echo get_permalink( '117'); ?>" class="btn btn-outline-light">
            Sou uma Pessoa Física
          </a>

          <a href="<?php echo get_permalink( '117'); ?>" class="btn btn-outline-light">
            Sou uma Pessoa Jurídica
          </a>

          <a href="<?php echo get_permalink( '117'); ?>" class="btn btn-outline-light">
            Quero ser voluntário
          </a>
        </div>
    </div>
    </div>

  </section>

  <section id="blog">
    <h2 class="fw-bold text-dark text-center">Acompanhe as últimas notícias sobre a Associação</h2>
    
    <div class="container py-3">
      <div class="row">
        <?php
              $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 1,
              );

              $featured = new WP_Query( $args );

              if( $featured->have_posts() ):
                while( $featured->have_posts() ): $featured->the_post();
                ?>

                <?php get_template_part( 'template-parts/content', 'featured' ); ?>
                
                <?php
                endwhile;
                wp_reset_postdata();
              endif;

            ?>

      </div>
    </div>

  </section>

  <section id="contato" class="container my-4">
    <h2 class="fw-bold text-dark text-center">Fale conosco</h2>

    <div class="row flex-grow-1 justify-content-center">

      <div class="col-md-6 d-flex justify-content-center align-content-center">
        <div class="d-flex align-content-center mb-4 mb-md-0">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pin-map text-dark me-3" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
          </svg>
          <div>
            <h4 class="fw-bold mb-0">Associação Comunitária Presbiteriana</h4>
            <p class="mb-0">Rua Comendador Araújo, 343 - Centro | Curitiba-PR</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 d-flex justify-content-center">
          <a class="btn btn-primary btn-lg align-items-center fw-bold" href="<?php echo get_field('link-whatsapp') ?>" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
              </svg>  
              (41) 9 9286-8895
          </a>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-3 d-flex flex-column justify-content-center p-3">
        <picture class="d-flex justify-content-center mb-3">
          <img src="<?php echo get_field('logo-projetoSocial', 76); ?>" width="200" class="img-fluid">
        </picture>
        <p class="text-center">
          <?php echo get_field('telefones-projetoSocial', 76); ?>
        </p>
      </div>

      <div class="col-md-3 d-flex flex-column justify-content-center p-3">
        <picture class="d-flex justify-content-center mb-3">
          <img src="<?php echo get_field('logo-projetoSocial', 78); ?>" width="200" class="img-fluid">

        </picture>
        <p class="text-center">
          <?php echo get_field('telefones-projetoSocial', 78); ?>

        </p>
      </div>

      <div class="col-md-3 d-flex flex-column justify-content-center p-3">
        <picture class="d-flex justify-content-center mb-3">
          <img src="<?php echo get_field('logo-projetoSocial', 80); ?>" width="200" height="50" class="img-fluid">
        </picture>
        <p class="text-center">
          <?php echo get_field('telefones-projetoSocial', 80); ?>
        </p>
      </div>

      <div class="col-md-3 d-flex flex-column justify-content-center p-3">
        <picture class="d-flex justify-content-center mb-3">
          <img src="<?php echo get_field('logo-projetoSocial', 82); ?>" width="200" class="img-fluid">
        </picture>
        <p class="text-center">
          <?php echo get_field('telefones-projetoSocial', 82); ?>
        </p>
      </div>
    </div>



  </section>


  <?php endwhile; else: endif ?>

<?php get_footer(); ?>