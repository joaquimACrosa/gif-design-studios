<?
include '../library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>baby Bare Essentials - GIF Design Studios</title>

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
<body class="single-portfolio no-hijack project-baby-bare">
<? echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--PROJECT HEADER-->
      <div id="single-project-cover" class="project_03 desktop">
          <div class="keepScrollingContainer keepScrollingDark">
              <a href="#anchor">
                  <div class="animated bounce">
                      <img src="../img/GIF-Scroll-@2x.png" width="25">
                  </div>
                  <div>Keep Scrolling</div>
              </a>
            </div>
        </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-BabyBareEssentials-01.jpg" alt="BabyBareEssentials" class="full-width"></div>
      <!--END PROJECT HEADER-->

      <!--PROJECT INFO-->
      <div class="portfolio-info-container" id="anchor">
        <div class="single-portfolio-info">
          <div class="portfolio-summary col-9">
            <p class="txt-label">"Be Natural  |  Be Bare  |  Be Loved"</p>
            <p class="text">This is the motto our clients Mark and Casey came to us with, for their dream of starting a brand selling great quality baby clothing, with a strong personal touch. With only a vision of what it could be, we took them through our branding process where we created a visual identity in line with their values, their clients and their dream. We designed the logo, the patterns for the clothes, and the home page for the website, which they then took into their own hands and are working on developing it.
</p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">Client:</p>
            <p class="text">Baby Bare Essentials</p>
            <p class="txt-label">Art direction:</p>
            <p class="text">Joana Galvão</p>
            <p class="txt-label">Illustration:</p>
            <p class="text">Diana Santa</p>
            <p class="txt-label">Branding:</p>
            <p class="text">Diana Santa </br>Joana Galvao</p>
            <p class="txt-label">UX / UI:</p>
            <p class="text">Rúben Silva</p>
          </div>
        </div>
        <!--PORTFOLIO NAV-->
        <div class="project-nav">
          <div class="nav-prev"><a href="foodie.php"><img width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
          <div class="nav-next"><a href="nutrition-therapy-institute.php"><img width="43" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Right"><div>Next</div></a></div>
        </div>
      </div>
      <!--END PROJECT INFO-->


      <div class="col col-12"><img src="../img/GIF-BabyBareEssentials-02.jpg" alt="BabyBareEssentials" class="full-width"></div>

      <div class="cell col-6 table testimonial">
        <div class="square-responsive square-center">
            <p class="bold">Gif Design Studios are tremendous to work with.</p> As a small start up, we truly needed a person/team to help see our vision and bring it to life. Joana was clear and precise with communication to ensure the direction they see is perfectly aligned with our vision. </p>

<p>The amount of creativity that they share is mind blowing. I cannot draw at all, so for her to understand exactly what I wanted just through words is a true picture of how clearly they can imagine your vision.</p>

<p>Our expectations were exceeded and we plan on having Joana and her team help grow our brand even further. We really can’t see anyone else doing it! </p><p class="bold project-text-color">Mark and Casey Moralde  |  Founders of Baby Bare Essentials</p>
        </div>
      </div>

      <div class="cell col-6 desktop">
        <div class="square-responsive square-image1"></div>
      </div>
      <div class="col col-12 tablet"><img src="../img/GIF-BabyBareEssentials-02.jpg" alt="BabyBareEssentials" class="full-width"></div>

      <div class="col col-12"><img src="../img/GIF-BabyBareEssentials-04.jpg" alt="BabyBareEssentials" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-BabyBareEssentials-05.jpg" alt="BabyBareEssentials" class="full-width"></div>

      <div class="cell col-6 desktop">
        <div class="square-responsive square-image2"></div>
      </div>
      <div class="cell col-6 desktop">
        <div class="square-responsive square-image3"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-BabyBareEssentials-06.jpg" alt="BabyBareEssentials" class="full-width"></div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-BabyBareEssentials-07.jpg" alt="BabyBareEssentials" class="full-width"></div>

      <div class="col col-12"><img src="../img/GIF-BabyBareEssentials-08.jpg" alt="BabyBareEssentials" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-BabyBareEssentials-09.jpg" alt="BabyBareEssentials" class="full-width"></div>

      <!--FOOTER-->
      <div class="project-links project-color">
        <div class="col col-3"></div>
        <div class="col col-3">
          <div class="link-icon"><a href="#"><i class="fa fa-behance inactive" aria-hidden="true"></i></a></div>
          <div class="link-text">Behance</div>
        </div>
        <div class="col col-3">
          <div class="link-icon"><i class="fa fa-link inactive" aria-hidden="true"></i></div>
          <div class="link-text">Coming Soon</div>
        </div>
        <div class="col col-3"></div>
      </div>
      <div class="footer-project-nav project-nav">
        <div class="nav-prev"><a href="foodie.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowLeft-White-@2x.png" alt="Left"><img class="grey-arrow mobile" width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
        <div class="nav-next"><a href="nutrition-therapy-institute.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowRight-White-@2x.png" alt="Right"><img width="43" class="grey-arrow mobile" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Left"><div>Next</div></a></div>
      </div>
      <? echo getFooter(); ?>
      <!--END FOOTER-->

    </div>
</main>
</div>

</body>
</html>
