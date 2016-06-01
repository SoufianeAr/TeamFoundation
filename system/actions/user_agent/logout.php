<?php

session_start();

require_once("../../module/Connexion.php");
require_once("../../module/Session.php");


$sess=new Session();





if (isset($_POST["action"]) && $sess->checkSession("iduser")==true)
{

	$session = new Session();		
	$session->destructSession();
	sleep(1);

	echo "1";

}
else
{
	header("location:../../../error/403.html");
}





?>