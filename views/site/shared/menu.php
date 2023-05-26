<!-- <nav>

    <div class="logo">
        <img src="<?php echo $url; ?>/assets/img/logo.png" />
    </div>
    <div class="menu standard">
        <i class="fa-solid fa-bars fa-2x">

        </i>
    </div>
    <a href="<?php echo $url; ?>#contato" class="menu-link standard">Contato</a>
    <a href="<?php echo $url; ?>#opcoes" class="menu-link standard">Opções</a>
    <a href="<?php echo $url; ?>#quem-somos" class="menu-link standard">Quem Somos</a>
    <a href="<?php echo $url; ?>#banner" class="menu-link standard">Home</a>
</nav>  -->

<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top py-3 box-shadow">

    <div>
        <a href="<?php echo $url; ?>" class="navbar-brand">
            <img src="<?php echo $url; ?>/assets/img/caravan.svg" alt="Caravan"/>
        </a>
    </div>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Locais</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="local.html">California</a>
              <a class="dropdown-item" href="local.html">Paris</a>
              <a class="dropdown-item" href="local.html">Dublin</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="planos.html">Planos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.html">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $url; ?>/dashboard/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-primary ml-md-2" href="inscricao.html">Inscreva-se</a>
          </li>
        </ul>
      </div>
    
</nav>