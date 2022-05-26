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
<script language="javascript" type="text/javascript">
function f1()
{
var f1=document.getElementById('email3').value;
var at=f1.indexOf("@");
var dot=f1.lastIndexOf(".");

if(document.signup.fn.value=="")
{
 document.getElementById('fn_error').style.display='block';  
 return false;
}
if(document.signup.ln.value=="")
{
 document.getElementById('ln_error').style.display='block';  
 return false;
}
if(document.signup.user.value=="")
{
 document.getElementById('user_error').style.display='block';  
 return false;
}
 if(document.signup.ad.value=="")
 {
  document.getElementById('address_error').style.display='block';
  return false;
  }
  if(document.signup.cn.value=="" || isNaN( document.signup.cn.value ) ||
           document.signup.cn.value.length != 10 )
      {
		document.getElementById('contact_error').style.display='block';   
		 return false;
		   }
  
 if(at<1 || dot<at+2 || dot+2>=f1.length)
{
document.getElementById('email_error').style.display='block';
return false;
}
 
 
 if(document.signup.pass.value=="")
  {
   document.getElementById('pass_error').style.display='block';
   return false;
    }
  if(document.signup.cp.value=="")
  {
   document.getElementById('cp_error').style.display='block';
   return false;
   }
  if(document.signup.pass.value!=document.signup.cp.value)
  {
  alert ('Password Does Not Match');
  }
  if(document.signup.date.value=="" || document.signup.month.value=="" || document.signup.year.value=="" ) 
  {
   document.getElementById('date_error').style.display='block';
   return false;
   }
  if(document.signup.query.value=="") 
  {
   document.getElementById('query_error').style.display='block';
   return false;
   }
 if(document.signup.gender[0].checked==false && document.signup.gender[1].checked==false)
  {
   document.getElementById('g_error').style.display='block';
   return false;
   }
 }

function f2()
{
if(document.signup.fn.value!="")
document.getElementById('fn_error').style.display='none';  

if(document.signup.ln.value!="")
document.getElementById('ln_error').style.display='none';  

if(document.signup.user.value!="")
document.getElementById('user_error').style.display='none';  

if(document.signup.ad.value!="")
document.getElementById('address_error').style.display='none';

if(document.signup.cn.value!="")
document.getElementById('contact_error').style.display='none';

if(document.signup.em.value!="")
document.getElementById('email_error').style.display='none';


if(document.signup.pass.value!="")
document.getElementById('pass_error').style.display='none';

if(document.signup.cp.value!="")
document.getElementById('cp_error').style.display='none';
}

function f3()
{
if(document.signup.date.value!="" || document.signup.month.value!="" || document.signup.year.value!="" )
document.getElementById('date_error').style.display='none';
}
function f6()
{
if(document.signup.query.value!="")
document.getElementById('query_error').style.display='none';
}


function f4()
{
if(document.getElementById('g_error').value!="") 
{
  document.getElementById('g_error').style.display='none';
   }
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
  <div class="section_w940">
    <center>
      <div style="width:430px;">
        <h2>Sign Up </h2>
        <center>
          <form name="signup" method="post" action="signupdb.php">
            <center>
              <table class="signup">
                <tr>
                  <td>Firstname</td>
                  <td><input type="text" name="fn" placeholder="Firstname" size="23" onkeyup="f2();" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="fn_error" style="display:none; color:#DD0000" >Enter Firstname</span></td>
                </tr>
                <tr>
                  <td>Lastname</td>
                  <td><input type="text" name="ln" placeholder="Lastname" size="23" onkeyup="f2();" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="ln_error" style="display:none; color:#DD0000" >Enter Lastname</span></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td><input type="text" name="user" placeholder="Username" size="23"  onkeyup="f2();"  /></td>
                  </span>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="user_error" style="display:none; color:#DD0000" >Enter Username</span></td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td><textarea name="ad" rows="2" cols="18" size="23" onkeyup="f2();" ></textarea></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="address_error" style="display:none; color:#DD0000;">Enter Address</span></td>
                </tr>
                <tr>
                  <td>Contact Number</td>
                  <td><input type="text" name="cn" placeholder="Contact-Number" size="23" onkeyup="f2();" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="contact_error" style="display:none; color:#DD0000" >Enter Contact Number</span></td>
                </tr>
                <tr>
                  <td>Email-Id</td>
                  <td><input type="text" name="em" placeholder="Email-Id" size="23" id="email3"  onkeyup="f2();"  /></td>
                </tr>
                <td><span>
                    <?php if(@$_GET['mes']==1) { echo 'EmailId Already Exist'; } ?>
                    </span>
                <tr>
                  <td colspan="2" align="center"><span id="email_error" style="display:none; color:#DD0000" >Enter Your Email-Id </span></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><input type="password" name="pass" placeholder="Password" size="23" onclick="email1();" onkeyup="f2();"  /></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="pass_error" style="display:none; color:#DD0000" >Enter Your Password</span></td>
                </tr>
                <tr>
                  <td>Confirm Password</td>
                  <td><input type="password" name="cp" size="23" placeholder="Confirm-Password" onkeyup="f2();" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="cp_error" style="display:none; color:#DD0000" >Enter Confirm Password</span></td>
                </tr>
                <tr>
                  <td>Date Of Birth</td>
                  <td><select name="date"  onfocus="f3();">
                      <option value="">-----</option>
                      <?php for($i=31;$i>=1;$i--) { ?>
                      <option value="<?php echo $i;  ?>"><?php echo $i;  ?></option>
                      <?php } ?>
                    </select>
                    <select name="month" onfocus="f3();">
                      <option value="">-----</option>
                      <?php $a=array("Dec","Nov","Oct","Sep","Aug","July","June","May","Apr","Mar","Feb","Jan"); 
      foreach($a as $r) { ?>
                      <option value="<?php echo $r; ?>"><?php echo $r; ?></option>
                      <?php } ?>
                    </select>
                    <select name="year" onfocus="f3();">
                      <option value="">-----</option>
                      <?php $e=date('Y'); for($j=$e;$j>=date('Y')-63;$j--) { ?>
                      <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
                      <?php } ?>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="date_error" style="display:none; color:#DD0000" >Fill The Empty Place </span></td>
                </tr>
                <tr>
                  <td>Query Regarding</td>
                  <td><select name="query" onfocus="f6();">
                      <option value="">---------</option>
                      <option value="Allergy">Allergy</option>
                      <option value="Blood Pressure">Blood Pressure</option>
                      <option value="Dental Care">Dental Care</option>
                      <option value="Hair Issues">Hair Issues</option>
                      <option value="Joint Pain">Joint Pain</option>
                      <option value="Migraine">Migraine</option>
                      <option value="Obesity">Obesity</option>
                      <option value="Skin Care">Skin Care</option>
                    </select></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="query_error" style="display:none; color:#DD0000" >Fill The Empty Place </span></td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td><input type="radio" name="gender" value="male" onfocus="f4();">
                    Male
                    <input type="radio" name="gender" value="female" onfocus="f4();">
                    Female</td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><span id="g_error" style="display:none; color:#DD0000" >Please Select Gender</span></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><input type="submit" name="signin" value="Sign Up" class="login_button" onclick="return f1();" ></td>
                </tr>
              </table>
            </center>
          </form>
        </center>
        <div class="cleaner_h10"></div>
      </div>
    </center>
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>
