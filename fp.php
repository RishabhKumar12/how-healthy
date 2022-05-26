<?php
include "config.php";
if($_POST){
$p=$_POST['email'];


$s=mysql_query('select * from signup where emailid="'.$p.'"');
$d=mysql_fetch_array($s);
$f=$d['password'];


$emailto = "$p"; 
$subject = "Forget Password "; 
$from = 'info@swapdevelopment.com'; 

$message = "<html>
<head>
<title>User forget Password Email</title>
</head>
<body>
<p>This email contains User's Password</p>
<table>
<tr>

<th>Email-Id</th>
<th>Password</th>
</tr>
<tr>
<td>".$p."</td>
<td>".$f."</td>
</tr>
</table>
</body>
</html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <info@swapdevelopment.com>'. "\r\n";
mail($emailto,$subject,$message,$headers);
 
 $vv="Email is successfully sent";
  header('location:home.php?mesg='.$vv);
   }
	else
{
$xx="Error sending email";
header('location:frgtpswrd.php?wrg='.$xx);
} 
 
 ?>
