<!-- <main>

    <section class="banner" id="banner">

        <h2>
            Em construção
        </h2>

        <p>
            Agora na versão com PHP 7
        </p>

        <p class="lead">
               <a href="<?php echo $url; ?>/dashboard/login" class="btn btn-lg btn-success">Entrar</a>
        </p>

    </section>


</main> -->

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
        <form action="">
          <div class="input-group input-group-lg">
            <input type="text" class="form-control" placeholder="Email" aria-label="Email">
            <span class="input-group-append">
              <button class="btn btn-primary" type="button">Inscreva-se</button>
            </span>
          </div>
        </form>
      </div>

    </div>
  </section>