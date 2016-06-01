<?php
session_start();
require_once("../../module/Connexion.php");
require_once("../../module/Session.php");



$sess=new Session();

if (isset($_POST["master_email"]) && isset($_POST["master_password"]) )
{


try {
	

	$con=new Connexion();
	$master_select_spec=htmlspecialchars($_POST["master_select_spec"]);
	$master_titre_groupe=htmlspecialchars($_POST["master_titre_groupe"]);
	$master_description_groupe=htmlspecialchars($_POST["master_description_groupe"]);
    $master_name=htmlspecialchars($_POST["master_name"]);
	$master_lname=htmlspecialchars($_POST["master_lname"]);
	$master_daten=htmlspecialchars($_POST["master_daten"]);
	$master_nickname=htmlspecialchars($_POST["master_nickname"]);
	$master_email=htmlspecialchars($_POST["master_email"]);
	$master_password=htmlspecialchars($_POST["master_password"]);
	$master_git=htmlspecialchars($_POST["master_git"]);
	$master_facebook=htmlspecialchars($_POST["master_facebook"]);
	$master_linckedin=htmlspecialchars($_POST["master_linckedin"]);
	$master_description_leader=htmlspecialchars($_POST["master_description_leader"]);




    $file_exts = array("jpg", "bmp", "jpeg", "gif", "png");


	$tmp = explode('.', $_FILES["master_image"]["name"]);

	$upload_exts = end($tmp);






	if ((($_FILES["master_image"]["type"] == "image/gif") || ($_FILES["master_image"]["type"] == "image/jpeg") || ($_FILES["master_image"]["type"] == "image/png") || ($_FILES["master_image"]["type"] == "image/pjpeg")) && ($_FILES["master_image"]["size"] < 2000000) && in_array($upload_exts, $file_exts))
	{
		if ($_FILES["master_image"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["master_image"]["error"] . "<br>";
			header("location:http://teamfoundation.com/reporting/index.php?err="."Return Code: " . $_FILES["master_image"]["error"] . "<br>");
		}
		else
		{
		    move_uploaded_file($_FILES["master_image"]["tmp_name"],"../../../uploads/media/pic/" ."_nm_".$master_name."_ln_".$master_lname."_dateadd_".date("h-i-sa")."_dn_".$master_daten.".".$upload_exts);
				echo "<div class='sucess'>"."Stored in: "."../../../uploads/media/pic/" . $_FILES["master_image"]["name"]."</div>";


	        
		}
	}
	else
	{
	echo "<div class='error'>Invalid file</div>";
	header("location:http://teamfoundation.com/reporting/index.php?err="."Invalid file");
	}


	$master_image="/uploads/media/pic/"."_nm_".$master_name."_ln_".$master_lname."_dateadd_".date("h-i-sa")."_dn_".$master_daten.".".$upload_exts;

	$sql = "
	call signup_master(
	'".$master_titre_groupe."',
	'".$master_description_groupe."',
	'".$master_name."',
	'".$master_nickname."',
	'".$master_lname."',
	'".$master_daten."',
	'".$master_email."',
	'".$master_password."',
	'".$master_description_leader."',
	'1',
	'".$master_git."',
	'".$master_facebook."', 
	'".$master_linckedin."',
	'".$master_image."'
	);
	";

	$query=$con->getPDO()->query($sql);
    header("location:http://teamfoundation.com/login?stt=1");


} 
catch (Exception $e) 
{
	echo $e->getMessage();
}



if ($query)
{
	echo "/// state == 1 ";
}
else 
{
	echo "/// state == 0 ";
}

}
else
{
	header("location:../../../error/403.html");
}
?>