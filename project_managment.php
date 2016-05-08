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
    <link rel="stylesheet" href="assets/iconfont/material-icons.css" />
    <link rel="stylesheet" href="assets/w3/w3.css" />
    <link rel="stylesheet" href="assets/css/materialize.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="icon" type="image/png" href="assets/img/logo-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="assets/img/logo-32x32.png" sizes="32x32" />
    <title>TeamFoundation</title>
</head>
<body style='background-color:#ECECEC; overflow-x:hidden;'>




<!--/////////////////////////////////////////////////////////////////////////////////////////-->
    
    
<div class="navbar-fixed">
  <nav id="nav_nav">
    <div class="nav-wrapper" style="background-color:#1976D2;">
      <a href="#!" class="brand-logo"  id="logo_txt">&nbsp;<img src="assets/img/cmpt_logo_small.png" style="width:200px;height:40px;" /></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
          <li>
              <a data-position="bottom" data-delay="50" data-tooltip="Rechercher" href="#modal1" data-target="modal1" class="modal-trigger tooltipped" >
                  <i class="material-icons">search</i>
              </a>
          </li>

          <li>
              <a data-position="bottom" data-delay="50" data-tooltip="Les Messages"   href="#modal3" class='modal-trigger tooltipped' data-target="modal3">
                  <i class="material-icons">textsms</i>
              </a>
          </li>

          <li>
              <a data-position="bottom" data-delay="50" data-tooltip="Les notifications"  href="#modal2" class='modal-trigger tooltipped' data-target="modal2" >
                  <i class="material-icons">add_alert</i>
              </a>
          </li>

          <li>
               <a href='#' data-position="bottom" data-delay="50" data-tooltip="Le Profile" class="tooltipped">
                   <img class="responsive-img circle" style="width:30px;height:30px;margin-top:20px;" src="uploads/media/user1.jpg" />
               </a>
          </li>

          <li>
              <a href="logout.php" data-position="bottom" data-delay="50" data-tooltip="Logout" class="tooltipped" >
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
              </a>
          </li>
          <li>
              <span class="badge">Notification</span>
              <a href="#modal2" class='modal-trigger' data-target="modal2" >
                  <i class="material-icons">add_alert</i>
              </a>
          </li>

           <li>
               <span class="badge">Arbib Soufiane</span>
               <a href='#' >
                   <img class="responsive-img circle" style="width:30px;height:30px;margin-top:20px;" src="uploads/media/user1.jpg" />
               </a> 
          </li>

          <li>
              <span class="badge">Logout</span>
              <a href="logout.php" >
                  <i class="material-icons">lock</i>
              </a>
          </li>

      </ul>
    </div>
  </nav>
</div>
      
    
      <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>


<!--////////////////////////////////////// FIN NAV BAR /////////////////////////////////////-->
  
  
    



