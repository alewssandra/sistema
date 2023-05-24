<?php
function conectar($local, $usuario, $senha, $banco)
{
    $conexao = mysqli_connect($local, $usuario, $senha, $banco);

    // Verifica se a conexão foi estabelecida com sucesso
    if (mysqli_connect_error()) {
        echo "Falha na conexão com o banco de dados: " . mysqli_connect_error();
        return false;
    }

    return $conexao;
}

function desconectar($conexao)
{
    mysqli_close($conexao);
}
?>
