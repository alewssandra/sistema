<?php

class PDOQuery{

    private $pdo;

    // Construtor da classe que cria uma instância da classe PDO com base nas configurações fornecidas
    public function __construct($configFile = null)
    {
        $this->pdo = PDOFactory::createPDO($configFile);
    }

    // Executa uma consulta SQL e retorna o objeto de declaração preparada (PDOStatement)
    public function executeQuery($query, array $pdoValues = array())
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($pdoValues);

        return $stmt;
    }

    // Executa uma consulta SQL SELECT e retorna a primeira linha de resultado como um array associativo
    public function fetch($select, array $pdoValues = array())
    {
        $stmt = $this->pdo->prepare($select);
        $stmt->execute($pdoValues);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    // Executa uma consulta SQL SELECT e retorna todas as linhas de resultado como um array de arrays associativos
    public function fetchAll($select, array $pdoValues = array())
    {
        $stmt = $this->pdo->prepare($select);
        $stmt->execute($pdoValues);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rows;
    }

}
