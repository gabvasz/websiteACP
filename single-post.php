<?php get_header(); ?>

 
  <div class="container d-flex align-content-center">
      <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 py-2">
          <li class="breadcrumb-item link-secondary"><a href="/">Home</a></li>
          <li class="breadcrumb-item link-secondary"><a href="/blog">Blog</a></li>

          <li class="breadcrumb-item text-secondary" aria-current="page"><?php the_title(); ?></li>
        </ol>
      </nav>
  </div>
  

  <?php 
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'single' ); 
  
    endwhile;
  ?>

  <section id="contribua" class="container pb-5 h-auto">

    <?php 
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'contribua' ); 
    
      endwhile;
    ?>

  </section>


<?php get_footer(); ?>