<?
include '../library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Gigi Guides - GIF Design Studios</title>

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
<body class="single-portfolio no-hijack project-gigi-guides">
<? echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--PROJECT HEADER-->
        <div id="single-project-cover" class="project_09 desktop">
              <div class="keepScrollingContainer">
                  <a href="#anchor">
                      <div class="animated bounce">
                          <img src="../img/GIF-Scroll-@2x.png" width="25">
                      </div>
                      <div>Keep Scrolling</div>
                  </a>
            </div>
        </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-GigiGuides-01.jpg" alt="GIGI Guides" class="full-width"></div>
      <!--END PROJECT HEADER-->

      <!--PROJECT INFO-->
      <div class="portfolio-info-container" id="anchor">
        <div class="single-portfolio-info">
          <div class="portfolio-summary col-9">
            <p class="txt-label">Sumary:</p>
            <p class="text">Bianca from <a target="_blank" href="http://www.italianfix.com/">The Italian Fix</a> had built her travel company by doing guided tours like no others. She is her client’s american guide, Italy expert, ready to not only show you a great time, but to take you to the hidden gems that only a local would know about.</p><p>Now Bianca was ready to create a product to reach more people -- Gigi Guides is the new generation of travel guides. Gigi crushes the limitations of a traditional paper guidebook and gives you 24/7 access on any device. Access videos, written guides and audios, all in one place. Obsessively updated so you always travel with the latest intel. Written by people who live in Italy.</p><p>Our job was to give this product a new brand, look and develop it into an intuitive and beautiful Italy guide.</p><p>Take a look:</p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">Client:</p>
            <p class="text">Bianca Gignac</p>
            <p class="txt-label">Art direction:</p>
            <p class="text">Joana Galvão</p>
            <p class="txt-label">Branding:</p>
            <p class="text">João Loureiro</p>
            <p class="txt-label">UX / UI:</p>
            <p class="text">João Loureiro</p>
            <p class="txt-label">Editorial design:</p>
            <p class="text">João Loureiro <br/>Diana Castro</p>
            <p class="txt-label">Development:</p>
            <p class="text">José Freitas</p>
          </div>
        </div>

        <!--PORTFOLIO NAV-->
        <div class="project-nav">
          <div class="nav-prev"><a href="biddy-tarot.php"><img width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"></a><div>Previous</div></div>
          <div class="nav-next"><a href="foodie.php"><img width="43" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Right"></a><div>Next</div></div>
        </div>
      </div>
      <!--END PROJECT INFO-->


      <div class="col col-12"><img src="../img/GIF-GigiGuides-02.jpg" alt="GIGI Guides" class="full-width"></div>

      <div class="cell col-6 table testimonial">
        <div class="square-responsive square-center">
            <p class="bold">Gif Studios is the bomb! </p><p>The crew is highly creative and highly practical -- a killer combination for modern brands looking to rise above the noise. We wanted a functional and beautiful membership site for our travel guide and they delivered.</p><p>Our travel guide, Gigi Guides, has a beautiful home that I'm pumped with thanks to this crew.  The backend to the Member Area is clean and above and beyond of what we could have hoped for a new product entering the market. They went the extra mile in the development stage and looked into the future of where we wanted to go, adding backend functionality to let us grow. If you're looking for visionary people -- this is your tribe. </p><p class="bold project-text-color">Bianca Gignac | Founder | Travel Beautifully Media</p>
        </div>
      </div>

      <div class="cell col-6 desktop">
        <div class="square-responsive square-image1"></div>
      </div>
      <div class="col col-12 tablet"><img src="../img/GIF-GigiGuides-03.jpg" alt="GIGI Guides" class="full-width"></div>

      <div class="col col-12"><img src="../img/GIF-GigiGuides-04.jpg" alt="GIGI Guides" class="full-width"></div>

      <div class="cell col-6 desktop">
        <div class="square-responsive square-image2"></div>
      </div>
      <div class="cell col-6 desktop">
        <div class="square-responsive square-image3"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-GigiGuides-05.jpg" alt="GIGI Guides" class="full-width"></div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-GigiGuides-06.jpg" alt="GIGI Guides" class="full-width"></div>

      <div class="col col-12"><img src="../img/GIF-GigiGuides-07.jpg" alt="GIGI Guides" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-GigiGuides-08.jpg" alt="GIGI Guides" class="full-width"></div>

      <!--FOOTER-->
      <div class="project-links project-color">
        <div class="col col-3"></div>
        <div class="col col-3">
          <div class="link-icon"><a href="#"><i class="fa fa-behance inactive" aria-hidden="true"></i></a></div>
          <div class="link-text">Behance</div>
        </div>
        <div class="col col-3">
          <div class="link-icon"><i class="fa fa-link" aria-hidden="true"></i></div>
          <div class="link-text hide-on-mobile"><a target="_blank" href="http://ita.ontraport.com/t?orid=9282&opid=11">www.gigiguides.com</a></div>
          <div class="link-text mobile"><a target="_blank" href="http://ita.ontraport.com/t?orid=9282&opid=11">Website</a></div>
        </div>
        <div class="col col-3"></div>
      </div>
      <div class="footer-project-nav project-nav">
        <div class="nav-prev"><a href="biddy-tarot.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowLeft-White-@2x.png" alt="Left"><img class="grey-arrow mobile" width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
        <div class="nav-next"><a href="foodie.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowRight-White-@2x.png" alt="Right"><img width="43" class="grey-arrow mobile" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Left"><div>Next</div></a></div>
      </div>
      <? echo getFooter(); ?>
      <!--END FOOTER-->

    </div>
</main>
</div>

</body>
</html>
