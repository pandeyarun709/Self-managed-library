<?php
    
      if (isset($_POST['loginn'])) {
          
          header('Location: login.php'); 
       
      }

      if (isset($_POST['signinn'])) {
          
          header('Location: signup.php'); 
       
      }
      

?>



<!DOCTYPE html>
<html>
<head>
  <title>Library</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

  <link rel="stylesheet" type="text/css" href="A_first_open_landingpageCss.css">
  
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
  
  </style>
</head>
<body>
     <!-- top box -->
    
     <div id="particles-js" >
     

             <nav class="navbar navbar-inverses  T_nav">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><b>CHITKARA UNIVERSITY</b></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   
                    
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#about_l" target="">ABOUT US</a></li>
                     
                       
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav> -->

              <!---  text ############################################################# -->
              <div id="main_heading">
                <h1 id="heading">SELF-MANAGED LIBRARY</h1>
                <h3 id="sub_heading">IDEAS pull the TRIGGER,but instinct loads the GUN</h3>
                <hr>
                <form action="" method="post">
                <button class="btn btn-info btn-lg" id="sign_btn" name="signinn" target="_blank">SIGNUP</button>
                <button class="btn btn-info btn-lg" id="log_btn" name="loginn">LOGIN</button>
                </form>
              </div>
            
          
         
    </div>
          <!--     ######################################################################### -->
          
          <div class="container lib_mar">
               <div class="row">
                  
                    <div class="col-md-7 col-sm-12" >
                        <h1 class="lib_para">library</h1>
                        <p class="lib_para">
                          The libraries at each of the campuses have spacious reading halls, periodical centres, group discussion rooms and online database browsing areas.

                        The University libraries offer a wide range of materials in a variety of formats—from traditional books and serials to films, and multimedia and networked information from around the world. Highly skilled staff assists students to use the local collections and find information on specific topics.
                        Our libraries are a learning space where students are inspired to explore, research and create. Our libraries are not only the places to think, but also an informal work area where students gather to collaborate. Our libraries house a collection of more than 57,800 items including books, journals, microfilms, audio–visual material and CD-ROMs. Furthermore, the students have access to more than 10,000 electronic journals available online, apart from daily newspapers.
  
                        </p>
                    </div>
                    <div class="col-md-5 col-sm-12" id="library_div" >
                       <div class="thumbnail">
                           <img src="../images/library_punjab.jpg">
                      </div>
                      
                    </div>
            
          </div>
       </div>     
       <!-- ########################################################################## -->  


    <div class="lib_mar">
       
       <div class="container">
         <div id="about" class="lib_para">
           <h1  id="about_l"> ABOUT US</h1>
           <hr id="hr_about">
         </div>
          
          
           <div class="row" id="profile">
              
              <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                      <img src="../images/noorid.jpeg" style="width:87%%">
                      
                  </div>
                  <h3 class="name_o">ARSHNOOR SINGH</h3>
              </div>

                <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                          <img src="../images/arun.JPG">
                          
                  </div>
                  <h3 class="name_o">ARUN PANDEY</h3>
                </div>

                <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                        <img src="../images/gupta.jpeg">
                      
                  </div>
                    <h3 class="name_o">AYUSH GUPTA</h3>
                </div>

                <div class="col-md-3 col-sm-6">
                   <div class="thumbnail">
                        <img src="../images/gg.jpeg" >
                        
                  </div>
                  <h3 class="name_o">AYUSH GARG</h3>

                </div>
         
            </div>

        </div>
       

    </div>
        
<script type="" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>
<script type="text/javascript" src="particles.min.js"></script>
    
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>
</html>