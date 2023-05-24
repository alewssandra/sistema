<?php

include 'login.class.php';

error_reporting(0);

$login = new Login();


if ($_POST["botao"] == "Logar") {

    $msg = $login->verificaSelecao($_POST['email'], $_POST['senha']);
    //echo $msg;
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="assets/css/login.css" rel="stylesheet">
</head>

<body class="text-center">
	<header class="masthead mb-auto">
		<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">

				<a href="index.html"><img src="assets/img/lages.png" width="200" height="100"></a>
				<div class="container">
				</div>

			</div>
		</nav>
	</header>
	<form method="post" name="form" action="login.php" class="form-signin">

		<h1 class="h3 mb-3 font-weight-normal">Login</h1>

		<div class="form-group">
			<label for="Email">Endereço de email</label>
			<input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp" placeholder="Seu email">
		</div>
		<div class="form-group">
			<label for="Password">Senha</label>
			<input type="password" class="form-control" name="senha" id="Password" placeholder="Senha">
		</div>
		<?php echo $msg; ?>
		<p> Você não possui cadastro? <a href="cadastro.php">Clique Aqui!</a></p>
		<button type="submit" class="btn btn-lg btn-success" type="submit" name="botao" value="Logar">Enviar</button>

	</form>
</body>

</html>