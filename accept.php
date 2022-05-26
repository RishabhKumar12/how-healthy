<?php
session_start();
include "config.php";
$acc=$_GET['sa'];

$rej=$_GET['sr'];

if($acc!="")
{
mysql_query('update tbl_request set confirm="Y" where receiveid="'.$_SESSION['d'].'" && requestid="'.$acc.'"');
header('location:userhome.php');
}

if($rej!="")
{
mysql_query('delete from tbl_request  where receiveid="'.$_SESSION['d'].'" && requestid="'.$rej.'"');
header('location:userhome.php');
}

?>