<?php
include "conexao.php";

// pegando os dados do formulário
$gravarnome = $_POST["nome"];
$gravaremail = $_POST["email"];
$gravarsenha = $_POST["senha"];

$conexao = mysqli_connect("localhost", "root", "", "sistema");

// criar uma consulta preparada para inserir os dados
if ($_GET["funcao"] == "gravar") {
    $consulta = "INSERT INTO cadastro (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $consulta);
    mysqli_stmt_bind_param($stmt, "sss", $gravarnome, md5($gravaremail), $gravarsenha);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: visualizar.php");
}

// criar uma consulta preparada para atualizar os dados
if ($_GET["funcao"] == "editar") {
    $id = $_GET["id"];
    $consulta = "UPDATE cadastro SET nome = ?, email = ?, senha = ? WHERE id = ?";
    $stmt = mysqli_prepare($conexao, $consulta);
    mysqli_stmt_bind_param($stmt, "sssi", $gravarnome, md5($gravaremail), $gravarsenha, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: visualizar.php");
}

// criar uma consulta preparada para excluir os dados
if ($_GET["funcao"] == "excluir") {
    $id = $_GET["id"];
    $consulta = "DELETE FROM cadastro WHERE id = ?";
    $stmt = mysqli_prepare($conexao, $consulta);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: visualizar.php");
}
?>
