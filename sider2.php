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
          
          
        </nav>
      </div>