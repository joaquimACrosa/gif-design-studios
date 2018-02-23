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
  <link rel="stylesheet" type="text/css" href="css/fullscreen-gallery.css" />

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="/js/script.js"></script>
  <script src="/js/typed.min.js"></script>
  <script type="text/javascript" src="/js/midnight.jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="plugins/slick-slider/slick.css"/>

  <script type="text/javascript" src="plugins/slick-slider/slick.js"></script>
  <link rel="stylesheet" type="text/css" href="plugins/swiper/swiper.css"/>

  <script type="text/javascript" src="plugins/swiper/swiper.js"></script>

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

    #studio-page #section0 {
        background-image: url(../img/GIF-Studio-Header.jpg);
        background-size: cover;
        position: relative;
        background-position: center center;
    }
    #gallery-section{
        height: 100vh;
        position: relative;
    }
    .info-gallery{
        text-align: center;
    }
    section{
        position: relative;
        overflow: auto;
        padding: 30px 0;
    }
    h2{
        text-align: center;
    }

    .container{
        width: 900px;
        margin: 0 auto;
        overflow: auto;
    }
    .service-image-container {
        float: none;
        text-align: center;
        margin-top: 50px;
    }
    .service-list{
        text-align: center;
        font-size: 15px;
        padding: 0 32px;
    }
    .service-title{
        text-align: center;
        font-size: 20px;
        font-family: Cera-Bold, Helvetica, Arial, sans-serif;
        color: #ffaa00;
        line-height: 25px;
        margin-bottom: 8px;
    }
    .service-image-container img{
        height: 238px;
        width: auto;
    }
    .row{
        width: 100%;
        overflow: auto;
    }
    .founders-section{
        margin-top: 70px;
    }
    .founders-section p{
        padding-right: 28px;
    }
    .founders-section .container{
        width: 1070px;
    }
    .founders-text-container{
        width: 46%;
    }
    .founders-text-container h2{
        padding-bottom: 15px;
    }
    .founders-image-container{
        height: 570px;
        width: 570px;
    }
    .founders-quote p{
        padding: 0;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        font-family: Cera-Bold, Helvetica, Arial, sans-serif;
        color: #3a3a3a;
        margin-top: 60px;
    }
    .team-member-container{
        width: 170px;
        float: left;
        text-align: center;
        margin: 0 15px;
        height: 278px;
    }
    .team-member-container .name{
        font-family: Cera-Bold, Helvetica, Arial, sans-serif;
        font-size: 15px;
        color: #3a3a3a;
        margin-top: 10px;
    }
    .team-member-container .job{
        line-height: 17px;
    }
    .team-member-container .image-container{
        height: 170px;
        width: 170px;
        background-size: cover;
    }
    .team-section {
        margin-top: 40px;
    }
    .team-section h2 {
        position: relative;
        margin-bottom: 70px;
    }
    .team-section .row .team-member-container:last-child{
        margin-right: 0px;
    }
    .team-section .container{
        width: 1000px;
    }
    .team-section .row{
        margin-bottom: 50px;
    }
    .team-member-container.new .image-container{
        border: 2px dashed #dddcde;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
    }
    .team-member-container.new .name{
        padding: 0 10px;
    }
    .team-section .btn-orange{
        text-transform: capitalize;
        display: block;
        margin-top: 12px;
        padding: 10px 27px;
    }
    .team-member-container.new .image-container{
        display: table;
    }
    .team-member-container.new .new-inner{
        display: table-cell;
        vertical-align: middle;
        font-family: Cera-Bold, Helvetica, Arial, sans-serif;
        font-size: 15px;
        color: #dddcde;
        line-height: 21px;
    }
    .slick-list{padding:0 20% 0 0;}
    .swiper-container{width:100%;height:300px;margin:20px auto;}
    .swiper-slide{
        text-align:center;
        font-size:18px;
        background:#fff;
        width:60%;
        display:-webkit-box;
        display:-ms-flexbox;
        display:-webkit-flex;
        display:flex;-webkit-box-pack:center;
        -ms-flex-pack:center;
        -webkit-justify-content:center;
        justify-content:center;
        -webkit-box-align:top;
        -ms-flex-align:top;
        -webkit-align-items:top;
        align-items:top;
    }
    .swiper-slide{
        width:52%;
        -webkit-box-shadow: 0px 0px 16px -4px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 16px -4px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 16px -4px rgba(0,0,0,0.75);
        background-color: #FFFFFF;
        border-radius: 8px;
        height: 400px;
        margin-top: 115px;

    }
    .swiper-container {
        padding: 20px 0;
        height: 585px;
    }
    .swiper-slide .slide-container{
        display: block;
        width: 100%;
        padding: 60px;
        text-align: left;
    }
    .slider-title{
        font-size: 20px;
        font-family: Cera-Regular, Helvetica, Arial, sans-serif;
        line-height: 27px;
    }
    .swiper-pagination-bullet {
        width: 16px;
        height: 16px;
        border: 1px solid #dddcde;
        background: transparent;
        opacity: 1;
    }
    .swiper-pagination-bullet-active{
        background: #ffaa00;
        border: 1px solid #ffaa00;
    }
    .swiper-slide .icon{
        height: 100px;
        position: absolute;
        top: -100px;
    }
    .swiper-slide .icon img{
        height: 60px;
    }
    .swiper-slide-prev, .swiper-slide-next{
        opacity: 0.1;
        cursor: pointer;
    }
    .team-overlay{
        width: 170px;
        height: 170px;
    }
    .jose{
        background-image: url('img/GIF-Studio-Team-Jose-01.jpg');
    }
    .jose .team-overlay {
        background-image: url('img/GIF-Studio-Team-Jose-02.jpg');
    }
    .joana-galvao{
        background-image: url('img/GIF-Studio-Team-JoanaGalvao-01.jpg');
    }
    .joana-galvao .team-overlay{
        background-image: url('img/GIF-Studio-Team-JoanaGalvao-02.jpg');
    }
    .diana{
        background-image: url('img/GIF-Studio-Team-DianaSanta-01.jpg');
    }
    .diana .team-overlay{
        background-image: url('img/GIF-Studio-Team-DianaSanta-02.jpg');
    }
    .ruben{
        background-image: url('img/GIF-Studio-Team-Ruben-01.jpg');
    }
    .ruben .team-overlay{
        background-image: url('img/GIF-Studio-Team-Ruben-02.jpg');
    }
    .joao{
        background-image: url('img/GIF-Studio-Team-Joao-01.jpg');
    }
    .joao .team-overlay{
        background-image: url('img/GIF-Studio-Team-Joao-02.jpg');
    }
    .joana-araujo{
        /*background-image: url('img/GIF-Studio-Team-Joao-01.jpg');*/
    }
    .joana-araujo .team-overlay{
        /*background-image: url('img/GIF-Studio-Team-Joao-02.jpg');*/
    }
    .andre{
        background-image: url('img/GIF-Studio-Team-JoanaGalvao-01.jpg');
    }
    .andre .team-overlay{
        background-image: url('img/GIF-Studio-Team-JoanaGalvao-02.jpg');
    }
    .daniela{
        background-image: url('img/GIF-Studio-Team-JoanaGalvao-01.jpg');
    }
    .daniela .team-overlay{
        background-image: url('img/GIF-Studio-Team-JoanaGalvao-02.jpg');
    }
    .show-on-mobile{
        display: none;
    }
    @media screen and (max-device-width:1250px){


    }
    @media screen and (max-device-width:1025px){
        .container {
            width: 80% !important;
        }
        .col-6 {
            width: 100%;
        }
        .team-section .container {
            width: 600px !important;
        }
        .founders-image-container {
            margin-top: 40px;
        }
        #gallery-section {
            height: 100%;
        }
        .swiper-slide {
            height: 476px;
            width: 511px;
        }
        .swiper-pagination {
            margin-top: 27px;
        }
        .swiper-container {
            height: 629px;
        }
        .swiper-container-horizontal > .swiper-pagination-bullets {
            bottom: 28px;
            position: relative;
        }

    }
    @media screen and (max-device-width:640px){
        h2{
            font-size: 30px;
        }
        .keepScrollingContainer {
            display: none;
        }
        .team-section .container {
            width: 400px !important;
        }
        .show-on-mobile{
            display: block;
        }
        .founders-image-container{
            height: inherit;
            background-image:none;
        }
        .swiper-container {
            height: auto;
            width: 80%;
        }
        .swiper-container-horizontal > .swiper-pagination-bullets {
            bottom: 28px;
        }
        .header-section {
            margin-bottom: 0px;
        }
        .swiper-slide .slide-container {
            padding: 37px;
        }
        .swiper-slide .slide-container {
            padding: 0;
        }
        .swiper-slide{
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border: none;
        }
        #studio-page .header-section h1 {
            color: #FFFFFF;
            padding: 0;
            margin: 0;
        }
        .header-section .header {
            top: 50%;
        }
    }
    @media screen and (max-device-width:414px){
        .team-section .container{
            width: 185px !important;
        }

        .service-image-container img {
            height: auto;
            width: 100%;
        }

        .swiper-container {

            width: 300px;
        }

    }
  </style>
  <? echo getAnalytics(); ?>
  <script type="text/javascript">
    $(document).ready(function() {
      function fullscreen(){
		      jQuery('#studio-page #section0').css({
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
              jQuery('#studio-page #section0').css({
                  height: 500,
                  width: '100%'
              });
          }else if ($(window).width() < 768) {
              jQuery('#studio-page #section0').css({
                  height: 300
              });
          }
      });
      $( ".image-container" ).hover(
      function() {
        $( this ).children( ".team-overlay" ).fadeIn("fast");
      }, function() {
        $( this ).find( ".team-overlay" ).fadeOut("fast");
      }
      );
    });
  </script>
 <? echo scriptsHead(); ?>
