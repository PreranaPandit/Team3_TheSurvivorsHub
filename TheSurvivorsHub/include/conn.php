<?php
  $server = "localhost"; //host is the localhost of computer
  $username = "root"; //username is root by default of mysql
  $password = "";  //password is null by default of mysql
  $database = "prerana_lcdc"; //name of database

  //passing created variables
  $conn = mysqli_connect($server,$username,$password,$database) or die('Could not connect database'); 
?>
