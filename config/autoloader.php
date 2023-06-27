<?php

// Definição dos diretórios onde as classes podem ser encontradas
$paths = array(
    'controllers',
    'controllers/admin',
    'controllers/site',
    'controllers/dashboard',
    'controllers/contacts',
    'controllers/users',
    'helpers',
    'models',
    'models/admin',
    'models/db',
    'models/login',
    'models/persons',
    'models/contacts',
    'models/logs',
);

// Função anônima que será registrada como autoloader
spl_autoload_register(function($classname) use ($paths){

    $found = false;

    // Itera sobre os diretórios definidos
    foreach($paths as $path){

        // Caminho completo do arquivo da classe
        $file = $path . DIRECTORY_SEPARATOR . $classname . '.php';

        // Verifica se o arquivo da classe existe
        if(file_exists($file)){
            // Inclui o arquivo da classe
            require $file;
            $found = true;
            break;
        }
    }

    // Se a classe não foi encontrada em nenhum dos diretórios, exibe uma mensagem de erro
    if(!$found){
        exit('Classe '. $classname . ' não encontrada!');
    }
});

?>