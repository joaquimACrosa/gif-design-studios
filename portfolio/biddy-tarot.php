<?
include '../library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Biddy Tarot - GIF Design Studios</title>

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
<body class="single-portfolio no-hijack project-biddy">
<? echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--PROJECT HEADER-->
      <div id="single-project-cover" class="project_08 desktop">
          <div class="keepScrollingContainer">
              <a href="#anchor">
                  <div class="animated bounce">
                      <img src="../img/GIF-Scroll-@2x.png" width="25">
                  </div>
                  <div>Keep Scrolling</div>
              </a>
            </div>
        </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-BiddyTarot-01.jpg" alt="BiddyTarot" class="full-width"></div>
      <!--END PROJECT HEADER-->

      <!--PROJECT INFO-->
      <div class="portfolio-info-container" id="anchor">
        <div class="single-portfolio-info">
          <div class="portfolio-summary col-9">
            <p class="txt-label">Biddy Tarot Re-brand and website redesign:</p>
            <p class="text">Our founder, Joana Galvão, met Brigit Esselmont at <a target="_blank" href="http://www.tropicalthinktank.com/">Tropical Think Tank</a> in the Philippines. It wasn’t until Joana got back that she realised Brigit had spent the last 5 years growing her own <a target="_blank" href="https://www.biddytarot.com/">Tarot Empire</a>. Not only is her website the top Tarot website in the english speaking world, but it also has millions of unique visitors each year. That’s when we decided to contact her.</p><p>Brigit had started her website, filled with over 300 pages in 2007 and now was ready for a rebrand and fresh look. This is what we provided for her in the first phase of working together. </p><p>Take a look:</p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">Client:</p>
            <p class="text">Brigit Esselmont</p>
            <p class="txt-label">Art direction:</p>
            <p class="text">Joana Galvão</p>
            <p class="txt-label">Branding:</p>
            <p class="text">Diana Santa</p>
            <p class="txt-label">UX / UI:</p>
            <p class="text">Diana Santa</p>
            <p class="txt-label">Development of site:</p>
            <p class="text">José Freitas</p>
          </div>
        </div>

        <!--PORTFOLIO NAV-->
        <div class="project-nav">
          <div class="nav-prev"><a href="the-bridal-collection-harrogate.php"><img width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"></a>
            <div>Previous</div>
            </div>
          <div class="nav-next"><a href="gigi-guides.php"><img width="43" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Right"></a>
            <div style="text-align:center;">Next</div>
            </div>
        </div>
      </div>
      <!--END PROJECT INFO-->

      <div class="col col-12"><img src="../img/GIF-BiddyTarot-02.jpg" alt="BiddyTarot" class="full-width"></div>

      <div class="cell col-6 table testimonial">
        <div class="square-responsive square-center"><p class="bold">The logo Gif Design Studios designed for Biddy Tarot is magical! </p><p> The team tuned into our vision for the future and you captured the true essence of what we want to represent, bringing it together into a beautiful and unique design. Every time I see the new logo, I feel completely energised - it's in total alignment with where we're heading as a business. </p><p>And the website Gif’s team created is divine - in more ways than one. With the new, modern website design, we are one step closer to revolutionising the world of Tarot and creating a whole new possibility for people who love Tarot. </p><p class="bold project-text-color">Brigit Esselmont | Founder | Biddy Tarot</p></div>
      </div>
      <div class="cell col-6 desktop">
        <div class="square-responsive square-image1"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-BiddyTarot-03.jpg" alt="BiddyTarot" class="full-width"></div>

      <div class="col col-12"><img src="../img/GIF-BiddyTarot-04.jpg" alt="BiddyTarot" class="full-width"></div>

      <div class="cell col-6 desktop">
        <div class="square-responsive square-image2"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-BiddyTarot-05.jpg" alt="BiddyTarot" class="full-width"></div>

      <div class="cell col-6 desktop">
        <div class="square-responsive square-image3"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-BiddyTarot-06.jpg" alt="BiddyTarot" class="full-width"></div>

      <!--PROJECT INFO-->
      <div class="portfolio-info-container">
        <div class="single-portfolio-info">
          <div class="portfolio-summary col-9">
            <p class="txt-label">Biddy Tarot community:</p>
            <p class="text">Brigit then had the idea of creating a community for Tarot Readers (professional and amateurs). The Biddy Tarot Community is a modern learning community for people who want to improve their Tarot card reading skills and connect more deeply to their intuition in their day-to-day lives. The user pays a monthly fee, and gets access to join the forum to get help from other readers, take video classes, attend monthly webinars and much more. </p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">Art direction:</p>
            <p class="text">Joana Galvão</p>
            <p class="txt-label">Branding:</p>
            <p class="text">Diana Santa</p>
            <p class="txt-label">UX / UI:</p>
            <p class="text">Diana Santa</p>
            <p class="txt-label">Development of community site:</p>
            <p class="text">José Freitas</p>
          </div>
        </div>
      </div>
      <!--END PROJECT INFO-->

      <div class="col col-12"><img src="../img/GIF-BiddyTarot-07.jpg" alt="BiddyTarot" class="full-width"></div>

      <div class="cell col-6 table testimonial">
        <div class="square-responsive square-center"><p class="bold">"I LOVE the new website!"</p><p>"I've been visiting BiddyTarot.com for a while now, since last Summer when I was introduced to the tarot. The site has helped me discover and learn all the wonderful things the tarot has to offer. And now today, I come back to the site to reread the definition of the Page of Wands and BOOM! I see such a beautiful, chic, modern webpage. I have been on the site for almost 30 minutes now just clicking through the site and looking at pictures. And then I see the Forum and now... I'll definitely be here a while."</p><p class="bold project-text-color">From a regular visitor of Biddy Tarot</p></div>
      </div>
      <div class="cell col-6 desktop">
        <div class="square-responsive square-image4"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-BiddyTarot-08.jpg" alt="BiddyTarot" class="full-width"></div>

      <div class="col col-12"><img src="../img/GIF-BiddyTarot-09.jpg" alt="BiddyTarot" class="full-width"></div>

      <!--PROJECT INFO-->
      <div class="portfolio-info-container">
        <div class="single-portfolio-info">
          <div class="portfolio-summary col-9">
            <p class="txt-label">Free Tarot Readings Hub:</p>
            <p class="text">Finally for the community, to enable tarot readers to practice on each other and get feedback, Brigit had the wonderful idea of creating a software where the readers could log-in, give their readings, and receive their ratings. Whilst building out the user experience and design, we also redesigned the back end so it was beautiful and easy for the Biddy Tarot team to assign readings to other readers, manage how everyone is doing and give them award badges.</p><p>To make things even more challenging (and we love our challenges) it also had to look perfect on mobile and tablet, and at the same time, still have all the functionalities the hub has. </p><p>Take a look:</p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">UX:</p>
            <p class="text">Rúben Silva <br/>José Freitas<br/>Joana Galvão</p>
            <p class="txt-label">UI:</p>
            <p class="text">Rúben Silva<br/>Diana Santa</p>
            <p class="txt-label">Development of hub:</p>
            <p class="text">James Rose</p>

          </div>
        </div>
      </div>
      <!--END PROJECT INFO-->
      <div class="col col-12"><img src="../img/GIF-BiddyTarot-10.jpg" alt="BiddyTarot" class="full-width"></div>

      <div class="cell col-6 table testimonial">
        <div class="square-responsive square-center"><p class="bold">Biddy Tarrot’s Mission: </p><p>"When it comes to developing your Tarot reading skills, I’m all about making it a simple, intuitive and fun part of everyday life that anyone can do. No special psychic abilities needed! <br/>I also know that reading Tarot cards is one of the best ways to deepen your intuition in your daily life.</p><p>That’s why I’m on a mission to make Tarot a normal part of everyday discussions about spirituality and wellness, like yoga or meditation. <br/>Because the way I see it, the more people who listen to their intuition and trust their gut… the better!"</p><p class="bold project-text-color">Brigit Esselmont</p></div>
      </div>
      <div class="cell col-6 desktop">
        <div class="square-responsive square-image5"></div>
      </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-BiddyTarot-11.jpg" alt="BiddyTarot" class="full-width"></div>

      <div class="col col-12"><img src="../img/GIF-BiddyTarot-12.jpg" alt="BiddyTarot" class="full-width"></div>


      <!--FOOTER-->
      <div class="project-links project-color">
        <div class="col col-3"></div>
        <div class="col col-3">
          <div class="link-icon"><a target="_blank" href="https://www.behance.net/gallery/45397543/Biddy-Tarot"><i class="fa fa-behance" aria-hidden="true"></i></a></div>
          <div class="link-text"><a target="_blank" href="https://www.behance.net/gallery/45397543/Biddy-Tarot">Behance</a></div>
        </div>
        <div class="col col-3">
          <div class="link-icon"><i class="fa fa-link" aria-hidden="true"></i></div>
          <div class="link-text hide-on-mobile"><a target="_blank" href="http://www.biddytarot.com">www.biddytarot.com</a></div>
          <div class="link-text mobile"><a target="_blank" href="http://www.biddytarot.com">Website</a></div>
        </div>
        <div class="col col-3"></div>
      </div>
      <div class="footer-project-nav project-nav">
        <div class="nav-prev"><a href="the-bridal-collection-harrogate.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowLeft-White-@2x.png" alt="Left"><img class="grey-arrow mobile" width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
        <div class="nav-next"><a href="gigi-guides.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowRight-White-@2x.png" alt="Right"><img width="43" class="grey-arrow mobile" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Left"><div>Next</div></a></div>
      </div>
      <? echo getFooter(); ?>
      <!--END FOOTER-->

    </div>
</main>
</div>

</body>
</html>
