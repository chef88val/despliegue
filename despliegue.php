<?php 

$payload= json_decode($_POST['payload']);
$shellOutput = [];
    exec('git branch | ' . "grep ' * '", $shellOutput);
    foreach ($shellOutput as $line) {
        if (strpos($line, '* ') !== false) {
            return trim(strtolower(str_replace('* ', '', $line)));
        }
    }
    return null;


if($payload->ref && $payload->branch==="master")
{
print("1");
}	else
	{
print("2");
	}


?>