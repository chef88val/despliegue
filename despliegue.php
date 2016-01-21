<?php 

$payload= json_decode($_POST['payload']);

if(isset($_POST['payload']))
{
print("Existe payload");
}	else
	{
print("No existe payload");print("A".$payload->master_branch."A");shell_exec('sh ./PUESTA_EN_PRODUCCION.sh');print("MAL");
	}


?>