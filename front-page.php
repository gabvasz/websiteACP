<?php
// Template Name: Página Inicial
?>

<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <main>

  <div class="container">
    <div class="row py-5 d-flex justify-content-center mx-auto">
      <h1 class="display-3 text-primary text-center fw-bold">
        <?php the_field('titulo-hero');?>
      </h1>
      <div class="d-flex justify-content-center">
        <a href="<?php the_field('botao-hero--link');?>" class="btn btn-primary mx-auto align-content-center mt-4" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube m-0" viewBox="0 0 16 16">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
          </svg>
            <?php the_field('botao-hero--texto');?>
        </a>
      </div>
    </div>
  </div>
  </main>

  <section class="container" id="projetos"">
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
          <div class="row p-md-5 d-flex justify-content-center align-content-center">
            
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
          <div class="row p-md-5 d-flex justify-content-center align-content-center">
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

          <div class="row p-md-5 d-flex justify-content-center align-content-center">
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

          <div class="row p-md-5 d-flex justify-content-center align-content-center">
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

  <section class="container" id="sobre">
    <h2 class="fw-bold text-primary-subtle text-center">Sobre a Associação Comunitária Presbiteriana</h2>

    <div class="row mt-4">
      <div class="col-lg-6 d-flex justify-content-ceneter">
        <picture class="object-fit-cover">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acp.webp" alt="" srcset="" class="img-fluid rounded-3">
        </picture>
      </div>

      <div class="col-lg-6 py-3 d-flex align-items-center">
        <p class="text-primary mb-0">
          <?php the_field('texto-sobre'); ?>
        </p>
      </div>
    </div>

    <div class="row d-flex flex-wrap justify-content-around pt-md-5">
      <div class="col-lg-4">
        <h4 class="fw-bold h5 text-center">Missão</h4>
        <p class="text-dark text-center px-md-5 px-lg-0 mx-5">Transformar vidas por meio da educação, bons exemplos e princípios cristãos.</p>

      </div>

      <div class="col-lg-4 ">
        <h4 class="fw-bold h5 text-center">Visão</h4>
        <p class="text-dark text-center px-md-5 px-lg-0 mx-5">Tornar-se referência nacional na transformação, desenvolvimento e inserção de indivíduos e famílias na sociedade.</p>

      </div>

      <div class="col-lg-4">
        <h4 class="fw-bold h5 text-center">Valores</h4>
        <p class="text-dark text-center px-md-5 px-lg-0 mx-5">Deus, Respeito, Ética, Responsabilidade, Persistência.</p>

      </div>
      
    </div>

    <div class="d-flex justify-content-between">
        <a href="<?php echo get_permalink( '107'); ?>" class="btn btn-primary mx-auto align-content-center">
          Estatuto Social e Balanço
        </a>
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
          <a href="" class="btn btn-outline-light">
            Sou uma Pessoa Física
          </a>

          <a href="" class="btn btn-outline-light">
            Sou uma Pessoa Jurídica
          </a>

          <a href="" class="btn btn-outline-light">
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