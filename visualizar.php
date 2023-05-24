<?php  
include "conexao.php";
$conexao = conectar("localhost","root","","sistema");
$consulta = "select * from cadastro";
$con = mysqli_query($conexao,$consulta);
?>


<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<title>Projeto</title>
</head>
<body>
<h3>Buscando dados na tabela sistema</h3><br><br>
<table border="5">
<tr>
<td><center><B>Identificador</B></center></td>
<td><center><B>Nome</B></center></td>
<td><center><B>email</B></center></td>
<td><center><B>senha</B></center></td>
<td><center><b>Editar</b></center></td>
       <td><center><b>Excluir</b></center></td>
</tr>

<?php while ($resultado=mysqli_fetch_array($con)) { 
  //pegar o identificador do  aluno e enviar para a pagina de edição 
$id=$resultado["id"];

 ?>
<tr>
     <!--nomes do banco -->
<td><center><?php echo $resultado["id"]; ?> </center></td>

       <td><center><?php echo $resultado["nome"]; ?>  </center></td>
       <td><center><?php echo $resultado["email"]; ?>  </center></td>
       <td><center><?php echo $resultado["senha"]; ?> </center></td>
       <td><center><a href="editar.php?funcao=editar&id=<?php echo $id ?>">Editar  </center></td>
         <td><center><a href="funcoes.php?funcao=excluir&id=<?php echo $id ?>">Excluir  </center></td>
 
</tr>
<?php } ?>	
</table>
<?php desconectar($conexao)  ?>
  <br>
  <input type="button" value="Login" onclick="location.href='login.php'">
<input type="button" value="Cadastrar" onclick="location.href='cadastro.php'">
</body>
</html>