<div class="row">
    
    <div class="col m12 l12 m12">
              
        <div class="card" style="background-color:#1976D2;padding:10px;color:white;">
            <div class="row">
                <div class="col m12 l12 s12 ">
                    <h5 class="center">
                        <a data-position="bottom" data-delay="50" data-tooltip="By:Arbib Soufiane" href="#" class="waves-effect waves-light center  tooltipped" style="color:white" >
                             PROJECT
                        </a>
                    </h5>
                </div>
                
                <div class="col m12 l12 s12  ">                
                    <h6 class="center" style="color:whitesmook; opacity:0.5">(Project Manager Is: ARBIB SOUFIANE)</h6>
                </div>

                <div class="col m12 l12 s12 " style="border-top:1px solid white;padding:10px;border-bottom:1px solid white;">
                        dsfdsf
                </div>

                
            </div>
        </div>
        
        
    
    </div>
    
    
    
    
    
    
    
    
    
    <div class="col m12 l12 s12">
        <div class="card grey-d3">
          <div class="row">
            <div class="col s12  grey-d4">
              <ul class="tabs  grey-d4" style="color:white">
                
                <li class="tab col s3"><a href="#test1" style="color:white">Progress</a></li>
                <li class="tab col s3"><a href="#test2" style="color:white">Phases</a></li>
                <li class="tab col s3"><a href="#test3" style="color:white">Edit Project Data</a></li>
                <li class="tab col s3"><a href="#test4" style="color:white">Team</a></li>

                  
              </ul>
            </div>
             <div class="card-content" >
                 
                <div id="test1" class="col s12" style="height:500px;max-height:500px;overflow-y:scroll;" >
                    
                    <div>
                        <canvas id="canvas" style="width:100%;height:480px;max-width:100%;max-height:480px"></canvas>
                    </div>

                    <script>
                        var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
                        var lineChartData = {
                            labels : ["J1","J2","J3","J4","J5","J6","J7"],
                            datasets : [
                                {
                                    label: "Active Phases",
                                    fillColor : "rgba(255, 255, 255, 0.4)",
                                    strokeColor : "rgba(0, 255, 207, 0.3)",
                                    pointColor : "rgba(220,220,220,1)",
                                    pointStrokeColor : "#000",
                                    pointHighlightFill : "#000",
                                    pointHighlightStroke : "rgba(220,220,220,1)",
                                    data : [0,1,3,2,2,6,0]
                                },
                                {
                                    label: "Endedd Phases",
                                    fillColor : "rgba(0, 255, 2, 0.3)",
                                    strokeColor : "rgba(151,187,205,1)",
                                    pointColor : "rgba(151,187,205,1)",
                                    pointStrokeColor : "#000",
                                    pointHighlightFill : "#000",
                                    pointHighlightStroke : "rgba(151,187,205,1)",
                                    data :[0,0,0,1,1,1,7]
                                },
                                {
                                    label: "Pending phases",
                                    fillColor : "rgba(255, 255, 97, 0.4)",
                                    strokeColor : "rgba(151,187,205,1)",
                                    pointColor : "rgba(151,187,205,1)",
                                    pointStrokeColor : "#000",
                                    pointHighlightFill : "#000",
                                    pointHighlightStroke : "#000",
                                    data :[7,6,4,3,3,0,0]
                                }
                            ]

                        }

                    window.onload = function(){
                        var ctx = document.getElementById("canvas").getContext("2d");
                        window.myLine = new Chart(ctx).Line(lineChartData, {
                            responsive: true
                        });
                    }
                    </script>
                    
                    
                </div>
                 
                <div id="test2" class="col s12" style="height:500px;max-height:500px;overflow-y:scroll;" >

        
<!--phases ////////////////////////////////////////////////////////////////////////////////////////////////-->
                    
<!--pc-->                 
<div class="col m12 l12 s12 card grey-d4 hide-on-med-and-down" style="border-radius:10px;padding:10px">
    <div class="col l1 m1 s1 ">
        <img data-position="bottom" data-delay="50" data-tooltip="ARBIB SOUFIANE" class="tooltipped circle responsive-img" src="uploads/media/user1.jpg" alt="user" style="width:50px;height:50px;" />
    </div>
    
    <div class="col l11 m11 s11 ">
        <div class="col l3 m3 s3">
           <h6 class="truncate">
              This is phase is about designe and some of other things you know what is knowa
           </h6>
        </div>
        
        <div class="col l9 m9 s9 ">
            <div class="right   ">
               <a class="btn-floating btn-tiny waves-effect waves-light green tooltipped" data-position="bottom" data-delay="50" data-tooltip="validate this phase">
                 <i class="material-icons">done</i>
               </a>
               
                <a href="#more_modal" data-target="more_modal" class="modal-trigger btn-floating btn-tiny waves-effect waves-light green tooltipped" data-position="bottom" data-delay="50" data-tooltip="Information about the phase">
                 <i class="material-icons">settings_input_antenna</i>
                </a>

                <a href="#modal_update_state" data-target="modal_update_state" class="modal-trigger btn-floating btn-tiny waves-effect waves-light green tooltipped" data-position="bottom" data-delay="50" data-tooltip="Update a new comment on the proccess">
                 <i class="material-icons">restore</i>
               </a>
           </div>
        </div>
    </div>
</div>                   
                                   
 <!--mobile-->                 
