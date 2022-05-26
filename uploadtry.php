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
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script>
$(document).ready(function(){
$('.AccordionPanelContent').hide();
$('.AccordionPanelTab').click(function(){
$('.AccordionPanelContent').show();
});
});

</script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include"header.php" ?>
<div id="content">
  <!--div align="justify" class="section_w940">
    <!--p class="em_text">This <a href="#">CSS template</a> is provided by TemplateMo.com for free of charge. You may download, modify and apply this template for your websites. Credit goes to <a href="#">Free Photos</a> for photos used in this template. Pellentesque eleifend ornare ipsum, eu tincidunt nunc pulvinar tincidunt. Integer vel erat purus, quis pulvinar metus. Phasellus sed orci eros.</p>
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
  </div>-->
  <!-- end of product gallery -->
  <?php
 include"config.php";
  ?>
  <div class="cleaner_h40"></div>
  <div class="section_w940">
    <h2>Welcome
      <?php 
	  $j=@$_GET['eid'];
	   $s=mysql_query('select * from signup where user_id="'.$j.'" '); 
	  $x=mysql_fetch_array($s);
	  echo $x['username'];  ?>
    </h2>
    <div class="section_w430">
      <ul style="list-style:none; text-decoration:none; font-size:14px; width:150px;">
        <li style="background: none repeat scroll 0 0 #000000; float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><?php echo '<a style="color:#fff" href="editprofile.php?eid='.$j.'">Edit Profile</a>'?></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff" href="#">Comments</a></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0 ;  border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff" href="#">Member</a></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff"  href="signout.php">Sign Out</a></li>
      </ul>
      <!--img class="image_wrapper fr_image" src="images/image_01.jpg" alt="" />
      <p>Integer nec orci at eros sollicitudin scelerisque semper a erat. Donec tincidunt luctus fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate nunc a nulla placerat ultrices accumsan urna hendrerit. Nulla laoreet neque ut nisl porttitor <a href="#">condimentum</a>.</p>-->
      <div class="cleaner_h10"></div>
      <!--div class="button"><a href="#">more</a></div>-->
    </div>
    <div style="float:left; width:510px">
      <form name="edit" method="post" action="editpage.php" enctype="multipart/form-data">
      <input type="hidden" name="h1" value="<?php echo $x['user_id'];?>" />
      <label class="userim">
      <input type="image" src="default_profile_pic.jpg" height="100px" width="100px" title="Username" alt="Username" class="Userimage" />
      <!--tr><input type="file" name="im"  /></tr>-->
      <div id="Accordion1" class="Accordion" tabindex="0">
      <div class="AccordionPanel">
      <div class="AccordionPanelTab">Upload Profile</div>
      <div class="AccordionPanelContent" style="width:50px">
      <form name="u" method="post" enctype="multipart/form-data">
        <table>
          <tr>
            <td>upload picture</td>
            <td><input type="file" name="file"></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" value="save"></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
</label>

<lable class="e" >
<font>Username</font>

  <span><input type="text" name="user" value="<?php echo $x['username'];?>"  /></span>

<tr><td><span><?php if( @$_GET['mes']==1) { echo 'User Already Exist'; }?></span></td></tr>
<font>Address</font>

 <span> <input type="text" name="ad"  value="<?php echo $x['address'];?>"  /></span>
 
 
 
   
<font> Contact Number</font>

 <span> <input type="text" name="cn" value="<?php echo $x['contact_number'];?>"  /></span>

<font>Email-Id</font>

 <span> <input type="text" name="em" value="<?php echo $x['emailid'];?>"  /></span>

<font>Password</font>
 <span> <input type="text" name="pass" value="<?php echo $x['password'];?>"  /></span>


<font>Date Of Birth</font>
 <span> <select name="date" >
    <option value="<?php echo $x['day'];?>"><?php echo $x['day'];?></option>
    <?php for($i=31;$i>=1;$i--) { ?>
    <option value="<?php echo $i;  ?>"><?php echo $i;  ?></option>
    <?php } ?>
  </select>
  <select name="month" >
    <option value="<?php echo $x['month'];?>"><?php echo $x['month'];?></option>
    <?php $a=array("Dec","Nov","Oct","Sep","Aug","July","June","May","Apr","Mar","Feb","Jan"); 
      foreach($a as $r) { ?>
    <option value="<?php echo $r; ?>"><?php echo $r; ?></option>
    <?php } ?>
  </select>
  <select name="year" >
    <option value="<?php echo $x['year'];?>"><?php echo $x['year'];?></option>
    <?php $e=date('Y'); for($j=$e;$j>=date('Y')-63;$j--) { ?>
    <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
    <?php } ?>
  </select></span>
<font>Gender</font>
<span>  <input type="text" name="gender" value="<?php echo $x['gender']; ?>" ></span>
<tr>
  <td colspan="2" align="center"><input type="submit" name="signin" value="Save" class="login_button" ></td>
</tr>
</label>
</form>
</div>
<div class=" section_w430">
  <!--h2>Suspendisse sodales massa </h2>-->
  <!--img class="image_wrapper fr_image" src="images/image_02.jpg" alt="" />
      <!--p>Duis leo nibh, ultricies ut blandit sit amet, lacinia et sem. <a href="#">Aenean</a> et nulla magna, ut pretium enim. Phasellus tristique auctor pharetra. Mauris tincidunt elit non velit dictum convallis. Vestibulum dui sem, sagittis vitae sodales vel, cursus facilisis est.</p>-->
  <div class="cleaner_h10"></div>
  <!--div class="button"><a href="#">more</a></div>-->
</div>
<div class="cleaner"></div>
</div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
<script type="text/javascript">
<!--
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
//-->
</script>
</body>
</html>
