
<?php

session_start();
require_once("../../module/Connexion.php");
require_once("../../module/Session.php");
$sess=new Session();

if (isset($_POST["idgrp"]) && isset($_POST["iduser"]) && $sess->checkSession("iduser")==true)
{

	$con=new Connexion();


	$idgrp=htmlspecialchars($_POST["idgrp"]);
	$iduser=htmlspecialchars($_POST["iduser"]);

    $sql2 = "call load_messages(".$_POST["iduser"].",".$_POST["idgrp"].")";

	$query2=$con->getPDO()->query($sql2);

$count=0;
	if ($query2)
	{  
		while ($data=$query2->fetch())
		{
			if ($data['state_msg']=="0") {
				$count++;
			}
			echo "
			<a href='http://teamfoundation.com/messages?id_caller=".$data['from_msg']."' class='msgs'>
			<img src='".$data['pic_member']."' alt='".$data['nom_member']."' class='responsive-img circle' style='width:40px;height:40px;'/>
			    <span style='color:black'>
			        <strong style='margin-top:-5px;'>".$data['nom_member']." ".$data['prenom_member']." </strong>
			        <span style='color:grey;font-size:15px;'>".$data['text_msg']."</span>    
			        <span style='color:blue;font-size:10px;'>".substr($data['date_msg'],0,40)."...</span>
			    </span>
			    <span class='new badge'></span>
			</a>
			<hr/>
			";
		}

/*
    $sql3 = "call all_vwd(".$_POST["iduser"].")";

	$query3=$con->getPDO()->query($sql3);
*/





		$total_notif_sounds=$count;


if ($total_notif_sounds>1 && $total_notif_sounds<=4) {
echo "
<script>


document.getElementById('nbr_unread_msg_m').innerHTML='".$total_notif_sounds."';
document.getElementById('nbr_unread_msg_l').innerHTML='".$total_notif_sounds."';


</script>
";	
}


if ($total_notif_sounds==1) {
echo "
<script>



document.getElementById('nbr_unread_msg_m').innerHTML='1';
document.getElementById('nbr_unread_msg_l').innerHTML='1';
</script>
";	
}
if ($total_notif_sounds==0) {
echo "
<script>
document.getElementById('nbr_unread_msg_m').innerHTML='';
document.getElementById('nbr_unread_msg_l').innerHTML='';
</script>
";	
}
if ($total_notif_sounds>0) {
echo "
	<script>
		var x = document.getElementById('notif_sng'); 
		x.play(); 
	</script>
";

}












	}
	else 
	{
		echo "0";
	}
}
else
{
	echo "0";
}
?>
