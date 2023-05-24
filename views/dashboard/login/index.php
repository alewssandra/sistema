<?php $url = $this->helpers['URLHelper']->getURL(); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Intensivo de Programação Web - Login</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css" />

</head>

<body class="text-center">

    <section class="content">
        <!-- Cabeçalho -->
        <header class="masthead mb-auto">
            <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
                <!-- Botão de navegação responsiva -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <!-- Logo -->
                    <a href="index.html"><img src="<?php echo $url; ?>/assets/img/lages.png" width="200" height="100"></a>
                </div>
            </nav>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto" style="margin-top: 250px;">
                    <form>
                        <h1 class="h3 mb-3 font-weight-normal">Login</h1>

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
                        <p> Você não possui cadastro? <a href="<?php echo $url; ?>/dashboard/register" >Clique Aqui!</a></p>

                        <!-- Botão de login -->
                        <div class="btn btn-success btn-login">Entrar</div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Variável JavaScript para a URL -->
    <script>
        var URL = "<?php echo $url; ?>";
    </script>

    <!-- Scripts -->
    <script src="<?php echo $url; ?>/assets/libs/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?php echo $url; ?>/assets/js/dashboard/login.js"></script>

</body>
</html>
