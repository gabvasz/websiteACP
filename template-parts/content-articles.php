<div class="border rounded-3 border-primary p-3 mb-3">
  <div class="h-auto">
    <img src="<?php echo get_the_post_thumbnail_url();?>" class="card-img-top img-fluid object-fit-cover rounded-3 mb-2" style="height: 15vh;">
    <h6 class="mb-0 h5 fw-bold text-primary"><?php the_title() ?></h6>
    <a href="<?php the_permalink(); ?>" class="btn btn-link text-start ps-0">Leia mais</a>    
  </div>
</div>