<?php
   error_reporting(0);
   
   session_start();
   
   include "logado.class.php";
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Programação</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link href="assets/css/programacao.css" rel="stylesheet">
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
                     <li class="nav-item active"> <a href="cadastro.php" class="nav-link">Cadastro</a> </li>
                     <li class="nav-item active"> <a href="contato.html" class="nav-link">Contato</a> </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <div class="container">
         <h3>Entrou</h3>
         <hr>
      </div>
   </body>
</html>