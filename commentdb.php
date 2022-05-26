<?php 
session_start();
include "config.php";
//$r=@$_GET['l'];
//$tid=@$_GET['tid'];
$t=$_POST['top'];
$em=mysql_query('select emailid from signup where user_id="'.$_SESSION['d'].'"');
$fe=mysql_fetch_array($em);
$rtt=$fe['emailid'];
$date = date('m/d/Y');
mysql_query('insert into tbl_comments set  date="'.$date.'" , status="n" , topic="'.$t.'" ,user_id="'.$_SESSION['d'].'",username="'.$_SESSION['usr'].'" ,emailid="'.$rtt.'" ');
$o="1";
header('location:commenthome.php?ll='.$o);

?>