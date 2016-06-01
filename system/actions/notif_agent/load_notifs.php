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


    $sql1 = "call load_notifications(".$_POST["iduser"].",".$_POST["idgrp"].")";

	$query1=$con->getPDO()->query($sql1);


	if ($query1)
	{  
		$count_notif_notif=0;

		while ($data=$query1->fetch())
		{
			if ($data['state_notification']=="0") {
				$count_notif_notif++;
			}
			echo "
			<a>
			<span style='color:black'>
			    <span style='color:grey;font-size:15px;'>
			        ".$data['text_notification']."
			    </span>    
			    <span style='color:blue;font-size:10px;'>
			        date action: ".$data['action_date_notification']."
			    </span>
			</span>
			<span class='new badge'>
			    <a data-position='bottom' data-delay='50' data-tooltip='mark as read' class='tooltipped'>
			        <i class='material-icons'>done_all</i>
			    </a>
			</span>
			</a>
			<hr/>
	
			";
		}

/*
    $sql3 = "call all_vwd(".$_POST["iduser"].")";

	$query3=$con->getPDO()->query($sql3);
*/

$total_notif_sounds=$count_notif_notif;

if ($total_notif_sounds>1 && $total_notif_sounds<=4) {
echo "
<script>



document.getElementById('nbr_unread_notif_l').innerHTML='".$total_notif_sounds."';
document.getElementById('nbr_unread_notif_m').innerHTML='".$total_notif_sounds."';
</script>
";	
}


if ($total_notif_sounds==1) {
echo "
<script>


document.getElementById('nbr_unread_notif_l').innerHTML='1';
document.getElementById('nbr_unread_notif_m').innerHTML='1';
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

if ($total_notif_sounds==0) {
echo "
<script>
document.getElementById('nbr_unread_notif_l').innerHTML=' ';
document.getElementById('nbr_unread_notif_m').innerHTML=' ';
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
