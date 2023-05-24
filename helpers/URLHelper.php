<?php

class URLHelper{

    // Obtém a URL base do aplicativo
    public function getURL($file = null){

        // Verifica se o ambiente é 'dev' (desenvolvimento)
        $url = (ENV == 'dev') ? LOCAL_URL : '/' ;

        // Remove a barra final da URL, se houver
        $url = rtrim($url, '/');

        // Verifica se um arquivo foi especificado
        if(is_null($file)){
            return $url;
        }

        // Remove a barra inicial do arquivo, se houver
        $file = ltrim($file, '/');

        // Concatena a URL base com o arquivo
        $file = $url . '/' . $file;

        return $file;

    }

    // Obtém a localização atual com base na URL
    public function getLocation(){

        // Obtém a URL da requisição atual
        $url = $_SERVER['REQUEST_URI'];

        // Obtém a URL base do aplicativo
        $path = LOCAL_URL;

        // Verifica se o ambiente não é 'local' nem 'prod'
        if(ENV !== 'local' || ENV !== 'prod'){
            // Remove a URL base e as barras da URL
            $url = str_replace(array($path, '/'), "", $url);
        }

        // Remove a barra inicial da URL, se houver
        $url = ltrim($url, '/');

        // Verifica se a URL contém uma barra adicional
        if(strstr($url, '/')){
            // Divide a URL em partes e retorna a primeira parte (path)
            $url = explode("/", $url);
            $path = $url[0];
            return $path;
        }

        return $url;

    }

}

?>
