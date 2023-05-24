<?php

// Array de configuração com as informações de conexão com o banco de dados
$config = array(
    'dns'       => 'mysql:dbname=sistema;host=127.0.0.1',
    'username'  => 'root',
    'password'  => null,
);

// Verifica se o ambiente de execução é "prod" (produção)
if(ENV == 'prod'){
    // Configurações para o ambiente de produção
    $config['dns'] = "mysql:dbname=;host=localhost";
    $config['username'] = '';
    $config['password'] = '';
}

// Retorna o array de configuração
return $config;

?>
