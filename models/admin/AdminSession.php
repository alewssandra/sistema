<?php

class AdminSession
{

    /**
     * Inicia a sessão, se ainda não estiver iniciada.
     */
    private function control(){

        if(!isset($_SESSION)){
            session_start();
        }

    }

    /**
     * Salva os dados do administrador na sessão.
     *
     * @param array $data Os dados a serem salvos na sessão.
     * @return bool Retorna true se os dados foram salvos com sucesso.
     */
    public function save($data){

        $this->control();
        $_SESSION['admin'] = $data;
        return true;

    }

    /**
     * Verifica se há uma sessão de administrador ativa.
     *
     * @return bool Retorna true se a sessão de administrador existir, caso contrário, retorna false.
     */
    public function has(){
        $this->control();

        if(isset($_SESSION['admin'])){
            return true;
        }
        
        return false;
    }

    /**
     * Obtém um valor específico da sessão de administrador.
     *
     * @param string $info O nome do valor a ser obtido.
     * @return mixed O valor da sessão correspondente à chave fornecida ou null se não existir.
     */
    public function get($info){

        $this->control();
        if(isset($_SESSION['admin'][$info])){
            return $_SESSION['admin'][$info];
        }

    }

    /**
     * Define um valor específico na sessão de administrador.
     *
     * @param string $info O nome do valor a ser definido.
     * @param mixed $value O valor a ser atribuído à chave fornecida.
     */
    public function set($info, $value){

        $this->control();
        $_SESSION['admin'][$info] = $value;

    }

    /**
     * Exclui a sessão de administrador.
     */
    public function delete(){
        $this->control();
        unset($_SESSION['admin']);
    }

}
