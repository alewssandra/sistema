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

<?php $url = $this->helpers['URLHelper']->getURL(); ?>

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

            <!-- Campo de email -->
            <div class="form-group">
                <label for="Email">Endereço de email</label>
                <input type="email" class="form-control" name="login" id="Email" aria-describedby="emailHelp" placeholder="Seu email">
            </div>          
          
            <!-- Campo de senha -->
            <div class="form-group">
                <label for="Password">Senha</label>
                <input type="password" class="form-control" name="password" id="Password" placeholder="Senha">
            </div>

            <!-- Link para cadastro -->
            <p> Você não possui cadastro? <a href="<?php echo $url; ?>/views/dashboard/register/index.php" >Clique Aqui!</a></p>

            <div class="btn btn-success btn-login">Entrar</div>
          </form>
        </div>
      </div>
    </div>
     <!-- Variável JavaScript para a URL -->
     <script>
        var URL = "<?php echo $url; ?>";
    </script>
    
    <!-- Scripts -->
    <script src="<?php echo $url; ?>/assets/libs/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?php echo $url; ?>/assets/js/dashboard/login.js"></script>
  </div>
  <!-- Fecha Modal  -->
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
              <a class="dropdown-item" href="<?php echo $url; ?>/views/site/local/index.php">Dublin</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="planos.html">Planos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.html">Contato</a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="<?php echo $url; ?>/dashboard/login">Login</a> -->

          <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-primary ml-md-2" href="inscricao.html">Inscreva-se</a>
          </li>
        </ul>
      </div>
    
</nav>