
<?php
session_start();


require_once("system/module/Session.php");

$session = new Session();




if($session->checkSession("iduser")!=true)
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
<body style='background-color:#ECECEC; overflow-x:hidden;'>




<div class="row">
<div class="container">
  <div class="col s12 white card-panel hoverable" style="padding:20px">

    <div class=" col s12 m6 l6">
      <img class="materialboxed circle materialboxed center-block"  src="/assets/img/leader.jpg" width="250" height="250" />


        <div class="row">
          <div class="input-field col s12" >
            <input type="checkbox" id="leader" />
            <label for="leader">I'm a team leader</label>
          </div>
        </div>


    </div>
    <div class=" col s12 m6 l6">
      <img class="materialboxed circle materialboxed center-block"  src="/assets/img/team.jpg"   width="250" height="250" />

        <div class="row">
          <div class="input-field col s12" >
            <input type="checkbox" id="team" />
            <label for="team">I'm a team member</label>
          </div>
        </div>


    </div>
  </div>
</div>
</div>






<div id="scroll_target">&nbsp;</div>
<div class="row" >

  <div class="col s12 m2 l2 " >&nbsp;</div>
  <div class="col s12 m8 l8 ">


        <!--//////////////////////////////////// FORM SIGNUP 1 /////////////////////////////////////////-->

          <div id="master_regestry" class="white card-panel hoverable">


<div id="spin_master_in_validationg"></div>       
<div id="hide_form_master_in_validationg">  

<form  id="master_form" action="/system/actions/user_agent/signup_masetr.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">      
          <h5 class="flow-text center">Team Leader</h5>

            <hr/>
              
              <h6 class="flow-text center">About the group</h6>

















              <div class="row">
                  <div class="input-field col l4 m4 s4" >
                    <i class="material-icons prefix">supervisor_account</i>
                     <input id="master_titre_groupe" name="master_titre_groupe" type="text" class="validate">
                     <label for="titre_groupe" data-error="wrong" data-success="validated">Title </label>
                  </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea id="master_description_groupe" name="master_description_groupe" class="materialize-textarea"></textarea>
                  <label for="description_groupe">Group Description</label>
                </div>
              </div>




            <hr/>

            <div class="center-align">
                  <img id="blah1" class="responsive-img circle" src="/uploads/media/user_default.png" alt="Profile picture" width="128" height="128" />
            </div>

            <div class="row">
              <div class="file-field input-field col l12">
                <div class="">
                  <input type="file" id="master_image" name="master_image" accept="image/*"  onchange="readURL1(this)" />
                </div>
                <div class="file-path-wrapper">
                  <i class="material-icons medium prefix">picture_in_picture</i>
                  <input class="file-path validate" id="master_second_image" type="text" placeholder="Image du profile" >
                </div>
              </div>
            </div>








            <div class="row">
                  <div class="input-field col l4 m4 s4" >
                    <i class="material-icons prefix">person_pin</i>
                     <input id="master_name" name="master_name" type="text" class="validate">
                     <label for="name" data-error="wrong" data-success="validated">Name</label>
                  </div>

                  <div class="input-field col l4 m4 s4" >
                    <i class="material-icons prefix">person_pin</i>
                    <input id="master_lname" name="master_lname" type="text" class="validate">
                    <label for="lname" data-error="wrong" data-success="validated">Last Name</label>
                  </div>

                  <div class="input-field col l4 m4 s4" >
                    <i class="material-icons prefix">today</i>
                    <input type="date" id="master_daten" name="master_daten"  class="datepicker">
                  </div>
              </div>

              <div class="row">
                  <div class="input-field col l12 m12 s12" >
                    <i class="material-icons prefix">label</i>
                     <input id="master_nickname" name="master_nickname" type="text" class="validate">
                     <label for="nickname" data-error="wrong" data-success="validated">Nickname</label>
                  </div>
              </div>

              <div class="row">
                  <div class="input-field col s6" >
                    <i class="material-icons prefix">email</i>
                        <input id="master_email" name="master_email" type="email" class="validate">
                        <label for="email" data-error="wrong" data-success="validated">Email</label>
                  </div>

                  <div class="input-field col  col s6" >
                    <i class="material-icons prefix">dialpad</i>
                    <input id="master_password" name="master_password" type="password" class="validate">
                    <label for="password">Password</label>
                  </div>
              </div>


              <div class="row">
                  <div class="input-field col l4 m4 s4" >
                     <input id="master_git" name="master_git" type="text" class="validate">
                     <label for="git" data-error="wrong" data-success="validated">Git Repo Profile (Optional)</label>
                  </div>

                  <div class="input-field col l4 m4 s4" >
                    <input id="master_facebook" name="master_facebook" type="text" class="validate">
                    <label for="facebook" data-error="wrong" data-success="validated">Facebook Profile (Optional)</label>
                  </div>

                  <div class="input-field col l4 m4 s4" >
                    <input id="master_linckedin" name="master_linckedin" type="text" class="validate">
                    <label for="linckedin" data-error="wrong" data-success="validated">Linckedin Profile (Optional)</label>
                  </div>

              </div>

              <div class="row">
                <label>what is your specialty,</label>
                <select class="browser-default" id="master_select_spec" name="master_select_spec">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">MOBILE DEVELOPER</option>
                  <option value="2">DESIGNER</option>
                  <option value="3">DATABASE ENGINE</option>
                  <option value="3">JWD</option>
                  <option value="3">SWP</option>
                  <option value="3">PROJECT MANAGER</option>
                </select>
              </div>


              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea id="master_description_leader" name="master_description_leader" class="materialize-textarea"></textarea>
                  <label for="description">Leader Description</label>
                </div>
              </div>

              <div class="row ">
                  <input class="col s12 waves-effect waves-light btn" id="test_spinner_starting" type="submit" name="submit" value="Sign Up">
              </div>


