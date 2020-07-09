<?php
$connection=mysqli_connect("localhost","root","","smartmethods");
  $sql ="";
  $direct=$_GET['direction'];
 if($direct=='f'){
   $sql = "INSERT INTO `remotecontrol` (`id`, `stop`, `back`, `front`, `leftd`, `rightd`) VALUES (NULL, NULL, NULL, 'F', NULL, NULL);";
 }
 if($direct=='b'){
    $sql = "INSERT INTO `remotecontrol` (`id`, `stop`, `back`, `front`, `leftd`, `rightd`) VALUES (NULL, NULL, 'B', NULL, NULL, NULL);";
 }
 if($direct=='s'){
    $sql = "INSERT INTO `remotecontrol` (`id`, `stop`, `back`, `front`, `leftd`, `rightd`) VALUES (NULL, 'S', NULL, NULL, NULL, NULL);";
 }
 if($direct=='l'){
   $sql = "INSERT INTO `remotecontrol` (`id`, `stop`, `back`, `front`, `leftd`, `rightd`) VALUES (NULL, NULL, NULL, NULL, 'L', NULL);";
 }
 if($direct=='r'){
   $sql = "INSERT INTO `remotecontrol` (`id`, `stop`, `back`, `front`, `leftd`, `rightd`) VALUES (NULL, NULL, NULL, NULL, NULL, 'R');";

 }
mysqli_query($connection,$sql);
header( "Location:control.php");
 ?>
