<!DOCTYPE html>
<!--[if gt IE 9]>
<!-->
<html lang="en">
<!--<![endif]-->
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <link rel="stylesheet" href="assets/iconfont/material-icons.css" />
    <link rel="stylesheet" href="assets/w3/w3.css" />
    <link rel="stylesheet" href="assets/css/materialize.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />


    <link rel="icon" type="image/png" href="assets/img/logo-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="assets/img/logo-32x32.png" sizes="32x32" />

    <title>TeamFoundation</title>

</head>
<body style='background-color:#ECECEC; overflow-x:hidden;'>



<div class="row">

  <div class="col s12 m12 l4  hide-on-med-and-down" style='color:#ECECEC'>.</div>

  <div class="col s12 m12 l4">
  	 <div id="login" class="white card-panel hoverable">

      	<div class="center-align">
      	 	<img src="assets/img/user.png" alt="Login" class="responsive-img circle" />
      	</div>
      	<br />

		<form >

			<div class="row">
				<div class="input-field s12" >
					<i class="material-icons prefix">email</i>
			        <input id="email" type="email" class="validate">
			        <label for="email" data-error="wrong" data-success="validated">Email</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12" >
					<i class="material-icons prefix">dialpad</i>
					<input id="password" type="password" class="validate">
					<label for="password">Password</label>
				</div>
			</div>

			<div class="row ">
                <a class="col s12 waves-effect waves-light btn" >
					Login
				</a>
			</div>

			<div class="row">
				<div class="input-field col s12" >
				      <input type="checkbox" id="test1" />
				      <label for="test1">Stay signed in</label>
				</div>
			</div>
		</form>
  	 </div>
  </div>
  <div class="col s12 m12 l4  hide-on-med-and-down" style='color:#ECECEC'>.</div>
</div>


<div class="row">

  <div class="col s12 m12 l4  hide-on-med-and-down" style='color:#ECECEC'>.</div>

  <div class="col s12 m12 l4  ">
	  <div class="center-align">
	     <a href="signup.php">Create an account</a>
	  </div>
  </div>

  <div class="col s12 m12 l4  hide-on-med-and-down" style='color:#ECECEC'>.</div>
</div>











<!--///////////////////////////////////////////// SCRIPTS //////////////////////////////////////////////-->

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" charset="utf-8">

  $(document).ready(function() {
    Materialize.updateTextFields();
  });
  $('#textarea1').val('New Text');
  $('#textarea1').trigger('autoresize');
</script>


<!--////////////////////////////////////////////////////////////////////////////////////////////////////-->

</body>
</html>
