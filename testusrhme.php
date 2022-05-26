<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
</head>
<body>

<?php include"header.php" ?>
<div id="content">
  
  <!-- end of product gallery -->

 <?php
 include"config.php";
  ?>

  <div class="cleaner_h40"></div>
  <div class="section_w940">
    <h2>Welcome
    <?php 
	  $j=@$_GET['i'];
	  $s=mysql_query('select * from signup where user_id="'.$j.'" '); 
	  $f=mysql_fetch_array($s);
	  echo $f['username'];  ?>
      </h2>
    <div class="section_w430">
    <ul style="list-style:none; text-decoration:none; font-size:14px; width:150px;">
  <li style="background: none repeat scroll 0 0 #000000; float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><?php echo '<a style="color:#fff" href="editprofile.php?eid='.$j.'">Edit Profile</a>'?></li>
	  <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><?php echo '<a style="color:#fff" href="commenthome.php?k='.$j.'">Comments</a>'?></li>
      <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0 ;  border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff" href="#">Member</a></li>
      <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff"  href="signout.php">Sign Out</a></li>
       </ul>
   
      <div class="cleaner_h10"></div>
     
    </div>
  
  <form name="usrhme" method="post" action="" enctype="multipart/form-data">
    <!--input type="hidden" name="h1" value="<?php echo $f['user_id'];?>" />-->
  <table style="padding:20px">
  <label class="userim">
  <?php if($f['image']!="") { ?>
  <?php echo '<img style=" height:100px; width:100px;" src="upload/'.$f['image'].'" >'; ?>
   
  <?php } else {?>
  <img src="images/default_profile_pic.jpg" height="100px" width="100px" title="Username" alt="Username"  />
 
 <?php } ?>
  </label>

  <tr><td style="color:#AA0000; font-size:14px;">Username</td>
  <td style="font-size:12px;"><?php echo $f['username'];?></td></tr>
  <tr><td><span><?php if( @$_GET['mes']==1) { echo 'User Already Exist'; }?></span></td></tr>
  
 
  <tr><td style="color:#AA0000;font-size:14px;">Address</td>
  <td  style="font-size:12px;"><?php echo $f['address'];?></td>
 
 
  <tr><td style="color:#AA0000;font-size:14px;">Contact Number</td>
  <td  style="font-size:12px;"><?php echo $f['contact_number'];?></td></tr>

  <tr><td style="color:#AA0000;font-size:14px;">Email-Id</td>
  <td><?php echo $f['emailid'];?></td></tr>
  
  <tr><td style="color:#AA0000;font-size:14px;">Password</td>
   <td  style="font-size:12px;"><?php echo $f['password'];?></td></tr>
  
   <tr><td style="color:#AA0000;font-size:14px;">Date Of Birth</td>
        <td  style="font-size:12px;"><?php echo $f['day'];?> <?php echo $f['month'];?> <?php echo $f['year'];?></td></tr>
        
     
     <tr><td style="color:#AA0000;font-size:14px;">Gender</td>
     <td  style="font-size:12px;"><?php echo $f['gender'];?></td></tr>
     
     
    
    </table>
  
     </form> 
       
        <div class=" section_w430">
     
      
      
      
      
      <div class="cleaner_h10"></div>
     
    </div>
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>



