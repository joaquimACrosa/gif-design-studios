<?
include '../library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Michelle McGlade - GIF Design Studios</title>

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
<body class="single-portfolio no-hijack project-michelle">
<? echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--PROJECT HEADER-->
      <div id="single-project-cover" class="project_04 desktop">
          <div class="keepScrollingContainer">
              <a href="#anchor">
                  <div class="animated bounce">
                      <img src="../img/GIF-Scroll-@2x.png" width="25">
                  </div>
                  <div>Keep Scrolling</div>
              </a>
            </div>
        </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-MichelleMcGlade-01.jpg" alt="michelle-mcglade" class="full-width"></div>
      <!--END PROJECT HEADER-->

      <!--PROJECT INFO-->
      <div class="portfolio-info-container" id="anchor">
        <div class="single-portfolio-info">
          <div class="portfolio-summary col-9">
            <p class="txt-label">Sumary:</p>
            <p class="text">Michelle McGlade is a business savvy healer for healers who supports her clients through the unnatural elements of entrepreneurship as an alternative practitioner. Until working with us, Michelle had piecemeal her website but it didn’t quite feel like her. Her website, colors and fonts, didn’t reflect the amazing expert and inspiring woman that she is, and we wanted to help her achieve that.</p>
<p>After an in depth rebrand, we also re-designed her website and now it’s a pleasure to keep her as a recurring client for anything else she might need for her growing business.</p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">Client:</p>
            <p class="text">Michelle McGlade</p>
            <p class="txt-label">Art direction:</p>
            <p class="text">Joana Galvão</p>
            <p class="txt-label">Branding:</p>
            <p class="text">Diana Castro</p>
            <p class="txt-label">UX/UI:</p>
            <p class="text">Diana Castro</p>
            <p class="txt-label">Development:</p>
            <p class="text">André Bento</p>
          </div>
        </div>
        <!--PORTFOLIO NAV-->
        <div class="project-nav">
          <div class="nav-prev"><a href="nutrition-therapy-institute.php"><img width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
          <div class="nav-next"><a href="bibliohive.php"><img width="43" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Right"><div>Next</div></a></div>
        </div>
      </div>
      <!--END PROJECT INFO-->
      <div class="col col-12"><img src="../img/GIF-MichelleMcGlade-02.jpg" alt="michelle-mcglade" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-MichelleMcGlade-03.jpg" alt="michelle-mcglade" class="full-width"></div>

      <div class="cell col-6 table testimonial">
        <div class="square-responsive square-center">
            <p class="bold">Love, love, love the new website. It feels like me!</p><p>I felt my old website didn't reflect how I felt about myself and it certainly didn't communicate and position me as the expert. It did not reflect what I was feeling about myself on the inside. </p><p>But now... it most definitely does! Thank you Gif Design Studios! As a result, now that the outside mirrors the inside, I have changed how I show up in my business each day. </p><p class="bold project-text-color">Michelle McGalde  |  Success Coach for Holistic Practicioners</p>
        </div>
      </div>
      <div class="cell col-6 desktop">
        <div class="square-responsive square-image1"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-MichelleMcGlade-04.jpg" alt="michelle-mcglade" class="full-width"></div>

      <div class="col col-12"><img src="../img/GIF-MichelleMcGlade-05.jpg" alt="michelle-mcglade" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-MichelleMcGlade-06.jpg" alt="michelle-mcglade" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-Project-MichelleMcGlade-07.jpg" alt="michelle-mcglade" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-MichelleMcGlade-09.jpg" alt="michelle-mcglade" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-Website-Project-MichelleMcGlade-10.jpg" alt="michelle-mcglade" class="full-width"></div>



      <!--FOOTER-->
      <div class="project-links project-color">
        <div class="col col-3"></div>
        <div class="col col-3">
          <div class="link-icon"><a href="#"><i class="fa fa-behance inactive" aria-hidden="true"></i></a></div>
          <div class="link-text">Behance</div>
        </div>
        <div class="col col-3">
          <div class="link-icon"><i class="fa fa-link" aria-hidden="true"></i></div>
          <div class="link-text hide-on-mobile"><a target="_blank" href="http://www.michellemcglade.com">www.michellemcglade.com</a></div>
          <div class="link-text mobile"><a target="_blank" href="http://www.michellemcglade.com">Website</a></div>
        </div>
        <div class="col col-3"></div>
      </div>
      <div class="footer-project-nav project-nav">
        <div class="nav-prev"><a href="nutrition-therapy-institute.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowLeft-White-@2x.png" alt="Left"><img class="grey-arrow mobile" width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
        <div class="nav-next"><a href="bibliohive.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowRight-White-@2x.png" alt="Right"><img width="43" class="grey-arrow mobile" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Left"><div>Next</div></a></div>
      </div>
      <? echo getFooter(); ?>
      <!--END FOOTER-->

    </div>
</main>
</div>

</body>
</html>
