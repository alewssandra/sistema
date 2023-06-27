<?php 

// Inclui o arquivo que define as configurações de ambiente
require 'config/env.php';
// Define a constante ROOT com o diretório raiz do projeto
define('ROOT', __DIR__);
// Define a constante ENV com o valor do ambiente atual
define('ENV', $env);

error_reporting(E_ALL ^ E_DEPRECATED);

// Inclui o arquivo de autoload das classes
require 'config/autoloader.php';

// Obtém as rotas definidas no arquivo de rotas
$routes = require 'config/routes.php';

// Obtém a rota atual da URL
$route = (!empty($_GET['parameter'])) ? rtrim($_GET['parameter'], '/') : '/';
$split = array_filter(explode('/', $route));

$params = array();

// Verifica se há parâmetros adicionais na rota
if(count($split) > 2){
    $params = array_slice($split, 2);
}

// Obtém os helpers definidos no arquivo de helpers
$helpers = require 'config/helpers.php';

if(count($split) > 1){
    $route = $split[0].'/'.$split[1];
}

// Verifica se a rota atual está definida nas rotas disponíveis
if(!isset($routes[$route])){
    exit;
}

// Obtém o nome do controlador e ação correspondentes à rota atual
$controllerAndAction    = explode('/', $routes[$route]);
$currentControllerName  = $controllerAndAction[0];
$currentActionName      = $controllerAndAction[1];

// Instancia o controlador correspondente à rota atual
$controller = new $currentControllerName($helpers);
// Executa a ação correspondente à rota atual, passando os parâmetros necessários
$controller->$currentActionName($params);
