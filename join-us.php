<?
include 'library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>GIF - Join Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/jquery.fullpage.css" />
  <link rel="stylesheet" href="css/styles.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/typed.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="plugins/parallax/js/parallax.js"></script>


  <script type="text/javascript" src="js/midnight.jquery.min.js"></script>

  <style>
  .header-section{
      height: 100vh;
      background-image: url(img/GIF-JoinUs-Header.jpg);
      background-size: cover;
      position: relative;
  }
  h2{
      line-height: 46px;
  }
  .header h1{
      margin-bottom: 20px;
  }
  .header h3{
      margin-bottom: 20px;
      font-size: 20px;
      font-family: Cera-Bold, Helvetica, Arial, sans-serif;
  }
  .company-desc{
      padding: 100px 0;
      overflow: auto;
      display: table;
  }
  .company-desc p{
      padding-right: 30px;
  }
  .company-desc .cell-center{
      display: table-cell;
      vertical-align: middle;
      float: none;
  }
  .quote{
      text-align: center;
      font-size: 20px;
      color: #333333;
      font-family: Cera-Bold, Helvetica, Arial, sans-serif;
  }
  .quote .author{
      font-size: 15px;
      margin-top: 15px;
      display: block;
      margin-bottom: 60px;
  }
  .parallax{
      height: 460px;
      display: table;
      width: 100%;
  }
  .parallax{
      display: table;
      width: 100%
  }
  .parallax .content{
      display: table-cell;
      vertical-align: middle;
      text-align: center;
  }
  .parallax h2{
      margin-top: -5px;
  }
  .row-text{
      width: 800px;
      overflow: auto;
    margin: 0 auto;
    padding: 50px 0;
  }
  .row-text h3{
      margin-top: 50px;
  }
  form label{
      font-size: 15px;
  }
  form input{
      background-color: rgba(204, 204, 204, 0.2);
      border: 1px solid #cccccc;
      font-size: 15px;
      padding: 10px;
      width: 100%;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
  }
  .form .row-text{
      overflow: initial;
  }
  .pull-left{
      float: left;

  }
  .pull-right{
      float: right;

  }
  .form-control{
      margin-bottom: 30px;
  }
  .form-control.col12{
      width: 100%;
  }
  .form-control.col6{
      width: 48%;
  }
  .sublabel{
      width: 100%;
      display: block;
      font-size: 12px;
      line-height: 15px;
      margin-bottom: 9px;
  }
  .img-company{
      width: 470px;
  }
  .team-foto{
      margin-top:40px;
      width: 100%;
  }
  .no-hijack .bottom-section {
      height: auto;
        margin-top: 82px;
    }
    footer .footer-container{
        border-top: none;
    }
    @media screen and (max-width: 992px){
        .bottom-section {
            height: 82px !important;
            margin-top: 0px !important;
        }
        .header p{
            color: #3a3a3a;
            padding: 0 15px;
        }
        .form-control.col6 {
            width: 100%;
        }
        .row-text{
            padding: 50px 20px;
        }
        .row-text {
            width: 80%;
        }
        .header h3 {
            font-size: 20px;
        }
        .row-text h3 {
            margin-top: 32px;
            line-height: 17px;
        }
        .header h3 {
            font-size: 40px;
        }
        .header-section .header {
            top: 532px;
        }
        .header h1 {
            margin-bottom: 20px;
            margin-top: 68px;
        }
        .team-foto{
            margin-top:20px;
        }
    }
    @media screen and (max-width: 768px){
        .company-desc .cell-center {
            display: block;
        }
        .col-6 {
            width: 100%;
        }
        .row-text {
            width: 80%;
        }
        .img-company{
            width: 100%;
            margin-top: 50px;
        }
        .keepScrollingContainer {
            bottom: -300px;
        }
        .header-section br {
            display: none;
        }
        .header-section h3{
            margin-bottom: 144px;
        }
        .quote{
            font-size: 17px;
            margin-top: 45px;
        }
        .company-desc p {
            padding-right: 0;
        }
        form input{
            border-radius: 0;
        }
        .header-section h1 {
            font-size: 20px;
            line-height: 20px;
            line-height: 27px;
        }
        .parallax{
            height: 320px;
        }
        .parallax h2{
            font-size: 30px;
            line-height: 39px;
        }
        .header-section .header {
            top: 305px;
        }
        .header-section {
            height: 320px !important;
            margin-bottom: 200px;
        }
        .header p {
            width: 80%;
            margin: 0 auto;
            text-align: left;
        }
        h3{
            line-height: 27px;

        }
        .header h3 {
            font-size: 30px;
        }
        .keepScrollingContainer {
            bottom: -300px;
            display: none;
        }
        .parallax .content {
            padding: 0 20px;
        }
        .company-desc {
            padding: 0;
        }
        .header h1 {
            margin: 0 auto;
            margin-top: 43px;
            width: 80%;
            text-align: left;
        }
        h2 {
            font-size: 20px;
            margin-top: -18px;
        }
        textarea, input, button { outline: none; box-shadow: none !important;-webkit-appearance: none;}
        @media screen and (max-width: 400px){
            .header-section h3 {
                margin-bottom: 168px;
            }
            .header-section .header {
                top: 338px;
            }
            .header-section {
                margin-bottom: 250px;
            }
            h2 {
                font-size: 20px;
                margin-top: -5px;
            }
        }

    }
    #formMessages{
        text-align: center;
        margin-top: 15px;
        color: #32cd32;
    }
    #formMessages.error{
        color: red;
    }
    form .error{
        border: 1px solid red;
    }
    .btn, input{
        outline: none;
    }
  </style>
  <? echo getAnalytics(); ?>
  <script type="text/javascript">
    $(document).ready(function() {

       $(document).ready(function(){
         // Change this to the correct selector.
         $('.logo').midnight();
         $('#menu_toggle_container').midnight();

       });

    });
  </script>
 <? echo scriptsHead(); ?>
