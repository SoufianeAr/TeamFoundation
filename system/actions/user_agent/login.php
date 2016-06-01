<?php

session_start();

require_once("../../module/Connexion.php");
require_once("../../module/Session.php");


if (isset($_POST["email"]) && isset($_POST["pwd"]))
{

	$con=new Connexion();
	$email=htmlspecialchars($_POST["email"]);
	$pwd=htmlspecialchars($_POST["pwd"]);

    $sql = "call checklogin('".$email."','".$pwd."')";
	$query=$con->getPDO()->query($sql)->fetch();



sleep(2);
	if ($query["result"]=="1")
	{

		$data = array('name' =>$query["nom_member"],'lname'=>$query["prenom_member"],'iduser'=>$query["id_member"],'idgrp'=>$query["id_group"] );
		$sess=new Session();
		$sess->setSession($data);
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