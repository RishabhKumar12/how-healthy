<?php
session_start();
include"config.php";
?>
<?php
$h2=$_POST['h1'];
$us=$_POST['user'];
$ad=$_POST['ad'];
$cn=$_POST['cn'];
$eml=$_POST['em'];
$ps=$_POST['pass'];
//$pswrd=base64_encode($ps);
$d=$_POST['date'];
$m=$_POST['month'];
$y=$_POST['year'];
$g=$_POST['gender'];
$q=$_POST['qu'];


if($q==""){
$number=mysql_query('update signup set username="'.$us.'" , address="'.$ad.'" , contact_number="'.$cn.'" ,emailid="'.$eml.'" , password="'.$ps.'", day="'.$d.'" , month="'.$m.'" , year="'.$y.'", gender="'.$g.'"  where user_id="'.$h2.'" ');

}
else{
$number=mysql_query('update signup set username="'.$us.'" , address="'.$ad.'" , contact_number="'.$cn.'" ,emailid="'.$eml.'" , password="'.$ps.'", day="'.$d.'" , month="'.$m.'" , year="'.$y.'" ,query="'.$q.'", gender="'.$g.'"  where user_id="'.$h2.'" ');
 }
 
header('location:userhome.php?i='.$h2);


?>