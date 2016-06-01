
<?php
session_start();


require_once("system/module/Session.php");
require_once("system/module/Connexion.php");
$sess = new Session();

if($sess->checkSession("iduser")==true)
{

  $idgrp=$sess->getSession("idgrp");
  $iduser=$sess->getSession("iduser");

  $con=new Connexion();

  $sql1 = "call getuser(".$iduser.")";

  $query1=$con->getPDO()->query($sql1)->fetch();


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
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/assets/iconfont/material-icons.css" />
    <link rel="stylesheet" href="/assets/w3/w3.css" />
    <link rel="stylesheet" href="/assets/css/materialize.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="icon" type="image/png" href="/assets/img/logo-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/assets/img/logo-32x32.png" sizes="32x32" />
    <title>TeamFoundation</title>

</head>
<body style='background-color:#ECECEC; overflow-x:hidden;' >


    
    
    

<!--////////////////////////////////////// FIN NAV BAR /////////////////////////////////////-->   

<audio id="notif_sng" controls autoplay><source src="/uploads/media/mp3/notif.mp3" type="audio/mp3"></audio>



<div id="songplaceholder">




</div>



<div class="navbar-fixed">
  <nav id="nav_nav">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"  id="logo_txt">&nbsp;<img src="/assets/img/logos.png" style="width:50px;height:40px;" /></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
          <li>
              <a data-position="bottom" data-delay="50" data-tooltip="search" href="#modal1" data-target="modal1" class="modal-trigger tooltipped" >
                  <i class="material-icons">search</i>
              </a>
          </li>

          <li>
              <a data-position="bottom" data-delay="50" data-tooltip="Messages"   href="#modal3" class='modal-trigger tooltipped' data-target="modal3">
                  <i class="material-icons">textsms</i>
                  <span id="nbr_unread_msg_l" style="position:fixed;top:10;right:20;height:auto;margin-top:-40px;color:red;font-weight:bolder">
   




            





                  </span>
              </a>
          </li>

          <li>
              <a data-position="bottom" data-delay="50" data-tooltip="Notifications"  href="#modal2" class='modal-trigger tooltipped' data-target="modal2" >
                  <i class="material-icons">add_alert</i>
                  <span id="nbr_unread_notif_l" style="position:fixed;top:10;right:20;height:auto;margin-top:-40px;color:red;font-weight:bolder"></span>
              </a>
          </li>

          <li>
               <a href='#' data-position="bottom" data-delay="50" data-tooltip="Profile" class="tooltipped">
                   <img class="responsive-img circle" style="width:30px;height:30px;margin-top:20px;" src="/uploads/media/user1.jpg" />
               </a>
          </li>

          <li>
              <a href="logout" data-position="bottom" data-delay="50" data-tooltip="Logout" class="tooltipped" >
                  <i class="material-icons">lock</i>
              </a>
          </li>

      </ul>
      <ul class="side-nav" id="mobile-demo">
          <li>
              <span class="badge">search</span>
              <a href="#modal1" data-target="modal1" class="modal-trigger" >
                  <i class="material-icons">search</i>
              </a>  
          </li>

          <li>
              <span class="badge">Messages</span>
              <a href="#modal3" class='modal-trigger' data-target="modal3">
                  <i class="material-icons">textsms</i>
                  <span id="nbr_unread_msg_m" style="position:fixed;top:10;right:20;height:auto;margin-top:-40px;color:red;font-weight:bolder"></span>
              </a>
          </li>
          <li>
              <span class="badge">Notifications</span>
              <a href="#modal2" class='modal-trigger' data-target="modal2" >
                  <i class="material-icons">add_alert</i>
                  <span id="nbr_unread_notif_m" style="position:fixed;top:10;right:20;height:auto;margin-top:-40px;color:red;font-weight:bolder"></span>
              </a>
          </li>

           <li>
               <span class="badge">Arbib Soufiane</span>
               <a href='#' >
                   <img class="responsive-img circle" style="width:30px;height:30px;margin-top:20px;" src="/uploads/media/user1.jpg" />
               </a> 
          </li>

          <li>
              <span class="badge">Logout</span>
              <a href="http://teamfoundation.com/logout" >
                  <i class="material-icons">lock</i>
              </a>
          </li>

      </ul>
    </div>
  </nav>
</div>
<!--////////////////////////////////////// FIN NAV BAR /////////////////////////////////////-->


    
<div class="row">
    <!--first side/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="col s12 m12 l8 ">
        
        <!--post form/////////////////////////////////////////////////////////////////////////////////////////////////////////-->  
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                            <li class="tab col s3"><a href="#test1">Idea</a></li>
                            <li class="tab col s3"><a href="#test2">Q&A</a></li>
                            <li class="tab col s3"><a href="#test3">Projects</a></li>
                            </ul>
                        </div>
                        <div class="card-content">
                            <div id="test1" class="col s12">
                                <!--post idea-->
                                <form>

                                    <div class="row">
                                        <div class="input-field s12" >
                                            <input id="title" type="text" class="validate">
                                            <label for="title" data-error="wrong" data-success="validated">Title</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="Content_post" class="materialize-textarea"></textarea>
                                            <label for="Content_post">Content</label>
                                        </div>
                                    </div>

                                </form>  

                                <hr/>
                                <div class="card right">
                                    <a href="#!" id="" data-position="right" data-delay="50" data-tooltip="post" class="tooltipped waves-effect waves-green btn">
                                    Post
                                    </a>    
                                </div>
                                <!--fin post idea-->
                            </div>

                            <div id="test2" class="col s12">
                                
                            <!--Q&A -->
                            <form>

                            <div class="row">
                                <div class="input-field s12" >
                                    <input id="title" type="text" class="validate">
                                    <label for="title" data-error="wrong" data-success="validated">Title</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="Content_post" class="materialize-textarea"></textarea>
                                    <label for="Content_post">Code (Optional)</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="Content_post" class="materialize-textarea"></textarea>
                                    <label for="Content_post">Question</label>
                                </div>
                            </div>    

                            </form>  

                            <hr/>
                            <div class="card right">
                                <a href="#!" id="" data-position="right" data-delay="50" data-tooltip="Publier" class="tooltipped waves-effect waves-green btn">
                                Post
                                </a>    
                            </div>

                            </div>

                            <div id="test3" class="col s12">

                            <form>
                                <div class="row">
                                    <div class="input-field s12" >
                                        <input id="title" type="text" class="validate">
                                        <label for="title" data-error="wrong" data-success="validated">Title</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="Content_post" class="materialize-textarea"></textarea>
                                        <label for="Content_post">Contenu</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field s12" >
                                        <input id="infosup" type="text" class="validate">
                                        <label for="infosup" data-error="wrong" data-success="validated">More Informations</label>
                                    </div>
                                </div>   



                                <div class="col s6 l6 m6 file-field grey-d4 input-field tooltipped" data-position="top" data-delay="50" data-tooltip="Importer un video " style="border-radius:5px;padding:5px">
                                    <div class="waves-effect waves-light">
                                        <i class="material-icons">description</i> 
                                        <strong><a href="#!">Import a doc file</a></strong>
                                        <input type="file"  accept=".docx,.doc,.pdf,.ppt,.xlsx" >
                                    </div>

                                    <div class="file-path-wrapper" style="float:right">
                                        <input  class="file-path validate" type="text" hidden>
                                    </div>
                                </div>

                                <div class="col s6 l6 m6 file-field grey-d4 input-field tooltipped" data-position="top" data-delay="50" data-tooltip="Importer un video " style="border-radius:5px;padding:5px">
                                    <div class="waves-effect waves-light">
                                        <i class="material-icons">video_library</i> 
                                        <strong><a href="#!">Import a video</a></strong>
                                        <input type="file" accept="video/*" >
                                    </div>
                                    <div class="file-path-wrapper" style="float:right">
                                        <input  class="file-path validate" type="text" hidden>
                                    </div>
                                </div>

                                <div class="col s12 l12 m12"><br/></div>
                            </form>  
                            <hr/>
                            <div class="card right">
                                <a href="#!" id="" data-position="right" data-delay="50" data-tooltip="Publier" class="tooltipped waves-effect waves-green btn">
                                Post
                                </a>    
                            </div>                                        
                            </div>     
                        </div>
                        <hr/>
                    </div>

                </div>
            </div>
        </div>  
        <!--fin post form/////////////////////////////////////////////////////////////////////////////////////////////////////////-->    
        
        <!--posts/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div class="row">
             <!--with picture Project Post-->
            <div class="col s12 m12 l12">
                <div class="card hoverable">
                <div class=" grid_user_post">
                    <img src="/uploads/media/user1.jpg" alt="avatar" class=" responsive-img circle" style="width:40px;height:40px;"/>
                    <span><strong style="color:teal;margin-top:-15px">Arbib Soufiane</strong></span>
                    <span class="badge" style="font-size:12px;padding:14px;">2016/05/12 10:12:10</span>
                </div>
                <hr/>
                <div class="card-image">
                    <img src="/uploads/media/post2.jpg" class="materialboxed waves-effect waves-light">
                    <span class="card-title">Post Title</span>
                </div>
                <div class="card-content">
                    <h5>
                        Title
                        <i data-position="right" data-delay="50" data-tooltip="Cette idée de projet a été strictement open source selon la philosophy du site chaque idée peut être copier ou bien modifier" class="tooltipped material-icons">closed_caption</i>
                    </h5>
                    <p>
                        I am a very simple card. 
                        I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.

                        <br/>
                        <!--doc-->
                        <span data-position="right" data-delay="50" data-tooltip="se projet a un rapport ,clicker pour le telecharger" class="tooltipped"> 
                        <i class="material-icons">description</i> 
                        <strong><a href="#!">Report</a></strong>
                        </span>
                        <br/>
                        <!--media-->
                        <span data-position="right" data-delay="50" data-tooltip="voir le video a propos de ce projet" class="tooltipped"> 
                        <i class="material-icons">video_library</i> 
                        <strong><a href="#!">Video tuturial</a></strong>
                        </span>
                        <br/>

                        <!--Info-->
                        <span data-position="right" data-delay="50" data-tooltip="des information supplimentaire sur le projet" class="tooltipped"> 
                        <i class="material-icons">warning</i> 
                        <strong><a href="#!">More Information </a></strong>
                        </span>
                        <br/>
                    </p>
                </div>
                <div class="card-action">
                    <a href="#!" data-position="bottom" data-delay="50" data-tooltip="14 Like" class="tooltipped waves-effect waves-green" style="color:black;padding:5px;">
                    <i class="material-icons">thumb_up</i>  
                    </a>  

                    <a href="#!" data-position="bottom" data-delay="50" data-tooltip="12 Dislike" class="tooltipped waves-effect waves-green" style="color:black;padding:5px;">
                    <i class="material-icons">thumb_down</i>  
                    </a>  

                    <a href="#!" id="comments_toggel_project" data-position="bottom" data-delay="50" data-tooltip="12 commentaire" class="tooltipped waves-effect waves-green" style="color:black;padding:5px;">
                    <i class="material-icons">comment</i>  
                    </a>                               
                </div>

                <div class="card-action" id="comments_project" style="max-height:500px;height:500px;overflow-y:scroll;height:auto">

                <nav>
                <div class="nav-wrapper" style="background-color:#1976D2;" >
                <div class="input-field">
                <input id="search" type="search" required>
                <label for="search">
                <a href="index.php">
                <i class="material-icons">comment</i>
                </a>
                </label>
                </div>
                </div>
                </nav>





                <ul class="collection">
                <li class="collection-item avatar">
                <img src="/uploads/media/user1.jpg" alt="" class="circle">
                <span class="title" style="color:teal">Arbib Soufiane</span>
                <p> 
                hhhhhhhhh :) 
                </p>
                </li>
                </ul>
                </div>
                </div>

            </div>
                <!--fin  with picture Project Post-->
            
                <!--without picture Idea   (vote system)-->
                <div class="col s12 m12 l12"> 
                    <div class="card hoverable">
                        <div class=" grid_user_post">
                        <img src="/uploads/media/user1.jpg" alt="avatar" class=" responsive-img circle" style="width:40px;height:40px;"/>
                        <span><strong style="color:teal;margin-top:-15px">Arbib Soufiane</strong></span>
                        <span class="badge" style="font-size:12px;padding:14px;">2016/05/12 10:12:10</span>
                        </div>
                        <hr/>              
                        <div class="card-content">
                        <h5>
                        Title
                        <i data-position="right" data-delay="50" data-tooltip="Cette idée a été strictement open source selon la philosophy du site chaque" class="tooltipped material-icons">closed_caption</i>
                        </h5>
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">

                        <a href="#!" data-position="bottom" data-delay="50" data-tooltip="14 Like" class="tooltipped waves-effect waves-green" style="color:black;padding:5px;">
                        <i class="material-icons">thumb_up</i>  
                        </a>  

                        <a href="#!" data-position="bottom" data-delay="50" data-tooltip="12 Dislike" class="tooltipped waves-effect waves-green" style="color:black;padding:5px;">
                        <i class="material-icons">thumb_down</i>  
                        </a>  

                        <a href="#!" id="comments_toggel_idea" data-position="bottom" data-delay="50" data-tooltip="12 commentaire" class="tooltipped waves-effect waves-green" style="color:black;padding:5px;">
                        <i class="material-icons">comment</i>  
                        </a>                               

                        </div>

                        <div class="card-action" id="comments_idea" style="max-height:500px;height:500px;overflow-y:scroll;height:auto">
                        <nav>
                        <div class="nav-wrapper" style="background-color:#1976D2;" >
                        <div class="input-field">
                        <input id="search" type="search" required>
                        <label for="search">
                        <a href="index.php">
                        <i class="material-icons">comment</i>
                        </a>
                        </label>
                        </div>
                        </div>
                        </nav>
                        <ul class="collection">

                        <li class="collection-item avatar">
                        <img src="/uploads/media/user1.jpg" alt="" class="circle">
                        <span class="title" style="color:teal">Arbib Soufiane</span>
                        <p> 
                        hhhhhhhhh :) 
                        </p>
                        </li>
                        </ul>
                        </div>


                    </div>
        </div>                 
                <!--fin without picture Idea   (vote system)-->
            
                <!-- with code  Q&A -->
                <div class="col s12 m12 l12">
        <div class="card hoverable">
        <div class=" grid_user_post">
        <img src="/uploads/media/user1.jpg" alt="avatar" class=" responsive-img circle" style="width:40px;height:40px;"/>
        <span><strong style="color:teal;margin-top:-15px">Arbib Soufiane</strong></span>
        <span class="badge" style="font-size:12px;padding:14px;">2016/05/12 10:12:10</span>
        </div>
        <hr/>

        <pre class="prettyprint">
        <code>
        @import "somestyle.css"
        body {
        background: white;
        }

        .wrapper {
        background: #F88;
        color: #454545;
        }

        .box::after {
        content: "...";
        }
        </code>
        </pre> 

        <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
        </div>
        <div class="card-action">

        <span class="badge">10 reponses</span>
        <a href="#!" id="comments_toggel_qa" data-position="bottom" data-delay="50" data-tooltip="12 commentaire" class="tooltipped waves-effect waves-green" style="color:black;padding:5px;">
        <i class="material-icons">question_answer</i>  
        </a>                               

        </div>
        <div class="card-action" id="comments_qa" style="max-height:500px;height:500px;overflow-y:scroll;height:auto">

        <nav>
        <div class="nav-wrapper" style="background-color:#1976D2;" >
        <div class="input-field">
        <input id="search" type="search" required>
        <label for="search">
        <a href="index.php">
        <i class="material-icons">comment</i>
        </a>
        </label>
        </div>
        </div>
        </nav>





        <ul class="collection">

        <li class="collection-item avatar">
        <img src="/uploads/media/user1.jpg" alt="" class="circle">
        <span class="title" style="color:teal">Arbib Soufiane</span>
        <p> 
        hhhhhhhhh :) 
        </p>
        </li>




        </ul>
        </div>
        <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
        <p class="flow-text"> Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
        </div>
        </div>   
                <!--fin with code  Q&A -->
        </div>   
        <!--fin posts/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        
        <!--posts scripts/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <script>
            $(document).ready(function(){
                
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
            });
        </script>
        <!--posts scripts/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        
    </div>
    <!--fin first side/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
   
    <!--second side/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="col s12 m12 l4 " id="fixed_aside">
        
       
    <br/><br/>

    <ul class="collapsible popout" data-collapsible="expandable" >
    <li>
    <div class="collapsible-header active">
    <i class="material-icons">filter_drama</i>
    Best Idea of this week
    </div>
    <div class="collapsible-body">
    <p>
    <a href="#!" >
    <img src="/uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
    Arbib Soufiane
    <span style="color:black">

    <strong style="margin-top:-5px;">
    IDEA: <span style="color:teal;font-weight:bolder">BOOKMARKS</span>
    </strong>


    </span>
    <span class="badge">152 vote</span>
    </a>

    </p>
    </div>
    </li>
    <li>
    <div class="collapsible-header active">
    <i class="material-icons">place</i>
    Most Ranked Members
    </div>
    <div class="collapsible-body">

    <a href="#!" >
    <img src="/uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
    Arbib Soufiane
    <span class="badge">152 Rank</span>
    </a>
    <hr/>

    <a href="#!" >
    <img src="/uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
    Arbib Soufiane
    <span class="badge">150 Rank</span>
    </a>
    <hr/>

    <a href="#!" >
    <img src="/uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
    Arbib Soufiane
    <span class="badge">132 Rank</span>
    </a>
    <hr/>

    <a href="#!" >
    <img src="/uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
    Arbib Soufiane
    <span class="badge">100 Rank</span>
    </a>
    <hr/>    


    </div>
    </li>
    <li>
    <div class="collapsible-header active">
    <i class="material-icons">whatshot</i>
    Birth Days
    </div>
    <div class="collapsible-body">
    <p>
    <hr/>
    <a href="#!" >
    <img src="/uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
    <span style="color:black">
    <strong style="margin-top:-5px;">
    Arbib Soufiane: 
    </strong>
    </span>
    <span class="badge">
    20 Ans                 
    <a data-position="bottom" data-delay="50" data-tooltip="Wish hem happy birth day" class="tooltipped" href="login.php" > 
    <i class="material-icons">done_all</i>
    </a> 
    </span>
    </a>
    <hr/>

    <a href="#!" >
    <img src="/uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
    <span style="color:black">
    <strong style="margin-top:-5px;">
    Arbib Soufiane: 
    </strong>
    </span>
    <span class="badge">
    20 Ans                 
    <a data-position="bottom" data-delay="50" data-tooltip="Wish hem happy birth day" class="tooltipped" href="login.php" > 
    <i class="material-icons">done_all</i>
    </a> 
    </span>
    </a>
    <hr/>                  



    <a href="#!" >
    <img src="/uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
    <span style="color:black">
    <strong style="margin-top:-5px;">
    Arbib Soufiane: 
    </strong>
    </span>
    <span class="badge">
    20 Ans                 
    <a data-position="bottom" data-delay="50" data-tooltip="Wish hem happy birth day" class="tooltipped" href="login.php" > 
    <i class="material-icons">done_all</i>
    </a> 
    </span>
    </a>
    <hr/>

    <a href="#!" >
    <img src="/uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
    <span style="color:black">
    <strong style="margin-top:-5px;">
    Arbib Soufiane: 
    </strong>
    </span>
    <span class="badge">
    20 Ans                 
    <a data-position="bottom" data-delay="50" data-tooltip="Wish hem happy birth day" class="tooltipped" href="login.php" > 
    <i class="material-icons">done_all</i>
    </a> 
    </span>
    </a>
    <hr/>      
    </p>
    </div>
    </li>
    </ul>
    </div>
    <!--fin second side/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