</head>
<body class="no-hijack">
<? echo getHeader(); ?>
<div id="wrapper">
  <main>
    <div>
      <!--SECTION 1-->
      <div class="header-section">
        <div class="header">
            <h3 class="white">We Are Hiring</h3>
            <h1 class="orange">Are you our next webdesigner?</h1>
            <p>We are a Design Agency that serves visionary people and their world changing projects. As we rapidly <br> grow, we are looking for long term team member to grow with us!</p>
        </div>
        <div class="keepScrollingContainer">
            <div class="animated bounce">
                <a href="#scroll-anchor">
                    <img src="img/GIF-Scroll-@2x.png" width="25">
                </a>
            </div>
            <div>Keep Scrolling</div>
        </div>
      </div>
      <!--END SECTION 1-->
      <!--SECTION2-->
      <section>

        <div class="row company-desc">
            <div class="col-6 cell-center">
                    <h2 class="orange">Company Description</h2>
                        <p>We are a fast-growing start-up design agency working in the social good, lifestyle, and business space.</p>
                        <p>Founded by Joana Galvão and José Freitas, our team of talented designers have experience working with global and national brands such as CNN, Euro News, Daily Mail, Visit Britain, and Lifetime Television.</p>
                        <p>We’re dedicated to elevating the brands of the next generation of thought leaders and entrepreneurs through amazing, memorable design. Our core clients are in the personal growth space (money, love, health and wellness), business, fashion, education, and more.</p>
            </div>
            <div class="col-6">
                <img class="img-company" src="img/GIF-JoinUs-Image01.jpg">
            </div>
        </div>
        <div class="quote">
            “Creativity is contagious. pass it on.”
            <br/>
            <span class="author">— Albert Einstein</span>
        </div>

	  </section>
      <section class="parallax" data-parallax="scroll" data-image-src="img/GIF-JoinUs-Image02-Parallax.jpg">
          <div class="content">
              <h3 class="white">Webdesigner</h3>
              <h2 class="orange">Job Description</h2>
            </div>
      </section>

      <section>
          <div class="row row-text">
              <p>Web Designers are a core part of our growing team. You will begin as a freelancer with the opportunity to be considered for a full-time position. This is an in person role, where you'll be asked to join the team in our studio.</p>
              <h3 class="bold orange">Job includes:</h3>
              <p>• Conducting client research (i.e. competitive landscape).<br>
                • Designing wireframes and thinking of the best user experience.<br>
                • Staying on top of the latest trends in the design industry.<br>
                • Designing for both websites and apps.<br>
                • Knowledge and experience in responsive design.<br>
                • Preparing assets for our development team.<br>
                • Editing images in photoshop.</p>

                <h3 class="bold orange">What we offer:</h3>
                <p>• Immediate start.<br>
                  • 50-100€ a day (9h – 6h, in our studio in Porto). (The day rate will depend on your level of experience).<br>
                  • Full time contract after a trial period of 3 months as an in house freelancer.<br>
                  • Strong growth opportunities.<br></p>

                <img class="team-foto" src="img/GIF-JoinUs-Image03.jpg"/>

                <h3 class="bold orange">Does this sounds like you?</h3>
                <p>• You are passionate and creative, with a great eye for detail. Every touch point of a brand is important to you.<br>
                  • You like to work with a creative team, and have peers to bounce ideas off one another.<br>
                  • You’re excited about the opportunity to be working on high-impact projects that will be seen by many, as you build your own strong portfolio of work.<br>
                  • You want to work with fun, passionate people! You want to be a part of a tight-knit, caring team that appreciates your important contributions.<br></p>

                  <p style="margin-top: 40px;">If this sounds like a great fit for you, we encourage you to apply for our Junior Web Designer Role by completing this questionnaire, and if your website is out of date, please send your portfolio to info@gifdesignstudios.com.</p>
          </div>
      </section>

      <section class="parallax" data-parallax="scroll" data-image-src="img/GIF-JoinUs-Image04-Parallax.jpg">
          <div class="content">
              <h3 class="white">We will be filling these roles on a first-come, first-serve basis.</h3>
              <h2 class="orange">We look forward to hearing from you!</h2>
            </div>
      </section>

      <section class="form" style="padding: 50px 0;">
          <div class="row row-text">
              <form id="ajax-contact" method="post" action="mailer.php">
                  <div class="form-control col6 pull-left">
                      <label>First name*</label>
                      <input type="text" name="q1" id="q1">
                  </div>
                  <div class="form-control col6 pull-right">
                      <label>Last name*</label>
                      <input type="text" name="q2" id="q2">
                  </div>
                  <div class="form-control col6 pull-left">
                      <label>Email Address *</label>
                      <input type="text" name="q3" id="q3">
                  </div>
                  <div class="form-control col6 pull-right">
                      <label>What is your website? *</label>
                      <input type="text" name="q4" id="q4">
                  </div>
                  <div class="form-control col12 pull-right">
                      <label>What city do you live in? *</label>
                      <input type="text" name="q5" id="q5">
                  </div>
                  <div class="form-control col12 pull-right">
                      <label>Are you available for a full time position?</label>
                      <br/>
                      <select name="q6">
                          <option value="">-</option>
                          <option value="no">No</option>
                          <option value="yes">Yes</option>
                      </select>
                  </div>
                  <div class="form-control col12 pull-right">
                      <label>What date are you available to start working?</label>
                      <input type="text" name="q7">
                  </div>
                  <div class="form-control col12 pull-right">
                      <label>Why are you interested in this particular position within our Design Studio?</label>
                      <input type="text" name="q8">
                  </div>

                  <div class="form-control col12 pull-right">
                      <label>What is your English level?</label>
                       <label class="sublabel">We work only with english speaking clients. Though we're all Portuguese in the studio and speak in Portuguese with each other, a fluent level of English understanding is required to join our team.</label>
                      <input type="text" name="q9">
                  </div>

                  <div class="form-control col12 pull-right">
                      <label>What is your experience with webdesign? *</label>
                      <input type="text" name="q10" id="q10">
                  </div>

                  <div class="form-control col12 pull-right">
                      <label>What creative suite softwares are you fluent in?</label>
                       <label class="sublabel">(illustrator, photoshop, inDesign etc.)</label>
                      <input type="text" name="q11">
                  </div>

                  <div class="form-control col12 pull-right">
                      <label>Please tell us about your long-term career goals. What do you hope to gain with this position?</label>
                      <input type="text" name="q12">
                  </div>

                  <div class="form-control col12 pull-right">
                      <label>Is there any other information you would like to share that might make you stand out from the other candidates?</label>
                      <input type="text" name="q13">
                  </div>
                  <div style="text-align:center;clear:both;">
                      <button class="btn btn-orange" id="submit_form" type="submit">Submit</button>
                  </div>
                  <div id="formMessages"></div>
              </form>
          </div>
      </section>
      <section class="parallax" data-parallax="scroll" data-image-src="img/GIF-JoinUs-Image05-Parallax.jpg">
          <div class="content">
              <h2 class="orange">Thank you for your application.</h2>
              <h3 class="white">We’ll be in touch soon!</h3>
            </div>
      </section>


        <div class="bottom-section" style="position:relative;" id="section2">

          <? echo getFooter(); ?>
        </div>


    </div>
