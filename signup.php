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
<div class="row" >
  <div class="col s12 m12 l12" >
  	 <div id="login" class="white card-panel hoverable">

      	<div class="center-align">
            <img id="blah" class="responsive-img circle" src="uploads/media/user_default.png" alt="Profile picture" width="128" height="128" />
      	</div>

      <form action="signup_submit" method="post" accept-charset="utf-8">
        <div class="row">
            <div class="file-field input-field col l12">
              <div class="">
                <input type="file" id="image" accept="image/*"  onchange="readURL(this)">
              </div>
              <div class="file-path-wrapper">
                <i class="material-icons medium prefix">picture_in_picture</i></h3>
                <input class="file-path validate" type="text" placeholder="Image du profile" >
              </div>
            </div>
        </div>

        <div class="row">
            <div class="input-field col l4 m4 s4" >
              <i class="material-icons prefix">person_pin</i>
               <input id="name" type="text" class="validate">
               <label for="name" data-error="wrong" data-success="validated">Name</label>
            </div>

            <div class="input-field col l4 m4 s4" >
              <i class="material-icons prefix">person_pin</i>
              <input id="lname" type="text" class="validate">
              <label for="lname" data-error="wrong" data-success="validated">Last Name</label>
            </div>

            <div class="input-field col l4 m4 s4" >
              <i class="material-icons prefix">today</i>
              <input type="date"  class="datepicker">
            </div>
        </div>

        <div class="row">
            <div class="input-field col l12 m12 s12" >
              <i class="material-icons prefix">label</i>
               <input id="nickname" type="text" class="validate">
               <label for="nickname" data-error="wrong" data-success="validated">Nickname</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6" >
              <i class="material-icons prefix">email</i>
                  <input id="email" type="email" class="validate">
                  <label for="email" data-error="wrong" data-success="validated">Email</label>
            </div>

            <div class="input-field col  col s6" >
              <i class="material-icons prefix">dialpad</i>
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col l4 m4 s4" >
               <input id="git" type="text" class="validate">
               <label for="git" data-error="wrong" data-success="validated">Git Repo Profile (Optional)</label>
            </div>

            <div class="input-field col l4 m4 s4" >
              <input id="facebook" type="text" class="validate">
              <label for="facebook" data-error="wrong" data-success="validated">Facebook Profile (Optional)</label>
            </div>

            <div class="input-field col l4 m4 s4" >
              <input id="linckedin" type="text" class="validate">
              <label for="linckedin" data-error="wrong" data-success="validated">Linckedin Profile (Optional)</label>
            </div>

        </div>

        <div class="row">
          <label>what is your specialty,</label>
          <select class="browser-default">
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
            <textarea id="description" class="materialize-textarea"></textarea>
            <label for="description">Description</label>
          </div>
        </div>




        <div class="row ">
            <a class="col s12 waves-effect waves-light btn" >
              Sign Up
            </a>
        </div>
      </form>
  	 </div>
  </div>

</div>











<!--///////////////////////////////////////////// SCRIPTS //////////////////////////////////////////////-->

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" charset="utf-8">

  $(document).ready(function() {
    Materialize.updateTextFields();

    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');
    $('.datepicker').pickadate({
      selectMonths: true,
      selectYears: 50,
      format: 'yyyy-mm-dd'
    });
    picker.set('select', '2016-04-20', { format: 'yyyy-mm-dd' });
    $('#blah').hide();





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
