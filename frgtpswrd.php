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

<script language="JavaScript">
<!--
function calculateBmi() {
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){ 
var finalBmi = weight/(height/100*height/100)
document.bmiForm.bmi.value = finalBmi
if(finalBmi < 18.5){
document.bmiForm.meaning.value = "That you are too thin."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "That you are healthy."
}
if(finalBmi > 25){
document.bmiForm.meaning.value = "That you have overweight."
}
}
else{
alert("Please Fill in everything correctly")
}
}
//-->
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


<!-- end of header-->

<div id="contentInner">
<div class="section_w940">
<?php $iii=@$_GET['wrg'];?>
<div style="width:300px; float:left; border:3px solid #e5e5e5; border-radius:5px">
<h2>Tips Of Healthy Eating</h2>


 <p><b>1.Eat a balanced diet</b></p> 
 <p><b>2.Drink more water</b></p>
  <p><b>3.Don’t skip breakfast</b></p>
  <p><b>4.Eat less salt</b></p>
  <p><b>5.Keep junk out of your body</b></p>
  <p><b>6.Eat slowly</b></p>
 <p><b>7.Take time out to relax</b></p>
 <p><b>8.Cut down on smoking and drinking</b></p>
 <p><b>9.Cut down on saturated fat and sugar</b> </p>
 <p><b>10.Eat lots of fruit and vegetables</b> </p>
 </div>
 
 
 
 <div style="width:250px; margin:50px 0 0 50px; float:left">
<form name="forgot" method="post" action="fp.php">
<table>
<tr><td>Your Email-Id</td>
<td><input type="text" name="email" placeholder="Insert Email_Id" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="s" value="Submit" style="border:none; padding:5px; color:#FFFFFF; background-color:#990000"  /></td></tr>
</table>
</form>
</div>
 
 
 
 
<div style="width:300px; float:right; border:3px solid #e5e5e5; border-radius:5px">
 <label style="width:100px; float:left; height:230px">
 <img src="images/app.jpg" height="100px" width="100px"  />
 </label>
 <h2>5 health benefits of eating apples</h2>
 
 <p><b>1. Get whiter, healthier teeth</b></p>
  <p><b>2. Decrease your risk of diabetes</b></p>
   <p><b>3. Reduce cholesterol</b></p>
    <p><b>4. Get a healthier heart</b></p>
	 <p><b>5. Control your weight</b></p>
  </div> 
 
 <div class="cleaner_h10"></div>
    </div>
  
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>

     
     
     