</form>


</div>
            </div>
        <!--////////////////////////////////////////////////////////////////////////////////////////////-->



<!--//////////////////////////////////// FORM SIGNUP 2 /////////////////////////////////////////-->
          <div id="secondary_regestry" class="white card-panel hoverable">

<form  id="member_form" action="/system/actions/user_agent/signup_secondary.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">   


          <h5 class="flow-text center">Team Member</h5>
            <div class="center-align">
                  <img id="blah2" class="responsive-img circle" src="/uploads/media/user_default.png" alt="Profile picture" width="128" height="128" />
            </div>


            <div class="row">
              <div id="check_idgrp_result">
                
              </div>





              <div class="col s3 m3 l3 center" id="spinsload_check_idgrp">
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




              <div class="input-field col l9 m9 s9" >
                <i class="material-icons prefix">label</i>
                 <input id="member_idgrp" name="member_idgrp" type="text" class="validate">
                 <label for="idgrp" data-error="wrong" data-success="validated">Group ID</label>
              </div>
            </div>




<div id="hiddenform_formembers">

            <div class="row">

              <div class="file-field input-field col l8">
                <div class="">
                  <input type="file" id="member_image" name="member_image" accept="image/*"  onchange="readURL2(this)" />
                </div>





                <div class="file-path-wrapper">
                  <i class="material-icons medium prefix">picture_in_picture</i>
                  <input class="file-path validate" type="text" placeholder="Image du profile" >
                </div>
              </div>



            </div>






            <div class="row">
                  <div class="input-field col l4 m4 s4" >
                    <i class="material-icons prefix">person_pin</i>
                     <input id="member_name" name="member_name" type="text" class="validate">
                     <label for="name" data-error="wrong" data-success="validated">Name</label>
                  </div>

                  <div class="input-field col l4 m4 s4" >
                    <i class="material-icons prefix">person_pin</i>
                    <input id="member_lname" name="member_lname" type="text" class="validate">
                    <label for="lname" data-error="wrong" data-success="validated">Last Name</label>
                  </div>

                  <div class="input-field col l4 m4 s4" >
                    <i class="material-icons prefix">today</i>
                    <input type="date" id="member_daten" name="member_daten"  class="datepicker">
                  </div>
              </div>


              <div class="row">
                  <div class="input-field col l12 m12 s12" >
                    <i class="material-icons prefix">label</i>
                     <input id="member_nickname" name="member_nickname" type="text" class="validate">
                     <label for="nickname" data-error="wrong" data-success="validated">Nickname</label>
                  </div>
              </div>

              <div class="row">
                  <div class="input-field col s6" >
                    <i class="material-icons prefix">email</i>
                        <input id="member_email" name="member_email" type="email" class="validate">
                        <label for="email" data-error="wrong" data-success="validated">Email</label>
                  </div>

                  <div class="input-field col  col s6" >
                    <i class="material-icons prefix">dialpad</i>
                    <input id="member_password" name="member_password" type="password" class="validate">
                    <label for="password">Password</label>
                  </div>
              </div>

              <div class="row">
                  <div class="input-field col l4 m4 s4" >
                     <input id="member_git" name="member_git" type="text" class="validate">
                     <label for="git" data-error="wrong" data-success="validated">Git Repo Profile (Optional)</label>
                  </div>

                  <div class="input-field col l4 m4 s4" >
                    <input id="member_facebook" name="member_facebook" type="text" class="validate">
                    <label for="facebook" data-error="wrong" data-success="validated">Facebook Profile (Optional)</label>
                  </div>

                  <div class="input-field col l4 m4 s4" >
                    <input id="member_linckedin" name="member_linckedin" type="text" class="validate">
                    <label for="linckedin" data-error="wrong" data-success="validated">Linckedin Profile (Optional)</label>
                  </div>

              </div>


              <div class="row">
                <label>what is your specialty,</label>
                <select class="browser-default" id="member_selecttype" name="member_selecttype">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">MOBILE DEVELOPER</option>
                  <option value="2">DESIGNER</option>
                  <option value="3">DATABASE ENGINE</option>
                  <option value="3">JWD</option>
                  <option value="3">SWP</option>
                  <option value="3">PROJECT MANAGER</option>
                </select>
              </div>


              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea id="member_description" name="member_description" class="materialize-textarea"></textarea>
                  <label for="description">Member Description</label>
                </div>
              </div>


              <div class="row ">
                  <input class="col s12 waves-effect waves-light btn" type="submit" name="submit" value="Sign Up">
              </div>
            </div>

