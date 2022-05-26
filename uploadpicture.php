<?php session_start(); ?>
<?php if(!isset($_SESSION['d'])) 
{
header('location:community.php'); } ?>
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
<?php include"header-inner.php" ?>
<div id="contentInner">
  <?php
 include"config.php";
  ?>
  <div class="cleaner_h40"></div>
  <div class="section_w940">
    <h2>Welcome
      <?php
    $s=mysql_query('select * from signup where user_id="'.$_SESSION['d'].'"');
     $x=mysql_fetch_array($s);
	  echo $x['username']  ?>
    </h2>
    <div class="section_w430">
      <ul style="list-style:none; text-decoration:none; font-size:14px; width:150px;">
        <li style="background: none repeat scroll 0 0 #000000; float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff" href="editprofile.php">Edit Profile</a></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff" href="commenthome.php">Comments</a></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0 ;  border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff" href="recommend.php">Recommendation</a></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff"  href="signout.php">Sign Out</a></li>
      </ul>
      <div class="cleaner_h10"></div>
    </div>
    <?php $m=@$_GET['i'] ?>
    <form name="upload" method="post" action="uploadpicdb.php?g=<?php  echo $m; ?>" enctype="multipart/form-data">
      <table>
        <tr>
          <td><input type="file" name="im"  /></td>
        </tr>
        <tr>
          <td align="center"><input type="submit" value="Save" name="s" style="border:none; padding:5px; color:#FFFFFF; background-color:#990000" /></td>
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
