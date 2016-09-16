<?php
session_start();
error_reporting(0);
include  dirname(dirname(dirname(__FILE__))).'/functions.php' ;
include  dirname(dirname(dirname(__FILE__))).'/fbapi.php' ;

?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Cryptex16</title>
    <style>
      html, body {
        margin: 0;
        width: 100%;
        height: 100%;
      } 
      img.responsive-img,

      .positioning{
        margin-top: -20%;

      }

      @media (min-width: 480px) and (max-width: 839px){
            .positioning{
        margin-top: -25%;
      }
      }

      @media (max-width: 479px) {
            .positioning{
        margin-top: -60%;
      }
      }
 
    }

    </style>
</head>
<body data-vide-bg="video/ocean">
</div>  
   <div style="height:90%;"> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../libs/jquery/dist/jquery.min.js"><\/script>')</script>
    <script src="../src/jquery.vide.js">     </script>
    <script>
     // $(document).ready(function () {
     //   $(document.body).vide('video/ocean'); // Non declarative initialization
     //
     //   var instance = $(document.body).data('vide'); // Get the instance
     //   var video = instance.getVideoObject(); // Get the video object
     //   instance.destroy(); // Destroy instance
     // });
    </script>  
   </div>  
   
  <?php
session_start();
include  dirname(dirname(dirname(__FILE__))).'/fbcode.php' ;

?>
 
  <center>

    <div class="positioning">
      <img src="cryptex.png" class="responsive-img" >
    </div>

  </center>
  <center>
  <div class="fb-login-button" scope="public_profile,email,user_friends" 
  onlogin="checkLoginState();" data-size="large" data-show-faces="false" 
  data-auto-logout-link="true" > LOGIN </div>
  </center>
   


  <!-- <div id='status'></div>
   --> 
  </body>
</html>

<?php 

 if(isset($_SESSION['userID']) && isset($_SESSION['access_token']))
    {   
      

      
      header('Location: '.REDIRECTLINK);


     }

if(!isset($_SESSION['access_token'])) {
     
  
   }

 ?>