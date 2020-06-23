<?php
include ('conexao.php');

$query = "select MAX(id_roupa) as id_roupa from roupa; ";

$result = mysqli_query($conexao, $query);
$id_max = mysqli_fetch_assoc($result);

$random = rand(0,$id_max['id_roupa']);

foreach ($_POST as &$value) {
	$query = "select imagem from roupa where id_roupa = '{$value}' and estacao_id_estacao = '{$_POST['estacao']}'";
	
	$result = mysqli_query($conexao, $query);
	$row = mysqli_num_rows($result);
}	

print_r($_POST);
$mostrar = "select imagem from roupa where id_roupa = '{$random}'  ";
$result = mysqli_query($conexao, $query);
$mostrar = mysqli_fetch_assoc($result);

/*echo  '<img src="data:image/jpeg;base64,'.base64_encode( $mostrar['imagem'] ).'"/>';*/
 
/*print_r ($mostrar);*/

/*while ($row==0){
	$query = "select id_roupa from roupa where id_roupa='{$random}';";
	$result = mysqli_query($conexao, $query);
	$row = mysqli_num_rows($result);
}*/

/*for ($index = 0; $index < sizeof($_POST) ; $index++) {
	if ($index != 0){
		/*echo  '<img src="data:image/jpeg;base64,'.base64_encode( $mostrar['imagem'] ).'"/>';
		print_r(;
	}
}*/
print_r($mostrar);
$index = 0;
foreach ($mostrar as &$imagem) {
	if($index > 0) {
		echo $imagem;
	}
	$index++;
}	
/*print_r($_POST);*/

?>

<html>
<head>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Closet Simulator </title>
<link rel="stylesheet" type="text/css" href="../CSS/closetSimulator.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<script>

var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

<body onload="myFunction()">

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">

<a href="simulate_outfit.php" > <div class="left"> BACK </div></a>
<a href="logout.php"> <div class="next"> LOGOUT </div></a> 


  
</body>
</html>