</main>
</div>
<script>
$( document ).ready(function() {
    $( "input" ).focus(function() {
      $(this).removeClass('error');
    });
  $( "#menu_toggle_container" ).click(function() {
    $( this ).toggleClass("change");
    $('#circle').toggleClass('active');


    $( this ).toggleClass("dark_menu");
    $( "#logo").toggleClass("dark_logo");

    //$( "#menu_container" ).toggleClass('active');
    $( "#menu_container" ).fadeToggle();

  });
  });

  $(function() {



      // Get the messages div.
      var formMessages = $('#formMessages');


      $("#ajax-contact").submit(function(event) {


            event.preventDefault();
            var form = $('#ajax-contact');

            var q1 = $( "#q1" );
            var q2 = $( "#q2" );
            var q3 = $( "#q3" );
            var q4 = $( "#q4" );
            var q5 = $( "#q5" );
            var q10 = $( "#q10" );

            var elArr = ["#q1", "#q2", "#q3", "#q4", "#q5", "#q6", "#q10"];

            var errorF = false;

            for (i = 0; i < elArr.length; i++) {
                     if (!$(elArr[i]).val()) {
                         $(elArr[i]).addClass("error");
                       errorF=true;
                       $(formMessages).html('<span style="color:red;">Your form has encountered a problem. Please scroll up to review.</span>');

                   }else{
                       errorF=false;
                       $(formMessages).html('');
                   }
                 }
            var formData = $(form).serialize();
            if(errorF==false){
                $.ajax({
                    type: 'POST',
                    url: $(form).attr('action'),
                    data: formData
                }).done(function(response) {

                    if (response==1){
                        $(formMessages).html('Thank you! Your form has been submitted.');
                        $(formMessages).addClass('success');
                    }else{
                        $(formMessages).html('Your form has encountered a problem. Please scroll up to review.');
                        $(formMessages).addClass('error');
                    }


                $('#ajax-contact')[0].reset();

                }).fail(function(data) {

                    $(formMessages).html('Your form has encountered a problem. Please try again.');
                    $(formMessages).addClass('error');
                });
            }
        });

  });
</script>
</body>
</html>
