<?php
session_start();
include"config.php";
$us=$_POST['user'];
$ad=$_POST['ad'];
$cn=$_POST['cn'];
$eml=$_POST['em'];
$ps=$_POST['pass'];
//$pswrd=base64_encode($ps);
$c=$_POST['cp'];
$cpw=base64_encode($c);
$d=$_POST['date'];
$m=$_POST['month'];
$y=$_POST['year'];
$qu=$_POST['query'];
$g=$_POST['gender'];
$fst=$_POST['fn'];
$lst=$_POST['ln'];
$query1=mysql_query('select * from signup where username="'.$us.'" || emailid="'.$eml.'"');

if($data=mysql_fetch_array($query1))
{
 $meg= '1';
	 header('location:signup.php?mes='.$meg);
      }
	 
	  
   else
   { 
 mysql_query('insert into signup set username="'.$us.'" , firstname="'.$fst.'", lastname="'.$lst.'" , address="'.$ad.'" , contact_number="'.$cn.'" ,emailid="'.$eml.'" , password="'.$ps.'" , confirm_password="'.$cpw.'" , day="'.$d.'" , month="'.$m.'" , year="'.$y.'" ,query="'.$qu.'" , gender="'.$g.'" , status="n" ');
$j=mysql_insert_id();
$query2=mysql_query('select * from signup where user_id="'.$j.'"');
$data1=mysql_fetch_array($query2);
$_SESSION['usr']=$data1['username'];
$_SESSION['d']=$j;

$emailto = "$eml"; 
$subject = "Welcome to how-healthy "; 
$from = 'info@swapdevelopment.com'; 
$message = "<html>
<head>
<title>Signup email</title>
</head>
<body>
<p>Signup Notification</p>
<table>
<tr>
<th>Username</th>
<th>Email-Id</th>
<th>Password </th>
</tr>
<tr>
<td> ".$us."</td>
<td>".$eml."</td>
<td>".$ps."</td>
</tr>
</table>
</body>
</html>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
// More headers
$headers .= 'From: <info@swapdevelopment.com>'. "\r\n";
mail($emailto,$subject,$message,$headers);
 header('location:userhome.php');
}
?>