</head>
<body class="no-hijack">
<? echo getHeader(); ?>
<div id="wrapper">
  <main id="studio-page">
      <!--SECTION 1-->
          <div class="header-section" id="section0">
            <div class="header">
                <h1>
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
                    <a href="#scroll-anchor">
                        <img src="/img/GIF-Scroll-@2x.png" width="25">
                    </a>
                </div>
                <div>Keep Scrolling</div>
            </div>
          </div>
      <!--END SECTION 1-->
      <!--SECTION 6-->
      <section id="services-section">
          <h2 class="orange">Our Services</h2>
          <div class="container">
              <div class="row">
                <div class="col-6">
                  <div class="service-image-container">
                    <img src="img/GIF-Studio-WhatWeDo-Print.gif">
                  </div>
                  <div class="service-list">
                      <div class="service-title">Print</div>
                      <div class="service-list">Branding, Editorial, Illustration, Packaging, Wine labels</div>
                  </div>
                </div>
                <div class="col-6 align-left">
                  <div class="service-image-container">
                    <img src="img/GIF-Studio-WhatWeDo-Digital.gif">
                  </div>
                  <div class="service-list">
                      <div class="service-title">Digital</div>
                      <div class="service-list">Web design, App Design, Development, Motion Designer, Social Media</div>
                  </div>
                </div>
            </div>
          </div>
      </section>
      <section class="founders-section">
          <div class="container">
            <div class="row">
                <div class="col-6 founders-text-container">
                    <h2 class="align-left orange">Our Founders</h2>
                    <p>Joana Galvão and José Freitas met at Kingston University in London, England. Joana was studying Graphic Design and Photography, and José (already with a Degree in Business Management under his belt) was pursuing his Masters in Marketing Management.</p>
                    <p>Fast-forward 3 years – the couple decided to go freelance...</p>
                    <p>With the combination of Joana's experience at various award-winning design agencies and José's website development and marketing skills – they soon ended up with a 4-month wait list. Before they knew it, they had left London for Porto, Portugal, to pursue their joint dream of owning their own digital agency.</p>
                    <p>Today, Gif Design Studios employs 8 rockstar in-house team members and helps other entrepreneurs' big dreams and visions come to life.</p>
                </div>
                <div class="col-6 founders-image-container" style="background-image: url(../img/GIF-Studio-OurFounders2.jpg); background-size: cover;">
                    <img style="width:100%;" class="show-on-mobile" src="img/GIF-Studio-OurFounders2.jpg" />
                </div>
            </div>
            <div class="row founders-quote">
                <p>"I'm the architect, Jose's the engineer," Joana says.<br/>
