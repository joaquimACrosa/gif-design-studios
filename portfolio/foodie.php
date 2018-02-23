<?
include '../library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Foodie - GIF Design Studios</title>

  <link rel="stylesheet" type="text/css" href="<?php echo basename($_SERVER['PHP_SELF'],'.php');?>.css">

    <? echo portfolioHead(); ?>
    <? echo scriptsHead(); ?>
    <? echo getAnalytics(); ?>
</head>
<body class="single-portfolio no-hijack project-foodie">
<? echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--PROJECT HEADER-->
      <div id="single-project-cover" class="project_02 desktop">
          <div class="keepScrollingContainer">
              <a href="#anchor">
                  <div class="animated bounce">
                      <img src="../img/GIF-Scroll-@2x.png" width="25">
                  </div>
                  <div>Keep Scrolling</div>
              </a>
            </div></div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-Foodie-01.jpg" alt="Foodie" class="full-width"></div>
      <!--END PROJECT HEADER-->

      <!--PROJECT INFO-->
      <div class="portfolio-info-container" id="anchor">
        <div class="single-portfolio-info">
          <div class="portfolio-summary col-9">
            <p class="txt-label">Sumary:</p>
            <p class="text">Mitchel van Duuren is the go-to guy when it comes to Paleo in the Netherlands. He founded the brand Foodie with the aim and dream to help hundreds and thousands of people get their health back, by helping them take their first step towards a Paleo diet.</p><p>Our team's job was then to create a brand that has the possibility to become more like a movement. To create an identity that draws people in, and to make them feel like they are part of a very special movement towards a better way of life. And at the same time, to inject a little of Mitchel’s fun personality in the process.</p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">Client:</p>
            <p class="text">Foodie</p>
            <p class="txt-label">Art direction:</p>
            <p class="text">Joana Galvão</p>
            <p class="txt-label">Branding:</p>
            <p class="text">Diana Santa <br>Xesta Studios</p>
            <p class="txt-label">App design:</p>
            <p class="text">Diana Castro</p>
            <p class="txt-label">Animation:</p>
            <p class="text">Thomas Valente</p>
          </div>
        </div>
        <!--PORTFOLIO NAV-->
        <div class="project-nav">
          <div class="nav-prev">
              <a href="gigi-guides.php"><img width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"></a>
              <div>Previous</div>
          </div>
          <div class="nav-next">
              <a href="baby-bare-essentials.php"><img width="43" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Right"></a>
              <div style="text-align:center;">Next</div>
          </div>
        </div>
      </div>
      <!--END PROJECT INFO-->

      <div class="col col-12"><img src="../img/GIF-Foodie-02.jpg" alt="Foodie" class="full-width"></div>
      <video id="foodie-video" width="100%" preload autoplay loop>
    	<source src="../img/foodie.mp4" />
    	<source src="foodie.ogv" />
    	<source src="foodie.webm" />
    </video>

      <div class="cell col-6 table testimonial">
        <div class="square-responsive square-center"><p class="bold">"I recommend everybody to work with Gif Design Studios for a logo and brand that 'sticks'."</p><p>"I am pretty creative myself when it comes to graphics and logo's. I knew what I liked but couldn't find the inspiration to make something out of thin air for myself.</p><p>That's why I decided to let Gif Design Studios design a logo and brand for me. </p><p>The whole process was exciting and they really listened to my ideas / concerns and came up with different versions of potential logo's.
I am more than happy with the result and recommend everybody to work with them for a logo and brand that 'sticks'.</p><p class="bold project-text-color">Mitchel van Duuren | Founder & CEO | Foodie</p>
    </div>
      </div>
      <div class="cell col-6 desktop">
        <div class="square-responsive square-image1"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-Foodie-03.jpg" alt="Foodie" class="full-width"></div>

      <div class="col col-12"><img src="../img/GIF-Foodie-04.jpg" alt="Foodie" class="full-width"></div>

      <div class="cell col-6 desktop">
        <div class="square-responsive square-image2"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-Foodie-05.jpg" alt="Foodie" class="full-width"></div>
      <div class="cell col-6 desktop">
        <div class="square-responsive square-image3"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-Foodie-06.jpg" alt="Foodie" class="full-width"></div>


      <div class="col col-12"><img src="../img/GIF-Foodie-07.jpg" alt="Foodie" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-Foodie-08.jpg" alt="Foodie" class="full-width"></div>

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
        <div class="nav-prev"><a href="gigi-guides.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowLeft-White-@2x.png" alt="Left"><img class="grey-arrow mobile" width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
        <div class="nav-next"><a href="baby-bare-essentials.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowRight-White-@2x.png" alt="Right"><img width="43" class="grey-arrow mobile" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Left"><div>Next</div></a></div>
      </div>
      <? echo getFooter(); ?>
      <!--END FOOTER-->

    </div>
</main>
</div>

</body>
</html>
