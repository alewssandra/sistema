<!DOCTYPE html>
<html>
  <head>
    <title>Caravan - Contato</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    
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
    
<!-- <form id="contact-form" class="formulario">

<h3>Entre em Contato</h3>
<br />
<div class="row">
    <div class="col-md-12 col-12">
        <div class="form-group">
            <label>Nome</label>
            <input class="form-control" name="nome" type="text" />
        </div>
    </div>
    <div class="col-md-12 col-12">
        <div class="form-group">
            <label>E-Mail</label>
            <input class="form-control" name="email" type="text" />
        </div>
    </div>
    <div class="col-md-12 col-12">
        <div class="form-group">
            <label>Telefone</label>
            <input class="form-control" name="phone" type="text" />
        </div>
    </div>
    <div class="col-md-12 col-12">
        <div class="form-group">
            <label>Mensagem</label>
            <textarea class="form-control" name="descricao"></textarea>
        </div>
    </div>
</div>
</form> -->
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top py-3 box-shadow">
      <a href="index.html" class="navbar-brand">
        <img src="img/caravan.svg" alt="Caravan">
      </a>
      
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
            <a class="nav-link active" href="contato.html">Contato</a>
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
      <div class="my-5 text-center">
        <span class="h6 d-block">POSSUI ALGUMA DÚVIDA?</span>
        <h1 class="display-4 text-primary">Fale Conosco</h1>
      </div>
      <div class="row">
        <div class="col-lg mb-5">
          <form class="bg-light rounded p-4 box-shadow" action="">
            <div class="form-group">
              <label for="clienteNome">Nome</label>
              <input type="text" class="form-control" id="clienteNome">
            </div>
            <div class="form-group">
              <label for="clienteEmail">Email</label>
              <input type="email" class="form-control" id="clienteEmail">
            </div>
            <div class="form-group">
              <label for="clienteMensagem">Mensagem</label>
              <textarea id="clienteMensagem" class="form-control" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
          </form>
        </div>
        <div class="col-lg">
          <h2 class="h6">NOSSO ENDEREÇO</h2>
          <a href="#"><img class="img-fluid box-shadow rounded mb-4" src="img/mapa.png" alt="Endereço da Empresa"></a>
          
          <h2 class="h6">DADOS DE CONTATO</h2>
          <ul class="list-unstyled text-secondary">
            <li>caravan@caravan.com.br</li>
            <li>21 99999-9999</li>
            <li>De Seg. à Sex. das 8h às 18h</li>
          </ul>
          
          <h2 class="h6">REDES SOCIAIS</h2>
          <ul class="list-unstyled" style="max-width: 260px">
            <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#" >Facebook</a></li>
            <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#">Twitter</a></li>
            <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#">Youtube</a></li>
          </ul>
        </div>
      </div>
    </section>
    
    <section class="container">
      <div class="my-5 text-center">
        <span class="h6 d-block">AINDA ESTÁ COM DÚVIDAS?</span>
        <h2 class="display-4 text-primary">Perguntas Frequentes</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6" id="perguntasFrequentes" data-children=".pergunta">
          <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta1" aria-expanded="true" aria-controls="pergunta1">→ É possível cancelar a viagem?</a>
            <div id="pergunta1" class="collapse show" role="tabpanel">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta2" aria-expanded="true" aria-controls="pergunta2">→ Qual a garantia que tenho se perder o voo?</a>
            <div id="pergunta2" class="collapse" role="tabpanel">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta3" aria-expanded="true" aria-controls="pergunta3">→ Qual a principal forma de viagem?</a>
            <div id="pergunta3" class="collapse" role="tabpanel">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta4" aria-expanded="true" aria-controls="pergunta4">→ Qual o melhor destino de viagem?</a>
            <div id="pergunta4" class="collapse" role="tabpanel">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <div class="pergunta py-2">
            <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta5" aria-expanded="true" aria-controls="pergunta5">→ Vocês dão descontos para grupos grandes?</a>
            <div id="pergunta5" class="collapse" role="tabpanel">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
        </div>
      </div>
    </section>
    
    <footer class="bg-dark text-white mt-5">
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