</div>  

    
    
    
    
    
    
    
    
    

<!--notifications-->

<div id="modal2" class="modal modal-fixed-footer" style="margin-right:-0px;">
    <div class="modal-content">
        <div id="loaded_notifs_type_notif"></div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
  </div>





<!--messages-->

<div id="modal3" class="modal modal-fixed-footer" style="margin-right:-0px;">
    <div class="modal-content ">
        <div id="loaded_notifs_type_msg"></div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
  </div>



<!--recherche-->
  <div id="modal1" class="modal modal-fixed-footer" style="max-width: 1800px;max-height: 1800px;width: 100%;height: 100%;margin-top:-64px">
    <div class="modal-content">

      <nav>
        <div class="nav-wrapper" style="background-color:#1976D2;" >
            <div class="input-field">
              <input id="search" type="search" required>
              <label for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
        </div>
      </nav>

      <div id="search_results">



            <!--user-->
           <div class="row">
            <div class="col s12 m12 l4">
            <div class="card-panel grey lighten-5 z-depth-1" style="padding:2px">
              <div class="row valign-wrapper">
                <div class="col s2">
                  <img src="/uploads/media/user1.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
                  <span class="black-text" >
                      <br/>
                      <a href="#" data-position="bottom" data-delay="50" data-tooltip="view profile"  class="tooltipped " style="padding:0px;color:black" >
                          Arbib Soufiane
                      </a>
                    <div>
                        <br/>
                      <a  href="#" data-position="bottom" data-delay="50" data-tooltip="send message" class="grey-d4 tooltipped waves-effect waves-light btn" >
                          <i class="material-icons">textsms</i>
                      </a>

                      <a href="#" data-position="bottom" data-delay="50" data-tooltip="star him"  class="yellow-d4 tooltipped waves-effect waves-light btn" >
                          <i class="material-icons">grade</i>
                      </a>

                      <a href="#" data-position="bottom" data-delay="50" data-tooltip="view profile"  class="green tooltipped waves-effect waves-light btn" >
                          <i class="material-icons">person_pin</i>
                      </a>


                    </div>
                  </span>
                </div>
              </div>
            </div>
            </div>
          </div>

        <!--post-->
        <div class="row">
          <div class="col s12 m12 l4">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="/uploads/media/office.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                  <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                  <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
              </div>
          </div>
        </div>
      </div>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
  </div>