"I have the vision for our company, and he helps bring it to life."</p>
            </div>
        </div>
      </section>
      <section class="team-section">
          <h2 class="orange">The Team</h2>
          <div class="container">
            <div class="row">
                <div class="team-member-container">
                    <div class="image-container joana-galvao">
                        <div class="team-overlay" style="display: none;"></div>
                    </div>
                    <div class="name">Joana Galvão</div>
                    <div class="job">Founder<br>Creative Director</div>
                </div>
                <div class="team-member-container">
                    <div class="image-container jose">
                        <div class="team-overlay" style="display: none;"></div>
                    </div>
                    <div class="name">José Freitas</div>
                    <div class="job">Founder<br>Digital Director</div>

                </div>
                <div class="team-member-container">
                    <div class="image-container diana">
                        <div class="team-overlay" style="display: none;"></div>
                    </div>
                    <div class="name">Diana Santa</div>
                    <div class="job">Graphic Designer<br>Illustrator</div>
                </div>
                <div class="team-member-container">
                    <div class="image-container ruben">
                        <div class="team-overlay" style="display: none;"></div>
                    </div>
                    <div class="name">Rúben Silva</div>
                    <div class="job">UI/UX Designer</div>
                </div>
                <div class="team-member-container">
                    <div class="image-container joao">
                        <div class="team-overlay" style="display: none;"></div>
                    </div>
                    <div class="name">João Loureiro</div>
                    <div class="job">Graphic Designer</div>
                </div>
                <div class="team-member-container">
                    <div class="image-container joana-araujo">
                        <div class="team-overlay" style="display: none;"></div>
                    </div>
                    <div class="name">Joana Araújo</div>
                    <div class="job">Project / Studio Manager</div>
                </div>
                <div class="team-member-container">
                    <div class="image-container andre">
                        <div class="team-overlay" style="display: none;"></div>
                    </div>
                    <div class="name">André Bento</div>
                    <div class="job">Web Developer</div>
                </div>
                <div class="team-member-container">
                    <div class="image-container daniela">
                        <div class="team-overlay" style="display: none;"></div>
                    </div>
                    <div class="name">Daniela Meireles</div>
                    <div class="job">Graphic Designer</div>
                </div>
                <div class="team-member-container new">
                    <div class="image-container"><div class="new-inner">Want to our next <br/>Web Developer?</div></div>
                    <div class="name"><a class="btn btn-orange animate" href="/hire-us">Let's Dev!</a></div>

                </div>
                <div class="team-member-container new">
                    <div class="image-container new"><div class="new-inner">Want to our next <br/>UI/UX Designer?</div></div>
                    <div class="name"><a class="btn btn-orange animate" href="/hire-us">Let's Design!</a></div>

                </div>
            </div>
          </div>
      </section>

      <section class="team-section" style="    margin-bottom: 70px;">
          <h2 class="orange">Our Values</h2>
          <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="icon"><img src="img/GIF-Studio-OurValues-01.svg"></div>
                <div class="slide-container">
                    <div class="slider-title">We care about your business the way we care about ours – with a long-term vision in mind.</div>
                    <div class="slider-text"><p>A lot of businesses invest in a brand or website design... and then outgrow that design almost overnight.
