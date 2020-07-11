<?php
$connection=mysqli_connect("localhost","root","","smartmethods");
 ?>
<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="style2.css">
     <title>Control</title>
   </head>
   <body class="area">
     <center class="context">
       <form method="post" method="POST"   action="addd.php">
            <label>Name of location: <br><input type="text" id="location" name="location"></label><br>
            <label>Right: <br><input type="text" id="r" name="right" onchange="drawR();"></label><br>
            <label>Forward: <br><input type="text" id="f" name="forward" onchange="drawF();"></label><br>
            <label>Left: <br><input type="text" id="l" name="left" onchange="drawL();";></label><br><br>
            <input type="submit" value="Save"  id="submit">
            <input type="reset" value="Delete" onclick="clearc();"><br>
       </form><br>
       <canvas id="myCanvas" width="300" height="200"  style="border:1px solid #000000; background:white;">
      </canvas>

     <table>
    <tr>
    <th>Location Name</th>
    <th>Right</th>
    <th>Forward</th>
    <th>Left</th>
    </tr>
<?php
$query1 = "SELECT * FROM autocontrol";
$result1 = mysqli_query($connection,$query1);
while($row = mysqli_fetch_assoc($result1)) {
  $output="<tr>"
  		.'<td>'.$row['location']."</td>"
      .'<td>'.$row['rightD']."</td>"
      .'<td>'.$row['front']."</td>"
      .'<td>'.$row['leftD']."</td>"
  		."</tr>";
  echo $output;
}

 ?>
 </table>
 </center>
     <script>
        var x1=150;
        var y1=150;
       function drawL(){
       var c = document.getElementById("myCanvas");
       var l = document.getElementById("l").value;
       var length =  parseInt(l);
       var angle = 180;
       var x2 = x1 + Math.cos(Math.PI * angle / 180) * length;
       var y2 = y1 + Math.sin(Math.PI * angle / 180) * length;
       var ctx = c.getContext("2d");
       ctx.beginPath();
       ctx.moveTo(x1, y1);
       ctx.lineTo(x2, y2);
       ctx.stroke();
       x1=x2;
       y1=y2;
     }
     function drawR(){
     var c = document.getElementById("myCanvas");
     var r = document.getElementById("r").value;;
     var length =  parseInt(r);
     var angle = 0;
     var x2 = x1 + Math.cos(Math.PI * angle / 180) * length;
     var y2 = y1 + Math.sin(Math.PI * angle / 180) * length;
     var ctx = c.getContext("2d");
     ctx.beginPath();
     ctx.moveTo(x1, y1);
     ctx.lineTo(x2, y2);
     ctx.stroke();
     x1=x2;
     y1=y2;
   }
   function drawF(){
   var c = document.getElementById("myCanvas");
   var f = document.getElementById("f").value;;
   var length =  parseInt(f);
   var angle = 270;
   var x2 = x1 + Math.cos(Math.PI * angle / 180) * length;
   var y2 = y1 + Math.sin(Math.PI * angle / 180) * length;
   var ctx = c.getContext("2d");
   ctx.beginPath();
   ctx.moveTo(x1, y1);
   ctx.lineTo(x2, y2);
   ctx.stroke();
   x1=x2;
   y1=y2;
 }
 function clearc(){
   var canvas = document.getElementById('myCanvas');
   var context = canvas.getContext('2d');
   context.clearRect(0, 0, canvas.width, canvas.height);


 }
     </script>
   </body>
 </html>
