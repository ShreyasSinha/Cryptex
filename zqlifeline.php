<?php


 //session_start();
require_once("core.php");
require("functions.php");

if (!isset($_SESSION["access_token"])) {
  header('Location: '.LOGINLINK);
}


if (!isset($_SESSION["email"])) {
  add_user();
}
$life = $_POST["name"];
 
echo getLifeline($life);
?>