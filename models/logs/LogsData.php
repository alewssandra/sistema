<?php

class LogsData
{

    private $pdoCrud;
    private $table = "logs";

    public function __construct()
    {
        $this->pdoCrud         = new PDOCrud;
    }

    public function addLog($operacao, $pessoa_id)
    {
        $currentDate = date('Y-m-d H:i:s');

        $insertData = [
            'operacao'   => $operacao,
            'data'       => $currentDate,
            'pessoa_id'  => $pessoa_id
        ];

        $columns = 'operacao, data, pessoa_id';
        $values  = ':operacao, :data, :pessoa_id';

        return $this->pdoCrud->insert($this->table, $columns, $values, $insertData);
    }
}