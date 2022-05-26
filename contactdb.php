<?php
include "config.php";
$y=$_POST['yn'];
$z=$_POST['ye'];
$c=$_POST['cm'];


$emailto = "shaniyachawla@gmail.com"; 
$subject = "Viewer Comment "; 
$from = 'info@swapdevelopment.com'; 

$message = "<html>
<head>
<title> Viewer Comment email</title>
</head>
<body>
<p>This email contains Viewer Comment!</p>
<table>
<tr>
<th>Name</th>
<th>Email-Id</th>
<th>Comment</th>
</tr>
<tr>
<td>".$y."</td>
<td>".$z."</td>
<td>".$c."</td>
</tr>
</table>
</body>
</html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <info@swapdevelopment.com>'. "\r\n";
mail($emailto,$subject,$message,$headers);
  
   header('location:home.php');
 
 
 ?>