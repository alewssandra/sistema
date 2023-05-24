<?php 

// Define a constante 'LOCAL_URL' com o valor '/SiteMVC'
define('LOCAL_URL', '/sistema');

// Retorna um array contendo instâncias de classes auxiliares
return array(
    'URLHelper'     => new URLHelper,
    'AdminSession'  => new AdminSession,
);

?>
