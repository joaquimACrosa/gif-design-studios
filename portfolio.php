<?
include 'library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Portfolio - GiF Design Studio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/css/jquery.fullpage.css" />
  <link rel="stylesheet" href="/css/styles.css" media="screen">
  <link rel="stylesheet" type="text/css" href="/css/typed.css">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/animate.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="/js/script.js"></script>
  <script src="/js/typed.min.js"></script>
  <script type="text/javascript" src="/js/jquery.fullpage.js"></script>
  <script type="text/javascript" src="/js/midnight.jquery.min.js"></script>
  <? echo getAnalytics(); ?>
  <script type="text/javascript">
    $(document).ready(function() {
      function fullscreen(){
		      jQuery('#portfolio-page-cover').css({
            width: jQuery(window).width(),
            height: jQuery(window).height()
        });
	     }
       if ($(window).width() > 992) {
          fullscreen();
       }

       $(document).ready(function(){
         // Change this to the correct selector.
         $('.logo').midnight();
         $('#menu_toggle_container').midnight();

       });

      // Run the function in case of window resize
      jQuery(window).resize(function() {
          if ($(window).width() > 992) {
              fullscreen();
          }else if ($(window).width() > 768){
              jQuery('#portfolio-page-cover').css({
                  height: 500,
                  width: '100%'
              });
          }else if ($(window).width() < 768) {
              jQuery('#portfolio-page-cover').css({
                  height: 300
              });
          }
      });


        //count animation functions
        $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 2000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    });
  </script>
 <? echo scriptsHead(); ?>
