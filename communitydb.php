<?php
session_start();
include('config.php');

$eml=$_POST['em'];
$ps=$_POST['pass'];

$query1=mysql_query('select * from signup where emailid="'.$eml.'" && password="'.$ps.'"');
 $data=mysql_fetch_array($query1);
 $_SESSION['d']=$data['user_id'];
   $_SESSION['usr']=$data['username'];
if($_SESSION['d']!="" && $_SESSION['usr']!="")
  {
   header('location:userhome.php');
      }
   else
   {
    $msg='Invalid EmailId OR Password';
	header('location:community.php?mes='.$msg);
     }
	  

   ?>