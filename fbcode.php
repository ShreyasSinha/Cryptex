<div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
    //  console.log('statusChangeCallback');
     
      // The response object is returned with a status field that lets the
      // app know the current login status of the person.
      // Full docs on the response object can be found in the documentation
      // for FB.getLoginStatus().
      if (response.status === 'connected') {
        // Logged into your app and Facebook.
      //  console.log("getting string access token");

        // console.log(JSON.stringify(response));
        // var json_str = JSON.stringify(response);
       // console.log(json_str);

          
          var access_token = response.authResponse.accessToken;
          var userID = response.authResponse.userID;

          // console.log(" result is : " + access_token + " and   " + userID);
        $.post("session.php",{access_token : access_token , userID : userID});



 
        window.location.href = "http://localhost/~shreyas/Cryptex/index.php";  



        testAPI();
        // if(isset($_SESSION['username']) && isset($_SESSION['accessToken']))
        //         window.location.href = "http://localhost/Cryptex/";
      } else if (response.status === 'not_authorized') {
        // The person is logged into Facebook, but not your app.
       // document.getElementById('status').innerHTML = 'Please log ' +'into this app.';
      } 

      else {
      // document.getElementById('status').innerHTML = 'Please log ' +   'into Facebook.';
       
      }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);

        
        if(response.status==='connected')
        { //console.log('i am after login connected');
            // console.log(JSON.stringify(response));  
            window.location.href = "http://localhost/~shreyas/Cryptex/index.php";
          }
        else
          {//console.log('i am not connected');
           
          }
        

      });
    }

    window.fbAsyncInit = function() {
    FB.init({
      appId      :  '964170843665207',//'1586930044872360',
      cookie     : true,  // enable cookies to allow the server to access 
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.2' // use version 2.2
    });

    // Now that we've initialized the JavaScript SDK, we call 
    // FB.getLoginStatus().  This function gets the state of the
    // person visiting this page and can return one of three states to
    // the callback you provide.  They can be:
    //
    // 1. Logged into your app ('connected')
    // 2. Logged into Facebook, but not your app ('not_authorized')
    // 3. Not logged into Facebook and can't tell if they are logged into
    //    your app or not.
    //
    // These three cases are handled in the callback function.

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response); 

       if(response.status==='connected')
        { //console.log('i am connected');
           window.location.href = "http://localhost/~shreyas/Cryptex/index.php";
        
        }
        else
          {//console.log('i am not before login connected');
            
          }
    });

    };

    // Load the SDK asynchronously
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
     // console.log('Welcome!  Fetching your information.... ');
    

    // FB.api("/me?fields=id,name,email,first_name,last_name,age_range,link,gender,locale,picture,timezone,updated_time , verified", function (response) {
    //   if (response && !response.error) {
         
    //     if(isset($_SESSION['userID']) && isset($_SESSION['accessToken']))
    //             window.location.href = "http://localhost/Cryptex/";
    //     // console.log(JSON.stringify(response));
    //     /* handle the result */

    //   }
    //   else {
    //     console.log("fb is disconnected");
    //     $("#fbdetails").hide();
    //   }
    // });
    }
  </script>
   

  <!--
    Below we include the Login Button social plugin. This button uses
    the JavaScript SDK to present a graphical Login button that triggers
    the FB.login() function when clicked.
  -->

 
  </div>