</div>


        <!--////////////////////////////////////////////////////////////////////////////////////////////-->


  </div>
  <div class="col s12 m2 l2 " >&nbsp;</div>

</div>



















<!--///////////////////////////////////////////// SCRIPTS //////////////////////////////////////////////-->

<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/materialize.min.js"></script>
<script type="text/javascript" charset="utf-8">

$(document).ready(function() {


$(function() {
    $('#master_form').submit(function() {

  $("#master_form").hide();
  setTimeout(function() {},40000);
  $("#spin_master_in_validationg").html("<div class='preloader-wrapper big active'><div class='spinner-layer spinner-blue'><div class='circle-clipper left'><div class='circle'></div></div><div class='gap-patch'><div class='circle'></div></div><div class='circle-clipper right'><div class='circle'></div></div></div><div class='spinner-layer spinner-red'><div class='circle-clipper left'><div class='circle'></div></div><div class='gap-patch'><div class='circle'></div></div><div class='circle-clipper right'><div class='circle'></div></div></div><div class='spinner-layer spinner-yellow'><div class='circle-clipper left'><div class='circle'></div></div><div class='gap-patch'><div class='circle'></div></div><div class='circle-clipper right'><div class='circle'></div></div></div><div class='spinner-layer spinner-green'><div class='circle-clipper left'><div class='circle'></div></div><div class='gap-patch'><div class='circle'></div></div><div class='circle-clipper right'><div class='circle'></div></div></div></div>");
    return true;
    });
});




    $('#hiddenform_formembers').hide();
    $('#spinsload_check_idgrp').hide();





    Materialize.updateTextFields();

    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');
    $('.datepicker').pickadate({
      selectMonths: true,
      selectYears: 50,
      format: 'yyyy-mm-dd'
    });
    $('#blah1').hide();
    $('#blah2').hide();

    $("#master_regestry").hide();
    $("#secondary_regestry").hide();
    
    $('.materialboxed').materialbox();


    $('#leader').click(function() {
  

    $('html, body').animate({
        scrollTop: $("#scroll_target").offset().top
    }, 1000);


    if (document.getElementById('leader').checked) 
    {

        $("#master_regestry").show();
        $("#secondary_regestry").hide();
        $('#team').attr('checked', false);
       }
       else
       {
          $("#master_regestry").hide();
        $('#team').attr('checked', true);

       }
    });

    $('#team').click(function() {


    $('html, body').animate({
        scrollTop: $("#scroll_target").offset().top
    }, 1000);


       if (document.getElementById('team').checked) {

        $("#secondary_regestry").show();
        $('#leader').attr('checked', false);
        $("#master_regestry").hide();

       }     
       else
       {
          $("#secondary_regestry").hide();
        $('#team').attr('checked', true);

       }
    });





$("#member_idgrp").keyup(function() {
  $('#spinsload_check_idgrp').show();
  var idgrp=$("#member_idgrp").val();
  if (idgrp=="") {
  $('#check_idgrp_result').html("<div class='input-field col l12 m12 s12 red' style='padding:10px;border-radius:10px;' >ID not Founded </div>");
  $('#hiddenform_formembers').hide('slow');
  $('#spinsload_check_idgrp').hide();
  }
  $.ajax({
      type: 'POST',
      url: '/system/actions/user_agent/check_grp_id.php',
      data: { 
          'idgrp': idgrp
      },
      success: function(msg){
        
        if (msg=='1') {
          $('#check_idgrp_result').html("<div class='input-field col l12 m12 s12 green' style='padding:10px;border-radius:10px;' >ID Founded successfully </div>");
          $('#hiddenform_formembers').show('slow');
          $('html, body').animate({
              scrollTop: $("#scroll_target").offset().top
          }, 1000);
          $('#spinsload_check_idgrp').hide();
        }
        else if(msg=='0'){
          $('#check_idgrp_result').html("<div class='input-field col l12 m12 s12 red' style='padding:10px;border-radius:10px;' >ID not Founded </div>");
          $('#hiddenform_formembers').hide('slow');
             $('#spinsload_check_idgrp').hide();
        }
      }
  });
});

/*/////////////////////////////////////////////////////////////////////////*/



/*/////////////////////////////////////////////////////////////////////////*/

/*
$('#btn_validate_form_to_leader').click(function() {

  var master_select_spec=$("#master_select_spec option:selected").text();
  var master_titre_groupe=$("#master_titre_groupe").val();
  var master_description_groupe=$("#master_description_groupe").val();
  var master_image=$('#img').val();
  var master_name=$("#master_name").val();
  var master_lname=$("#master_lname").val();
  var master_daten=$("#master_daten").val();
  var master_nickname=$("#master_nickname").val();
  var master_email=$("#master_email").val();
  var master_password=$("#master_password").val();
  var master_git=$("#master_git").val();
  var master_facebook=$("#master_facebook").val();
  var master_linckedin=$("#master_linckedin").val();
  var master_description_leader=$("#master_description_leader").val();
  data: { 
            'master_select_spec':master_select_spec,
            'master_titre_groupe':master_titre_groupe,
            'master_description_groupe':master_description_groupe,
            'master_image':master_image,
            'master_name':master_name,
            'master_lname':master_lname,
            'master_daten':master_daten,
            'master_nickname':master_nickname,
            'master_email':master_email,
            'master_password':master_password,
            'master_git':master_git,
            'master_facebook':master_facebook,
            'master_linckedin':master_linckedin,
            'master_description_leader':master_description_leader
    },


    $.ajax({
        type: 'POST',
        url: '/system/actions/user_agent/signup_masetr.php',
        data:$("#master_form").serialize(),
        success: function(msg){
          alert(msg);
        }
    });
});


$('#btn_validate_form_to_member').click(function() {

});
*/




  });

</script>
<script type="text/javascript">
function readURL1(input) {



    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah1').attr('src', e.target.result);
            $('#blah1').show();
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function readURL2(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah2').attr('src', e.target.result);
            $('#blah2').show();
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>

<!--////////////////////////////////////////////////////////////////////////////////////////////////////-->
</body>
</html>


<?php
}
else {
   header("location:http://teamfoundation.com/index");
}

?>