<div class="col m12 l12 s12 card grey-d4    hide-on-large-only" style="border-radius:10px;padding:10px">
    <div class="col l2 m2 s2 ">
        <img data-position="bottom" data-delay="50" data-tooltip="ARBIB SOUFIANE" class="tooltipped circle responsive-img" src="uploads/media/user1.jpg" alt="user" style="width:50px;height:50px;" />
    </div>
    
    <div class="col l10 m10 s10 ">
        <div class="col l3 m12 s12">
             <h6 >This is phase is about designe and some of other things you know what is knowa</h6>
        </div>
        
        <div class="col l9 m12 s12 ">
            <div class="right   ">
               <a class="btn-floating btn-tiny waves-effect waves-light green tooltipped" data-position="bottom" data-delay="50" data-tooltip="validate this phase">
                 <i class="material-icons">done</i>
               </a>

               <a href="#more_modal" data-target="more_modal" class="modal-trigger btn-floating btn-tiny waves-effect waves-light green tooltipped" data-position="bottom" data-delay="50" data-tooltip="Information about the phase">
                 <i class="material-icons">settings_input_antenna</i>
                </a>

                <a href="#modal_update_state" data-target="modal_update_state" class="modal-trigger btn-floating btn-tiny waves-effect waves-light green tooltipped" data-position="bottom" data-delay="50" data-tooltip="Update a new comment on the proccess">
                 <i class="material-icons">restore</i>
               </a>
           </div>
        </div>
    </div>
</div>                           
         
                    
                    
  
     
<!--phase modals-->
  <div id="more_modal" class="modal modal-fixed-footer" >
    <div class="modal-content">
        <div class="col l12 s12 m12 center-block" styyle="background-color:#1976D2;color:#fff;">
            <h2 style="color:black">Phase astd designe</h2>
            <p class="flow-text" style="color:black">
                <strong>Developper:</strong>     
                <span style="color:black;font-weight:bolder">Arbib Soufiane</span>
            </p>
            <p class="flow-text" style="color:black">
                <strong>Functions:</strong>      
                <span>Designe / Traduction</span> 
            </p>            
            <p class="flow-text" style="color:black">
                <strong>Date Début:</strong>     
                <span>2016/08/08</span>
            </p>
            <p class="flow-text" style="color:black">
                <strong>Date Fin:</strong>       
                <span>2016/08/08</span>
            </p>
            <p class="flow-text" style="color:black">
                <strong>State:</strong>          
                <span  style="color:red;font-weight:bolder">In Progress...</span>
            </p>
            <p class="flow-text" style="color:black">
                <strong>Phase Rank:</strong>     
                <span>3rd</span>
            </p>
            <p class="flow-text" style="color:black">
                <strong>Project :</strong>       
                <span>A-Projetc</span>
            </p>
            <p class="flow-text" style="color:black">
                <strong>Project Leader:</strong> 
                <span>Arbib Soufiane</span>
            </p>


        </div>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
  </div>

<!--phase modals-->
  <div id="modal_update_state" class="modal modal-fixed-footer" >
    <div class="modal-content">
        <div class="col l12 s12 m12 center-block" styyle="background-color:#1976D2;color:#fff;">
           
           <div class="card-action">
            
              <nav>
                <div class="nav-wrapper"  style="background-color:#1976D2;" >
                  <form>
                    <div class="input-field">
                      <input id="search" type="search" required>
                        <label for="search"><i id="thisisatest" class="material-icons">done</i></label>
                      <i class="material-icons">close</i>
                    </div>
                  </form>
                </div>
              </nav>    
               
               <ul class="collection"> 
                <li style="color:black" class="collection-item avatar">
                  <img src="uploads/media/user1.jpg" alt="" class="circle">
                  <span class="title" style="color:teal">Arbib Soufiane</span>
                  <p> 
                     hhhhhhhhh :) 
                  </p>
                </li>
                   <li style="color:black" class="collection-item avatar">
                  <img src="uploads/media/user1.jpg" alt="" class="circle">
                  <span class="title" style="color:teal">Arbib Soufiane</span>
                  <p> 
                     hhhhhhhhh :) 
                  </p>
                </li>
                   
                   <li style="color:black" class="collection-item avatar">
                  <img src="uploads/media/user1.jpg" alt="" class="circle">
                  <span class="title" style="color:teal">Arbib Soufiane</span>
                  <p> 
                     hhhhhhhhh :) 
                  </p>
                </li>
                   
                   
                   <li style="color:black" class="collection-item avatar">
                  <img src="uploads/media/user1.jpg" alt="" class="circle">
                  <span class="title" style="color:teal">Arbib Soufiane</span>
                  <p> 
                     hhhhhhhhh :) 
                  </p>
                </li>
                   
                   
                   <li style="color:black" class="collection-item avatar">
                  <img src="uploads/media/user1.jpg" alt="" class="circle">
                  <span class="title" style="color:teal">Arbib Soufiane</span>
                  <p> 
                     hhhhhhhhh :) 
                  </p>
                </li>
                   
                   
                   <li style="color:black" class="collection-item avatar">
                  <img src="uploads/media/user1.jpg" alt="" class="circle">
                  <span class="title" style="color:teal">Arbib Soufiane</span>
                  <p> 
                     hhhhhhhhh :) 
                  </p>
                </li>
                   
                   
                   <li style="color:black" class="collection-item avatar">
                  <img src="uploads/media/user1.jpg" alt="" class="circle">
                  <span class="title" style="color:teal">Arbib Soufiane</span>
                  <p> 
                     hhhhhhhhh :) 
                  </p>
                </li>
              </ul>
               
            </div> 
            


        </div>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
  </div>

               
                    
