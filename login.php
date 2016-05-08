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
    
    
<style> 
    body{
        overflow: hidden;
    }
  video#bgvid {
    position: fixed; 
    right: 0;
    bottom: 0;
    min-width: 100%; min-height: 100%;
    width: auto; height: auto;
    z-index: -100;
    background: url(sample.png) no-repeat;
    background-size: cover;

}
video { 
    display: block; 
    }

    #wrappers_video{
        opacity: 0.2;
    }
    #wrappers_video:hover{
        animation: an 1s;
        opacity: 0.9;
    }
    
    @keyframes an{
        from{opacity: 0.2;}
        to{opacity: 0.9;}
    }

</style>
    
    
</head>
<body >


    

<video autoplay  id="bgvid" width="320" height="240">
    <source src="uploads/media/videos/focus2.mp4" type="video/mp4">
</video>     
    

<div class="row" >
  <div class="col s12 m12 l4  hide-on-med-and-down" style='color:#ECECEC'>.</div>
  <div class="col s12 m12 l4"   id="wrappers_video"    >
  	 <div id="login" class="white card-panel hoverable"  >

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


        <footer class="page-footer" style="position:fixed;bottom:0;left:0;width:100%;background-color:#1976D2;height:127px;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12" style="padding:0px">
              </div>
              <div class="col l4 offset-l2 s12">
                <ul>

                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright Arbib Soufiane
            <a class="grey-text text-lighten-4 right modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="Creative Commons License" href="#modal1" data-target="modal1">
                License
                </a>
            </div>
          </div>
        </footer>


   
    
<!--license-->
<div id="modal1" class="modal modal-fixed-footer flow-text" style="background-color:#1976D2;color:white">
    <div class="modal-content" >  



     
        
            <h6 class="center">
                <a target="_blank" rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                <img alt="Creative Commons License" style="border-width:0;width:120px;height:50px;" src="assets/img/cc.png" />
                </a>
            </h6>
            
            <br />
            <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">TeamFoundation</span>
            by 
            <a  target="_blank" xmlns:cc="http://creativecommons.org/ns#" style="color:black;font-weight:bolder;" href="https://www.facebook.com/arbib.soufiane" property="cc:attributionName" rel="cc:attributionURL">Arbib Soufiane</a>
            is licensed under a 
            <a  target="_blank" rel="license" style="color:#ff0a63;font-weight:bolder;" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License
            </a>.
            <br />
            Based on a work at 
            <a  target="_blank" style="color:#FFEC0C" xmlns:dct="http://purl.org/dc/terms/" href="https://github.com/SoufianeAr/TeamFoundation" rel="dct:source">
                https://github.com/SoufianeAr/TeamFoundation
            </a>.           
        

        
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
  </div>






<!--///////////////////////////////////////////// SCRIPTS //////////////////////////////////////////////-->


<script type="text/javascript" src="assets/js/jquery.min.js"></script><script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/nicescroll.js"></script>
<script type="text/javascript" src="assets/code-prettify/run_prettify.js"></script>





<script type="text/javascript" charset="utf-8">

  $(document).ready(function() {
 

      
 
    $("#comments_project").hide();
    $("#comments_toggel_project").click(function(){
       $("#comments_project").toggle(); 
    });
      
     $("#comments_idea").hide();
    $("#comments_toggel_idea").click(function(){
       $("#comments_idea").toggle(); 
    });    
      
      
    $("#comments_qa").hide();
    $("#comments_toggel_qa").click(function(){
       $("#comments_qa").toggle(); 
    });
      
      
      
      
      
    $(".button-collapse").sideNav();
    $(".dropdown-button").dropdown();
    $('select').material_select();
    $('.materialboxed').materialbox();
      

    $("html,#test1,#test2,#users_to_chat,#chat_plage").niceScroll(
        {
            touchbehavior:false,
            cursorcolor:"#1976D2",
            cursoropacitymax:0.7,
            cursorwidth:10,
            background:"#C1C1C1",
            autohidemode:true
        });



    $('ul.tabs').tabs();
    $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, 
      hover: true, 
      gutter: 0, 
      belowOrigin: false, 
      alignment: 'left'
    }
    );


    $('.modal-trigger').leanModal(
      {
        dismissible: true, 
        opacity: 0.5,
        in_duration: 100, 
        out_duration: 100, 
      }
    );

  });
</script>

<script type="text/javascript">
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
            $('#blah').show();
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>


<!--////////////////////////////////////////////////////////////////////////////////////////////////////-->

</body>
</html>
