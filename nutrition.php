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
<style type="text/css">
<!--
#sponsorAdDiv {position:absolute; height:1; width:1px; top:0; left:0;}
-->
</style>
<script type="text/javascript">

/******************************************
* DHTML Ad Box (By Matt Gabbert at http://www.nolag.com)
* Visit http://www.dynamicdrive.com/ for full script
* This notice must stay intact for use
******************************************/

adTime=10;  // seconds ad reminder is shown
chanceAd=1; // ad will be shown 1 in X times (put 1 for everytime)

var ns=(document.layers);
var ie=(document.all);
var w3=(document.getElementById && !ie);
var calunit=ns? "" : "px"
adCount=0;
function initAd(){
	if(!ns && !ie && !w3) return;
	if(ie)		adDiv=eval('document.all.sponsorAdDiv.style');
	else if(ns)	adDiv=eval('document.layers["sponsorAdDiv"]');
	else if(w3)	adDiv=eval('document.getElementById("sponsorAdDiv").style');
	randAd=Math.ceil(Math.random()*chanceAd);
        if (ie||w3)
        adDiv.visibility="visible";
        else
        adDiv.visibility ="show";
	if(randAd==1) showAd();
}
function showAd(){
if(adCount<adTime*10){adCount+=1;
	if (ie){documentWidth  =truebody().offsetWidth/2+truebody().scrollLeft-20;
	documentHeight =truebody().offsetHeight/2+truebody().scrollTop-20;}	
	else if (ns){documentWidth=window.innerWidth/2+window.pageXOffset-20;
	documentHeight=window.innerHeight/2+window.pageYOffset-20;} 
	else if (w3){documentWidth=self.innerWidth/2+window.pageXOffset-20;
	documentHeight=self.innerHeight/2+window.pageYOffset-20;} 
	adDiv.left=documentWidth-200+calunit;adDiv.top =documentHeight-200+calunit;
	setTimeout("showAd()",100);}else closeAd();
}
function closeAd(){
if (ie||w3)
adDiv.display="none";
else
adDiv.visibility ="hide";
}

