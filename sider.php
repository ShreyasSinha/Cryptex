<div class="android-drawer mdl-layout__drawer ">
         <header class="demo-drawer-header mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
          <img src="
          <?php 

          $profilepic=$_SESSION['pic'];
          
          echo $profilepic;
          
          ?>" class="demo-avatar">
          <span>
          <?php 

          
          echo $_SESSION["name"];
         
          ?>
          </span>
         
        </header>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="index.php">Home</a>
          <a class="mdl-navigation__link" href="leaderboard.php">LeaderBoard</a>
          <a class="mdl-navigation__link" href="rules.php">Rules</a>
          
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Life Lines</span>
          <ul>
          <li class="mdl-navigation__link" id="ls">Level Skip</li>
          <li class="mdl-navigation__link" id="fl">First Last</li>
          <li class="mdl-navigation__link" id="al">Answer Length</li>
          </ul>
        </nav>
      </div>