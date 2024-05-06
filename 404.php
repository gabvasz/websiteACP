<?php get_header(); ?>

<section class="container py-3" id="blog" data-scroll>
  <h1 class="h2 text-center text-md-start fonteDrigor display-5 text-primary">
    Página não encontrada
  </h1>
  <p class="lead poppins-regular text-primary text-center text-md-start">
    Infelizmente a página que você estava procurando não existe, mas confira outros artigos abaixo.
  </p>

  
  
  <div class="row row-gap-2 mb-3">
    <?php the_widget( 'WP_Widget_Recent_Posts', array( 'title' => 'Últimos artigos do blog', 'number' => 3 )) ?>
    </div>
</section>

<?php get_footer(); ?>