<div id="cache_idgrp"><?php echo $query1['id_group']; ?></div>
<div id="cache_iduser"><?php echo $query1['id_member']; ?></div>

<!--///////////////////////////////////////////// SCRIPTS //////////////////////////////////////////////-->

<script type="text/javascript" src="/assets/js/jquery.min.js"></script>


<script type="text/javascript" src="/assets/js/materialize.min.js"></script>
<script type="text/javascript" src="/assets/js/nicescroll.js"></script>
<script type="text/javascript" src="/assets/code-prettify/run_prettify.js"></script>





<script >

  $(document).ready(function() {










    var fixmeTop1 = $('#fixed_aside').offset().top;         
    $(window).scroll(function() 
  { 
        var currentScroll = $(window).scrollTop(); 
        var width_screen=$(window).width();
             if (currentScroll >= fixmeTop1) 
                {     
                     if (width_screen>992)
                    {
                        $('#fixed_aside').css({                      
                            position: 'fixed',
                            top: '0',
                            right: '0'
                        });
                    }
                    else    
                    {
                        $('#fixed_aside').css({                     
                            position: 'static'
                        });    
                    }
                }
                else
                {                                  
                    $('#fixed_aside').css({                     
                        position: 'static'
                    });
                }   
    });  

      
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
      
    $("body").niceScroll(
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



                   
        

/*//////////////////////////////////////AJAX MOTORS//////////////////////////////////////////////*/





setInterval(function (){


// load msg
var idgrp=$("#cache_idgrp").text();
var iduser=$("#cache_iduser").text();


$.ajax({
    type: 'POST',
    url: '/system/actions/notif_agent/load_msg.php',
    data: { 
        'idgrp': idgrp,
        'iduser': iduser
    },
    success: function(msg){
      $("#loaded_notifs_type_msg").html(msg);
    }
});

$.ajax({
    type: 'POST',
    url: '/system/actions/notif_agent/load_notifs.php',
    data: { 
        'idgrp': idgrp,
        'iduser': iduser
    },
    success: function(msg){
      $("#loaded_notifs_type_notif").html(msg);
    }
});
/*
alert(document.getElementById('nbr_unread_notif_m').innerText);
alert($('#nbr_unread_notif_m').innerText);
*/

/*
var times=0;
var times1 = Number(document.getElementById('nbr_unread_msg_m').innerText)-1;
var times2 = Number(document.getElementById('nbr_unread_notif_m').innerText)-1;

times=times1+times2;

if (times>0) 
{



}

alert($('#nbr_unread_msg_m').text());
*/





}, 1000);








 

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

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

<?php

}
else
{
  header("location:http://TeamFoundation.com/login");
}

?>
