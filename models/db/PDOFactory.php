<?php

class PDOFactory{

    // Método estático para criar uma instância da classe PDO com base nas configurações fornecidas
    public static function createPDO($configFile = null){

        // Verifica se o arquivo de configuração foi fornecido, caso contrário, usa o arquivo padrão
        if(is_null($configFile)){
            $configFile = ROOT. DIRECTORY_SEPARATOR . 'config/connection.php';
        }

        // Carrega as configurações do arquivo
        $config = require $configFile;

        // Cria a instância da classe PDO com base nas configurações
        $object = new PDO($config['dns'], $config['username'], $config['password'], array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ));

        return $object;

    }

}

?>
