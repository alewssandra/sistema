<?php

class ContactsCrud
{

    private $pdoCrud;
    private $logsData;
    private $table = "contatos";


    public function __construct()
    {
        $this->pdoCrud = new PDOCrud;
        $this->logsData = new LogsData;
    }

    public function submitform($name, $email, $phone, $description)
    {

        $pdo = array(
            ':name'         => $name,
            ':email'        => $email,
            ':phone'        => $phone,
            ':description'  => $description,
        );

        $columns = 'nome, email, telefone, mensagem';
        $values  = ':name, :email, :phone, :description';

        return $this->pdoCrud->insert($this->table, $columns, $values, $pdo);
    }

    public function removeContact($id)
    {
        return $this->pdoCrud->delete($this->table, $id);
    }

    public function setReadedConctact($id, $pessoa_id){

        $columns = "status=1";

        $this->logsData->addLog('Contato lido', $pessoa_id);

        return $this->pdoCrud->update($this->table, $columns, 'WHERE id = :id', array(
            ':id' => $id
        ));

    }
}
