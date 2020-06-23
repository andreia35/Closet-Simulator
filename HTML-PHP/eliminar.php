<?php
include_once("conexao.php");
$id_roupa = mysqli_real_escape_string ($conexao,trim( $_GET['id']));
$result_imagem = "DELETE FROM roupa WHERE id_roupa='$id_roupa'";
mysqli_query($conexao, $result_imagem);
?>

<html>
<head>
<meta charset = "utf-8" http-equiv="refresh" content="2; profile.php">
<title> Closet Simulator </title>
<link rel="stylesheet" type="text/css" href="../CSS/closetSimulator.css">

</head>
<body>


<img src="../Imagens/logofinal.png" class="center" align="left" style="width:9%" >
<br>
<?php
if (empty($_GET['erro'])) {
  echo '<div class="titulos" style="margin-top:15%" > YOUR ITEM WAS SUCCESSFULLY ELIMINATED! </div>';
} else {
	echo $_GET['erro'];
  echo '<div class="titulos" style="margin-top:15%" > AN ERROR OCCURRED, PLEASE TRY AGAIN! </div>';
}

?>




</body>
</html>