</head>
<body class="portfolio_page no-hijack">
<? echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--SECTION 1-->
      <div class="header-section" id="portfolio-page-cover">
        <div class="header">
            <h2 class="white">Over 125 projects.</h2>
            <h1 class="white workwithus-h1">Over <span class="count orange">125</span> satisfied clients.</h1>

        </div>
        <div class="keepScrollingContainer">
            <div class="animated bounce">
                <a href="#scroll-anchor">
                    <img src="/img/GIF-Scroll-@2x.png" width="25">
                </a>
            </div>
            <div>Keep Scrolling</div>
        </div>
      </div>
      <!--END SECTION 1-->
      <!--SECTION2-->
      <section class="rollover effect-subtle clearfix portfolio-mosaic" id="scroll-anchor">

				<!-- item -->
        <article class="mosaic2">
					<figure class="">
						<img src="/img/GIF-Portfolio-Cover-Foodie.jpg" alt="Foodie" class="full-width">
            <div class="overlay white">
                <div class="project-text">
                  <div class="project-title dark_grey">Foodie</div>
                  <div class="project-link"><a class="btn btn-dark-grey" href="foodie">View Project</a></div>
                </div>
              </div>
					</figure>
				</article>
				<!-- / item -->

				<!-- item -->
				<article class="mosaic2">
					<figure class="">
						<img src="/img/GIF-Portfolio-Cover-BabyBareEssentials.jpg" alt="" class="full-width">
            <div class="overlay white">
                <div class="project-text">
                  <div class="project-title">Baby Bare Essentials</div>
                  <div class="project-link"><a class="btn btn-white" href="baby-bare-essentials">View Project</a></div>
                </div>
              </div>
					</figure>
				</article>
				<!-- / item -->

				<!-- item -->
        <article class="mosaic2">
					<figure class="">
						<img src="/img/GIF-Portfolio-Cover-NutritionTherapyInstitute.jpg" alt="" class="full-width">
            <div class="overlay white">
                <div class="project-text">
                  <div class="project-title">Nutrition Therapy Institute</div>
                  <div class="project-link"><a class="btn btn-white" href="nutrition-therapy-institute">View Project</a></div>
                </div>
              </div>
					</figure>
				</article>
				<!-- / item -->


				<!-- item -->
        <article class="mosaic2">
					<figure class="">
						<img src="/img/GIF-Portfolio-Cover-MichelleMcGlade.jpg" alt="" class="full-width">
            <div class="overlay white">
                <div class="project-text">
                  <div class="project-title dark_grey">Michelle McGlade</div>
                  <div class="project-link"><a class="btn btn-dark-grey" href="michelle-mcglade">View Project</a></div>
                </div>
              </div>
					</figure>
				</article>
				<!-- / item -->

				<!-- item -->
        <article class="mosaic2">
					<figure class="">
						<img src="/img/GIF-Portfolio-Cover-Bibliohive.jpg" alt="" class="full-width">
            <div class="overlay white">
                <div class="project-text">
                  <div class="project-title">Bibliohive</div>
                  <div class="project-link"><a class="btn btn-white" href="bibliohive">View Project</a></div>
                </div>
              </div>
					</figure>
				</article>
				<!-- / item -->

				<!-- item -->
        <article class="mosaic2">
					<figure class="">
						<img src="/img/GIF-Portfolio-Cover-Atticus.jpg" alt="" class="full-width">
            <div class="overlay white">
                <div class="project-text">
                  <div class="project-title">Atticus</div>
                  <div class="project-link"><a class="btn btn-white" href="atticus">View Project</a></div>
                </div>
              </div>
					</figure>
				</article>
				<!-- / item -->

				<!-- item -->
        <article class="mosaic2">
					<figure class="">
						<img src="/img/GIF-Portfolio-Cover-TheBridalCollection.jpg" alt="" class="full-width">
            <div class="overlay white">
                <div class="project-text">
                  <div class="project-title">The Bridal Collection Harrogate</div>
                  <div class="project-link"><a class="btn btn-white" href="the-bridal-collection-harrogate">View Project</a></div>
                </div>
              </div>
					</figure>
				</article>
				<!-- / item -->

				<!-- item -->
        <article class="mosaic2">
					<figure class="">
						<img src="/img/GIF-Portfolio-Cover-BiddyTarot.jpg" alt="" class="full-width">
            <div class="overlay white">
                <div class="project-text">
                  <div class="project-title">Biddy Tarot</div>
                  <div class="project-link"><a class="btn btn-white" href="biddy-tarot">View Project</a></div>
                </div>
              </div>
					</figure>
				</article>
				<!-- / item -->
                <!-- item -->
        <article class="mosaic2">
					<figure class="">
						<img src="/img/gigi-guides.jpg" alt="" class="full-width">
            <div class="overlay white">
                <div class="project-text">
                  <div class="project-title">Gigi Guides</div>
                  <div class="project-link"><a class="btn btn-white" href="gigi-guides">View Project</a></div>
                </div>
              </div>
					</figure>
				</article>
				<!-- / item -->
                <article class="mosaic2" style="background-color:#ffaa00;">
        					<figure class="">
        						<img style="visibility:hidden;" src="/img/gigi-guides.jpg" alt="" class="full-width">
                    <div class="overlay white">
                        <div class="project-text">
                          <div class="project-title">Have a project for us?</div>
                          <div class="project-link"><a class="btn btn-orange" href="/hire-us">Yes, actually I do!</a></div>
                        </div>
                      </div>
        					</figure>
        				</article>
        				<!-- / item -->

			</section>
      <!--END SECTION 2-->
      <!--SECTION 3-->
        <div class="bottom-section" style="position:relative;" id="section2">
          <h1 class="orange workwithus-h1">Ready to work with us?</h1>
          <p class="workwithus-p">We know you want to :)</p>
            <div class="btn-container">
                <a class="btn btn-orange animate" href="/hire-us">Oh Yeah!</a>
                <a class="btn hide-on-mobile btn-orange animate" href="/contact">I have a question</a>
            </div>
          <? echo getFooter(); ?>
        </div>
      <!--END SECTION 3-->

    </div>
</main>
</div>

</body>
</html>
