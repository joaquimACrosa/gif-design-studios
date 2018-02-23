<?
include 'library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="UTF-8">
<title> The Studio - GiF Design Studio</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/jquery.fullpage.css" />
<link rel="stylesheet" type="text/css" href="css/typed.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fullscreen-gallery.css" />
<link rel="stylesheet" type="text/css" href="css/quote-rotator.css" />
<link rel="stylesheet" href="css/swiper.css">

<link rel="stylesheet" href="css/styles.css" media="screen">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/typed.min.js"></script>
<script type="text/javascript" src="js/jquery.fullpage.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/quotespinner.js"></script>

<? echo getAnalytics(); ?>

<script type="text/javascript">
  $(document).ready(function() {

      var rotation = 0;

        jQuery.fn.rotate = function(degrees) {
            $(this).css({'transform' : 'rotate('+ degrees +'deg)'});
        };

        $('.rotate').click(function() {
            rotation += 180;
            $(this).rotate(rotation);
        });

        spinner1.initial();
        spinner1.dotnav();
        spinner2.initial();
        spinner2.dotnav();

    $('#fullpage').fullpage({
        sectionsColor: ['#FFFFFF', '#000000', '#FFFFFF'],
        anchors: ['Studio', 'Services', 'OurFounders', 'TheTeam', 'OurValues', 'Gallery' ,'Enthusiasm'],
        menu: '#menu',
        css3: true,
        responsive: 993,
        scrollingSpeed: 1000,
        onLeave: function(index, nextIndex, direction){
            var leavingSection = $(this);
        }
    });

});


  //});
</script>
<style>

    .swiper-container {
        width: 100%;
        margin: 20px auto;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
    }
    .typed-cursor{
        display: none;
    }
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(zipify.com/) 50% 50% no-repeat rgb(249,249,249);
        background-size: 200px auto;
    }
    </style>
     <? echo scriptsHead(); ?>
