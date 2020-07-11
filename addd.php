<?php
$connection=mysqli_connect("localhost","root","","smartmethods");
$loc=$_POST["location"];
$r=$_POST["right"];
$f=$_POST["forward"];
$l=$_POST["left"];
$sql = "INSERT INTO `autocontrol` (`id`, `leftD`, `rightD`, `front`, `location`) VALUES (NULL, '$l', '$r', '$f', '$loc');";
mysqli_query($connection,$sql);
header( "Location:autocontrol.php");
 ?>
