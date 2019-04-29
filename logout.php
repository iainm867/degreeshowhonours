<?php session_start(); /* Starts the session */ /* THIS WAS A ADAPTED FROM A TUTORIAL FROM W3SCHOOLS */
session_destroy(); /* Destroy started session */
header("location:login.php");
exit;
?>