</head>
<body>
<? echo getHeader(); ?>
<div id="wrapper">


  <main id="studio-page">
    <div id="fullpage" class="fullpage-wrapper" style="height: 100%; position: relative; touch-action: none; transform: translate3d(0px, 0px, 0px);">
      <!--SECTION 1-->
        <div class="header-section section active fp-section fp-table fp-completely" id="section0" data-anchor="Home">
            <div class="header header-animation-container">
                <h1 class="white">
                    <div class="type-wrap">
                        <div id="typed-strings">
                            <span>Who we are & What we do</span>
                        </div>
                        <span id="typed" style="white-space:pre;"></span>
                    </div>
                </h1>
            </div>
            <div class="keepScrollingContainer">
              <div class="animated bounce">
                  <a href="#Services" >
                  <img src="img/GIF-Scroll-@2x.png" width="25"></div>
                </a>
                <div>Keep Scrolling</div>
            </div>
        </div>
      <!--END SECTION 1-->

      <!--SECTION 2-->
        <div class="section our-services-section fp-section fp-table fp-completely" id="section1" data-anchor="Services">
            <div class="fp-tableCell">
          <h2 class="orange">Our Services</h2>
          <div class="row">
            <div class="col-6">
              <div class="service-image-container">
                <img class="print" src="img/print.gif" width="230">
              </div>
              <div class="service-list">
                <ul>
                  <li>Print</li>
                  <li>Branding</li>
                  <li>Editorial</li>
                  <li>Illustration</li>
                  <li>Packaging</li>
                  <li>Wine labels</li>
                </ul>
              </div>
            </div>
            <div class="col-6 align-left">
              <div class="service-image-container">
                <img class="digital" src="img/digital.gif" width="230">
              </div>
              <div class="service-list">
                <ul>
                  <li>Digital</li>
                  <li>Web design</li>
                  <li>App Design</li>
                  <li>Development</li>
                  <li>Motion Designer</li>
                  <li>Social Media</li>
                </ul>
              </div>
            </div>
          </div>
          </div>
        </div>
      <!--END SECTION 2-->

      <!--SECTION 3-->
        <div class="section fp-section our-founders-section fp-table fp-completely" id="section2" data-anchor="OurFounders">
            <div class="fp-tableCell">
            <div class="row">
                <div class="col-6 align-left">
                    <h2 class="orange">Our Founders</h2>
                        <div class="quotes">
                            <div class="quote-contain">
                              <div class="quote-rotate1">
                                <p>Joana Galvão and José Freitas met at Kingston University in London, England. Joana was studying Graphic Design and Photography, and José (already with a Degree in Business Management under his belt) was pursuing his Masters in Marketing Management.</p><p>Fast-forward 3 years – the couple decided to go freelance...</p>
                              </div>
                              <div class="quote-rotate1">
                                <p>With the combination of Joana's experience at various award-winning design agencies and José's website development and marketing skills – they soon ended up with a 4-month wait list. Before they knew it, they had left London for Porto, Portugal, to pursue their joint dream of owning their own digital agency.</p><p>Today, Gif Design Studios employs 8 rockstar in-house team members and helps other entrepreneurs' big dreams and visions come to life.</p>
                              </div>
                              <div class="quote-rotate1">
                                <p class="bold-headline">"I'm the architect, Jose's the engineer," Joana says. "I have the vision for our company, and he helps bring it to life."</p>
                              </div>
                            </div>
                        </div>
                    <div class="quote-dots1"></div>
                </div>
                <div class="col-6"><img class="founders-image" src="img/GIF-Studio-OurFounders.jpg"></div>
            </div>
        </div>
        </div>
      <!--END SECTION 3-->

      <!--SECTION 4-->
        <div class="team-section section fp-section fp-table fp-completely" id="section3" data-anchor="TheTeam">
            <div class="fp-tableCell">
        <h2 class="orange">The Team</h2>
          <div class="row">
            <div class="col-3">
              <div class="team-member joana-galvao">
                  <div class="team-member-shadow"></div>
                <div class="team-member-text">
                  <div class="team-name">Joana Galvão</div>
                  <div class="team-job">Founder / CD</div>
                </div>
                <div class="team-overlay" style="display:none;"></div>
              </div>
            </div>
            <div class="col-3">
              <div class="team-member jose">
                  <div class="team-member-shadow"></div>
                <div class="team-member-text">
                  <div class="team-name">José Freitas</div>
                  <div class="team-job">Founder / DD</div>
                </div>
                <div class="team-overlay" style="display:none;"></div>
              </div>
            </div>
            <div class="col-3">
                <div class="team-member joana-araujo">
                  <div class="team-member-shadow"></div>
                <div class="team-member-text">
                  <div class="team-name">Joana Araújo</div>
                  <div class="team-job">Project / Studio Manager</div>
                </div>
                    <div class="team-overlay" style="display:none;"></div>
                </div>              
            </div>
            <div class="col-3">
              <div class="team-member diana-santa">
                  <div class="team-member-shadow"></div>
                <div class="team-member-text">
                  <div class="team-name">Diana Santa</div>
                  <div class="team-job">Graphic Designer / Illustrator</div>
                </div>
                <div class="team-overlay" style="display:none;"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
              <div class="team-member ruben-silva">
                  <div class="team-member-shadow"></div>
                <div class="team-member-text">
                  <div class="team-name">Rúben Silva</div>
                  <div class="team-job">UI / UX Designer</div>
                </div>
                <div class="team-overlay" style="display:none;"></div>
              </div>
            </div>
            <div class="col-3">
              <div class="team-member joao-loureiro">
                  <div class="team-member-shadow"></div>
                <div class="team-member-text">
                  <div class="team-name">João Loureiro</div>
                  <div class="team-job">Graphic Designer</div>
                </div>
                <div class="team-overlay" style="display:none;"></div>
              </div>
            </div>
            <div class="col-3">
              <div class="team-member daniela">
                  <div class="team-member-shadow"></div>
                <div class="team-member-text">
                  <div class="team-name">Daniela Meireles</div>
                  <div class="team-job">Graphic Designer</div>
                </div>
                <div class="team-overlay" style="display:none;"></div>
              </div>
            </div>
            <div class="col-3">
              <div class="team-member empty">
                <div class="join-us-container"><h3 class="bold orange">Want to be part of the team?</h3><a class="btn btn-orange" target="_blank" href="https://joanagalvao.typeform.com/to/V8qauO">Well Yeah!</a></div>
              </div>
            </div>
          </div>
        </div>
    </div>
      <!--END SECTION 4-->
      <!--SECTION 5-->
        <div class="section section-our-values fp-section fp-table fp-completely" id="section7" data-anchor="OurValues">
            <div class="fp-tableCell">
            <h2 class="orange">Our Values</h2>
            <div class="row">
                <div class="quotes2 desktop">
                    <div class="quote-contain">
                          <div class="quote-rotate2">
                                <div class="col-6">
                                    <div class="value-number">
                                        <div class="label">No.</div>
                                        <div class="rotate"></div>
                                        <div class="value">1</div>
                                    </div>
                                    <p class="bold-headline values-headline">We care about your business the way we care about ours – with a long-term vision in mind.
