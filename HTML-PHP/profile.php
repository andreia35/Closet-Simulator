<?php
session_start();
include_once("conexao.php");
$result_utilizador = "SELECT * FROM utilizador WHERE id_utilizador='{$_SESSION['nome']['id_utilizador']}'";
$resultado_utilizador = mysqli_query($conexao, $result_utilizador);
$row_utilizador = mysqli_fetch_assoc($resultado_utilizador);
?>

<html>
<head>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Closet Simulator </title>
<link rel="stylesheet" type="text/css" href="../CSS/closetSimulator.css">

</head>
<body>
<img src="../Imagens/logofinal.png" class="center" align="left" style="width:9%" >


<br></br>
<div class="titulos" style="margin-top:-3%" > MY PROFILE </div>
<br></br>

<div class="subtitulo" style="color:#B76E79; text-align:left; margin-left:18%"><b>Personal Data </b></div>
<br><br>
<div class="texto" style="margin-left:18%"><b>NAME:</b> <?php echo $row_utilizador['primeiro_nome'];echo ' ' ; echo $row_utilizador['ultimo_nome']; ?></div>
<br>
<div class="texto" style="margin-left:18%"><b>EMAIL:</b> <?php echo $row_utilizador['email']; ?></div>

<br>
<form action="editar_perfil.php"><button style="margin-left:17%; color:white; font-size:15px; width:10%; background-color:#4f4f50" type="submit">EDIT</button></form>


<div class="subtitulo" style="color:#B76E79; text-align:center; margin-top:-19%; margin-left:35%"><b>Pictures</b></div>
<br></br>
<div class="texto" style="margin-left:63%"><b>SUMMER</b></div>
<form action="edit_summer.php"><button style="margin-left:69%;  margin-top:-2.5%; color:white; font-size:10px; width:4.7%; background-color:#4f4f50" type="submit">EDIT</button></form>

<div class="texto" style="margin-left:63%"><b>FALL</b></div>
<form action="edit_fall.php"><button style="margin-left:69%;  margin-top:-2.5%; color:white; font-size:10px; width:4.7%; background-color:#4f4f50" type="submit">EDIT</button></form>

<div class="texto" style="margin-left:63%"><b>WINTER</b></div>
<form action="edit_winter.php"><button style="margin-left:69%;  margin-top:-2.5%; color:white; font-size:10px; width:4.7%; background-color:#4f4f50" type="submit">EDIT</button></form>

<div class="texto" style="margin-left:63%"><b>SPRING</b></div>
<form action="edit_spring.php"><button style="margin-left:69%;  margin-top:-2.5%; color:white; font-size:10px; width:4.7%; background-color:#4f4f50" type="submit">EDIT</button></form>

<a href="pag1.php" > <div class="left" style="margin-top:7.5%"> BACK </div></a>

</body>
</html>
