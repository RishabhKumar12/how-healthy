<?php
include "config.php";
session_start();
$tid=@$_GET['tid'];


$cmnt=$_POST['cm'];

$em=mysql_query('select emailid from signup where user_id="'.$_SESSION['d'].'"');
$fe=mysql_fetch_array($em);
$rtt=$fe['emailid'];

$d= date('m/d/Y');
mysql_query('insert into tbl_comments set username="'.$_SESSION['usr'].'",user_id="'.$_SESSION['d'].'",topic="'.$cmnt.'",date="'.$d.'",status="n",parent_id="'.$tid.'",emailid="'.$rtt.'"');

 header("location:cmnt_sec.php?u=".$tid); 
?>
