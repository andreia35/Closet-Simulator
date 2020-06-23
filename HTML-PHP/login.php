<?php
session_start();
include ('conexao.php');
//validar que se os campos nao estiverem preenchidos volta à pagina inicial
if (empty($_POST['email']) || empty ($_POST['password'])){
	header('Location: formulario.php');
	exit();
}

 $email = mysqli_real_escape_string($conexao, $_POST ['email']);
 $password = mysqli_real_escape_string($conexao, $_POST ['password']); 
 
 //verificar se o login está correto
 $query = "select email, id_utilizador from utilizador where email = '{$email}' and password = '{$password}'";
 
 $nome = "primeiro_nome from utilizador where email = '{$email}' and password = '{$password}'";

 //execução pela base de dados
 $result = mysqli_query ($conexao, $query);
 $row = mysqli_num_rows($result);
 $nome = mysqli_fetch_assoc($result);

 
 
 if($row == 1 ) {
	 $_SESSION['nome'] = $nome;
	 $_SESSION ['email'] = $email;
	 header('Location: pag1.php');
	 exit ();
 }else{
	 $_SESSION['nao_autenticado']= true;
	 header('Location: formulario.php');
	 exit;
 }
 ?>