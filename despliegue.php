<?php
//Fichero despliegue.php
echo("AA");
//$branch = shell_exec('git branch');
$branch = "develop * master";
$nombre_fichero = './PUESTA_EN_PRODUCCION.sh';


if($_POST['payload']){
	echo ("Payload");
	$payload= json_decode($_POST['payload']);
	$payload->ref;
	//shell_exec(' sh ./PUESTA_EN_PRODUCCION.sh');
	}else{
		echo ("NOT Payload");
}

if (strpos($branch, '* master')) {
	echo("Está seleccionado master");
	
	if (file_exists($nombre_fichero)) {
	
		$sh="as";//shell_exec(' sh ./PUESTA_EN_PRODUCCION.sh');
		
		if ($sh !=0) {
			echo("Ha ocurrido un problema");
			
		}else {
			echo("A".$sh);
			echo("Well done2");			
		}
	}else {
		echo("El fichero no existe");
	}
}else {
	echo("NO seleccionado master");
}
/*
echo("Conexion fallida");
$connection = ssh2_connect('shell.example.com', 22);
echo("Conexion 2");
if (ssh2_auth_password($connection, 'jscmdesp', 'B.lack14')) {
  echo "Authentication Successful!\n";
} else {
echo("Conexion fallida");
  die('Authentication Failed...');
}*/
?>