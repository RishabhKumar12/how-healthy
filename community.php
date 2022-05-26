<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php session_start(); ?>
<head>
<title>How-Healthy</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="stylesheet/styles.css" />
<link rel="stylesheet" href="slide.css" type="text/css"  />
<script type="text/javascript" src="js/sliderjs.php">
</script>
<script language="javascript" type="text/javascript">
function valid()
{
 if(document.login.em.value=="")
 {
 document.getElementById('error-user').style.display='block'; 
 return false;
 }
   if(document.login.pass.value=="")
      {
	  document.getElementById('error-pass').style.display='block';
      return false;
	   }
         }
		function valid1()
		{
		if (document.login.user.value!="")
		document.getElementById('error-user').style.display='none'; 
		 if(document.login.pas.value!="")
	   document.getElementById('error-pass').style.display='none';
	   }
 </script>
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
<script>
function bigImg(x)
{
x.style.height="200px";
x.style.width="200px";
}

function normalImg(x)
{
x.style.height="100px";
x.style.width="100px";
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
            <li><a href="community.php" class="current"><span></span>Community</a></li>
            <li><a href="cmnt_sec.php" ><span></span>Comment Section</a></li>
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
<!-- end of header-->
<div id="contentInner">
  <div class="section_w940">
    <center>
      <h2 style="border:3px solid #e5e5e5; border-radius:5px; padding:5px">Join Our Community</h2>
    </center>
    <div style="width:600px; float:left;">
      <h2>Health Issues</h2>
      <div id="slider1" class="sliderwrapper">
        <div class="contentdiv"> <a href="allergy.php"><img src="images/alergycare.jpg" height="227" width="60%" style="float:left; padding:5px"/></a>
          <p style="width:30%; float:left; font-size:14px; "><b>Allergy</b></p>
          <p style="width:30%; float:left;">Allergy is a hypersensitive reaction of the immune system produced by several origins such as environmental factors, drugs, foods....<a href="allergy.php">Read More</a></p>
        </div>
        <div class="contentdiv"> <a href="bloodpressure.php"><img src="images/blood1.jpg" height="230px" width="60%" style="float:left; padding:5px" /></a>
          <p style="width:30%; float:left; font-size:14px;"><b>Blood Pressure</b></p>
          <p style="width:30%; float:left;">High blood pressure is a critical concern as it significantly raises the incidence of vascular disease and stroke....<a href="bloodpressure.php">Read More</a></p>
        </div>
        <div class="contentdiv"> <a href="dentalcare.php"><img src="images/dentalcare.jpg" height="228px" width="60%" style="float:left; padding:5px"/></a>
          <p style="width:30%; float:left; font-size:14px;"><b>Dental Care</b></p>
          <p style="width:30%; float:left;">Proper oral health care must be encouraged in children.As a parent, you must teach them how to properly brush and floss their teeth to help keep their teeth and gums healthy for years to come....<a href="dentalcare.php">Read More</a></p>
        </div>
        <div class="contentdiv"> <a href="haircare.php"><img src="images/hairf1.jpg" height="228px" width="60%" style="float:left; padding:5px" /></a>
          <p style="width:30%; float:left; font-size:14px;"><b>Hair Issues</b></p>
          <p style="width:30%; float:left;">Your hair is a reflection of your internal health. Taking proper care of your hair can completely redefine your beauty.To know about....<a href="haircare.php">Read More</a></p>
        </div>
        <div class="contentdiv"> <a href="jointpain.php"><img src="images/joint4.jpg" height="228px" width="60%" style="float:left; padding:5px" /></a>
          <p style="width:30%; float:left; font-size:14px;"><b>Join Pain</b></p>
          <p style="width:30%; float:left;">Joint pain is uncomfortable and frustrating, especially for those who are used to living an active life. For relief from the pain, many reach for remedies like the prescription drugs.To know about...<a href="jointpain.php">Read More</a></p>
        </div>
        <div class="contentdiv"> <a href="migrane.php"><img src="images/migrane.jpg" height="228px" width="60%" style="float:left; padding:5px" /></a>
          <p style="width:30%; float:left; font-size:14px;"><b>Migrane</b></p>
          <p style="width:30%; float:left;">Migraine attacks can cause significant pain for hours to days and be so severe that all you can think about is finding a dark, quiet place to lie down.To know about...<a href="migrane.php">Read More</a></p>
        </div>
        <div class="contentdiv"> <a href="obesity.php"><img src="images/obesity.jpg" height="228px" width="60%" style="float:left; padding:5px" /></a>
          <p style="width:30%; float:left; font-size:14px;"><b>Obesity</b></p>
          <p style="width:30%; float:left;">Overweight and obesity continue to plague a majority of men, women and children alike, placing them at considerable risk for heart disease, diabetes and fatty liver disease.To know about....<a href="obesity.php">Read More</a> </p>
        </div>
        <div class="contentdiv"> <a href="skinissues.php"><img src="images/skincare.jpg" height="228px" width="60%" style="float:left; padding:5px" /></a>
          <p style="width:30%; float:left; font-size:14px;"><b>Skin Care</b></p>
          <p style="width:30%; float:left;">Your skin is the largest organ in your body and deserves to receive as much attention as brushing your teeth twice a day.To know about....<a href="skinissues.php">Read More</a></p>
        </div>
      
      </div>
      <div id="paginate-slider1" class="pagination"> </div>
      <script type="text/javascript">

featuredcontentslider.init({
id: "slider1", //id of main slider DIV
contentsource: ["inline", ""], //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
toc: "#increment", //Valid values: "#increment", "markup", ["label1", "label2", etc]
nextprev: ["Previous", "Next"], //labels for "prev" and "next" links. Set to "" to hide.
enablefade: [true, 0.2], //[true/false, fadedegree]
autorotate: [true, 3000], //[true/false, pausetime]
onChange: function(previndex, curindex, contentdivs){ //event handler fired whenever script changes slide
//previndex holds index of last slide viewed b4 current (0=1st slide, 1=2nd etc)
//curindex holds index of currently shown slide (0=1st slide, 1=2nd etc)
}
})

</script>
      <div class="cleaner"></div>
    </div>
    <div style= "float:right; width:300px">
      <?php if(!isset($_SESSION['d'])) {?>
      <h2>Log In</h2>
      <form name="login" method="post" action="communitydb.php">
        <table class="login">
          <tr>
            <td>Email-Id</td>
            <td><input type="text" name="em" style="border:none; padding:5px; width:145px;" id="t1" placeholder="Email-Id"  onkeyup="valid1();"/></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><span id="error-user" style="display:none; color:#DD0000; font-size:12px;" >Enter Your Email-id</span></td>
          </tr>
          <tr>
            <td>Password</font></td>
            <td><input type="password" name="pass" style="border:none; padding:5px; width:145px;" id="t2" placeholder="Password"   onkeyup="valid1();"/></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><span id="error-pass" style="display:none; color:#DD0000; font-size:12px"  >Enter Your Password</span></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" value="LogIn"  class="login_button" onclick="return valid();" /></td>
            </td>
          </tr>
          <tr>
            <td align="left" style="font-size:12px"><a href="signup.php"><font color="#FF0000">Sign Up</font></a></td>
            <td align="right"  style="font-size:12px"><a href="frgtpswrd.php"><font color="#FF0000">Forget Password</font></a></td>
          </tr>
        </table>
      </form>
      <?php } else { ?>
      <p style="margin-top:40px">
        <iframe width="300px" height="315" src="http://www.youtube.com/embed/UKJ1XSQwjXE" frameborder="0" allowfullscreen></iframe>
      </p>
      <?php } ?>
    </div>
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>
