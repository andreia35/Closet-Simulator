<html>
<head>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Closet Simulator </title>
<link rel="stylesheet" type="text/css" href="../CSS/closetSimulator.css">
<script>
function mostra(id){
	if(document.getElementById(id).style.display=='block'){
	document.getElementById(id).style.display = "none";}
	else {document.getElementById(id).style.display = 'block';}
	
	}
</script>
</head>
<body>

<img src="../Imagens/logofinal.png" class="center" align="left" style="width:9%" >

<div class="titulos"> What’s the season? </div>

<br></br><br></br>
<table style="width:90%; margin-left:15%" border="0px">
	<col width="25%">
	<col width="25%">
	<col width="25%">
	<col width="25%">
	<tr>
		<td>
		<form  method ="POST" action="upload_pictures2.php" enctype = "multipart/form-data">
		<div class="box" >
		<input name="estacao" id="summer" type="radio" style=" background:transparent ; border: none; font-family:Segoe UI Semibold; font-size:30px; color:#2E3030; display:none; " value="2" onClick="mostra('ma')"   /> <label for='summer' style="cursor:pointer"  > SUMMER </label>
		
			<br>
			<div style="position:fixed" id ="ma" class="hidden">
				<select id="tipo" name="tiposummer">
					<option value="0">-Select-</option>
					<option value="1">Tops</option>
					<option value="2">Shirts</option>
					<option value="3">Dresses</option>
					<option value="4">Two Pieces</option>
					<option value="5">Shorts</option>
					<option value="6">Jeans/ Pants</option>
					<option value="7">Skirts</option>
					<option value="8">Coats/Jackets</option>
					<option value="9">Sandals</option>
					<option value="11">Other Shoes</option>
					<option value="12">Sunglasses</option>
					<option value="13">Hats</option>
					<option value="14">Jewlery</option>
				</select>
			</div>	
		</div>		
		</td>
		
		<td>
		
		<div class="box">
			<input name="estacao" id="fall" type="radio" style=" background:transparent ; border: none; font-family:Segoe UI Semibold; font-size:30px; color:#2E3030; display:none; " value="3" onClick="mostra('mb')"   /> <label for='fall' style="cursor:pointer"  > FALL </label>
			<div style="position:fixed" id ="mb" class="hidden">
				<select id="tipo" name="tipofall">
					<option value="0">-Select-</option>
					<option value="1">Tops</option>
					<option value="2">Shirts</option>
					<option value="15">Sweaters</option>
					<option value="3">Dresses</option>
					<option value="4">Two Pieces</option>
					<option value="5">Shorts</option>
					<option value="6">Jeans/ Pants</option>
					<option value="7">Skirts</option>
					<option value="8">Coats/Jackets</option>
					<option value="16">Boots</option>
					<option value="10">Sneakers</option>
					<option value="11">Other Shoes</option>
					<option value="17">Scarfs</option>
					<option value="18">Beenies</option>
					<option value="14">Jewlery</option>
				</select>
			</div>	
		</div>		
		</td>
		
		<td>
		<div class="box">
			<input name="estacao" id="winter" type="radio" style=" background:transparent ; border: none; font-family:Segoe UI Semibold; font-size:30px; color:#2E3030; display:none;  " value="4" onClick="mostra('mc')"   /> <label for='winter' style="cursor:pointer"  > WINTER </label>
			<div style="position:fixed" id ="mc" class="hidden">
				<select id="tipo" name="tipowinter">
					<option value="0">-Select-</option>
					<option value="1">Tops</option>
					<option value="2">Shirts</option>
					<option value="15">Sweaters</option>
					<option value="3">Dresses</option>
					<option value="4">Two Pieces</option>
					<option value="5">Shorts</option>
					<option value="6">Jeans/ Pants</option>
					<option value="7">Skirts</option>
					<option value="8">Coats/Jackets</option>
					<option value="16">Boots</option>
					<option value="10">Sneakers</option>
					<option value="11">Other Shoes</option>
					<option value="17">Scarfs</option>
					<option value="18">Beenies</option>
					<option value="14">Jewlery</option>
				</select>
			</div>
		</div>		
		</td>
				
		<td>
		<div class="box">
			<input name="estacao" id="spring" type="radio" style=" background:transparent ; border: none; font-family:Segoe UI Semibold; font-size:30px; color:#2E3030; display:none;" value="1" onClick="mostra('md')"   /> <label for='spring' style="cursor:pointer"  > SPRING </label>
			<div style="position:fixed" id ="md" class="hidden">
				<select id="tipo" name="tipospring">
					<option value="0">-Select-</option>
					<option value="1">Tops</option>
					<option value="2">Shirts</option>
					<option value="3">Dresses</option>
					<option value="4">Two Pieces</option>
					<option value="5">Shorts</option>
					<option value="6">Jeans/ Pants</option>
					<option value="7">Skirts</option>
					<option value="8">Coats/Jackets</option>
					<option value="9">Sandals</option>
					<option value="10">Sneakers</option>
					<option value="11">Other Shoes</option>
					<option value="12">Sunglasses</option>
					<option value="13">Hats</option>
					<option value="15">Jewlery</option>
				</select>
			</div>
		</div>		
		</td>
	</tr>
</table>

		<input type="submit" style="cursor: pointer; background:transparent; border: none; margin-top:30%; margin-left:93%; font-family:Segoe UI Semibold; font-size:20px; color:#B76E79; " value="UPLOAD" >
</form>

 <a href="pag1.php" > <div class="left" style="margin-top:-2%"> BACK </div></a>
</body>
</html>