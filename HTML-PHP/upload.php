<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();
$_SESSION['status_registo'] = false;
print_r($_SESSION);
include("conexao.php");

echo '<pre>';
print_r($_POST);
echo '</pre>';

$imageFileType = strtolower(pathinfo($_FILES['roupa']['name'],PATHINFO_EXTENSION));
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")  {
	
	header ('Location: upload_pictures2.php?erro=sim');
	exit;
}



//cria as variáveis
echo 'a imagem ' . $_FILES["roupa"]["tmp_name"];
$id_utilizador = $_SESSION['nome']['id_utilizador']; //id retirado do login (sessão)
$imagem = mysqli_real_escape_string ($conexao,file_get_contents($_FILES['roupa']['tmp_name']));
$id_estacao = $_POST['id_estacao'];
$id_tipo = $_POST['id_tipo'];


//inserir dados nova roupa
$sql = "INSERT INTO roupa(utilizador_id_utilizador, imagem, estacao_id_estacao, tipo_id_tipo)
        VALUES ('$id_utilizador', '$imagem', '$id_estacao', '$id_tipo')";
		

//validar registo
if ($conexao->query($sql) === TRUE ){
	$_SESSION ['status_registo'] = true;
}

header ('Location: upload_pictures_final.php?erro=' . $conexao->error);
$conexao->close();
exit;

?>
