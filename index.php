<?

include 'library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="UTF-8">
<title>GiF Design Studios</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/jquery.fullpage.css" />
<link rel="stylesheet" href="css/styles.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/typed.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/background-check.min.js"></script>
<script src="js/typed.min.js"></script>
<script type="text/javascript" src="js/jquery.fullpage.js"></script>
<script type="text/javascript" src="js/midnight.jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    if ($(window).width() > 992) {
        //createFullpage();
    }
    //createFullpage();
    $(document).ready(function(){
      // Change this to the correct selector.
      $('.logo').midnight();
      $('#menu_toggle_container').midnight();

    });
    jQuery('#fullpage').fullpage({
            sectionsColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF'],
            anchors: ['Home', 'Projects', 'WorkWithUs'],
            menu: '#menu',
            css3: true,
            scrollingSpeed: 1000,
            responsive: 993,
            onLeave: function(index, nextIndex, direction) {
                var leavingSection = $(this);
                //using index
                if (index == 2 && direction == 'down') {
                    setTimeout(function() {
                        $('.workwithus-h1').addClass('animated fadeInUp');
                    }, 200);
                    setTimeout(function() {
                        $('.workwithus-p').addClass('animated fadeInUp');
                    }, 500);
                    setTimeout(function() {
                        $('#section2 a.animate').addClass('animated fadeInUp');
                    }, 700);
                }
            }
        });

    /*
    if ($(window).width() < 992) {
        setTimeout(function() {
            $('.workwithus-h1').addClass('animated fadeInUp');
        }, 700);
        setTimeout(function() {
            $('.workwithus-p').addClass('animated fadeInUp');
        }, 900);
        setTimeout(function() {
            $('#section2 a.animate').addClass('animated fadeInUp');
        }, 1200);
    }
    $(window).resize(function() {
        if ($(window).width() <= 991) {
            $.fn.fullpage.destroy('all');
            setTimeout(function() {
                $('.workwithus-h1').addClass('animated fadeInUp');
            }, 700);
            setTimeout(function() {
                $('.workwithus-p').addClass('animated fadeInUp');
            }, 900);
            setTimeout(function() {
                $('#section2 a.animate').addClass('animated fadeInUp');
            }, 1200);
        }
        if ($(window).width() > 992) {
            createFullpage();
        }
    });*/
});
</script>
    <? echo scriptsHead(); ?>
    <? echo getAnalytics(); ?>
</head>
<body>
<? echo getHeader(); ?>

<div id="wrapper">
  <main id="home-page">
    <div id="fullpage" class="fullpage-wrapper" style="height: 100%; position: relative; touch-action: none; transform: translate3d(0px, 0px, 0px);">
      <!--SECTION 1-->
        <div class="header-section section active fp-section fp-table fp-completely" id="section0" data-anchor="Home">
          <div class="header header-animation-container">
            <h2 class="white">Here at GiF we do</h2>
            <h1 class="orange">
              <div class="type-wrap">
                <div id="typed-strings">
                  <span>Branding</span>
                  <p>Web design</p>
                  <p>Morning Yoga</p>
                  <p>Editorial design</p>
                  <p>Web Development</p>
                  <p>Online Education Platforms</p>
                  <p>Great cups of tea</p>
                  <p>Responsive design</p>
                  <p>Mobile Apps</p>
                </div>
              <span id="typed" style="white-space:pre;"></span>
              </div></h1>
              </div>
            <div class="keepScrollingContainer">
              <div class="animated bounce">
                <a href="#Projects">
                    <img src="img/GIF-Scroll-@2x.png" width="25">
                </a>
              </div>
              <div>Keep Scrolling</div>
            </div>
        </div>
      <!--END SECTION 1-->

      <!--SECTION 2-->
        <div class="section fp-completely" id="section1" data-anchor="Projects">

          <div class="home-project-container">
            <div class="home-project home-project-1">
                <div>
              <div class="overlay white">
                <div class="project-text">
                  <div class="project-title">Bridal Collection</div>
                  <div class="project-link"><a class="btn btn-white uppercase" href="portfolio/the-bridal-collection-harrogate">Check project</a></div>
                </div>
              </div>
              </div>
            </div>
            <div class="home-project home-project-2">
                <div>
              <div class="overlay white">
                <div class="project-text">
                  <div class="project-title">Nutrition Therapy Institute</div>
                  <div class="project-link"><a class="btn btn-white uppercase" href="portfolio/nutrition-therapy-institute">Check project</a></div>
                </div>
              </div>
            </div>
            </div>
            <div class="home-project home-project-3">
                <div>
              <div class="overlay white">
                <div class="project-text">
                  <div class="project-title">Biddy Tarot</div>
                  <div class="project-link"><a class="btn btn-white uppercase" href="portfolio/biddy-tarot">Check project</a></div>
                </div>
              </div>
              </div>
            </div>
            <div data-midnight="black" class="home-project desktop">
              <div class="overlay-clear white">
                <div class="project-text">
                  <div class="project-title dark_grey">Want to see more projects?</div>
                  <div class="project-link"><a class="btn btn-orange uppercase" href="portfolio">Yes, please</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="more-projects tablet"><a href="portfolio.php">+ More Projects?</a></div>
        </div>
      <!--END SECTION 2-->

      <!--SECTION 3-->
        <div data-midnight="black" class="bottom-section section fp-section fp-table fp-completely" id="section2" data-anchor="WorkWithUs">
            <div class="fp-tableCell">
          <h1 class="orange workwithus-h1" style="opacity:0;">Ready to work with us?</h1>
          <p class="workwithus-p" style="opacity:0;">We know you want to :)</p>
          <div class="btn-container">
              <a class="btn btn-orange animate" style="opacity:0;" href="hire-us">Oh Yeah!</a>
              <a class="btn hide-on-mobile btn-orange animate" style="opacity:0;" href="contact">I have a question</a>
          </div>

          <!--FOOTER-->

          <? echo getFooter(); ?>
          </div>
          <!--END FOOTER-->
        </div>
      <!--END SECTION 3-->

    </div>
</main>
</div>

</body>
</html>
