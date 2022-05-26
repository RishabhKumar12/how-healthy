<?php session_start(); ?>
<?php if(!isset($_SESSION['d'])) 
{
header('location:community.php'); 
} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>How-Healthy</title>
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
<!-- start of header-->
<div id="site_title_bar_wrapper_outterInnerpage">
  <div id="site_title_bar_wrapper_inner">
    <div id="site_title_barInner">
      <div id="banner_left">
        <div id="site_title">
          <h1><a href="#"><img src="images/logo.png"/> </a></h1>
        </div>
        <div id="menu">
          <ul>
            <li><a href="home.php"><span></span>Home</a></li>
            <li><a href="exercise.php"><span></span>Exercise</a></li>
            <li><a href="nutrition.php"><span></span>Nutrition</a></li>
            <li><a href="community.php" class="current"><span></span>Community</a></li>
             <li><a href="cmnt_sec.php"><span></span>Comment Section</a></li>
            <li><a href="contactus.php"><span></span>Contact Us</a></li>
           
          </ul>
        </div>
        <!-- end of menu -->
      </div>
    </div>
    <!-- end of site_title_bar  -->
  </div>
  <!-- end of site_title_bar_wrapper_inner -->
</div>
<!-- end of site_title_bar_wrapper_outter  -->
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/lightbox.js"></script>
<!-- end of header-->
<div id="contentInner">
  <?php
 include"config.php";
  ?>
  <div class="section_w940">
    <h2>Welcome
      <?php 
    $j=@$_GET['i'];
	
    $s=mysql_query('select * from signup where user_id="'.$_SESSION['d'].'"');
    $f=mysql_fetch_array($s);
	//echo $f['username'];
	//$dd=$f['user_id'];
	echo $_SESSION['usr'];
	    ?>
    </h2>
    <div style="width:300px; float:left">
      <ul style="list-style:none; text-decoration:none; font-size:14px; width:150px;">
        <li style="background: none repeat scroll 0 0 #000000; float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><?php echo '<a style="color:#fff" href="editprofile.php">Edit Profile</a>'?></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><?php echo '<a style="color:#fff" href="commenthome.php">Comments</a>'?></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0 ;  border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff" href="recommend.php">Recommendation</a></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff"  href="signout.php">Sign Out</a></li>
      </ul>
    </div>
    <div style="width:450px; float:left">
      <form name="usrhme" method="post" action="" enctype="multipart/form-data" class="userhome">
        <label class="userim">
        <?php if($f['image']!="") { ?>
        <?php echo '<img style=" height:100px; width:100px;" src="upload/'.$f['image'].'" >'; ?>
        <?php } else {?>
        <img src="images/default_profile_pic.jpg" height="100px" width="100px" title="Username" alt="Username"  />
        <?php } ?>
        </label>
        <table style="padding:10px;">
          <tr>
            <td style="color:#990000; font-size:13px; width:40%"> Username </td>
            <td style="width:40%"><?php echo $f['username'];?></td>
          </tr>
          <tr>
            <td style="color:#990000; font-size:13px; width:40%">Firstname</td>
            <td style="width:40%"><?php echo $f['firstname']; ?></td>
          </tr>
          <tr>
            <td style="color:#990000; font-size:13px;">Lastname</td>
            <td style="width:40%"><?php echo $f['lastname']; ?></td>
          </tr>
          <tr>
            <td style="color:#990000; font-size:13px;  width:40%">Address</td>
            <td style="width:40%"><?php echo $f['address'];?></td>
          </tr>
          <tr>
            <td style="color:#990000; font-size:13px;  width:40%">Contact Number</td>
            <td style="width:40%"><?php echo $f['contact_number'];?></td>
          </tr>
          <tr>
            <td style="color:#990000; font-size:13px;  width:40%">Email-Id</td>
            <td style="width:40%"><?php echo $f['emailid'];?></td>
          </tr>
          <tr>
            <td style="color:#990000; font-size:13px;  width:40%">Date Of Birth</td>
            <td style="width:40%"><?php echo $f['day'];?> <?php echo $f['month'];?> <?php echo $f['year'];?></td>
          </tr>
          <tr>
            <td style="color:#990000; font-size:13px;  width:40%">Query Regarding</td>
            <td style="width:40%"><?php echo $f['query'];?></td>
          </tr>
          <tr>
            <td style="color:#990000; font-size:13px;  width:40%">Gender</td>
            <td style="width:40%"><?php echo $f['gender'];?></td>
          </tr>
        </table>
      </form>
      <div class="cleaner_h10"></div>
    </div>
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>
