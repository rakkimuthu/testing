<?php 
session_start();
function index(){  
if (empty($_SESSION["username"])) {
   header("location:index.php");
}   
}
function success(){
if (isset($_SESSION["username"])) {
   header("location: success.php");
}
}
?>