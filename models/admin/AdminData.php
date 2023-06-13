<?php

class AdminData{

    private $pdoQuery;
    private $table;

    /**
     * AdminData constructor.
     */
    public function __construct()
    {   
        $this->pdoQuery = new PDOQuery;
        $this->table = 'admin';
    }

    /**
     * Obtém o login do administrador.
     *
     * @param string $login O login a ser pesquisado.
     * @return mixed Os dados do login encontrado ou false se não existir.
     */
    public function getLogin($login){

        $adminLogin = $this->pdoQuery->fetch("SELECT login FROM admin WHERE login = :login", array(
            ':login' => $login,
        ));

        if ($adminLogin) {
            return $adminLogin;
        }

        return $this->pdoQuery->fetch("SELECT email FROM pessoas WHERE email = :login", array(
            ':login' => $login,
        ));
    }

    /**
     * Obtém os dados do usuário administrador.
     *
     * @param string $login O login do usuário a ser pesquisado.
     * @return mixed Os dados do usuário encontrado ou false se não existir.
     */
    public function getUser($login){

        $adminLogin = $this->pdoQuery->fetch("SELECT * FROM admin WHERE login = :login", array(
            ':login' => $login,
        ));

        if ($adminLogin) {
            return $adminLogin;
        }

        $userLogin = $this->pdoQuery->fetch("SELECT * FROM pessoas WHERE email = :login", array(
            ':login' => $login,
        ));

        return array(
            "id" => $userLogin['id'],
            "login" => $userLogin['email'],
            "password" => $userLogin['senha'],
            "name" => $userLogin['nome'],
        );
    }

}
