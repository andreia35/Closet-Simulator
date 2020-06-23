<html>
<head>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Closet Simulator </title>
<link rel="stylesheet" type="text/css" href="../CSS/closetSimulator.css">

</head>
<body>
<?php
if (isset($_POST['estacao']) && $_POST['estacao']=='1'){
$tipo=$_POST['tipospring'];
}
elseif (isset($_POST['estacao']) && $_POST['estacao']=='2'){
$tipo=$_POST['tiposummer'];
}
elseif (isset($_POST['estacao']) && $_POST['estacao']=='3'){
$tipo=$_POST['tipofall'];
}
elseif (isset($_POST['estacao']) && $_POST['estacao']=='4'){
$tipo=$_POST['tipowinter'];
}

if(isset($_GET['erro']) && $_GET['erro']=='sim'){
echo '<script> alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed."); </script>';
}
?>
<img src="../Imagens/logofinal.png" class="center" align="left" style="width:9%" >


<br>

<div class="titulos" >Upload your favourite outfits!</div>
<br></br><br></br><br></br><br></br><br>



<form method ="POST" action="upload.php" enctype = "multipart/form-data">
		<input name="roupa" type="file" style="cursor: pointer; opacity:0%; margin-left:22%; padding:3% 18%; overflow: hidden; border-radius: 20px; background-color:#4f4f50">
		<br></br><br></br><br></br><br></br><br></br>
		<input type="submit" style="cursor: pointer; border: none; margin-left:93%; font-family:Segoe UI Semibold; font-size:20px; color:#B76E79; background:transparent; " value="UPLOAD" >
		<input name="id_estacao" value=" <?php echo $_POST['estacao']; ?> " hidden>
		<input name="id_tipo" value="<?php echo $tipo; ?>" hidden>
		</form>


<table style="width:100%; margin-top:-25%;"  border="0px" align="center">
	<col width="42%">
	<col width="58%">
	<tr>
		<td></td>
		<td>
		<button style="  color:white; font-size:50px; width:100%; background-color:#4f4f50;">UPLOAD PICTURES </button></td>
	</tr>
	</table>

<br></br><br></br><br></br><br></br>

 <a href="upload_pictures.php" > <div class="left"> BACK </div></a>

</body>
</html>




