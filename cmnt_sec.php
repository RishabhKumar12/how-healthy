<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include "config.php";  ?>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script type="text/javascript"> 


$(document).ready(function(){
<?php 
	$q5=mysql_query('select * from tbl_comments where parent_id="0" ');  
      ?>
<?php while($row1=mysql_fetch_array($q5)) { ?>
  $("#<?php echo $row1['comment_id'] ; ?>").click(function(){
    $("#<?php echo $row1['comment_id'].'1'; ?>").toggle();

	});
<?php } ?>}); 

$(document).ready(function(){
<?php 
	$q5=mysql_query('select * from tbl_comments where parent_id="0" ');  
      ?>
<?php while($row2=mysql_fetch_array($q5)) { ?>
  $("#<?php echo $row2['comment_id'] .'3' ; ?>").click(function(){
    $("#<?php echo $row2['comment_id'].'2'; ?>").toggle();
	
});
<?php } ?>
});
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
            <li><a href="community.php"><span></span>Community</a></li>
            <li><a href="cmnt_sec.php" class="current"><span></span>Comment Section</a></li>
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
  <!-- end of product gallery -->
  <div class="section_w940">
    <?php
  define('max',15);
	$q1=mysql_query('select * from tbl_comments where parent_id="0"  && status="y"');  
	
	$rs = mysql_query('SELECT * FROM signup');
		$total = mysql_num_rows($rs);
	
		$total_pages = ceil($total /max);
		
		$page = @$_GET['page']; 
		    
		if (0 == $page){
			$page = 1;
		}
		
		$start = max * ($page - 1);
		$end = max;
		
		$rs = mysql_query("SELECT * FROM signup limit $start,$end");

	?>
    <div class="section_w430">
      <form name="news" method="post" action="news.php" style="margin-top:10px; float:left;">
        <table style="background-color:#e5e5e5; padding:10px">
          <tr>
            <th colspan="2">For News Subscription</th>
          </tr>
          <tr>
            <td>Name</td>
            <td style="padding:10px"><input type="text" name="nm" placeholder="Your Name"/></td>
          </tr>
          <tr>
            <td>Email-Id</td>
            <td style="padding:10px"><input type="text" name="eem" placeholder="Your Email-Id" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" name="st" value="Submit" style="border:none; background-color:#990000; color:#FFFFFF; padding:5px" /></td>
          </tr>
        </table>
      </form>
      <div style="float:left; width:230px; margin-top:50px; background:#e5e5e5; padding:5px">
        <label style="float:left; width:70px; padding:2px"> <img src="images/Papaya-Half-375x281.jpg" height="70px" width="70px" /> </label>
        <p style="color:#990000; font-size:14px"><b>Tip of the day</b></p>
        <p>Papaya, also known as papaw, is a rich source of antioxidants, phytonutrients, vitamins, minerals and special digestive enzymes that have a remarkable effect both internally and externally.</p>
      </div>
    </div>
    <div style="float:right; width:130px; margin-bottom:20px">
      <?php if(isset($_SESSION['d'])) {?>
      <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 70px; list-style:none;"><a style="color:#fff"  href="signout.php">
        <center>
          Sign Out
        </center>
        </a></li>
      <?php } ?>
    </div>
    <div class=" section_w430">
      <div class="Cmnt_section" style="min-height:350px"> <font style="font-size:14px; font-weight:bold; text-decoration:underline; color:#990000">DATE</font> <span style="font-size:14px; font-weight:bold; text-decoration:underline; color:#990000">TOPIC</span> <font style="font-size:14px; font-weight:bold; text-decoration:underline; color:#990000">POSTED BY</font>
        <?php while($row=mysql_fetch_array($q1)) { ?>
        <form action="cmntsecdb.php?tid=<?php echo $row['comment_id']; ?>" method="post" enctype="multipart/form-data" >
          <font><?php echo $row['date'] ;  ?></font> <span><b><?php echo strtoupper( $row['topic']); ?></b></span> <font>
          <?php  echo $row['username'];  ?>
          </font>
          <?php $q2=mysql_query('select * from tbl_comments where parent_id="'.$row['comment_id'].'" && status="y"');   
	$cmd=$row['comment_id'];
   $o=mysql_num_rows($q2);?>
          <label style="cursor:pointer; text-decoration:underline; color:#0066CC" id="<?php echo $row['comment_id'] ; ?>">Comments <?php echo ("($o)"); ?></label>
          <?php if(isset($_SESSION['d'])) { ?>
          <p class="cmnt_b" id="<?php echo $row['comment_id'] .'3'; ?>">
            <input type="button" value="Comment" style="border:none; background-color:#990000; padding:5px; color:#FFFFFF" />
          </p>
          <?php } ?>
          <label style="display:none; padding:10px 0;background-color:#e5e5e5; border:1px solid #DBDBDB;"  id="<?php echo $row['comment_id'].'1'; ?>" >
          <?php  while($q3=mysql_fetch_array($q2)) {
	 ?>
          <font> <?php echo $q3['date']; ?> </font> <span style="font-family:Arial, Helvetica, sans-serif;">
          <?php if($q3['topic']==""){echo 'null'; } else {echo $q3['topic'] ;} ?>
          </span> <font>
          <?php if($q3['username']==""){echo 'null'; } else {echo $q3['username'];}  ?>
          </font>
          <?php  } ?>
          </label>
          <label style="display:none"  id="<?php echo $row['comment_id'].'2'; ?>" > <span style="float:left; width:100%;">
          <textarea name="cm" cols="20" rows="2"></textarea>
          </span> <font style="width:100%;float:left; margin-left:37px;">
          <input type="submit" class="login_button" value="Submit" onclick="show();"/>
          </font> </label>
        </form>
        <?php } ?>
      </div>
      <br />
      <center>
        <p class="cmn">
          <?php if(@$_GET['u']!="") { echo 'Admin will grant permission for comment only then your comment will be shown.'; } ?>
        </p>
      </center>
      <center>
        <?php
				for ($i = 1; $i <= $total_pages; $i++) {
					$txt = $i;
					if ($page != $i)
					$txt = "<a href=\"" . $_SERVER["PHP_SELF"] . "?page=$i\">$txt</a>"; 
			        echo $txt;  
			                   } ?>
      </center>
      <div class="cleaner_h10"></div>
    </div>
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>
