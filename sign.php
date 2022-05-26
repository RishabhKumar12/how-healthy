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
<script language="javascript" type="text/javascript">
function f1()
{
var f1=document.getElementById('email3').value;
var at=f1.indexOf("@");
var dot=f1.lastIndexOf(".");

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
  if(document.signup.gender[0].checked==false && document.signup.gender[1].checked==false)
  {
   document.getElementById('g_error').style.display='block';
   return false;
   }
 }

function f2()
{
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
<?php include"header.php" ?>
<div id="content">
  <div class="section_w940">
    <p class="em_text">This <a href="#">CSS template</a> is provided by TemplateMo.com for free of charge. You may download, modify and apply this template for your websites. Credit goes to <a href="#">Free Photos</a> for photos used in this template. Pellentesque eleifend ornare ipsum, eu tincidunt nunc pulvinar tincidunt. Integer vel erat purus, quis pulvinar metus. Phasellus sed orci eros.</p>
    <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Quisque nec dictum tortor. Etiam ultrices neque id augue rhoncus in gravida eros dictum. <a href="#">Integer</a> interdum sapien id diam tempor dapibus. Aliquam lobortis nunc risus. Suspendisse sodales massa velit. <a href="#">Quisque</a> odio quam, pulvinar sit amet convallis eget, venenatis ut turpis. <a href="#">Donec</a> ultricies eros et magna viverra venenatis et at arcu. Suspendisse quis tincidunt orci. Nam lobortis varius porttitor. Quisque ut ipsum non tortor laoreet tristique. Sed auctor mollis massa vel aliquet. </p>
  </div>
  <div class="cleaner_h40"></div>
  <div class="section_w940">
    <div id="SlideItMoo_outer">
      <div id="SlideItMoo_inner">
        <div id="SlideItMoo_items">
          <div class="SlideItMoo_element"> <a href="#"> <img src="gallery/thumb/image_03.jpg" alt="" /></a> </div>
          <div class="SlideItMoo_element"> <a href="#"> <img src="gallery/thumb/image_04.jpg" alt="" /></a> </div>
          <div class="SlideItMoo_element"> <a href="#"> <img src="gallery/thumb/image_05.jpg" alt="" /></a> </div>
          <div class="SlideItMoo_element"> <a href="#"> <img src="gallery/thumb/image_06.jpg" alt="" /></a> </div>
          <div class="SlideItMoo_element"> <a href="#"> <img src="gallery/thumb/image_07.jpg" alt="" /></a> </div>
          <div class="SlideItMoo_element"> <a href="#"> <img src="gallery/thumb/image_08.jpg" alt="" /></a> </div>
          <div class="SlideItMoo_element"> <a href="#"> <img src="gallery/thumb/image_09.jpg" alt="" /></a> </div>
          <div class="SlideItMoo_element"> <a href="#"> <img src="gallery/thumb/image_10.jpg" alt="" /></a> </div>
          <div class="SlideItMoo_element"> <a href="#"> <img src="gallery/thumb/image_11.jpg" alt="" /></a> </div>
          <div class="SlideItMoo_element"> <a href="#"> <img src="gallery/thumb/image_12.jpg" alt="" /></a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of product gallery -->
  
   <div class="cleaner_h40"></div>
  <div class="section_w940">
    <div class="section_w430">
      <h2>Lorem ipsum dolor sit</h2>
      <!--img class="image_wrapper fr_image" src="images/image_01.jpg" alt="" />
      <p>Integer nec orci at eros sollicitudin scelerisque semper a erat. Donec tincidunt luctus fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate nunc a nulla placerat ultrices accumsan urna hendrerit. Nulla laoreet neque ut nisl porttitor <a href="#">condimentum</a>.</p>
      <div class="cleaner_h10"></div>
      <div class="button"><a href="#">more</a></div>-->
    </div>
    <div class=" section_w430">
      <h2>Sign Up </h2>
      
        <form name="signup" method="post" action="signupdb.php">
<table class="signup">
<tr><td>Username</td>
 <td><input type="text" name="user" placeholder="Username"  onkeyup="f2();"  /></td><td><span><?php if( @$_GET['mes']==1) { echo 'User Already Exist'; }?></span></td></tr>
  <tr><td colspan="2" align="center"><span id="user_error" style="display:none; color:#DD0000" >Enter Username</span></td></tr>
 
 <tr><td>Address</td>
 <td><textarea name="ad" rows="2" cols="15" onkeyup="f2();" ></textarea></td></tr>
 <tr><td colspan="2" align="center"><span id="address_error" style="display:none; color:#DD0000;">Enter Address</span></td></tr>
 
<tr><td>Contact Number</td>
<td><input type="text" name="cn" placeholder="Contact-Number" onkeyup="f2();" /></td></tr>
<tr><td colspan="2" align="center"><span id="contact_error" style="display:none; color:#DD0000" >Enter Contact Number</span></td></tr>
  <tr><td>Email-Id</td>
  <td><input type="text" name="em" placeholder="Email-Id" id="email3"  onkeyup="f2();"  /></td></tr>
  <tr><td colspan="2" align="center"><span id="email_error" style="display:none; color:#DD0000" >Enter Your Email-Id</span></td></tr>
  <tr><td>Password</td>
   <td><input type="password" name="pass" placeholder="Password" onclick="email1();" onkeyup="f2();"  /></td></tr>
   <tr><td colspan="2" align="center"><span id="pass_error" style="display:none; color:#DD0000" >Enter Your Password</span></td></tr>
    
    <tr><td>Confirm Password</td>
     <td><input type="password" name="cp" placeholder="Confirm-Password" onkeyup="f2();" /></td></tr>
     <tr><td colspan="2" align="center"><span id="cp_error" style="display:none; color:#DD0000" >Enter Confirm Password</span></td></tr>
      <tr><td>Date Of Birth</td>
      <td><select name="date"  onfocus="f3();">
      <option value="">-----</option>
	  <?php for($i=31;$i>=1;$i--) { ?>
      <option value="<?php echo $i;  ?>"><?php echo $i;  ?></option><?php } ?></select>
      <select name="month" onfocus="f3();">
      <option value="">-----</option>
      <?php $a=array("Dec","Nov","Oct","Sep","Aug","July","June","May","Apr","Mar","Feb","Jan"); 
      foreach($a as $r) { ?>
      <option value="<?php echo $r; ?>"><?php echo $r; ?></option><?php } ?></select>
      <select name="year" onfocus="f3();">
      <option value="">-----</option>
      <?php $e=date('Y'); for($j=$e;$j>=date('Y')-63;$j--) { ?>
      <option value="<?php echo $j; ?>"><?php echo $j; ?></option><?php } ?></select>
      </td></tr>
     <tr><td colspan="2" align="center"><span id="date_error" style="display:none; color:#DD0000" >Fill The Empty Place </span></td></tr>
     <tr><td>Gender</td>
     <td><input type="radio" name="gender" value="male" onfocus="f4();">Male
     <input type="radio" name="gender" value="female" onfocus="f4();">Female</td></tr>
     <tr><td colspan="2" align="center"><span id="g_error" style="display:none; color:#DD0000" >Please Select Gender</span></td></tr>
     
     <tr><td colspan="2" align="center"><input type="submit" name="signin" value="Sign Up" class="login_button" onclick="return f1();" ></td></tr>
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

  