<!--phases ////////////////////////////////////////////////////////////////////////////////////////////////-->                   
          
                    
                    
                    
                    
                    
                    
                    
                    
    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>  
                 
                <div id="test3" class="col s12" style="height:500px;max-height:500px;overflow-y:scroll;" >
                        Edit Project Data
                </div>
                 
                <div id="test4" class="col s12"  style="height:500px;max-height:500px;overflow-y:scroll;" >
                        Team
                </div>
             </div>

           </div>
        </div>
    </div>
</div>     
    
    
    
    
    
    
    
<!--modal_info_profile-->

<div id="modal_info_profile" class="modal modal-fixed-footer" style="max-width: 1800px;max-height: 1800px;width: 100%;height: 100%;margin-top:-64px;">
    <div class="modal-content ">
        <h5 class="center-align">
            Arbib Soufiane
            <div style="color:grey;font-size:13px;">(gggggggg)</div>
        </h5>


        <div class="row">
          <div class="col s12 m12">
            <div class="card-panel teal">
              <span class="white-text">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                  I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
              </span>
            </div>
          </div>
        </div>
        
        <i class="material-icons large">error</i>
        
        rank
        stars
        projets
        online
        
        sup info
        email
        age
        
        
        
        
        
        
        
        

        
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
</div>

    

<!--notifications-->
<div id="modal2" class="modal modal-fixed-footer" style="margin-right:-0px;">
    <div class="modal-content">


        <a href="#!" >
            <img src="uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
            
            <span style="color:black">
                
                <strong style="margin-top:-5px;">Arbib Soufiane </strong>
                
                <span style="color:grey;font-size:15px;">
                    sanfor hierd you
                </span>    
                <span style="color:blue;font-size:10px;">
                    2016/08/12 21:01:26
                </span>
                
            </span>
            
            <span class="new badge">
                <a data-position="bottom" data-delay="50" data-tooltip="mark as read" class="tooltipped" href="login.php" >
                    <i class="material-icons">done_all</i>
                </a>
            </span>
            
        </a>


        <hr/>

        
        
        
        
        <a href="#!" >
            <img src="uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
            <span style="color:black">
                <strong style="margin-top:-5px;">Arbib Soufiane </strong>
                <span style="color:grey;font-size:15px;">
                    sanfor hierd you
                </span>    
                <span style="color:blue;font-size:10px;">
                    2016/08/12 21:01:26
                </span>
            </span>
            <span class="new badge">
                <a data-position="bottom" data-delay="50" data-tooltip="mark as read" class="tooltipped" href="login.php" >
                    <i class="material-icons">done_all</i>
                </a>
            </span>
        </a>
        <hr/>
        
        
        
        
        
        
        
        
        <a href="#!" >
            <img src="uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
            <span style="color:black">
                <strong style="margin-top:-5px;">Arbib Soufiane </strong>
                <span style="color:grey;font-size:15px;">
                    sanfor hierd you
                </span>    
                <span style="color:blue;font-size:10px;">
                    2016/08/12 21:01:26
                </span>
            </span>
            <span class="new badge">
                <a data-position="bottom" data-delay="50" data-tooltip="mark as read" class="tooltipped" href="login.php" >
                    <i class="material-icons">done_all</i>
                </a>
            </span>
        </a>
        <hr/>
        
        
        
        
        
        
        
        
        
        
        
        
        
         <a href="#!" >
            <img src="uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
            <span style="color:black"> 
                <strong style="margin-top:-5px;">Arbib Soufiane </strong>
                <span style="color:grey;font-size:15px;">
                    sanfor hierd you
                </span>    
                <span style="color:blue;font-size:10px;">
                    2016/08/12 21:01:26
                </span>
            </span>
            <span class="new badge">
                <a data-position="bottom" data-delay="50" data-tooltip="mark as read" class="tooltipped" href="login.php" >
                    <i class="material-icons">done_all</i>
                </a>
            </span>
        </a>
        <hr/>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <a href="#!" >
            <img src="uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
            <span style="color:black">
                <strong style="margin-top:-5px;">Arbib Soufiane </strong>
                <span style="color:grey;font-size:15px;">
                    sanfor hierd you
                </span>    
                <span style="color:blue;font-size:10px;">
                    2016/08/12 21:01:26
                </span>
            </span>
            <span class="new badge">
                <a data-position="bottom" data-delay="50" data-tooltip="mark as read" class="tooltipped" href="login.php" >
                    <i class="material-icons">done_all</i>
                </a>
            </span>
        </a>
        <hr/>  
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
  </div>

