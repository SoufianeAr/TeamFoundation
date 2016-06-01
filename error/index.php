
<?php

$vars="";
if (isset($_GET['err'])) {
$vars=$_GET['err'];
}
else {
	header("location:http://teamfoundation.com/");
}

?>



<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>TeamFoundation Erreor</title>
		<link rel="icon" type="image/png" href="favicon.png" sizes="32x32" />
		<link rel="stylesheet" type="text/css" href="/error_assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/error_assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="/error_assets/css/component.css" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>
		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<h1 class="main-title">Error <span class="thin">
<?php
echo $vars;
?>
<br/>


<a href="http://teamfoundation.com/" style="font-size:10px">Go To INDEX PAGE</a>



					</span></h1>
				</div>
				
			</div>
			
		</div>
		<script src="/error_assets/js/TweenLite.min.js"></script>
		<script src="/error_assets/js/EasePack.min.js"></script>
		<script src="/error_assets/js/rAF.js"></script>
		<script src="/error_assets/js/demo-1.js"></script>
	</body>
</html>