<?php
session_start(); 
if($_SESSION['email'] == NULL){
   header('Location: index.php');
}
?>
<html>
<?php  include './umum/header.php' ?>
<body>
<?php  include './umum/Navbar.php' ?>


</body>