</p><p>
We want our design to help your business evolve into your big vision. So our process starts with a deep dive into your 5-year business goals to make sure that, from Day 1, your brand is where you want to go.</p></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="icon"><img src="img/GIF-Studio-OurValues-02.svg"></div>
                <div class="slide-container">
                    <div class="slider-title">Our job is to make our clients' lives easier.</div>
                    <div class="slider-text"><p>We don’t just give you the design and then leave you to hunt down a developer, copywriter, photographer etc.
</p><p>
We like to serve as a "one-stop shop" for all of your website and design needs – even if you don't know where to begin! We handle everything for you, so you don't have to exchange emails with 7 different people to make your project come to life.</p></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="icon"><img src="img/GIF-Studio-OurValues-03.svg"></div>
                <div class="slide-container">
                    <div class="slider-title">We create designs that convert.</div>
                    <div class="slider-text"><p>Design isn't just about "making things look pretty." We think about the big concept behind your brand, who you're trying to attract, and how your brand identity can reflect that.</p><p>We also keep in mind the user flow on your website – what should come first to really draw the user in? How can we keep their attention with an effective brand targeted at your ideal customer? In what order does the user need to experience your site to get the best introduction to your work?</p></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="icon"><img src="img/GIF-Studio-OurValues-04.svg"></div>
                <div class="slide-container">
                    <div class="slider-title">We do what we love.</div>
                    <div class="slider-text"><p>Everyone here loves coming into work and being challenged every day with a new project. We get excited by questions like, "How can we take this project to the next level?"</p><p>Because we're fortunate enough to work with clients we absolutely love, we find ourselves highly invested in the work – to the point of dreaming up new, innovative ideas that haven't been seen before. (push the envelope)</p></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="icon"><img src="img/GIF-Studio-OurValues-05.svg"></div>
                <div class="slide-container">
                    <div class="slider-title">Team is everything.</div>
                    <div class="slider-text"><p>They say two heads are better than one... so how about 8?
