<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start(); ?>
<?php if(!isset($_SESSION['d'])) 
{
header('location:community.php'); } ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>How-Healthy</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="healthadmin/stylesheet/styles.css" />
<link rel="stylesheet" href="stylesheet/css/lightbox.css" media="screen" type="text/css" />
<link rel="stylesheet" href="stylesheet/css/screen.css" media="screen" type="text/css" />
<script language="javascript" type="text/javascript" src="healthadmin/script/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="healthadmin/script/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="healthadmin/script/slideitmoo-1.1.js"></script>
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
  <?php include "config.php";  ?>
  <!-- end of product gallery -->
  <div class="cleaner_h40"></div>
  <div class="section_w940">
    <h2>Welcome <?php echo $_SESSION['usr']; ?> </h2>
    <div class="section_w430">
      <ul style="list-style:none; text-decoration:none; font-size:14px; width:150px;">
        <li style="background: none repeat scroll 0 0 #000000; float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"> <a style="color:#fff" href="editprofile.php">Edit Profile</a></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff" href="commenthome.php">Comments</a></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0 ;  border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff" href="recommend.php">Recommendation</a></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff"  href="signout.php">Sign Out</a></li>
      </ul>
      <div class="cleaner_h10"></div>
    </div>
    <div class=" section_w430">
      <?php $s3=mysql_query('select query from signup where user_id="'.$_SESSION['d'].'"');
 $query3=mysql_fetch_array($s3);
 $sq=$query3['query'];
 $s4= mysql_query('select image_name,image_info from tbl_recommend where topic="'.$sq.'"');
 while($sq2=mysql_fetch_array($s4))
 {
 ?>
      <div class="set">
        <div class="single first">
          <div class="recom" style="float:left;  margin:0 10px 10px 10px;  width:24%;"> <a href="../images/<?php echo $sq2['image_name']; ?>" rel="lightbox[plants]" title="Click on the right side of the image to move forward."><img src="../images/<?php echo $sq2['image_name']; ?>" height="100px" width="100px" alt="Plants: image 1 0f 4 thumb" style="border:3px solid #e5e5e5; border-radius:5px"/></a>
            <p style="font-family: calibri;"> <?php echo $sq2['image_info']; ?> </p>
          </div>
        </div>
      </div>
      <?php } ?>
      <div class="cleaner_h10"></div>
    </div>
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>
