<?php 
session_start();
include "config.php";
$n=$_SESSION['d'];
$image=$_FILES['im']['name'];

move_uploaded_file($_FILES['im']['tmp_name'],'upload/'.$_FILES['im']['name']);

mysql_query('update signup set image="'.$image.'" where user_id="'.$_SESSION['d'].'"');
header('location:editprofile.php?eid='.$n);

?>