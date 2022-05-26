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
    <div class="section_w430 margin_r_80">
      <h2>Lorem ipsum dolor sit</h2>
      <img class="image_wrapper fr_image" src="images/image_01.jpg" alt="" />
      <p>Integer nec orci at eros sollicitudin scelerisque semper a erat. Donec tincidunt luctus fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate nunc a nulla placerat ultrices accumsan urna hendrerit. Nulla laoreet neque ut nisl porttitor <a href="#">condimentum</a>.</p>
      <div class="cleaner_h10"></div>
      <div class="button"><a href="loseweight.php">more</a></div>
    </div>
    <div class=" section_w430">
      <h2>Suspendisse sodales massa </h2>
      <img class="image_wrapper fr_image" src="images/image_02.jpg" alt="" />
      <p>Duis leo nibh, ultricies ut blandit sit amet, lacinia et sem. <a href="#">Aenean</a> et nulla magna, ut pretium enim. Phasellus tristique auctor pharetra. Mauris tincidunt elit non velit dictum convallis. Vestibulum dui sem, sagittis vitae sodales vel, cursus facilisis est.</p>
      <div class="cleaner_h10"></div>
      <div class="button"><a href="#">more</a></div>
    </div>
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>
