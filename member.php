<?php session_start(); ?>
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
</head>
<body>
<?php include"header.php" ?>
<div id="content">
  <!-- end of product gallery -->
  <?php
 include"config.php";
  ?>
  <div class="cleaner_h40"></div>
  <div class="section_w940">
    <h2>Welcome
      <?php 
	  if(isset($_SESSION['d']))
	  {
	  
	$se=mysql_query('select * from signup where user_id="'.$_SESSION['d'].'"');
	$d=mysql_fetch_array($se);
	echo $d['username'];
	}
	else
	{
	echo 'Login Your ID First';
	}
	?>
    </h2>
    <div class="section_w430">
      <ul style="list-style:none; text-decoration:none; font-size:14px; width:150px;">
    <li style="background: none repeat scroll 0 0 #000000; float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><?php echo '<a style="color:#fff" href="editprofile.php">Edit Profile</a>'?></l>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;    color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><?php echo '<a style="color:#fff" href="commenthome.php">Comments</a>'?></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0 ;  border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff" href="member.php">Member</a></li>
        <li style="background: none repeat scroll 0 0 #000000;  float:left; margin:10px 0 0 0; border-radius:5px;   color: #FFFFFF !important;    padding: 5px 7px;    width: 130px;"><a style="color:#fff"  href="signout.php">Sign Out</a></li>
      </ul>
      <div class="cleaner_h10"></div>
    </div>
    <div class=" section_w430">
      <div class="member">
        <label style="text-decoration:underline; color:#990000">ID</label>
        <font style="text-decoration:underline; font-size:13px; font-weight:bold; color:#990000">Name</font> <span style="text-decoration:underline; font-size:13px; font-weight:bold; color:#990000">Query</span></div>
      <?php  
	  $qq=array();
	  $usr = $_SESSION['d'];
	  $sq = mysql_query('select * from signup where user_id!="'.$_SESSION['d'].'"');
	 while($sqraw = mysql_fetch_array($sq))
	  { 
	    //echo $sqraw['user_id'].'<br>';
	    $abc = @mysql_result(mysql_query('select receiveid from tbl_request where requestid="'.$_SESSION['d'].'" and receiveid="'.$sqraw['user_id'].'" && confirm="N" '),0);
		
		
		
		$efg=@mysql_result(mysql_query('select receiveid from tbl_request where requestid="'.$_SESSION['d'].'" and receiveid="'.$sqraw['user_id'].'" && confirm="Y" '),0);
		
		$ijk=@mysql_result(mysql_query('select requestid from tbl_request where receiveid="'.$_SESSION['d'].'" and requestid="'.$sqraw['user_id'].'" && confirm="Y" '),0);
		
	/*$yzx=@mysql_result(mysql_query('select receiveid from tbl_request where requestid="'.$_SESSION['d'].'" || receiveid="'.$_SESSION['d'].'" && confirm="N"'),0);
	echo $yzx.'<br>';
	exit;*/
	
	//echo $abc.'<br>';
		if($abc !='')
		{
		 $aab = $abc;
		}
		else
		{
		  $aab = '0';
		}
		//echo $aab.'<br>';
		 ?>
      <div class="member">
        
		<?php if($sqraw['user_id'] != $aab)
		{  ?>
        <label><?php echo $sqraw['user_id']; ?></label>
        <font>
        <?php  echo $sqraw['username']; ?>
        </font> <span>
        <?php  echo $sqraw['query'];  ?>
        </span>
        <?php
		
   
	if($efg!="0" )
	{?>
    <p>
        <button name="qst" style="background-color:#990000; border:none;color:#FFFFFF; height:20px; width:50%">Accepted</button>
        </p>
	<?php
	 } // if close
	
	
	elseif($ijk!="0")
		{ ?>
		 <p>
        <button name="qst" style="background-color:#990000; border:none;color:#FFFFFF; height:20px; width:100%">Alredy a Friend</button>
        </p>
		<?php } 
	else
	{
	?>
		<p><a href="sendrequest.php?id=<?php echo $sqraw['user_id']; ?> ">
        <button name="qst" style="background-color:#990000; border:none;color:#FFFFFF; height:20px; width:50%">Request</button>
        </a></p>
	<?php } // else close
			
		} // main if close
		else 
		{ ?>
        <label><?php echo $sqraw['user_id']; ?></label>
        <font>
        <?php  echo $sqraw['username']; ?>
        </font> <span>
        <?php  echo $sqraw['query'];  ?>
        </span>
        <p>
  <button name="qst" style="background-color:#990000; border:none;color:#FFFFFF; height:20px; width:100%">Request Pending</button>
        </p>
        <?php } // else close?>
      </div>
      <?php } // main while ?>
      <div class="cleaner_h10"></div>
    </div>
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>

