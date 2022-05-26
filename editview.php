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
</head>
<body>

<?php include"header.php" ?>
<div id="content">
  <?php include"config.php" ?>
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


  <div class="cleaner_h40"></div>
  <div class="section_w940">
    <h2 align="center">Data Updated Successfully
     <?php 
	  $j=@$_GET['i'];
	   $s=mysql_query('select * from signup where user_id="'.$j.'" '); 
	  $y=mysql_fetch_array($s);
	  echo $y['username'];  ?>
      </h2>
    
     <div style="width:100%">
      <div style="width:100px; float:left;">
       <ul style="list-style:none; text-decoration:none; font-size:14px; padding:5px 5px 5px 5px;">
        <li><a href="editprofile.php">Edit Profile</a></li>
	    <li><a href="#">Comments</a></li>
        <li><a href="#">helooooo</a></li>
        <li><a href="signout.php">Sign Out</a></li>
        </ul></div>
      <div class="left_inner" style="float:right; width:400px; margin-left:50px; ">
      <form name="editview" method="post" action="">
      <table>
       <tr><td><input type="hidden" name="h1" value="<?php echo $y['user_id'];?>" /></td></tr>
        <tr><td>Username</td>
        <td><?php echo $y['username'];?></td><td><span><?php if( @$_GET['mes']==1) { echo 'User Already Exist'; }?></span></td></tr>
         <tr><td>Address</td>
          <td><?php echo $y['address'];?></td></tr>
           <tr><td>Contact Number</td>
            <td><?php echo $y['contact_number'];?></td></tr>
             <tr><td>Email-Id</td>
              <td><?php echo $y['emailid'];?></td></tr>
               <tr><td>Password</td>
                <td><?php echo $y['password'];?>   </td></tr>
                  <tr><td>Confirm Password</td>
                   <td><?php echo $y['confirm_password'];?></td></tr>
                     <tr><td>Date Of Birth</td>
                      <td>D/M/Y &nbsp;&nbsp;
                       <?php echo $y['day'];?>/</td>
	                     <td>
                          <?php echo $y['month'];?>/</td> 
                           <td>
                             <?php echo $y['year'];?></td></tr>
                              <tr><td>Gender</td>
                               <td><?php echo $y['gender']; ?></td></tr>
                             
                             </table>
                               </form> 
                                </div>
                                 </div>  
                                  </div>
                                   </div>
      
      
      
      
      
  <!--div class="section_w430 margin_r_80">
      
      
      
      <!--img class="image_wrapper fr_image" src="images/image_01.jpg" alt="" />
      <p>Integer nec orci at eros sollicitudin scelerisque semper a erat. Donec tincidunt luctus fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate nunc a nulla placerat ultrices accumsan urna hendrerit. Nulla laoreet neque ut nisl porttitor <a href="#">condimentum</a>.</p>-->
      <div class="cleaner_h10"></div>
      <!--div class="button"><a href="#">more</a></div>
    </div>-->
    <div class=" section_w430">
      <!--h2>Suspendisse sodales massa </h2>-->
      <!--img class="image_wrapper fr_image" src="images/image_02.jpg" alt="" />-->
      <!--p>Duis leo nibh, ultricies ut blandit sit amet, lacinia et sem. <a href="#">Aenean</a> et nulla magna, ut pretium enim. Phasellus tristique auctor pharetra. Mauris tincidunt elit non velit dictum convallis. Vestibulum dui sem, sagittis vitae sodales vel, cursus facilisis est.</p>-->
      <div class="cleaner_h10"></div>
      <!--div class="button"><a href="#">more</a></div>-->
    </div>
    <div class="cleaner"></div>
</div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>

</body>
</html>



