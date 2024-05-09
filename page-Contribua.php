<?php
// Template Name: Contribua
?>

<?php get_header(); ?>

  
  <main id="contribua" class="container pb-5">

  <h1 class="invisible"><?php the_title(); ?></h1>
  <?php 
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'contribua' ); 
  
    endwhile;
  ?>

  </main>

  <section class="container py-4">
      <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Pessoa Física
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <?php the_field('pessoaFisica-Contribua');?>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Pessoa Jurídica
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <?php the_field('pessoaJuridica-Contribua');?>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Quero ser voluntário
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <?php the_field('pessoaVoluntario-Contribua');?>
          </div>
        </div>
      </div>
    </div>
  </section>



<?php get_footer(); ?>