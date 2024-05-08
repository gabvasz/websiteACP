<div class="col-md-6 align-content-center">
          <div class="card" >
            <img src="<?php echo get_the_post_thumbnail_url();?>" class="card-img-top">
            
            <div class="card-body">
              <h3 class="card-title"><?php the_title() ?></h3>
              <p class="fs-6 text-black-50">Publicado em <?php echo get_the_date(); ?> </p>
              <p class="card-text"><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-link">Leia mais</a>
            </div>

          </div>
        </div>

        <div class="col-md-6">
          <h5 class="text-dark">Últimos artigos</h3>
          
          <div class="d-grid bg-light gap-3 mt-3">
            <div class="bg-primary-subtle rounded-3 p-3">
              <div class="d-flex gap-3">
                <img src="<?php echo get_the_post_thumbnail_url();?>">
                <h6 class="mb-0"><?php the_title() ?></h6>
              </div>
              
              <a href="<?php the_permalink(); ?>" class="btn btn-link">Leia mais</a>
            </div>

            <div class="bg-primary-subtle rounded-3 p-3">
              <div class="d-flex gap-3">
                <img src="<?php echo get_the_post_thumbnail_url();?>">
                <h6 class="mb-0"><?php the_title() ?></h6>
              </div>
              
              <a href="<?php the_permalink(); ?>" class="btn btn-link">Leia mais</a>
            </div>

            </div>

          </div>
        </div>