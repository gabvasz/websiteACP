<div class="col-md-6 align-content-center">
  <div class="card" >
    <img src="<?php echo get_the_post_thumbnail_url();?>" class="card-img-top img-fluid object-fit-cover" style="height: 25vh;">
            
    <div class="card-body">
      <h3 class="card-title"><?php the_title() ?></h3>
      <p class="card-text"><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>
      <a href="<?php the_permalink(); ?>" class="btn btn-link">Leia mais</a>
    </div>

  </div>
</div>

<div class="col-md-6">
  <h5 class="text-dark">Últimos artigos</h3>
  
  <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 2,
          'orderby' => 'date',
          );
  
        $index = new WP_Query( $args );
  
        if( $index->have_posts() ):
          while( $index->have_posts() ): $index->the_post();
        ?>
          <?php get_template_part( 'template-parts/content', 'articles' ); ?>
            
          <?php
            endwhile;
              wp_reset_postdata();
            endif;
        ?>
</div>