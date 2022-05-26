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
</head>
<body>
<?php include"header.php" ?>
<div id="content">
  <div class="section_w940">
    <?php $jj=@$_GET['mesg'];?>
    <h2>Want to become a healthier person?Follow these tips & live a long and happy life.. </h2>
    <p style="font-size:13px">Do you want to live a long life? Are you healthy? Take this advice: We should eat vegetables and fruits, some fish, like tuna and salmon, drink lots of water, and use healthy oils, like olive oil, canola oil. We should take a walk, as much as possible. We should avoid tobacco, alcohol, drugs.
      
      All people should have checkups to prevent cancer and detect early.</p>
  </div>
  <div class="cleaner_h40"></div>
  <div class="section_w940">
    <div id="SlideItMoo_outer">
      <div id="SlideItMoo_inner">
        <div id="SlideItMoo_items">
          <div class="SlideItMoo_element"><img src="gallery/thumb/image_03.jpg" alt="" style="background: none repeat scroll 0 0 #FFFFFF;border: 3px solid #E8E8E8;padding: 1px;" /></div>
          <div class="SlideItMoo_element"><img src="gallery/thumb/image_04.jpg" alt="" style="background: none repeat scroll 0 0 #FFFFFF;border: 3px solid #E8E8E8;padding: 1px;" /> </div>
          <div class="SlideItMoo_element"><img src="gallery/thumb/image_05.jpg" alt="" style="background: none repeat scroll 0 0 #FFFFFF;border: 3px solid #E8E8E8;padding: 1px;"/> </div>
          <div class="SlideItMoo_element"><img src="gallery/thumb/image_06.jpg" alt="" style="background: none repeat scroll 0 0 #FFFFFF;border: 3px solid #E8E8E8;padding: 1px;" /> </div>
          <div class="SlideItMoo_element"><img src="gallery/thumb/image_07.jpg" alt="" style="background: none repeat scroll 0 0 #FFFFFF;border: 3px solid #E8E8E8;padding: 1px;"/> </div>
          <div class="SlideItMoo_element"><img src="gallery/thumb/image_08.jpg" alt="" style="background: none repeat scroll 0 0 #FFFFFF;border: 3px solid #E8E8E8;padding: 1px;"/> </div>
          <div class="SlideItMoo_element"><img src="gallery/thumb/image_09.jpg" alt="" style="background: none repeat scroll 0 0 #FFFFFF;border: 3px solid #E8E8E8;padding: 1px;"/> </div>
          <div class="SlideItMoo_element"><img src="gallery/thumb/image_10.jpg" alt="" style="background: none repeat scroll 0 0 #FFFFFF;border: 3px solid #E8E8E8;padding: 1px;"/> </div>
          <div class="SlideItMoo_element"><img src="gallery/thumb/image_11.jpg" alt="" style="background: none repeat scroll 0 0 #FFFFFF;border: 3px solid #E8E8E8;padding: 1px;"/> </div>
          <div class="SlideItMoo_element"><img src="gallery/thumb/image_12.jpg" alt="" style="background: none repeat scroll 0 0 #FFFFFF;border: 3px solid #E8E8E8;padding: 1px;"/> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of product gallery -->
  <div class="cleaner_h40"></div>
  <div class="section_w940">
    <div class="section_w430 margin_r_80">
      <h2>How to Lose Weight</h2>
      <img class="image_wrapper fr_image" src="gallery/thumb/375x321_lose_weight_fast_how_to_do_it_quickly_ref_guide.jpg" height="150px" width="170px" alt="" />
      <p style="font-size:13px;">Working on weight loss? Then you probably want results -- fast.<br />
        Let me save you some time: skip the fad diets. Their results don't last. And you have healthier options you can start on -- today!You can safely lose 3 or more pounds a week at home with a healthy diet and lots of exercise... </p>
      <div class="cleaner_h10"></div>
      <div class="button"><a href="loseweight.php">more</a></div>
    </div>
    <div class=" section_w430">
      <h2>Keeping Yourself Healthy </h2>
      <img class="image_wrapper fr_image" src="images/image_02.jpg" alt="" height="150px" width="170px"/>
      <p style="font-size:13px">Look up. The sun is shining, the birds are singing, and the sky is blue. How beautiful a world it is! How do you enjoy your life in such a wonderful world? The answer is keeping yourself healthy. If you are healthy, you can do many things that you want to do.How to keep yourself healthy?</p>
      <div class="cleaner_h10"></div>
      <div class="button"><a href="keephealthy.php">more</a></div>
    </div>
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>
