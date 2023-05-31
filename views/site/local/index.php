<!DOCTYPE html>
<html>
  <head>
    <title>Caravan - Local</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <?php $url = $this->helpers['URLHelper']->getURL(); ?>
  </head>
  <body>
   
<!--  Modal   -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitulo" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLoginTitulo">Entre na Sua Conta</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="loginEmail">Email</label>
                <input type="email" class="form-control" id="loginEmail">
              </div>
              <div class="form-group">
                <label for="loginSenha">Senha</label>
                <input type="password" class="form-control" id="loginSenha">
              </div>
              <button type="submit" class="btn btn-primary">Entrar na Conta</button>
              <small class="form-text text-muted">Esqueceu a senha? <a href="#">Clique aqui</a>.</small>
            </form>
          </div>
        </div>
      </div>
    </div>
<!-- Fecha Modal  -->
    
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top py-3 box-shadow">
      <a href="index.html" class="navbar-brand">
        <img src="<?php echo $url; ?>/assets/img/caravan.svg" alt="Caravan">
      </a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Locais</a>
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
            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-primary ml-md-2" href="inscricao.html">Inscreva-se</a>
          </li>
        </ul>
      </div>
    </nav>
    
    <section class="container">
      <div class="text-center my-5">
        <span class="h6 d-block">O MELHOR DESTINO DA SUA VIAGEM</span>
        <h1 class="display-4 text-primary">Descubra Dublin</h1>
      </div>
      <div class="row">
        <div class="col-md">
          <img class="img-fluid mb-4" src="img/local/foto-1.jpg" alt="Foto 1">
          <img class="img-fluid mb-4" src="img/local/foto-2.jpg" alt="Foto 2">
          <img class="img-fluid mb-4" src="img/local/foto-3.jpg" alt="Foto 3">
        </div>
        <div class="col-md">
          <img class="img-fluid mb-4" src="img/local/foto-4.jpg" alt="Foto 4">
          <img class="img-fluid mb-4" src="img/local/foto-5.jpg" alt="Foto 5">
        </div>
        <div class="col-md">
          <img class="img-fluid mb-4" src="img/local/foto-6.jpg" alt="Foto 6">
          <img class="img-fluid mb-4" src="img/local/foto-7.jpg" alt="Foto 7">
        </div>
      </div>
    </section>
    

    <footer class="bg-dark text-white">
      <div class="container py-4">
        <div class="row">
          <div class="col-md-3 col-6">
            <h4 class="h6">PÁGINAS</h4>
            <ul class="list-unstyled">
              <li><a href="planos.html">Planos</a></li>
              <li><a href="contato.html">Contato</a></li>
              <li><a href="inscricao.html">Inscreva-se</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-6">
            <h4 class="h6">LOCAIS</h4>
            <ul class="list-unstyled">
              <li><a href="local.html">California</a></li>
              <li><a href="local.html">Paris</a></li>
              <li><a href="local.html">Dublin</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="h6">DADOS DE CONTATO</h4>
            <ul class="list-unstyled text-secondary">
              <li>caravan@caravan.com.br</li>
              <li>21 99999-9999</li>
              <li>De Seg. à Sex. das 8h às 18h</li>
            </ul>
          </div>
          <div class="col-md-2">
            <h4 class="h6">REDES SOCIAIS</h4>
            <ul class="list-unstyled">
              <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#" style="max-width: 140px">Facebook</a></li>
              <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#" style="max-width: 140px">Twitter</a></li>
              <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#" style="max-width: 140px">Youtube</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bg-primary text-center py-3">
        <p class="mb-0">Caravan © 2017. Alguns direitos reservados.</p>
      </div>
    </footer>
    
    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
  </body>
</html>