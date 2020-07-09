<?php
$connection=mysqli_connect("localhost","root","","smartmethods");
 $query = "SELECT * FROM remotecontrol ORDER BY id DESC LIMIT 1;";
 $result = mysqli_query($connection,$query);
 $d="";
 while($row = mysqli_fetch_assoc($result)) {
   if($row['back'] !=NULL)
    $d='B';
    if($row['front'] !=NULL)
     $d='F';
     if($row['stop'] !=NULL)
      $d='S';
      if($row['leftd'] !=NULL)
       $d='L';
       if($row['rightd'] !=NULL)
        $d='R';
 }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="style.css">
     <title>Control</title>
   </head>
   <body class="area">
     <center><br>
       <h1><?php echo $d; ?></h1>
     </center>
  </body>
</html>
