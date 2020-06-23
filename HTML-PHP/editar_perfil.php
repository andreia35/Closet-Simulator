<?php
session_start();
include_once("conexao.php");
$result_utilizador = "SELECT * FROM utilizador WHERE id_utilizador='{$_SESSION['nome']['id_utilizador']}'";
$resultado_utilizador = mysqli_query($conexao, $result_utilizador);
$row_utilizador = mysqli_fetch_assoc($resultado_utilizador);
?>

<html >
<head>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Closet Simulator </title>
<link rel="stylesheet" type="text/css" href="../CSS/closetSimulator.css">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="css/bulma.min.css" />
</head>
<body>

<img src="../Imagens/logofinal.png" class="center" align="left" style="width:9%" >

<div class="titulos" style="width:95%"> Edit Profile </div>

<?php
if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}
?>

<br><br><br><br><br>
			
            <form action="editar.php" method="POST">
			<input type="hidden"  name="id_utilizador" value="<?php echo $row_utilizador['id_utilizador']; ?>">
			<div class="texto" style="margin-left:38%"> <label><b>First Name:</b></label> </div>
                <div class="field">
                <div class="control">
				<input style ="width:20%; margin-left:40%; margin-top:-2%;" type="text" class="input is-large" placeholder="Edit First Name" name="primeiro_nome" value="<?php echo $row_utilizador['primeiro_nome']; ?>">
				</div>
				</div>
<br><br>
	<div class="texto" style="margin-left:38%"> <label><b>Last Name:</b></label> </div>
	 <div class="field">
        <div class="control">
		<input style ="width:20%; margin-left:40%; margin-top:-2%;" type="text" class="input is-large" placeholder="Edit Last Name" name="ultimo_nome" value="<?php echo $row_utilizador['ultimo_nome']; ?>" >
		</div>
		</div>

<br><br>
<div class="texto" style="margin-left:38%"> <label><b>Email:</b></label> </div>
	 <div class="field">
        <div class="control">
		<input style="width:20%; margin-left:40%; margin-top:-2%;" type="text" placeholder="Edit Email Address" name="email" value="<?php echo $row_utilizador['email']; ?>" >
		</div>
		</div>
<br><br>
	
	<div class="texto" style="margin-left:38%"> <label><b>Password:</b></label> </div>
	 <div class="field">
        <div class="control">
		<input style="width:20%; margin-left:40%; margin-top:-2%;"  type="password" placeholder="Edit Password" name="password" value="<?php echo $row_utilizador['password']; ?>">
		</div>
		</div>
		<br><br>
	<a href="profile.php" ><div class="left" style="margin-left:49%; background-color:#B76E79; color:white; font-size:12px; padding: 1% 5%; border-radius:20px; margin-top:0.8%" >CANCEL</div>
	<div class="texto"><button style="width:15%; margin-left:37%; background-color:#4f4f50; color:white; " type="submit">EDIT</button> </div>

	</form>
	


</body>
</html>