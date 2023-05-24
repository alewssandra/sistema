<?php

class PDOCrud
{

    private $pdo;

    // Construtor da classe que cria uma instância da classe PDO com base nas configurações fornecidas
    public function __construct($configFile = null)
    {
        $this->pdo = PDOFactory::createPDO($configFile);
    }

    // Método para inserir registros em uma tabela
    public function insert($table, $columns, $values, array $pdoValues = array())
    {
        // Monta a consulta de inserção
        $insert = 'INSERT INTO ' . $table . '(' . $columns . ') VALUES (' . $values . ')';
        $stmt   = $this->pdo->prepare($insert);
        $stmt->execute($pdoValues);

        // Retorna o ID do último registro inserido
        return $this->pdo->lastInsertId();
    }

    // Método para atualizar registros em uma tabela
    public function update($table, $values, $clausule, array $pdoValues = array())
    {
        // Monta a consulta de atualização
        $update = 'UPDATE ' . $table . ' SET ' . $values . ' ' . $clausule;
        $stmt   = $this->pdo->prepare($update);
        $result = $stmt->execute($pdoValues);

        // Retorna o resultado da atualização (true ou false)
        return $result;
    }

    // Método para excluir um registro de uma tabela pelo ID
    public function delete($table, $id)
    {
        // Monta a consulta de exclusão
        $delete = 'DELETE FROM ' . $table . ' WHERE ID = ' . $id;
        $stmt   = $this->pdo->prepare($delete);
        $result = $stmt->execute(array(
            ':id' => $id,
        ));

        // Retorna o resultado da exclusão (true ou false)
        return $result;
    }

    // Método para excluir registros de uma tabela com base em uma coluna específica e seu valor
    public function deleteMap($table, $column, $id)
    {
        // Monta a consulta de exclusão
        $delete = 'DELETE FROM ' . $table . ' WHERE ' . $column . ' = ' . $id;
        $stmt   = $this->pdo->prepare($delete);
        $result = $stmt->execute(array(
            ':id' => $id,
        ));

        // Retorna o resultado da exclusão (true ou false)
        return $result;
    }
}
?>