<section class="container-fluid">
   <div class="row bg-dark text-white">
      <div class="col-lg-7 p-0">
         <div id="carouselCidades" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselCidades" data-slide-to="0" class="active"></li>
               <li data-target="#carouselCidades" data-slide-to="1"></li>
               <li data-target="#carouselCidades" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo $url; ?>/assets/img/california.jpg" alt="California">
                  <div class="carousel-caption">
                     <h3 class="display-4">California</h3>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo $url; ?>/assets/img/paris.jpg" alt="California">
                  <div class="carousel-caption">
                     <h3 class="display-4">Paris</h3>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo $url; ?>/assets/img/dublin.jpg" alt="California">
                  <div class="carousel-caption">
                     <h3 class="display-4">Dublin</h3>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselCidades" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselCidades" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
            </a>
         </div>
      </div>
      <div class="col-lg-5 p-4 align-self-center">
         <h1 class="display-4">Realize a viagem do seu sonho</h1>
         <p class="lead">O melhor local para viajar é com a Caravan, mais de 5.000 excursões concluídas.</p>
      </div>
   </div>
</section>
<section class="py-5 bg-light text-center">
   <div class="container">
      <div class="my-5">
         <span class="h6 d-block">TUDO DE MELHOR PARA VOCÊ</span>
         <h2 class="display-4 text-primary">Aproveite as Vantagens</h2>
      </div>
      <div class="row">
         <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
               <img src="<?php echo $url; ?>/assets/img/icones/passaporte.svg" alt="Passaporte">
            </div>
            <h3>Documentos</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
         </div>
         <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
               <img src="<?php echo $url; ?>/assets/img/icones/passagens.svg" alt="Passagens">
            </div>
            <h3>Passagens</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
         </div>
         <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
               <img src="<?php echo $url; ?>/assets/img/icones/translado.svg" alt="Translado">
            </div>
            <h3>Translado</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
         </div>
         <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
               <img src="<?php echo $url; ?>/assets/img/icones/praias.svg" alt="Praias">
            </div>
            <h3>Praias</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
         </div>
         <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
               <img src="<?php echo $url; ?>/assets/img/icones/bagagens.svg" alt="Bagagens">
            </div>
            <h3>Bagagens</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
         </div>
         <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
               <img src="<?php echo $url; ?>/assets/img/icones/turismo.svg" alt="Turismo">
            </div>
            <h3>Turismo</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
         </div>
      </div>
   </div>
</section>
<section id="home-quote" class="p-md-5">
   <blockquote class="blockquote text-center text-white p-md-5 p-3">
      <p class="display-4"><em>"A felicidade não está na estrada que leva a algum lugar. A felicidade é a própria estrada."</em></p>
      <footer class="blockquote-footer text-white">Bob Dylan</footer>
   </blockquote>
</section>
<section class="container">
   <div class="my-5 text-center">
      <span class="h6 d-block">AINDA ESTÁ COM DÚVIDAS?</span>
      <h2 class="display-4 text-primary">Perguntas Frequentes</h2>
   </div>
   <div class="row justify-content-center">
      <div class="col-md-6" id="perguntasFrequentes">
         <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" href="#pergunta1" aria-expanded="true" aria-controls="pergunta1">→ É possível cancelar a viagem?</a>
            <div id="pergunta1" class="collapse show" data-parent="#perguntasFrequentes" role="tabpanel">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
         </div>
         <div class="dropdown-divider"></div>
         <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" href="#pergunta2" aria-expanded="true" aria-controls="pergunta2">→ Qual a garantia que tenho se perder o voo?</a>
            <div id="pergunta2" class="collapse" data-parent="#perguntasFrequentes" role="tabpanel">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
         </div>
         <div class="dropdown-divider"></div>
         <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" href="#pergunta3" aria-expanded="true" aria-controls="pergunta3">→ Qual a principal forma de viagem?</a>
            <div id="pergunta3" class="collapse" data-parent="#perguntasFrequentes" role="tabpanel">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
         </div>
         <div class="dropdown-divider"></div>
         <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" href="#pergunta4" aria-expanded="true" aria-controls="pergunta4">→ Qual o melhor destino de viagem?</a>
            <div id="pergunta4" class="collapse" data-parent="#perguntasFrequentes" role="tabpanel">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
         </div>
         <div class="dropdown-divider"></div>
         <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" href="#pergunta5" aria-expanded="true" aria-controls="pergunta5">→ Vocês dão descontos para grupos grandes?</a>
            <div id="pergunta5" class="collapse" data-parent="#perguntasFrequentes" role="tabpanel">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
         </div>
         <div class="dropdown-divider"></div>
      </div>
   </div>
   <div class="text-center my-4">
      <p class="small m-1">FALE CONOSCO PARA MAIS DÚVIDAS</p>
      <a class="btn btn-primary btn-lg" href="<?php echo $url; ?>/contato">Entre em Contato</a>
   </div>
</section>