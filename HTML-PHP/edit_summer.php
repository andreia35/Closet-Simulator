<?php
include("conexao.php");
$imagens = "SELECT id_roupa,imagem FROM roupa WHERE estacao_id_estacao=2";
$resultado = mysqli_query($conexao, $imagens);


?>


<html>
<head>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<title> Closet Simulator </title>
<link rel="stylesheet" type="text/css" href="../CSS/closetSimulator.css">

</head>
<body style="overflow-y: auto">
<img src="../Imagens/logofinal.png" class="center" align="left" style="width:9%" >


<br></br>
<div class="titulos" style="margin-top:-3%" > YOUR SUMMER CLOTHING IMAGES </div>
<br></br><br></br>
<?php
while($rows = mysqli_fetch_array($resultado))
        {
            $dados = $rows['imagem'];


		echo '<img src="data:image/jpeg;base64,'.base64_encode( $dados ).'" style="margin-bottom:10%; margin-left:35%; max-width:15%"/>';
echo '<div class="texto"><a href="eliminar.php?id='.$rows['id_roupa'].'"data-confirm="Tem a certeza de que deseja excluir o item selecionado?" > <button style=" margin-top:-19%; margin-left:55%; background-color:#B76E79; color:white;">DELETE</button> </a></div>';

		}
?>
<a href="profile.php" > <div class="left" style="margin-top:-5%"> BACK </div></a>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="javascript.js"></script>
</body>
</html>














