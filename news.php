<?php
include "config.php";
$nmm=$_POST['nm'];
$emm=$_POST['eem'];


$emailto = "shaniyachawla@gmail.com"; 
$subject = "News Letter Subscription "; 
$from = 'info@swapdevelopment.com'; 

$message = "<html>
<head>
<title>News email</title>
</head>
<body>
<p>This email contains News Request!</p>
<table>
<tr>
<th>Name</th>
<th>Email-Id</th>
</tr>
<tr>
<td>".$nmm."</td>
<td>".$emm."</td>
</tr>
</table>
</body>
</html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <info@swapdevelopment.com>' . "\r\n";
mail($emailto,$subject,$message,$headers);
  
   header('location:cmnt_sec.php');
 
 
 ?>