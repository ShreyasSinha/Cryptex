

<?php 
session_start();
require_once("core.php");
require_once("functions.php");

if (!isset($_SESSION["access_token"])) {
  header('Location: '.LOGINLINK);
}


if (!isset($_SESSION["email"])) {
  add_user();
}
$answer = strtolower(trim($_POST["answer"]));

$answer = str_replace(' ','',$answer);

$answer=sha1($answer);


if (checkans($answer,getlevel($_SESSION["fb_id"]))) {
     updateUser($_SESSION["fb_id"]); 
     header('Location: '.REDIRECTLINK);
}
else{
    header('Location: '.REDIRECTLINK."?msg=2");
}


?>