<?php
session_start();
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

<script>
	function mostrarSenha(){
		var tipo = document.getElementById("password");
		if (tipo.type == "password"){
			tipo.type =="text";
		}
	}
</script>

<img src="../Imagens/logofinal.png" class="center" style="width:13%" >

<table style="width:50%; margin-top:-2%" border="0px" align="left">
	<col width="100%">

	<tr>
		<td><div class="titulos" style="width:55%"> Login </div></td>
	</tr>
	<tr>
		<td><br></br></td>
	</tr>
	<tr>
		<td> 
		<?php
		if (isset($_SESSION['nao_autenticado'])):
		?>
		<div class="notification is-danger">
                <p> <font color="#B76E79">  ERROR: Email or Password invalid</p>
            </div>
			<?php
			endif;
			unset ($_SESSION['nao_autenticado']);
			?>
		</td>
	</tr>
	<tr>
	<div class="box">
         <form action="login.php" method="POST">
            <div class="field">
                <div class="control">
					<td><input style ="margin-left:-22%" type="text" class="input is-large" placeholder="Email Address" name="email" autofocus="" required></td>
				</div>
			</div>
	</tr>
	<tr>
		<td><br></br><br></br></td>
	</tr>
	<tr>
	 <div class="field">
        <div class="control">
		<td><input style ="margin-left:-22%" type="password" placeholder="Password" name="password" required>
		</td>
		</div>
	</div>
	</tr>
	<tr>
		<td><br></br><br></br></td>
	</tr>
	<tr>
		<td><div style ="margin-left:-10%" class="texto"><button  type="submit">Let's Go</button>
	</tr>
	</form>
	</div>
	</table>
	
	
	<table style="width:50%; margin-top:-2%" border="0px" align="right">
	<col width="100%">

	<tr>
		<td><div class="titulos" style="width:95%"> Register </div></td>
	</tr>
	<tr>
		<td><br></br></td>
	</tr>

		<tr>
		<td>
			<?php
				if(isset($_SESSION['status_registo'])):
			?>
			<div class="notification is-success">
				<p><font color="#B76E79"> Registration Made!</p>
			</div>
			<?php
				endif;
				unset ($_SESSION['status_registo']);
			?>
			
			<?php
				if(isset($_SESSION['utilizador_existe'])):
			?>
            <div class="notification is-info">
                <p> <font color="#B76E79"> Email address you entered is already in use. If you already have an account, sign in now!</p>
            </div>
			<?php
				endif;
				unset ($_SESSION['utilizador_existe']);
			?>
			
			<?php
				if(isset($_SESSION['password_errada'])):
			?>
            <div class="notification is-info">
                <p> <font color="#B76E79"> Your Passwords Don't Match!</p>
            </div>
			<?php
				endif;
				unset ($_SESSION ['password_errada']);
			?>
					
		</td>
		</tr>
	<tr>
	 <div class="box">
            <form action="registo.php" method="POST">
                <div class="field">
                <div class="control">
				<td><input style ="margin-left:-11%" type="text" class="input is-large" placeholder="First Name" name="primeiro_nome" required></td>
				</div>
				</div>
	</tr>
	<tr>
		<td><br></br><br></br></td>
	</tr>
	<tr>
	 <div class="field">
        <div class="control">
		<td><input style ="margin-left:-11%" type="text" class="input is-large" placeholder="Last Name" name="ultimo_nome" required></td>
		</div>
		</div>
	</tr>
	<tr>
		<td><br></br><br></br><br></br></td>
	</tr>
	<tr>
	 <div class="field">
        <div class="control">
		<td><input style="margin: -3% -11%" type="text" placeholder="Email Address" name="email" required></td>
		</div>
		</div>
	</tr>
	<tr>
		<td><br></br><br></td>
	</tr>
	<tr>
	 <div class="field">
        <div class="control">
		<td><input style="margin:-2% -11%"  type="password" placeholder="Create Password" name="password" required></td>
		</div>
		</div>
	</tr>
	
	<tr>
		<td><br></br><br></td>
	</tr>
	<tr>
	 <div class="field">
        <div class="control">
		<td><input style="margin:-1% -11%"  type="password" placeholder="Confirm Password" name="confirmPassword" required></td>
		</div>
		</div>
	</tr>
	<tr>
		<td><br></br><br></td>
	</tr>
	<tr>
		<td><div class="texto"><button style="margin-left:-35%" type="submit">Let's Go</button> </div> </td>
	</tr>
	</form>
	</div>
	</table>
</body>
</html>