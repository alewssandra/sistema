<?php

class AdminCheck
{

    private $adminData;
    private $adminSession;

    /**
     * AdminCheck constructor.
     */
    public function __construct()
    {
        $this->adminData        = new AdminData;
        $this->adminSession     = new AdminSession;
    }

    /**
     * Verifica se o login existe.
     *
     * @param string $login O login a ser verificado.
     * @return mixed Os dados do login encontrado ou false se não existir.
     */
    public function check($login)
    {
        return $this->adminData->getLogin($login);
    }

    /**
     * Verifica se o login e a senha correspondem aos valores do banco de dados.
     *
     * @param string $login O login a ser verificado.
     * @param string $password A senha a ser verificada.
     * @param string $dbLogin O login armazenado no banco de dados.
     * @param string $dbPassword A senha armazenada no banco de dados.
     * @return bool True se o login e a senha corresponderem, false caso contrário.
     */
    public function checkUsernameAndPassword($login, $password, $dbLogin, $dbPassword)
    {
        if (strtolower($login) !== strtolower($dbLogin)) {
            return false;
        }

        if ($password !== $dbPassword) {
            return false;
        }

        return true;
    }

    /**
     * Salva os dados do usuário na sessão.
     *
     * @param array $data Os dados do usuário a serem salvos.
     * @return void
     */
    public function saveData($data)
    {
        $pdo = array(
            'id'        => $data['id'],
            'name'      => $data['name'],
            'login'     => $data['login'],
            'password'  => $data['password'],
        );

        $this->adminSession->save($pdo);
    }

    /**
     * Verifica o usuário com base no login e na senha fornecidos.
     *
     * @param string $login O login do usuário.
     * @param string $password A senha do usuário.
     * @return bool True se o usuário for válido, false caso contrário.
     */
    public function userChecker($login, $password)
    {
        $data = $this->adminData->getUser($login);

        if ($data && $this->checkUsernameAndPassword($login, $password, $data['login'], $data['password'])) {
            $this->saveData($data);
            return true;
        }

        return false;
    }

    /**
     * Realiza o login do usuário.
     *
     * @param string $login O login do usuário.
     * @param string $password A senha do usuário.
     * @return bool True se o login for bem-sucedido, false caso contrário.
     */
    public function login($login, $password)
    {
        $hashedPassword = md5($password);
        if ($this->userChecker($login, $hashedPassword)) {
            return true;
        }

        return false;
    }
}