function truebody(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

onload=initAd;
//End-->
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
            <li><a href="nutrition.php" class="current"><span></span>Nutrition</a></li>
            <li><a href="community.php"><span></span>Community</a></li>
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
  <p style="float:left; color:#990000; font-size:15px; font-family:Arial, Helvetica, sans-serif; width:100%"><b>What Is Nutrition? Why Is Nutrition Important?</b></p>
  <!-- end of product gallery -->
  <div class="section_w940">
    <div style="width:600px; float:left"> <br />
      <p style="font-size:13px;"><b>Nutrition </b>, nourishment, or aliment, is the supply of materials - food - required by organisms and cells to stay alive. In science and human medicine, nutrition is the science or practice of consuming and utilizing foods.</p>
      <p style="font-size:13px;">Nutritional science studies how the body breaks food down (catabolism) and repairs and creates cells and tissue (anabolism) - catabolism and anabolism = metabolism. Nutritional science also examines how the body responds to food. In other words, "nutritional science investigates the metabolic and physiological responses of the body to diet".</p>
      <p style="font-size:13px;">Nutrition also focuses on how diseases, conditions and problems can be prevented or lessened with a healthy diet.</p>
      <p style="font-size:13px;">Nutrition also involves identifying how certain diseases, conditions or problems may be caused by dietary factors, such as poor diet (malnutrition), food allergies, metabolic diseases, etc. </p>
      <p style="font-size:13px;">Food provides the energy and nutrients you need to be healthy. Nutrients include proteins, carbohydrates, fats, vitamins, minerals and water.</p>
      <p style="font-size:13px;">Learning to eat nutritiously is not hard. The key is to</p>
      <ul style="font-size:13px;">
        <p>
        <li>Eat a variety of foods, including vegetables, fruits and whole-grain products</li>
        </p>
        <p>
        <li> Eat lean meats, poultry, fish, beans and low-fat dairy products</li>
        </p>
        <p>
        <li> Drink lots of water</li>
        </p>
        <p>
        <li> Go easy on the salt, sugar, alcohol, saturated fat and trans fat</li>
        </p>
      </ul>
      <p style="float:left; color:#990000; font-size:16px; width:600px"><b>The Five Tips That Nutre You :</b></p>
      <p style="font-size:13px;"><b>1) Eat Off a Smaller Plate at Dinner:</b></p>
      <p style="font-size:13px;">You may not have noticed but the size of your dinner plate has morphed over the past century.   
        According to research, the size of the standard dinner plate has increased 22 percent in diameter, from  about 10 inches in 1900 to almost 12 inches in 2010.  Let’s face it: the bigger the plate, the more you will heap on and eat.   Join the Smaller Plate Movement and commit to eating off a plate that is only 9 to 10 inches in diameter at your largest meal of the day.  Do this for a month and you will be shocked as to how effective this one small change can make in shrinking your waist.</p>
      <p style="font-size:13px;"><b>2) Load Up on Waist-Friendly Veggies and Fruit:</b></p>
      <p style="font-size:13px;">According to research, one of the best strategies for losing weight is to make sure that half of your plate is loaded with low calorie, high-volume veggies and fruit to crowd out more calorically-dense foods such as fatty meats and fried foods: <br />
        <img src="images/n3.jpg"/>
      <p style="font-size:13px;">By adding tons of low calorie veggies such roasted peppers and onions and sliced fruit such as pears and pineapple to your plate, you will reduce the calories but not the sizeor the satisfaction of your meal.   Veggies and fruit fill you up before they fill you out.  If you do this daily, you could be a smaller size by spring.</p>
      <p style="font-size:13px;"><b>3) Go for the Whole Grains:</b></p>
      <p style="font-size:13px;">Researchsuggests that a healthy diet that contains high fiber, nutrient- and phytochemical-rich whole grains can help fight against heart disease, type 2 diabetes, and obesity.  While at least half of your grain servings daily should be whole grains, less than 5 percent of Americans consume this recommended amount.  Choose whole grain cereal and oats in the morning, whole wheat bread at lunch, and quick cook brown rice, whole grain couscous, or whole grain pasta at dinner.  Even though whole grains are healthier for you than refined grains, you need to make sure that only about ¼ of your plate is devoted to grains in order to control calories.</p>
      <p style="font-size:13px;"><b>4) Eat Fish for Longevity:</b></p>
      <p style="font-size:13px;">Want to live longer?  Studies show that consuming 8 ounces of fish weekly, especially omega-3 fatty acid-rich fish such as salmon and sardines, can reduce the risk of heart disease, the number one killer of Americans, slow the accumulation of artery-clogging plague, and even slightly lower high blood pressure.  Consider having at least two 4-ounce fish meals weekly.  Get in the habit of cooking once and eating twice:  Grill a large piece of salmon for dinner and take the leftovers for lunch the next day. </p>
      <p style="font-size:13px;"><b>5) Drink Your Milk</b></p>
      <p style="font-size:13px;">Nonfat and low fat milk and yogurt are not only excellent sources of bone-strengthening calcium and vitamin D but also potassium, which can help prevent high blood pressure. Most Americans are falling short of all three of these nutrients, which can wreak havoc with their bones and blood pressure.   To meet the recommended three servings of dairy daily, add low fat milk to your morning java, add a slice of cheese to your lunchtime sandwich, and reach for a vitamin D fortified nonfat yogurt for a daily snack.  Since full-fat cheese is a major source of heart-unhealthy saturated fat in the American diet, choose only reduced or low fat varieties. </p>
      <div class="cleaner_h10"></div>
    </div>
    <div style="width:300px; float:right;">
      <div style="float:right; margin-top:20px; margin-bottom:40px"> <a href="https://www.facebook.com/pages/How-Healthy/284470868355664?ref=hl"> <img src="images/fblogo.jpg" alt="Like us on facebook" height="50px" width="200px" style="border-radius:6px" /> </a> </div>
      <form name="bmiForm" style="float:right; padding:5px 0 5px 0; background-color:#e5e5e5">
        <!--p>Calculate Your BMI Here</p>-->
        <table style="padding:5px">
          <tr>
            <th colspan="2">Calculate Your BMI Here</th>
          </tr>
          <tr>
            <td style="width:50%; padding-right:5px">Your Weight(kg):</td>
            <td><input type="text" name="weight" size="10"></td>
          </tr>
          <tr>
            <td>Your Height(cm): </td>
            <td><input type="text" name="height" size="10"></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="button" value="Calculate BMI" onClick="calculateBmi()" style="border:none; background-color:#990000; color:#FFFFFF; padding:5px; border-radius:5px; margin:7px 0 7px 0"></td>
          </tr>
          <tr>
            <td> Your BMI: </td>
            <td><input type="text" name="bmi" size="10"></td>
          </tr>
          <tr>
            <td>This Means: </td>
            <td><input type="text" name="meaning" size="25"></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="reset" value="Reset" style="border:none; background-color:#990000; color:#FFFFFF; padding:5px; border-radius:5px; margin-top:7px"/></td>
        </table>
      </form>
      <div class="ad">
        <div id="sponsorAdDiv" style="visibility:hidden">
          <table width="450px" height="350px" bgcolor="#008000">
            <tr>
              <td><table width="445px" height="345px" bgcolor="#F0FFF0">
                  <tr>
                    <td align="center" valign="middle"><!--*****EDIT THIS MESSAGE*****-->
                      <A HREF="http://www.amazon.com/exec/obidos/redirect-home/wa0c?tag-id=wa0c&placement=home-btn-100x70.gif&site=amazon"> <IMG SRC="http://www.associmg.com/assoc/us/home-btn-100x70.gif?tag-id=wa0c"></A>
                      <p><b>Please take time to show your support<br>
                        for this site by visiting one<br>
                        of our sponsors during this<br>
                        brief intermission.</b> </p>
                      <p><A HREF="http://www.amazon.com/exec/obidos/redirect-home/wa0c?tag-id=wa0c&placement=home-logo-130x60b.gif&site=amazon"> <IMG SRC="http://www.associmg.com/assoc/us/home-logo-130x60b.gif?tag-id=wa0c"></A></p>
                      <p>(This announcement will close shortly) <br>
                        <!--*****EDIT THE ABOVE MESSAGE*****-->
                    </td>
                  </tr>
                </table></td>
            </tr>
          </table>
        </div>
      </div>
      <p style="margin-top:50px; float:right"><img src="images/fitness-nutrition.jpg" height="250px" width="250px" style="border:3px solid #e5e5e5; border-radius:5px"/></p>
      <div class="cleaner_h10"></div>
    </div>
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>
