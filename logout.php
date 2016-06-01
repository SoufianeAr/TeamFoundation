
<?php
session_start();


require_once("system/module/Session.php");

$session = new Session();
$session->destructSession();



if($session->checkSession("iduser")!=true)
{
  header("location:http://TeamFoundation.com/login");
}
else
{

?>




<!DOCTYPE html>
<!--[if gt IE 9]>
<!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <link rel="stylesheet" href="/assets/iconfont/material-icons.css" />
    <link rel="stylesheet" href="/assets/w3/w3.css" />
    <link rel="stylesheet" href="/assets/css/materialize.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />


    <link rel="icon" type="image/png" href="/assets/img/logo-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/assets/img/logo-32x32.png" sizes="32x32" />

    <title>TeamFoundation</title>

</head>
<body id="body_disconnect" style='background-color:#ECECEC; overflow-x:hidden;'>









<br/><br/><br/><br/><br/><br/><br/><br/>

<div class="row">
  <div class="col s12 m4 l4 center">
    <div class="preloader-wrapper big active" >
        <div class="spinner-layer spinner-blue-only">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
    </div>
  </div>
    
  <div class="col s12 m4 l4 center ">
      Loging out...
  </div>
    
  <div class="col s12 m4 l4 center">
    <div class="preloader-wrapper big active" >
        <div class="spinner-layer spinner-blue-only">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
    </div>

  </div>
</div>



<!--///////////////////////////////////////////// SCRIPTS //////////////////////////////////////////////-->

<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/materialize.min.js"></script>
<script type="text/javascript" charset="utf-8">

  $(document).ready(function() {

    $.ajax({
        type: 'POST',
        url: '/system/actions/user_agent/logout.php',
        data: { 
            'action': 'logout'
        },
        success: function(msg){
          if (msg=='1') {
            window.location.replace("http://TeamFoundation.com/login");
          }else{
            alert(msg);
          }
        }
    });

  });

</script>


<!--////////////////////////////////////////////////////////////////////////////////////////////////////-->

</body>
</html>

<?php
  
}
?>
