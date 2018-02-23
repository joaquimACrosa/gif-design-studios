<?
include '../library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Bibliohive - GIF Design Studios</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/styles.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../css/typed.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css">

  <link rel="stylesheet" type="text/css" href="<?php echo basename($_SERVER['PHP_SELF'],'.php');?>.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/typed.min.js"></script>
  <script src="../js/squareResponsive.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      function fullscreen(){
		      jQuery('#single-project-cover').css({
            width: jQuery(window).width(),
            height: jQuery(window).height()
          });
	    }

	     fullscreen();

      // Run the function in case of window resize
      jQuery(window).resize(function() {
           fullscreen();

        });

    });
  </script>
    <? echo scriptsHead(); ?>
    <? echo getAnalytics(); ?>
</head>
<body class="single-portfolio no-hijack project-bibliohive">
<? echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--PROJECT HEADER-->
      <div id="single-project-cover" class="project_06 desktop"> <div class="keepScrollingContainer">
              <a href="#anchor">
                  <div class="animated bounce">
                      <img src="../img/GIF-Scroll-@2x.png" width="25">
                  </div>
                  <div>Keep Scrolling</div>
              </a>
            </div>
        </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-Bibliohive-01.jpg" alt="Bibliohive" class="full-width"></div>
      <!--END PROJECT HEADER-->

      <!--PROJECT INFO-->
      <div class="portfolio-info-container" id="anchor">
        <div class="single-portfolio-info">
          <div class="portfolio-summary col-9">
            <p class="txt-label">Sumary:</p>
            <p class="text">Shivam and Ted came to us with a dream for a new software: Bibliohive.</p>

<p>BiblioHive is the simplest, most powerful, and most visually attractive organizational platform available on the web. Helping your institution and all its members stay on top of cutting-edge research while making it easy for teachers to share, collaborate and communicate about what they're learning and doing.</p>

<p>We were asked to optimise the user experience throughout the platform and help bring the UX design to the next level. Our goal together was to create a professional looking functional platform, intuitive to use, and furthermore useful and addictive.</p>

<p>Take a look:</p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">Client:</p>
            <p class="text">BiblioHive</p>
            <p class="txt-label">Art direction:</p>
            <p class="text">Joana Galvão</p>
            <p class="txt-label">Branding:</p>
            <p class="text">BiblioHive</p>
            <p class="txt-label">Marketing Strategy:</p>
            <p class="text">Joana Galvão<br> José Freitas</p>
            <p class="txt-label">UX / UI:</p>
            <p class="text">Rúben Silva<br> João Loureiro</p>
            <p class="txt-label">Development:</p>
            <p class="text">Smart Layer</p>
          </div>
        </div>

        <!--PORTFOLIO NAV-->
        <div class="project-nav">
          <div class="nav-prev"><a href="michelle-mcglade.php"><img width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
          <div class="nav-next"><a href="atticus.php"><img width="43" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Right"><div>Next</div></a></div>
        </div>
      </div>
      <!--END PROJECT INFO-->

      <div class="col col-12"><img src="../img/GIF-Bibliohive-02.jpg" alt="Bibliohive" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-Bibliohive-03.jpg" alt="Bibliohive" class="full-width"></div>

      <div class="cell col-6 table testimonial">
        <div class="square-responsive square-center"><p class="bold">Gif Design Studios have been indispensable to the growth and build of Bibliohive.</p><p>They’re intuitive, curious, dynamic, creative - and so present to our needs. </p><p>I heartily recommend them!</p><p class="bold project-text-color">Ted Fish | CEO |  BiblioHive</p></div>
      </div>
      <div class="cell col-6 desktop">
        <div class="square-responsive square-image1"></div>
      </div>

      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-Bibliohive-04.jpg" alt="Bibliohive" class="full-width"></div>

      <div class="col col-12"><img src="../img/GIF-Bibliohive-05.jpg" alt="Bibliohive" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-Bibliohive-06.jpg" alt="Bibliohive" class="full-width"></div>

      <!--FOOTER-->
      <div class="project-links project-color">
        <div class="col col-3"></div>
        <div class="col col-3">
          <div class="link-icon"><i class="fa fa-behance inactive" aria-hidden="true"></i></div>
          <div class="link-text">Behance</div>
        </div>
        <div class="col col-3">
          <div class="link-icon"><i class="fa fa-link" aria-hidden="true"></i></div>
          <div class="link-text hide-on-mobile"><a target="_blank" href="http://www.bibliohive.com">www.bibliohive.com </a></div>
          <div class="link-text mobile"><a target="_blank" href="http://www.bibliohive.com">Website</a></div>
        </div>
        <div class="col col-3"></div>
      </div>
      <div class="footer-project-nav project-nav">
        <div class="nav-prev"><a href="michelle-mcglade.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowLeft-White-@2x.png" alt="Left"><img class="grey-arrow mobile" width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
        <div class="nav-next"><a href="atticus.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowRight-White-@2x.png" alt="Right"><img width="43" class="grey-arrow mobile" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Left"><div>Next</div></a></div>
      </div>
      <? echo getFooter(); ?>
      <!--END FOOTER-->

    </div>
</main>
</div>

</body>
</html>
