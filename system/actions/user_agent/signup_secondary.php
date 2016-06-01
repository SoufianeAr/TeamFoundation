<?php
session_start();
require_once("../../module/Connexion.php");
require_once("../../module/Session.php");



$sess=new Session();

if (isset($_POST["member_idgrp"]) && isset($_POST["member_password"]) )
{


try {
	

$con=new Connexion();

$member_idgrp=htmlspecialchars($_POST['member_idgrp']);
$member_name=htmlspecialchars($_POST['member_name']);
$member_lname=htmlspecialchars($_POST['member_lname']);
$member_nickname=htmlspecialchars($_POST['member_nickname']);
$member_daten=htmlspecialchars($_POST['member_daten']);
$member_nickname=htmlspecialchars($_POST['member_nickname']);
$member_email=htmlspecialchars($_POST['member_email']);
$member_password=htmlspecialchars($_POST['member_password']);
$member_git=htmlspecialchars($_POST['member_git']);
$member_facebook=htmlspecialchars($_POST['member_facebook']);
$member_linckedin=htmlspecialchars($_POST['member_linckedin']);
$member_selecttype=htmlspecialchars($_POST['member_selecttype']);
$member_description=htmlspecialchars($_POST['member_description']);





    $file_exts = array("jpg", "bmp", "jpeg", "gif", "png");


	$tmp = explode('.', $_FILES["member_image"]["name"]);

	$upload_exts = end($tmp);






	if ((($_FILES["member_image"]["type"] == "image/gif") || ($_FILES["member_image"]["type"] == "image/jpeg") || ($_FILES["member_image"]["type"] == "image/png") || ($_FILES["member_image"]["type"] == "image/pjpeg")) && ($_FILES["member_image"]["size"] < 2000000) && in_array($upload_exts, $file_exts))
	{
		if ($_FILES["member_image"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["member_image"]["error"] . "<br>";
			header("location:http://teamfoundation.com/reporting/index.php?err="."Return Code: " . $_FILES["member_image"]["error"] . "<br>");
		}
		else
		{
		    move_uploaded_file($_FILES["member_image"]["tmp_name"],"../../../uploads/media/pic/" ."_nm_".$member_name."_ln_".$member_lname."_dateadd_".date("h-i-sa")."_dn_".$member_daten.".".$upload_exts);
				echo "<div class='sucess'>"."Stored in: "."../../../uploads/media/pic/" . $_FILES["member_image"]["name"]."</div>";


	        
		}
	}
	else
	{
	echo "<div class='error'>Invalid file</div>";
	header("location:http://teamfoundation.com/reporting/index.php?err="."Invalid file");
	}


	$master_image="/uploads/media/pic/"."_nm_".$member_name."_ln_".$member_lname."_dateadd_".date("h-i-sa")."_dn_".$member_daten.".".$upload_exts;




$sql = "
call signup_member(
'".$member_idgrp."',
'".$member_name."',
'".$member_nickname."',
'".$member_lname."',
'".$member_daten."',
'".$member_email."',
'".$member_password."',
'".$member_description."',
'0',
'".$member_git."',
'".$member_facebook."',
'".$member_linckedin."',
'".$master_image."'
)";


$query=$con->getPDO()->query($sql);
header("location:http://teamfoundation.com/login?stt=1");


} 
catch (Exception $e) 
{
	echo $e->getMessage();
}



if ($query)
{
	header("location:http://teamfoundation.com/login?stt=1");
}
else 
{
	header("location:http://teamfoundation.com/reporting/index.php?err=some think wrong! (security system detect an xss attack.. )");
}

}
else
{
	header("location:../../../error/403.html");
}
?>