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
<!DOCTYPE html>
<html>
<head>
<script>
function bigImg(x)
{
x.style.height="500px";
x.style.width="300px";
}

function normalImg(x)
{
x.style.height="300px";
x.style.width="300px";
}
</script>
</head>
<body>
<?php include"header-inner.php" ?>
<div id="contentInner">
  <!-- end of product gallery -->
  <div class="section_w940">
    <div style="width:500px; float:left">
      <h2>Keeping Yourself Healthy</h2>
      <p style="font-size:13px;"><u style="font-size:14px"><b>1. Eat Balanced Food:-</b></u>Try to follow the food pyramid. Eat a lot of fresh fruits of vegetables, some whole grains and fiber, a little bit of dairy, a little bit of meat, and very little sugar and fat.</p>
      <p style="font-size:13px;"><u style="font-size:14px"><b>2. Regular Exercise:-</b></u>To exercise you can run, do sit-ups, push-ups, etc., lift weights, play DDR, or walk briskly around your neighborhood.</p>
      <p style="font-size:13px;"><u style="font-size:14px"><b>3. Establish regular sleep patterns:-</b></u> Health care professionals recommend getting eight hours of sleep daily, but it differs from person to person. It is best to get at least seven hours of sleep a day because lack of sleep can harm not only your physical health but your mental health. Sleep deprivation can cause lapses in concentration. To establish a regular sleep pattern, go to bed at the same time each night and wake up at the same time each morning. It may seem hard at first, but it will get easier after you've done it for a while.</p>
      <p style="font-size:13px;"><u style="font-size:14px"><b>4. Keep a positive attitude :-</b></u> Instead of being pessimistic and thinking you can't achieve your goals, be positive and thrive on your challenges</p>
      <p style="font-size:13px;"><u style="font-size:14px"><b>5. Mental Fitness:-</b></u>You must assess your emotional health regularly. Try to take a break from your concern and worries. Try to feel free. Factors involving mental fitness are: -
      <p>-Mental Fitness</p>
      <p>-Emotional Fitness</p>
      <p>-Relaxation</p>
      <p>-Coping with Stress</p>
      <p>-Facing Difficulties</p>
      <p>-Overcoming Addictions</p>
      <p style="font-size:13px;"><u style="font-size:14px"><b>6.Develop social network and be with friends :-</b></u> Have fun with them, spend time with them, and talk with them, but make sure you steer away from gossip and slander. As long as you keep yourself free from negative talk, being with people satisfies the soul.</p>
      <p><u style="font-size:14px"><b>Conclusion</b></u></p>
      <ul style="font-size:13px;">
        <p>
        <li>Exercise at least three or four days a week.</li>
        </p>
        <p>
        <li>Get your body accustomed to healthy food, and eat moderately!</li>
        </p>
        <p style="font-size:13px;">
        <li>Sleep at least seven to eight hours every night, and go to bed and wake up at the same time each day.</li>
        </p>
        <p>
        <li>Be positive.</li>
        </p>
        <p>
        <li>Keep busy.</li>
        </p>
        <p>
        <li>Be social.</li>
        </p>
        <p>
        <li>Stop worrying.</li>
        </p>
        <p>
        <li>Steer clear from gossip and slander!</li>
        </p>
        <p>
        <li>Avoid anything that disturbs your health and happiness!</li>
        </p>
      </ul>
      <div class="cleaner_h10"></div>
    </div>
    <div style="float:right; width:300px;">
      <p style="color:#009900; margin-top:50px">Plan Your Daily Diet Schedule As Follows: </p>
      <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="images/Chart-2.jpg" alt="Diet Chart" width="300px" height="300px"> </div>
    <div class="cleaner"></div>
  </div>
</div>
<!-- end of content -->
<?php include"footer.php" ?>
</body>
</html>
