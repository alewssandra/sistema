<?php

class ContactsData
{

    private $pdoQuery;

    public function __construct()
    {
        $this->pdoQuery         = new PDOQuery;
        $this->contactCrud      = new ContactsCrud;
    }

    public function getContacts()
    {

        $sql = $this->pdoQuery->fetchAll("SELECT * FROM contatos");

        return $sql;
    }

    public function getContact($id, $pessoa_id)
    {

        $sql = $this->pdoQuery->fetch("SELECT * FROM contatos WHERE id = :id", array(
            ':id' => $id
        ));

        if($sql){
            $this->contactCrud->setReadedConctact($id, $pessoa_id);
        }

        return $sql;
    }
}
