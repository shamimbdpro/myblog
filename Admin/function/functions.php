<?php
  require_once('../config.php');
 session_start();
 function get_header(){
	 require_once('includes/header.php');
 }

 function get_sidebar(){
	 require_once('includes/sidebar.php');
 }

 function get_breadcum(){

	 require_once('includes/breadcum.php');
 }
 function get_footer(){
	 require_once('includes/footer.php');
 }

 function get_logId(){
   return !empty($_SESSION['user_id']) ? true:false;
 }
 function needLogged(){
   $check=get_logId();
   if(!$check){
     header('Location:login.php');
   }
 }
?>
