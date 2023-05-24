<!DOCTYPE html>
<html>
   <head>
      <title>Cadastro</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <link href="assets/css/cadastro.css" rel="stylesheet">
   </head>
   <body>
      <header class="masthead mb-auto">
         <nav class="navbar navbar-expand-md navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
               <a href="index.html"><img src="assets/img/lages.png" width="200" height="100"></a>
               <div class="container">
                  <ul class="navbar-nav mr-auto">
                     <h5 class="my-0 mr-md-auto font-weight-normal"></h5>
                     <li class="nav-item active"> <a href="index.html" class="nav-link">Principal</a> </li>
                     <li class="nav-item active"> <a href="contato.html" class="nav-link">Contato</a> </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <form action="funcoes.php?funcao=gravar" method="POST">
         <!--Inicio do formulario-->
         <div class="esp">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <h1>Formulário</h1>
                        <h3>Prenchee os campos abaixo para se cadastrar:</h3>
                        <div class="form-group">
                           <label>Nome:</label>
                           <input type="text" name="nome" placeholder="Digite o seu nome" class="form-control"
                              required="required" pattern="[a-zA-Z\s]+$">
                        </div>
                        <div class="form-group">
                           <label>E-mail:</label>
                           <input type="email" name="email" placeholder="Digite o seu Email" class="form-control"
                              required="required">
                        </div>
                        <div class="form-group">
                           <label>Senha</label>
                           <input type="password" name="senha" placeholder="Digite uma senha" class="form-control"
                              required="required">
                        </div>
                     </div>
                  </div>
               </div>
               <input class="btn btn-success" type="submit" name="botao" value="enviar">
            </div>
         </div>
      </form>
      <footer class="section footer-classic context-dark bg-image" style="background-color: #D3D3D3;">
         <div class="row">
            <div class="col-sm-3">
               <h4>Horários </h4>
               <hr>
               <ul style="list-style-type:none; padding: 0;">
                  <li>Das 8:00h ao 12:00h.</li>
                  <li>Das 13:30h as 17:00h.</li>
                  <li>Das 18:30h as 22:00h.</li>
               </ul>
            </div>
            <div class="col-sm-3">
               <h4>Endereço: </h4>
               <hr>
               <p> R. Heitor Villa Lobos, 222 São Francisco Lages – SC 88506-400</p>
            </div>
            <div class="col-sm-3">
               <h4>Contato:</h4>
               <hr>
               <p>Telefone: (49) 3221-4200 </p>
            </div>
            <div class="col-sm-3">
               <h4>Localização</h4>
               <hr>
               <div class="map-responsive">
                  <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3529.14812050852!2d-50.339757784773425!3d-27.80521123771203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e018b1f588926d%3A0x3e6066bf0fc8fdb1!2sIFSC+C%C3%A2mpus+Lages!5e0!3m2!1spt-BR!2sbr!4v1542219631301"
                     width="250" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
            </div>
         </div>
      </footer>
   </body>
</html>