<?php
require("functions.php");

error_reporting(0);
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
           <!--  <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div> -->
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
                      <!-- <h2 class="mdl-card__title-text">Welcome</h2> -->
                       <!-- <center><font color = "red" size = "180%"> Welcome </font></center> -->
                    </div>

                   <!--  <div class="mdl-card__supporting-text">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Mauris sagittis pellentesque lacus eleifend lacinia...
                    </div> -->

                    <div class="mdl-card__actions mdl-card--border">
                      <!-- <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        Rules
                      </a> -->
                    </div>

                  <!-- 
                    <img src="images/more-from-3.png" alt="">
                    <img src="images/more-from-4.png" alt="">
                    <img src="images/nexus6-on.jpg" alt=""> -->

                    <div id="contents">
          <br/>
          <center><font color = "red" size = "180%"> Rules </font></center>
          </br></br>
          
          <p style = "margin-left:20px;"> The game consists of <span id = "num">32+</span>
          levels in total. Each level presents you with a “code” and a set of clues. 
          You need to crack that code using those clues to get to the next level. 
          The hints,if present, may or may not be hidden at any level. Look for them in url, 
          page title, page source, image etc. All you need is your common sense coupled with 
          observation and understanding skills.</br></br>
          The hints may deceive if looked alone but collectively they will point to a definite answer.</br></br>
          You have no limit to the number of attempts for answering a particular level. Try out each and every possibility you can think of to get to the next level.</br></br>
          <center><font color = "red" size = "150%"> Life-Lines And Hints </font></center></p></br></br>
          <p style = "margin-left:20px;">
          There are <span id = "num">3 </span> lifelines that are available <strong><font color = "red">from level 0 till level 26 </font></strong> for your help :- <br/>
          <span id = "num">1</span>.Level-Skip : This life-line will help you to skip any level of your choice <b>ONCE</b>.   <br/><br/>
          <span id = "num">2</span>.First-Last : This life-line will let you to know the first and last alphabets of answer of any <b>SINGLE</b> level of your choice.   <br/><br/>
          <span id = "num">3</span>.Answer-Length : This life-line will let you to know the Length of answer of any <b>SINGLE</b> level of your choice. NOTE THAT NO SPECIAL CHARACTERS WILL BE PRESENT ,SPACES MAY BE PRESENT.<br/><br/>
          Note that each lifeline can be used ONLY ONCE...so use wisely..!</br>

          Hints will be available in the <u>
          <a href="https://www.facebook.com/phoenix.cryptex/app_202980683107053" target="_blank">Discussion Forum</a></u> 
          on a timely basis from the mods. <br>Users can also post the hints for others to keep the game 
          going but anyone disclosing the answer will be <font color = "red">disqualified</font> 
          from the game.
          </p>
          </br></br>
        </div>

              </div>

              <!--  <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell-middle mdl-cell--10-col mdl-cell--1-offset-desktop mdl-cell--1-offset-tablet">
                    <div class="mdl-card__title">
                      <h2 class="mdl-card__title-text text-center">Answer</h2>
                    </div>
                    <div class="mdl-grid">
                      <div class="mdl-cell-middle mdl-cell--6-col mdl-cell--3-offset-desktop mdl-cell--3-offset-tablet">
                         <form action="#">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                              <input class="mdl-textfield__input" type="text" id="sample3">
                              <label class="mdl-textfield__label" for="sample3">Text...</label>
                            </div>
                            
                            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                            </button>
                          </form>
                      </div>
                    </div>
                </div> -->

             
         </div>

<?php 

    require("footer.php");
 
 ?>
      </div>
    </div>
    
    <script src="js/material.js"></script>
  </body>
</html>
