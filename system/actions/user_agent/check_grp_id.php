<?php

session_start();

require_once("../../module/Connexion.php");
require_once("../../module/Session.php");
$sess=new Session();
sleep(1);
if (isset($_POST["idgrp"]))
{

	$con=new Connexion();
	$idgrp=htmlspecialchars($_POST["idgrp"]);

    $sql = "call checkid_grp(".$idgrp.")";



	$query=$con->getPDO()->query($sql)->fetch();


	if ($query["res"]=="1")
	{    

		echo "1";
	}
	else 
	{
		echo "0";
	}
}
else
{
	header("location:../../../error/403.html");
}





?>