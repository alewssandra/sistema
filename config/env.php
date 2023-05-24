<?php

// Variável que define o ambiente de execução padrão como 'prod' (produção)
$env = 'prod';

// Verifica se o nome do servidor é 'localhost'
if (!empty($_SERVER['SERVER_NAME']) and $_SERVER['SERVER_NAME'] === 'localhost') {
    // Se for 'localhost', define o ambiente como 'dev' (desenvolvimento)
    $env = 'dev';
}
// Verifica se o nome do servidor é 'meuprimeirosite.com.br'
elseif (!empty($_SERVER['SERVER_NAME']) and $_SERVER['SERVER_NAME'] == "meuprimeirosite.com.br") {
    // Se for 'meuprimeirosite.com.br', define o ambiente como 'prod' (produção)
    $env = 'prod';
}

// Variável para controlar o nível de exibição de erros
$error = E_ALL;

// Verifica se o ambiente é 'prod'
if ($env == 'prod') {
    // Se for 'prod', desativa a exibição de erros
    $error = false;
}

// Configura o nível de exibição de erros
error_reporting($error);

?>