</p>
                                </div>
                                <div class="col-6"><p>A lot of businesses invest in a brand or website design... and then outgrow that design almost overnight. </p><p>We want our design to help your business evolve into your big vision. So our process starts with a deep dive into your 5-year business goals to make sure that, from Day 1, your brand is where you want to go. </p></div>
                          </div>
                          <div class="quote-rotate2">
                                <div class="col-6">
                                    <div class="value-number">
                                        <div class="label">No.</div>
                                        <div class="rotate"></div>
                                        <div class="value">2</div>
                                    </div>
                                    <p class="bold-headline values-headline">Our job is to make our clients' lives easier.</p>
                                </div>
                                <div class="col-6"><p>We don’t just give you the design and then leave you to hunt down a developer, copywriter, photographer etc.</p><p>We like to serve as a "one-stop shop" for all of your website and design needs – even if you don't know where to begin! We handle everything for you, so you don't have to exchange emails with 7 different people to make your project come to life. </p></div>
                          </div>
                          <div class="quote-rotate2">
                                <div class="col-6">
                                    <div class="value-number">
                                        <div class="label">No.</div>
                                        <div class="rotate"></div>
                                        <div class="value">3</div>
                                    </div>
                                    <p class="bold-headline values-headline">We create designs that convert.</p>
                                </div>
                                <div class="col-6"><p>Design isn't just about "making things look pretty." We think about the big concept behind your brand, who you're trying to attract, and how your brand identity can reflect that.</p><p>We also keep in mind the user flow on your website – what should come first to really draw the user in? How can we keep their attention with an effective brand targeted at your ideal customer? In what order does the user need to experience your site to get the best introduction to your work?</p></div>
                          </div>
                          <div class="quote-rotate2">
                                <div class="col-6">
                                    <div class="value-number">
                                        <div class="label">No.</div>
                                        <div class="rotate"></div>
                                        <div class="value">4</div>
                                    </div>
                                    <p class="bold-headline values-headline">We do what we love.</p>
                                </div>
                                <div class="col-6"><p>Everyone here loves coming into work and being challenged every day with a new project. We get excited by questions like, "How can we take this project to the next level?" </p><p>Because we're fortunate enough to work with clients we absolutely love, we find ourselves highly invested in the work – to the point of dreaming up new, innovative ideas that haven't been seen before. (push the envelope)</p></div>
                          </div>
                          <div class="quote-rotate2">
                                <div class="col-6">
                                    <div class="value-number">
                                        <div class="label">No.</div>
                                        <div class="rotate"></div>
                                        <div class="value">5</div>
                                    </div>
                                    <p class="bold-headline values-headline">Team is everything.</p>
                                </div>
                                <div class="col-6"><p>They say two heads are better than one... so how about 8?</p><p>Our team's diverse skills are what make Gif Designs such a powerhouse studio. (That's why we treat our team well and give them room to reach their creative potential.) We have true specialists in-house: someone who focuses on ebooks, someone who only does web design, someone who does illustration, etc.</p><p>And because we have an in-house (read: not virtual) team, we get to brainstorm and work together in a way many modern design studios simply can't. That means your project is gets the VIP treatment, no matter what.</p></div>
                          </div>
                          <div class="quote-rotate2">
                                <div class="col-6">
                                    <div class="value-number">
                                        <div class="label">No.</div>
                                        <div class="rotate"></div>
                                        <div class="value">6</div>
                                    </div>
                                    <p class="bold-headline values-headline">We love details.</p>
                                </div>
                                <div class="col-6"><p>It's easy to say, "we pay attention to detail" – but what does that really mean? In our case, it means we try to make everything creative – from the colours that will attract your ideal audience, to how the logo communicates exactly what you do, with subtlety and elegance.</p><p>We have expertise in brand strategy, marketing and user experience, so our process is designed to fully capture your business's unique traits and aspirations, and to translate them into a brand that exceeds your expectations, right down to the last pixel.</p></div>
                          </div>
                          <div class="quote-rotate2">
                                <div class="col-6">
                                    <div class="value-number">
                                        <div class="label">No.</div>
                                        <div class="rotate"></div>
                                        <div class="value">7</div>
                                    </div>
                                    <p class="bold-headline values-headline">We are friends of the environment.</p>
                                </div>
                                <div class="col-6"><p>We recycle like pros! Absolutely everything here at the office is sorted and recycled, and we use almost ZERO paper... unless it’s to print our clients' business cards. ;)</p><p>(We even have a graduate from Environmental Engineer on the team. Our talented project manager Joana Araújo is always coming up with new ways we can reduce our carbon footprint.)</p><p>And did we mention 50% of our team walks to work? Not very common for a city like Porto.</p></div>
                          </div>
                    </div>
                </div>
                <div class="quote-dots2 desktop"></div>
                <!--SWIPE-->
                <div id="values-swiper" class="swiper-container hide-on-desktop">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div>
                                <div class="value-number">
                                    <div class="label">No.</div>
                                    <div class="rotate"></div>
                                    <div class="value">1</div>
                                </div>
                            </div>
                            <div>
                                <p class="bold-headline values-headline">We care about your business the way we care about ours – with a long-term vision in mind.</p>
                                <p>A lot of businesses invest in a brand or website design... and then outgrow that design almost overnight. </p><p>We want our design to help your business evolve into your big vision. So our process starts with a deep dive into your 5-year business goals to make sure that, from Day 1, your brand is where you want to go. </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <div class="value-number">
                                    <div class="label">No.</div>
                                    <div class="rotate"></div>
                                    <div class="value">2</div>
                                </div>
                            </div>
                            <div>
                                <p class="bold-headline values-headline">Our job is to make our clients' lives easier.</p>
                                <p>We don’t just give you the design and then leave you to hunt down a developer, copywriter, photographer etc.</p><p>We like to serve as a "one-stop shop" for all of your website and design needs – even if you don't know where to begin! We handle everything for you, so you don't have to exchange emails with 7 different people to make your project come to life. </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <div class="value-number">
                                    <div class="label">No.</div>
                                    <div class="rotate"></div>
                                    <div class="value">3</div>
                                </div>
                            </div>
                            <div>
                                <p class="bold-headline values-headline">We create designs that convert.</p>
                                <p>Design isn't just about "making things look pretty." We think about the big concept behind your brand, who you're trying to attract, and how your brand identity can reflect that.</p><p>We also keep in mind the user flow on your website – what should come first to really draw the user in? How can we keep their attention with an effective brand targeted at your ideal customer? In what order does the user need to experience your site to get the best introduction to your work?</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <div class="value-number">
                                    <div class="label">No.</div>
                                    <div class="rotate"></div>
                                    <div class="value">4</div>
                                </div>
                            </div>
                            <div>
                                <p class="bold-headline values-headline">We do what we love.</p>
                                <p>Everyone here loves coming into work and being challenged every day with a new project. We get excited by questions like, "How can we take this project to the next level?" </p><p>Because we're fortunate enough to work with clients we absolutely love, we find ourselves highly invested in the work – to the point of dreaming up new, innovative ideas that haven't been seen before. (push the envelope)</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <div class="value-number">
                                    <div class="label">No.</div>
                                    <div class="rotate"></div>
                                    <div class="value">5</div>
                                </div>
                            </div>
                            <div>
                                <p class="bold-headline values-headline">Team is everything.</p>
                                <p>They say two heads are better than one... so how about 8?</p><p>Our team's diverse skills are what make Gif Designs such a powerhouse studio. (That's why we treat our team well and give them room to reach their creative potential.) We have true specialists in-house: someone who focuses on ebooks, someone who only does web design, someone who does illustration, etc.</p><p>And because we have an in-house (read: not virtual) team, we get to brainstorm and work together in a way many modern design studios simply can't. That means your project is gets the VIP treatment, no matter what.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <div class="value-number">
                                    <div class="label">No.</div>
                                    <div class="rotate"></div>
                                    <div class="value">6</div>
                                </div>
                            </div>
                            <div>
                                <p class="bold-headline values-headline">We love details.</p>
                                <p>It's easy to say, "we pay attention to detail" – but what does that really mean? In our case, it means we try to make everything creative – from the colours that will attract your ideal audience, to how the logo communicates exactly what you do, with subtlety and elegance.</p><p>We have expertise in brand strategy, marketing and user experience, so our process is designed to fully capture your business's unique traits and aspirations, and to translate them into a brand that exceeds your expectations, right down to the last pixel.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div>
                                <div class="value-number">
                                    <div class="label">No.</div>
                                    <div class="rotate"></div>
                                    <div class="value">7</div>
                                </div>
                            </div>
                            <div>
                                <p class="bold-headline values-headline">We are friends of the environment.</p>
                                <p>We recycle like pros! Absolutely everything here at the office is sorted and recycled, and we use almost ZERO paper... unless it’s to print our clients' business cards. ;)</p><p>(We even have a graduate from Environmental Engineer on the team. Our talented project manager Joana Araújo is always coming up with new ways we can reduce our carbon footprint.)</p><p>And did we mention 50% of our team walks to work? Not very common for a city like Porto.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
      <!--END SECTION 5-->
      <!--SECTION 6-->
        <div class="gallery-section section fp-section fp-completely" id="section4" data-anchor="Gallery">
            <div class="fp-tableCell">
          <div class="info-gallery desktop">Use the arrows to see more photos</div>
          <ul id="cbp-bislideshow" class="cbp-bislideshow">
            <li><img src="img/GIF-Studio-Gallery-01.jpg" alt="Gif Design Studio"/></li>
            <li><img src="img/GIF-Studio-Gallery-02.jpg" alt="Gif Design Studio"/></li>
            <li><img src="img/GIF-Studio-Gallery-03.jpg" alt="Gif Design Studio"/></li>
            <li><img src="img/GIF-Studio-Gallery-04.jpg" alt="Gif Design Studio"/></li>
            <li><img src="img/GIF-Studio-Gallery-05.jpg" alt="Gif Design Studio"/></li>
            <li><img src="img/GIF-Studio-Gallery-06.jpg" alt="Gif Design Studio"/></li>
            <li><img src="img/GIF-Studio-Gallery-07.jpg" alt="Gif Design Studio"/></li>
          </ul>

          <div id="cbp-bicontrols" class="gallery-nav">
            <div class="cbp-biprev">&nbsp;</div>
            <div class="cbp-binext">&nbsp;</div>
          </div>

        </div>
    </div>
      <!--END SECTION 6-->

      <!--SECTION 7-->
        <div class="bottom-section section fp-section fp-table fp-completely" id="section5" data-anchor="Enthusiasm">
            <div class="fp-tableCell">
        <h1 class="orange">Do you like our enthusiasm?</h1>
          <p>Share your vision with us and we’ll make it come to life.</p>
          <a class="btn btn-orange" href="hire-us.php">Definitely!</a>
          <? echo getFooter(); ?>
        </div>
    </div>
      <!--END SECTION 7-->

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
<!-- Swiper JS -->
    <script src="js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
    </script>

</body>
</html>
