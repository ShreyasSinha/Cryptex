<?php
include("functions.php");

error_reporting(0);
$con=connect();

?>
<!doctype html>
 

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cryptex</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/cry.png">

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.css">
    <link rel="stylesheet" href="css/styles.css">
     
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout  mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
                <div class="mdl-layout__header-row">
                  <span class="android-title mdl-layout-title">
                    <img class="android-logo-image" src="images/cryptex-small.png">
                  </span>
                  <!-- Add spacer, to align navigation to the right in desktop -->
                  <div class="android-header-spacer mdl-layout-spacer"></div>
                  <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                       <!-- <i class="material-icons">search</i> -->
                    </label>
                   
                  </div>
                  <!-- Navigation -->
                  <div class="android-navigation-container">
                    <nav class="android-navigation mdl-navigation">
                      <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?php REDIRECTLINK ?>">Home</a>
                      <a class="mdl-navigation__link mdl-typography--text-uppercase" target="_blank" href="https://www.facebook.com/phoenix.cryptex/app/202980683107053/">Forum</a>

                     
                    </nav>
                  </div>
                  <span class="android-mobile-title mdl-layout-title">
                    <img class="android-logo-image" src="images/cryptex-small.png">
                  </span>
                           
                </div>
              </div>

     <?php 
  require('sider2.php');
?>

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="mdl-grid">
              <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop mdl-cell--1-offset-tablet">
                    <div class="mdl-card__title">
                      <h2 class="mdl-card__title-text">  </h2>
                    </div>

                   <center><font color = "red" size = "180%"> Leaderboard </font></center>

                   <!--  <div class="mdl-card__menu">
                      <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                        <i class="material-icons">share</i>
                      </button>
                    </div> -->
                    <!-- <img src="images/more-from-3.png" alt="">
                    <img src="images/more-from-4.png" alt="">
                    <img src="images/nexus6-on.jpg" alt=""> -->

                    <p id = 'board'>
                      <table cellspacing="2" cellpadding="2" align="center" width="100%" style="font-family: arial ;">
                        <tr style="text-align:center; font-color:red ">

                          <th>Rank</th>
                          <th>User</th>
                          <th>Name</th>
                          <th>Level</th>
                          <th>Lifelines-Left</th>
                        </tr>
                          <?php 
                          $i=1;
                          //4th message
                          $sql_query2="Select fb_id , level,username,levelskip,firstlast,anslen,profilepic from register   order by level  desc , registertime asc";
                          
                        //   echo $sql_query2;
                          $r2=mysql_query($sql_query2);
                          while($row2=mysql_fetch_array($r2))
                            {
                              if($row2['level']==60) continue;
                          ?>
                          <tr>
                            <td><center><?php echo $i++.'        '; ?></center></td>
                                                        <td><img src="
          <?php 

          
          echo $row2["profilepic"];
          
          ?>" class="demo-avatar"><center></td>
                            <td><center><?php echo $row2['username'].'        '; ?></center></td>
                            <td><center><?php echo $row2['level'].'        ';?> </center></td>
                            
                            <td><center><?php 


                            $value =0;
                            if($row2['levelskip']==-1){
                              $value++;
                            }

                            if($row2['firstlast']==-1){
                              $value++;
                            }

                            if($row2['anslen']==-1){
                              $value++;
                            }                            

                            echo $value ;

                             ?></center></td>

                          </tr><?php } ?>
                                                 </table>

                    </p>

              </div>
        </div>
     


       <?php 

    require("footer.php");
 
 ?>
    
        
    
    <script src="js/material.js"></script>
  </body>
</html>
