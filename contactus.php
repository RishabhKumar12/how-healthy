<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>How-Healthy</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="stylesheet/styles.css" />
<link rel="stylesheet" type="text/css" href="hackk.css">
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
            <li><a href="exercise.php" ><span></span>Exercise</a></li>
            <li><a href="nutrition.php" ><span></span>Nutrition</a></li>
            <li><a href="community.php" ><span></span>Community</a></li>
            <li><a href="cmnt_sec.php" ><span></span>Comment Section</a></li>
            <li><a href="contactus.php" class="current"><span></span>Contact Us</a></li>
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
<!-- end of header-->
<div id="contentInner">
  <div class="section_w940">
    <div class="cleaner_h40"></div>
    <center>
      <div style="width:500px; float:right; margin-top:50px">
        <form name="contact" method="post" action="contactdb.php" enctype="multipart/form-data">
          <table>
            <tr>
              <td> Your Name</td>
              <td><input type="text" name="yn" size="30px" style="width:202px"/></td>
            </tr>
            <tr>
              <td>Your Email</td>
              <td><input type="text" name="ye" size="30px" style="width:202px"/></td>
            </tr>
            <tr>
              <td>Comment</td>
              <td><textarea rows="4" cols="23" name="cm" style=" -bracket-:hack(;color:black; width:200px; );"></textarea></td>
            </tr>
            <tr>
              <td colspan="2" align="right"><input type="submit" value="Send" style="border:none; padding:5px; background-color:#990000; color:#FFFFFF;" /></td>
            </tr>
          </table>
        </form>
      </div>
    </center>
    <div style="float:left; width:300px;">
      <p style="font-size:14px"><b>Contact Information</p>
      </b><br />
      <iframe width="300" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&amp;q=Malerkotla,punjab&amp;ie=UTF8&amp;hq=&amp;hnear=Maler+Kotla,+Sangrur,+Punjab,+India&amp;t=m&amp;z=14&amp;ll=30.526381,75.878464&amp;output=embed"></iframe>
      <br />
      <br />
      <p style="font-size:14px"><b>Email-Id:</b>&nbsp;anjalisharma1325476@gmail.com</p>
      <div class="cleaner_h40"></div>
    </div>
  </div>
  <div class="cleaner"></div>
</div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>
