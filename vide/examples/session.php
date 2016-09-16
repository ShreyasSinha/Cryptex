<?php
 

 $access_token = $_POST['access_token'];
 $userID = $_POST['userID'];

 echo $access_token;
 echo $userID;


session_start();
$_SESSION['access_token'] = $access_token;
$_SESSION['userID'] = $userID;

?>

