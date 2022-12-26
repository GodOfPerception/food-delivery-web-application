<!--

/***************************************************************************************/
*    Title: eatlunchbox                                                                * 
*    Author: Shashank Shrivastav                                                       *
*    Email: contactshashank10@gmail.com                                                *
*    Date: 2019                                                                        *
*    Code version: 1.0                                                                 *
*    Availability: https://github.com/GodOfPerceptionn                                 *
*                                                                                      *
/***************************************************************************************/
(Version 1.0) [Source code]. https://github.com/GodOfPerception

 -->

<?php 
	session_start();
	session_unset();
	session_destroy();
	header("location:admin-login.php");

?>