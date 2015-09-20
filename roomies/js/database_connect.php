<?php
//THIS FILE MUST BE SECURED! IT CONTAINS PLAINTEXT PASSWORDS!
    
    
function initializeDatabase ($username)
{
	$database = NULL;
		$database = new PDO("mysql:host=br-cdbr-azure-south-a.cloudapp.net;dbname=roomies", "bbe5200450898a", "c69d35fc");
	
	if (is_object($database))
	{
		$database->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //WARNING! This can cause SQL credentials to be dumped to the screen if exception is not caught!
		return $database;
	}
	else
	{
		return FALSE;
	}
}
?>