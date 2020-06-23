<?php

define ('HOST' , '127.0.0.1');
define ('email', 'root');
define ('password', '');
define ('DB', 'closetsimulator');

$conexao = mysqli_connect (HOST, email, password, DB) or die ('Não foi possível conectar');

?>