<?php
session_start();
include "config.php";
$action="N";

$sql=mysql_query('select * from signup where user_id="'.$_SESSION['d'].'" ');
$data=mysql_fetch_array($sql);


mysql_query('insert into tbl_request set requestid="'.$_SESSION['d'].'", receiveid="'.$_GET['id'].'", status="n", confirm="'.$action.'",username="'.$data['username'].'", emailid="'.$data['emailid'].'"');
header('location:member.php');

?>