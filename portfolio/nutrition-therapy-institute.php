<?
include '../library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>NTI - GIF Design Studios</title>

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
<body class="single-portfolio no-hijack project-nti">
<? echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--PROJECT HEADER-->
      <div id="single-project-cover" class="project_05 desktop">
          <div class="keepScrollingContainer">
              <a href="#anchor">
                  <div class="animated bounce">
                      <img src="../img/GIF-Scroll-@2x.png" width="25">
                  </div>
                  <div>Keep Scrolling</div>
              </a>
            </div>
        </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-NTI-01.jpg" alt="nutrition-therapy-institute" class="full-width"></div>
      <!--END PROJECT HEADER-->

      <!--PROJECT INFO-->
      <div class="portfolio-info-container" id="anchor">
        <div class="single-portfolio-info">
          <div class="portfolio-summary col-9">
            <p class="txt-label">Sumary:</p>
            <p class="text">Nutrition Therapy School (NTI) are one of the longest standing holistic nutrition schools in the world, located in Canada. Since 1999, they have provided students with the highest quality training, so they can achieve thriving careers in the industry, so when they contacted us for a rebrand and website redesigned we were thrilled to take the challenge on.</p>
<p>Their previous logo was a colored apple tree with their name around it in a circle. In order not to sway too far from what had been familiar for so many years and at the same time to give a modern and academic twist to the brand, we opted for a minimal crest with an apple and a tree, with a detail of when the school was established.
</p>
<p>Since then we have loved working with the team at NTI on their website, their internal learning management system (for online students) and promotional materials as you can see below. They are truly a wonderful team to work with and we are grateful to have them as a client.
</p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">Client:</p>
            <p class="text">Nutrition Therapy School</p>
            <p class="txt-label">Art direction:</p>
            <p class="text">Joana Galvão</p>
            <p class="txt-label">Branding:</p>
            <p class="text">João Loureiro</p>
            <p class="txt-label">Editorial:</p>
            <p class="text">João Loureiro <br>Diana Castro</p>
            <p class="txt-label">UX / UI:</p>
            <p class="text">Rúben Silva <br>João Loureiro</p>
            <p class="txt-label">Development:</p>
            <p class="text">Smart Layer</p>
          </div>
        </div>
        <!--PORTFOLIO NAV-->
        <div class="project-nav">
          <div class="nav-prev"><a href="baby-bare-essentials.php"><img width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
          <div class="nav-next"><a href="michelle-mcglade.php"><img width="43" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Right"><div>Next</div></a></div>
        </div>
      </div>
      <!--END PROJECT INFO-->

      <div class="col col-12"><img src="../img/GIF-NTI-02.jpg" alt="nutrition-therapy-institute" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-NTI-03.jpg" alt="nutrition-therapy-institute" class="full-width"></div>

      <div class="cell col-6 table testimonial">
        <div class="square-responsive square-center"><p class="bold">We needed a fresher, more modern look for our school, and Gif Design Studios delivered!</p><p>They're responsive, creative, and most important in this age when designers have to know code, marketing and UI: they're savvy! We went from a website that was pretty to one that is dynamic, multi layered and cutting edge!</p><p class="bold project-text-color">The Nutrition Therapy Insititute team</p></div>
      </div>
      <div class="cell col-6 desktop">
        <div class="square-responsive square-image1"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-NTI-04.jpg" alt="nutrition-therapy-institute" class="full-width"></div>

      <div class="col col-12"><img src="../img/GIF-NTI-05.jpg" alt="nutrition-therapy-institute" class="full-width"></div>

      <div class="cell col-6 desktop">
        <div class="square-responsive square-image2"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-NTI-06.jpg" alt="nutrition-therapy-institute" class="full-width"></div>

      <div class="cell col-6 desktop">
        <div class="square-responsive square-image3"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-NTI-07.jpg" alt="nutrition-therapy-institute" class="full-width"></div>

      <div class="col col-12"><img src="../img/GIF-NTI-08.jpg" alt="nutrition-therapy-institute" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-NTI-09.jpg" alt="nutrition-therapy-institute" class="full-width"></div>
      <!--FOOTER-->
      <div class="project-links project-color">
        <div class="col col-3"></div>
        <div class="col col-3">
          <div class="link-icon"><i class="fa fa-behance inactive" aria-hidden="true"></i></div>
          <div class="link-text">Behance</div>
        </div>
        <div class="col col-3">
          <div class="link-icon"><i class="fa fa-link" aria-hidden="true"></i></div>
          <div class="link-text hide-on-mobile"><a target="_blank" href="http://www.ntischool.com">www.ntischool.com</a></div>
          <div class="link-text mobile"><a target="_blank" href="http://www.ntischool.com">Website</a></div>
        </div>
        <div class="col col-3"></div>
      </div>
      <div class="footer-project-nav project-nav">
        <div class="nav-prev"><a href="baby-bare-essentials.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowLeft-White-@2x.png" alt="Left"><img class="grey-arrow mobile" width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
        <div class="nav-next"><a href="michelle-mcglade.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowRight-White-@2x.png" alt="Right"><img width="43" class="grey-arrow mobile" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Left"><div>Next</div></a></div>
      </div>
      <? echo getFooter(); ?>
      <!--END FOOTER-->

    </div>
</main>
</div>

</body>
</html>
