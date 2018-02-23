<?
include 'library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="UTF-8">
<title>GIF</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/jquery.fullpage.css" />
<link rel="stylesheet" href="css/styles.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/typed.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fullscreen-gallery.css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/typed.min.js"></script>
<script type="text/javascript" src="js/jquery.fullpage.js"></script>
<script src="js/modernizr.custom.js"></script>
<? echo getAnalytics(); ?>

<style>
.bar1, .bar2, .bar3 {
    background-color: #000000;
}
</style>
<script type="text/javascript">
  $(document).ready(function() {
      $('#fullpage').fullpage({
          sectionsColor: ['#FFFFFF'],
          anchors: ['hire-us'],
          menu: '#menu',
          css3: true,
          scrollingSpeed: 1000
      });
  });
  $(function() {
    cbpBGSlideshow.init();
  });
</script>
 <? echo scriptsHead(); ?>
</head>
<body>
<? echo getHeader(); ?>

  <main id="hire-us-page">
    <div id="fullpage" class="fullpage-wrapper" style="height: 100%; position: relative; touch-action: none; transform: translate3d(0px, 0px, 0px);">
      <!--SECTION 1-->
        <div class="section active fp-section fp-table fp-completely" id="section0" data-anchor="Home">
            <div class="col-6 left-content"></div>
            <div class="col-6 right-content">
                <!-- Change the width and height values to suit you best -->
<div class="typeform-widget" data-url="https://joanagalvao.typeform.com/to/rcSOp8" data-text="Name" style="width:100%;height:100vh;"></div>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
</form>
            </div>
        </div>
      <!--END SECTION 1-->
    </div>
</main>
</div>
<script src="js/jquery.imagesloaded.min.js"></script>
<script src="js/cbpBGSlideshow.js"></script>
<script>
$(function() {
  cbpBGSlideshow.init();
});
</script>
</body>
</html>
