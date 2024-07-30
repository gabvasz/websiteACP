<?php
// Template Name: Quem Somos
?>

<?php get_header(); ?> 

  <section class="container" id="sobre">

    <div class="row mt-4">
      <div class="col-lg-6 d-flex justify-content-center align-content-center">
        <picture class="object-fit-cover align-content-center">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acp.webp" alt="" srcset="" class="img-fluid rounded-3">
        </picture>
      </div>

      <div class="col-lg-6 py-3 d-flex flex-column justify-content-start align-items-center lead">
        <h1 class="display-5 text-start me-auto"><?php the_title(); ?></h1>

        
          <?php echo the_field('texto-sobre', 10); ?>
        
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

  </section>

  <section class="container">
    <div class="row">
      <div class="col text-dark lead">
        <?php the_content(); ?>
      </div>
    </div>


  </section>

<?php get_footer(); ?>