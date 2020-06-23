<?php
session_start();
include("conexao.php");

//criar as variaveis
$primeiro_nome = mysqli_real_escape_string ($conexao,trim( $_POST['primeiro_nome']));
$ultimo_nome = mysqli_real_escape_string ($conexao, trim( $_POST['ultimo_nome']));
$email = mysqli_real_escape_string ($conexao,trim( $_POST['email']));
$password = mysqli_real_escape_string ($conexao, trim ($_POST['password']));
$confirmPassword = mysqli_real_escape_string ($conexao, trim ($_POST['confirmPassword']));

if($_POST['password'] != $_POST['confirmPassword']){
	$_SESSION ['password_errada'] = true;
			header ('Location: formulario.php');
			exit;
}

//verificar validação, se conta já existe
	$sql = "select count(*) as total from utilizador where email = '$email'";
	$result =  mysqli_query($conexao, $sql);
	$row = mysqli_fetch_assoc($result);

	if($row ['total'] == 1 ){
			$_SESSION ['utilizador_existe'] = true;
			header ('Location: formulario.php');
			exit;
	}
	


//inserir dados novo utilizador
$sql = "INSERT INTO utilizador(primeiro_nome, ultimo_nome, email, password) VALUES ('$primeiro_nome', '$ultimo_nome', '$email', '$password')";



//validar registo
if ($conexao->query($sql) === TRUE ){
	$_SESSION ['status_registo'] = true;
}



$conexao->close();

header ('Location: formulario.php');
exit;



?>