<!--messages-->
<div id="modal3" class="modal modal-fixed-footer" style="margin-right:-0px;">
    <div class="modal-content ">


        <a href="#!" class="msgs">
        <img src="uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
            <span style="color:black">
                <strong style="margin-top:-5px;">Arbib Soufiane </strong>
                <span style="color:grey;font-size:15px;">aféén awdi hanya...</span>    <span style="color:blue;font-size:10px;">2016/08/12 21:01:26</span>
            </span>
            <span class="new badge"></span>
        </a>
        <hr/>



        <a href="#!" class="msgs">
        <img src="uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
            <span style="color:black">
                <strong style="margin-top:-5px;">Arbib Soufiane </strong>
                <span style="color:grey;font-size:15px;">aféén awdi hanya...</span>    <span style="color:blue;font-size:10px;">2016/08/12 21:01:26</span>
            </span>
            <span class="new badge"></span>
        </a>
        <hr/>


        <a href="#!" class="msgs">
        <img src="uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
            <span style="color:black">
                <strong style="margin-top:-5px;">Arbib Soufiane </strong>
                <span style="color:grey;font-size:15px;">aféén awdi hanya...</span>    <span style="color:blue;font-size:10px;">2016/08/12 21:01:26</span>
            </span>
            <span class="new badge"></span>
        </a>
        <hr/>


        <a href="#!" class="msgs">
        <img src="uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
            <span style="color:black">
                <strong style="margin-top:-5px;">Arbib Soufiane </strong>
                <span style="color:grey;font-size:15px;">aféén awdi hanya...</span>    <span style="color:blue;font-size:10px;">2016/08/12 21:01:26</span>
            </span>
            <span class="new badge"></span>
        </a>
        <hr/>





        <a href="#!" class="msgs">
        <img src="uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
            <span style="color:black">
                <strong style="margin-top:-5px;">Arbib Soufiane </strong>
                <span style="color:grey;font-size:15px;">aféén awdi hanya...</span>    <span style="color:blue;font-size:10px;">2016/08/12 21:01:26</span>
            </span>
            <span class="new badge"></span>
        </a>
        <hr/>



        <a href="#!" class="msgs">
        <img src="uploads/media/user1.jpg" alt="avatar" class="responsive-img circle" style="width:40px;height:40px;"/>
            <span style="color:black">
                <strong style="margin-top:-5px;">Arbib Soufiane </strong>
                <span style="color:grey;font-size:15px;">aféén awdi hanya...</span>    <span style="color:blue;font-size:10px;">2016/08/12 21:01:26</span>
            </span>
            <span class="new badge"></span>
        </a>
        <hr/>
        













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
                  <img src="uploads/media/user1.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
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
                  <img class="activator" src="uploads/media/office.jpg">
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

    
    
<!--///////////////////////////////////////////// SCRIPTS //////////////////////////////////////////////-->

<script type="text/javascript" src="assets/js/jquery.min.js"></script><script type="text/javascript" src="assets/js/jquery.js"></script>

<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/nicescroll.js"></script>
<script type="text/javascript" src="assets/code-prettify/run_prettify.js"></script>
<script type="text/javascript" src="assets/js/Chart.js"></script>




<script type="text/javascript" charset="utf-8">

  $(document).ready(function() {
 

      $("#thisisatest").click(function(){
          alert("the message was sent");
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
      

    $("html,#test1,#test2").niceScroll(
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
