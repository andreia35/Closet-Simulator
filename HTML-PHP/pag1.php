<?php
include('verificar_login.php');
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

<a href="profile.php" > <div class="left" style="margin-left:9%; margin-top: -2%"> MY PROFILE </div></a>
 <div class="left" style="margin-left:18.5%; margin-top: -2%"> | </div>
<a href="news.php" > <div class="left" style="margin-left:20%; margin-top: -2%"> UPCOMING EVENTS (LONDON) </div></a>

<br></br><br>
<div class="titulos" > YOUR OPTIONS: </div>
<br></br><br></br>


<table style="width:100%" border="0px" align="center">
	<col width="50%">
	<col width="50%">
	<tr>
		<td><form action="upload_pictures.php"><button style="margin-left:-25%; color:white; font-size:40px; width:60%; background-color:#4f4f50" type="submit">UPLOAD<br>PICTURES</button></form></td>
		<td><form action="simulate_outfit.php"><button style="margin-left:10%; color:white; font-size:40px; width:60%; background-color:#4f4f50" type="submit">SIMULATE<br>OUTFITS</button></form></td>
	</tr>
	</table>



<br></br><br></br><br></br><br></br>

<a href="logout.php"> <div class="next"> LOGOUT </div></a> 





</body>
</html>
