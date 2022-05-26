<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start(); ?>
<?php include "config.php";  ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Fruit Art</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="stylesheet/styles.css" />
<script language="javascript" type="text/javascript" src="script/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="script/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="script/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
window.addEvents({
    'domready': function () { /* thumbnails example , div containers */
        new SlideItMoo({
            overallContainer: 'SlideItMoo_outer',
            elementScrolled: 'SlideItMoo_inner',
            thumbsContainer: 'SlideItMoo_items',
            itemsVisible: 5,
            elemsSlide: 2,
            duration: 150,
            itemsSelector: '.SlideItMoo_element',
            itemWidth: 158,
            showControls: 1
        });
    },

});
</script>
<script language="javascript" type="text/javascript">
function clearText(field) {
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script type="text/javascript"> 

$(document).ready(function(){
<?php 
	$q5=mysql_query('select * from tbl_comments where parent_id="0" ');  
      ?>
<?php while($row1=mysql_fetch_array($q5)) { ?>
  $("#<?php echo $row1['comment_id'] ; ?>").click(function(){
    $("#<?php echo $row1['comment_id'].'1'; ?>").toggle();

	});
<?php } ?>}); 

$(document).ready(function(){
<?php 
	$q5=mysql_query('select * from tbl_comments where parent_id="0" ');  
      ?>
<?php while($row2=mysql_fetch_array($q5)) { ?>
  $("#<?php echo $row2['comment_id'] .'3' ; ?>").click(function(){
    $("#<?php echo $row2['comment_id'].'2'; ?>").toggle();
	
});
<?php } ?>
});

</script>
</head>
<body>

<?php include"header.php" ?>
<div id="content">
<?php include "config.php";  ?> 
  <!-- end of product gallery -->
  <div class="cleaner_h40"></div>
  <div class="section_w940">
  <h2>Welcome
    <?php 
	// echo $_SESSION['usr'];
	$q1=mysql_query('select * from tbl_comments where parent_id="0" ');  
	?>
	 
      </h2>


    <div class="section_w430">
      <ul style="list-style:none; text-decoration:none; font-size:14px; width:150px;">
      <li style="background: none repeat scroll 0 0 #000000; float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"> <a style="color:#fff" href="editprofile.php">Edit Profile</a></li>
	  <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff" href="comments.php">Comments</a></li>
      <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0 ;  border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff" href="#">Member</a></li>
      <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff"  href="signout.php">Sign Out</a></li>
       </ul>
  <div class="cleaner_h10"></div>
   </div>
  <div class=" section_w430">
 <!--h3>  Your comments will be shown after permission being granted by admin</h3>-->  
   
  <table class="cmnt_sec">
	<tr><th>TOPIC</th><th>Posted By</th><th>DATE/TIME</th></tr>
    
   <?php while($row=mysql_fetch_array($q1)) { ?>
   
   <form action="cmntsecdb.php?tid=<?php echo $row['comment_id']; ?>" method="post" enctype="multipart/form-data" >
  
    <tr>
    <td> <b><?php echo strtoupper( $row['topic']); ?></b></td>      
     <td> <?php  echo $row['username'];  ?></td>
     <td> At &nbsp;<?php echo $row['date'] ;  ?></td>
	</tr>
	 
   <?php $q2=mysql_query('select * from tbl_comments where parent_id="'.$row['comment_id'].'" ');   
	$cmd=$row['comment_id'];
	//$de=mysql_query('select * from tbl_comments where parent_id="'.$cmd.'"');
	$o=mysql_num_rows($q2);?>
 <tr><td colspan="2" style="cursor:pointer; text-decoration:underline; color:#0066CC" id="<?php echo $row['comment_id'] ; ?>">Comments <?php echo ("($o)"); ?></td>
 <td id="<?php echo $row['comment_id'] .'3'; ?>"> <input type="button" value="Comment"  /></td>
 </tr>
	<tr style="display:none"  id="<?php echo $row['comment_id'].'1'; ?>" ><td colspan="3">
	<?php  while($q3=mysql_fetch_array($q2)) {
	 ?>
    <br />
         <?php echo $q3['topic'] ; ?>
		 &nbsp;By&nbsp;<?php echo $q3['username']; ?> 
		 &nbsp;At&nbsp;<?php echo $q3['date']; ?> 
		        
          
       <?php  } ?>
      </td></tr> 
  
    <tr style="display:none"  id="<?php echo $row['comment_id'].'2'; ?>" >
   
 <td><textarea name="cm" cols="20" rows="2"></textarea></td> 
    <td colspan="2" align="center"> <input type="submit" class="login_button" value="Submit"/>
   
   </td></tr>
  
       
       </form>
            <?php } ?>
         
      </table>
    
      
      <div class="cleaner_h10"></div>
      
    </div>
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>