</p><p>Our team's diverse skills are what make Gif Designs such a powerhouse studio. (That's why we treat our team well and give them room to reach their creative potential.) We have true specialists in-house: someone who focuses on ebooks, someone who only does web design, someone who does illustration, etc.
</p><p>
And because we have an in-house (read: not virtual) team, we get to brainstorm and work together in a way many modern design studios simply can't. That means your project is gets the VIP treatment, no matter what.</p></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="icon"><img src="img/GIF-Studio-OurValues-06.svg"></div>
                <div class="slide-container">
                    <div class="slider-title">We love details.</div>
                    <div class="slider-text"><p>It's easy to say, "we pay attention to detail" – but what does that really mean? In our case, it means we try to make everything creative – from the colours that will attract your ideal audience, to how the logo communicates exactly what you do, with subtlety and elegance.
</p><p>
We have expertise in brand strategy, marketing and user experience, so our process is designed to fully capture your business's unique traits and aspirations, and to translate them into a brand that exceeds your expectations, right down to the last pixel.</p></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="icon"><img src="img/GIF-Studio-OurValues-07.svg"></div>
                <div class="slide-container">
                    <div class="slider-title">We are friends of the environment.</div>
                    <div class="slider-text"><p>We recycle like pros! Absolutely everything here at the office is sorted and recycled, and we use almost ZERO paper... unless it’s to print our clients' business cards. ;)
</p><p>
(We even have a graduate from Environmental Engineer on the team. Our talented project manager Joana Araújo is always coming up with new ways we can reduce our carbon footprint.)
</p><p>
And did we mention 50% of our team walks to work? Not very common for a city like Porto.</p></div>
                </div>
            </div>


        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
      </section>
      <!--SECTION-->
      <section id="gallery-section">
        <div class="gallery-section section" id="section4" data-anchor="Gallery">
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
        </section>
      <!--END SECTION-->


      <!--SECTION 3-->
        <div class="bottom-section" style="position:relative;" id="section2">
          <h1 class="orange workwithus-h1">Do you like our enthusiasm?</h1>
          <p class="workwithus-p">Share your vision with us and we’ll make it come to life.</p>
            <div class="btn-container">
                <a class="btn btn-orange animate" href="/hire-us">Definitely!</a>
            </div>
          <? echo getFooter(); ?>
        </div>
      <!--END SECTION 3-->


</main>
</div>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.imagesloaded.min.js"></script>
<script src="js/cbpBGSlideshow.js"></script>
<script>
$(function() {
  cbpBGSlideshow.init();
});
$('.center').slick({
  centerMode: true,
  centerPadding: '0px',
  arrows: false,
  slidesToShow: 3,
  roundLengths: true,
  speed: 600,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '140px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

</script>
<script>

    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        centeredSlides: true,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true,
        slideToClickedSlide: true,
        breakpoints: {


            640: {
                slidesPerView: 1,
                spaceBetween: 30
            }

        }
    });
    </script>
</body>
</html>
