<?php
// Template Name: Página Inicial
?>

<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <main>

  <div class="container">
    <div class="row py-5 d-flex justify-content-center mx-auto">
      <h1 class="display-3 text-primary text-center fw-bold">
        Nossa missão é transformar vidas por meio do acolhimento e da educação, com princípios cristãos
      </h1>
      <div class="d-flex justify-content-center">
        <a href="" class="btn btn-primary mx-auto align-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube m-0" viewBox="0 0 16 16">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
          </svg>
            Conheça nossos projetos sociais
        </a>
      </div>
    </div>
  </div>
  </main>

  <section class="container" id="projetos"">
    <h2 class="fw-bold h2 text-primary-subtle text-center">Conheça nossos projetos</h2>

    <div class="row">
      <div class="col-12">
      <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active text-primary-subtle" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Lar Hermínia Scheleder</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link text-primary-subtle" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">CEI Miriam</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link text-primary-subtle" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Instituto Social Vó Durvina</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link text-primary-subtle" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Amor que Comove</button>
        </li>
        
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
          <div class="row p-md-5 d-flex justify-content-center align-content-center">
            <div class="col-lg-4 d-flex justify-content-center">
              <picture>
                <img src="" alt="" srcset="" width="300" height="250" style="background-color: aqua;">
              </picture>
            </div>
            <div class="col-lg-6 ms-lg-3 d-grid align-content-center py-3">
              <h3 class="fw-bold text-primary-subtle text-center text-lg-start">Amor que CoMove(AQC)</h3>
              <p class="lead text-dark mb-0">O Ministério Amor que CoMove (AQC)  tem o objetivo de levar o Evangelho às pessoas em situação de rua em  Curitiba-PR, por meio do resgate e reinserção de dependentes químicos,  pela internação em comunidades terapêuticas, acompanhamento e  assistência nas mínimas necessidades de medicações, alimentos e  vestimentas. </p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
      </div>
      </div>
    </div>

  </section>

  <section class="container">
    <h2 class="fw-bold h2 text-primary-subtle text-center">Sobre a Associação Comunitária Presbiteriana</h2>

    <div class="row">
      <div class="col-lg-6">
        <picture>
          <img src="" alt="" srcset="" class="img-fluid" width="300" height="250" style="background-color: aqua;">
        </picture>
      </div>

      <div class="col-lg-6 py-3">
        <p class="lead text-dark mb-0">
          A Associação Comunitária  Presbiteriana (ACP) é uma entidade sem fins lucrativos, formada pelos  membros da Igreja Presbiteriana de Curitiba (IPC), que compõem sua  Assembleia Geral. 
          Criada, originalmente, para manter o  Lar Hermínia Scheleder, hoje também é responsável pelo Centro de  Educação Infantil Miriam, pelo Instituto Social Vó Durvina e pelo  projeto Amor que CoMove. Assim, a ACP coordena os projetos de  transformação social da IPC. A ACP tem como missão desempenhar o papel que Jesus Cristo ensinou de fazer o bem e ajudar quem precisa.
        </p>
      </div>
    </div>

    <div class="row d-flex flex-wrap justify-content-around py-3">
      <div class="col-lg-4">
        <h3 class="fw-bold h4 text-center">Missão</h3>
        <p class="text-dark text-center px-md-5 px-lg-0 mx-5">Transformar vidas por meio da educação, bons exemplos e princípios cristãos.</p>

      </div>

      <div class="col-lg-4">
        <h3 class="fw-bold h4 text-center">Visão</h3>
        <p class="text-dark text-center px-md-5 px-lg-0 mx-5">Tornar-se referência nacional na transformação, desenvolvimento e inserção de indivíduos e famílias na sociedade.</p>

      </div>

      <div class="col-lg-4">
        <h3 class="fw-bold h4 text-center">Valores</h3>
        <p class="text-dark text-center px-md-5 px-lg-0 mx-5">Deus, Respeito, Ética, Responsabilidade, Persistência.</p>

      </div>
      
    </div>

    <div class="d-flex justify-content-between">
        <a href="" class="btn btn-primary mx-auto align-content-center">
          Transparência
        </a>

        <a href="" class="btn btn-primary mx-auto align-content-center">
          Transparência
        </a>
    </div>

  </section>


  <?php endwhile; else: endif ?>

<?php get_footer(); ?>