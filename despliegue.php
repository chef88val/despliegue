<?php
echo("AA");
$branch = shell_exec('git branch');

if (strpos($branch, '* master')) {
echo("Está seleccionado master");

$sh=shell_exec('sh ./PUESTA_EN_PRODUCCION.sh');	
if ($sh !=0) {
echo("Ha ocurrido un problema");
	
}
else {
	echo("Well done");
}
}else {
	echo("NO seleccionado master");
}


?>