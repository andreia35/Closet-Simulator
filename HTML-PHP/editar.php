<?php
session_start();
include("conexao.php");

$id_utilizador = mysqli_real_escape_string ($conexao,trim( $_POST['id_utilizador']));
$primeiro_nome = mysqli_real_escape_string ($conexao,trim( $_POST['primeiro_nome']));
$ultimo_nome = mysqli_real_escape_string ($conexao, trim( $_POST['ultimo_nome']));
$email = mysqli_real_escape_string ($conexao,trim( $_POST['email']));
$password = mysqli_real_escape_string ($conexao, trim ($_POST['password']));



$result_utilizador = "UPDATE utilizador SET primeiro_nome = '$primeiro_nome', ultimo_nome = '$ultimo_nome', email = '$email', password = '$password' WHERE id_utilizador = '{$_SESSION['nome']['id_utilizador']}';";
$resultado_utilizador = mysqli_query($conexao, $result_utilizador);



if (mysqli_affected_rows($conexao)){
	header ("Location: profile.php");
}
else{
	$_SESSION['msg'] = "<p style=color:#B76E79;><b> USER NOT UPDATED </b></p>";
	header ("Location: editar_perfil.php?id_utilizador=$id_utilizador");
}



?>