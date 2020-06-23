<html>
<head>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Closet Simulator </title>
<link rel="stylesheet" type="text/css" href="../CSS/closetSimulator.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
<br>

<div class="titulos" style= "margin-top:-3%"> What’s the season? </div>

<br></br><br></br>
<table style="width:90%; margin-left:15%" border="0px">
	<col width="25%">
	<col width="25%">
	<col width="25%">
	<col width="25%">
	<tr>
		<td>
		<form method ="POST" action="simulate_outfit2.php" enctype = "multipart/form-data">
		<div class="box"  >
		<input name="estacao" id="summer" type="radio" style=" background:transparent ; border: none; font-family:Segoe UI Semibold; font-size:30px; color:#2E3030; display:none; " value="2" onClick="mostra('ma')"   /> <label for='summer' style="cursor:pointer"  > SUMMER </label>
			<br>
			<div style="position:fixed" id ="ma" class="hidden">
					<input type="checkbox" name ="roupa1" value="1">Tops
					<br>
					<input type="checkbox" name ="roupa2" value="2">Shirts
					<br>
					<input type="checkbox" name ="roupa3" value="3">Dresses
					<br>
					<input type="checkbox" name ="roupa4" value="4">Two Pieces
					<br>
					<input type="checkbox" name ="roupa5" value="5">Shorts
					<br>
					<input type="checkbox" name ="roupa6" value="6">Jeans/ Pants
					<br>
					<input type="checkbox" name ="roupa7" value="7">Skirts
					<br>
					<input type="checkbox" name ="roupa8" value="8">Coats/Jackets
					<br>
					<input type="checkbox" name ="roupa9" value="9">Sandals
					<br>
					<input type="checkbox" name ="roupa11" value="11">Other Shoes
					<br>
					<input type="checkbox" name ="roupa12" value="12">Sunglasses
					<br>
					<input type="checkbox" name ="roupa13" value="13">Hats
					<br>
					<input type="checkbox" name ="roupa14" value="14">Jewlery
			</div>	
		</div>		
		
		</td>
		
		<td>
		<div class="box">
			<input name="estacao" id="fall" type="radio" style=" background:transparent ; border: none; font-family:Segoe UI Semibold; font-size:30px; color:#2E3030; display:none; " value="3" onClick="mostra('mb')"   /> <label for='fall' style="cursor:pointer"  > FALL </label>
			<br>
			<div style="position:fixed" id ="mb" class="hidden">
					<input type="checkbox" name ="roupa1" value="1">Tops
					<br>
					<input type="checkbox" name ="roupa2" value="2">Shirts
					<br>
					<input type="checkbox" name ="roupa15" value="15">Sweaters
					<br>
					<input type="checkbox" name ="roupa3" value="3">Dresses
					<br>
					<input type="checkbox" name ="roupa4" value="4">Two Pieces
					<br>
					<input type="checkbox" name ="roupa5" value="5">Shorts
					<br>
					<input type="checkbox" name ="roupa6" value="6">Jeans/ Pants
					<br>
					<input type="checkbox" name ="roupa7" value="7">Skirts
					<br>
					<input type="checkbox" name ="roupa8" value="8">Coats/Jackets
					<br>
					<input type="checkbox" name ="roupa16" value="16">Boots
					<br>
					<input type="checkbox" name ="roupa10" value="10">Sneakers
					<br>
					<input type="checkbox" name ="roupa11" value="11">Other Shoes
					<br>
					<input type="checkbox" name ="roupa17" option value="17">Scarfs
					<br>
					<input type="checkbox" name ="roupa18" value="18">Beenies
					<br>
					<input type="checkbox" name ="roupa14" value="14">Jewlery
			</div>	
		</div>		
		</td>
		
		<td>
		<div class="box">
			<input name="estacao" id="winter" type="radio" style=" background:transparent ; border: none; font-family:Segoe UI Semibold; font-size:30px; color:#2E3030; display:none;  " value="4" onClick="mostra('mc')"   /> <label for='winter' style="cursor:pointer"  > WINTER </label>
			<br>
			<div style="position:fixed" id ="mc" class="hidden">
					<input type="checkbox" name ="roupa1" value="1">Tops
					<br>
					<input type="checkbox" name ="roupa2" value="2">Shirts
					<br>
					<input type="checkbox" name ="roupa15" value="15">Sweaters
					<br>
					<input type="checkbox" name ="roupa3" value="3">Dresses
					<br>
					<input type="checkbox" name ="roupa4" value="4">Two Pieces
					<br>
					<input type="checkbox" name ="roupa5" value="5">Shorts
					<br>
					<input type="checkbox" name ="roupa6" value="6">Jeans/ Pants
					<br>
					<input type="checkbox" name ="roupa7" value="7">Skirts
					<br>
					<input type="checkbox" name ="roupa8" value="8">Coats/Jackets
					<br>
					<input type="checkbox" name ="roupa16" value="16">Boots
					<br>
					<input type="checkbox" name ="roupa10" value="10">Sneakers
					<br>
					<input type="checkbox" name ="roupa11" value="11">Other Shoes
					<br>
					<input type="checkbox" name ="roupa17" value="17">Scarfs
					<br>
					<input type="checkbox" name ="roupa81" value="18">Beenies
					<br>
					<input type="checkbox" name ="roupa14" value="14">Jewlery</option>
			</div>
		</div>		
		</td>
				
		<td>
		<div class="box">
			<input name="estacao" id="spring" type="radio" style=" background:transparent ; border: none; font-family:Segoe UI Semibold; font-size:30px; color:#2E3030; display:none;" value="1" onClick="mostra('md')"   /> <label for='spring' style="cursor:pointer"  > SPRING </label>
			<br>
			<div style="position:fixed" id ="md" class="hidden">
					<input type="checkbox" name ="roupa1" value="1">Tops
					<br>
					<input type="checkbox" name ="roupa2" value="2">Shirts
					<br>
					<input type="checkbox" name ="roupa3" value="3">Dresses
					<br>
					<input type="checkbox" name ="roupa4" value="4">Two Pieces
					<br>
					<input type="checkbox" name ="roupa5" value="5">Shorts
					<br>
					<input type="checkbox" name ="roupa6" value="6">Jeans/ Pants
					<br>
					<input type="checkbox" name ="roupa7" value="7">Skirts
					<br>
					<input type="checkbox" name ="roupa8" value="8">Coats/Jackets
					<br>
					<input type="checkbox" name ="roupa9" value="9">Sandals
					<br>
					<input type="checkbox" name ="roupa10" value="10">Sneakers
					<br>
					<input type="checkbox" name ="roupa11" value="11">Other Shoes
					<br>
					<input type="checkbox" name ="roupa12" value="12">Sunglasses
					<br>
					<input type="checkbox" name ="roupa13" value="13">Hats
					<br>
					<input type="checkbox" name ="roupa15" value="15">Jewlery
			</div>
		</div>		
		</td>
	</tr>
	</table>
	<input type="submit" style="cursor: pointer; background:transparent; border: none; margin-top:31%; margin-left:93%; font-family:Segoe UI Semibold; font-size:20px; color:#B76E79; " value="SIMULATE" >
</form>



 <a href="pag1.php" > <div class="left" style="margin-top:-1%"> BACK </div></a>
 <div class="texto" style="margin-top:31%; margin-left:30%"> Hold down the Ctrl (windows) / Command (Mac) button to select multiple options </div>
  	

  
</body>
</html>