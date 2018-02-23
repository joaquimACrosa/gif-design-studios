<?
include 'library/template_functions/t_functions.php';

?>


<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="UTF-8">
<title> Contact - GIF Design Studios</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/jquery.fullpage.css" />
<link rel="stylesheet" href="css/styles.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/csshake.css">
<link rel="stylesheet" type="text/css" href="css/typed.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fullscreen-gallery.css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/typed.min.js"></script>
<script type="text/javascript" src="js/jquery.fullpage.js"></script>
<script src="js/modernizr.custom.js"></script>


<script type="text/javascript">
  $(document).ready(function() {
      $( "#contactSendMailBtn" ).on('click', function(e){
          e.preventDefault();
          var email = $('#contactsInputMail').val();
          var message = $('#textarea-contact').val();
        
        function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
       
        if (email!='' && message!=''){
        $.ajax({
		    type: "POST",
			url: "library/send-mail.php",
				 data: { name: "John", email: email, message: message },
					success: function(msg) {
                        $('.s-message').show();
						//DEBUG
						//console.log(msg);

					}
            });
        }else{
            if (message==''){
                $('.message-error').show();
            }
            $('.email-error').show();
        }
        });
      $('#fullpage').fullpage({
          sectionsColor: ['#FFFFFF'],
          anchors: ['Contacts'],
          menu: '#menu',
          css3: true,
          scrollingSpeed: 1000
      });
  });
  $(function() {
          $('textarea').focus(function() {
              $(this).prev().css("visibility", "hidden");
        });
        $('textarea').focusout(function() {
            if ($(this).val()==''){
                $(this).css("visibility", "visible");
            }

        });

    jQuery.each(jQuery('textarea[data-autoresize]'), function() {
    var offset = this.offsetHeight - this.clientHeight;

    var resizeTextarea = function(el) {
        jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
    };
    jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
});
    cbpBGSlideshow.init();
  });
</script>
 <? echo scriptsHead(); ?>
</head>
<body>
<? echo getHeader(); ?>
<div id="wrapper">

  <main id="contact-page">
    <div id="fullpage" class="fullpage-wrapper">
       
        <div class="section fp-section fp-table fp-completely" id="section0" data-anchor="OurFounders">
          <div class="page-header"><h1 class="white">Contact Us</h1></div>
          <div class="page-content">
          <!--SECTION 1-->
           <div id="contactsSection1">
                <a href="#" id="mailContacts">info@gifdesignstudios.com</a><br>
                <span>Praceta Adelino Amaro da Costa, 728, 8E</span><br>
                <span>Porto -- Portugal</span><br><br>
                <a id="helloBtn" style="margin: 0 auto !important" class="btn btn-white-orange" href="#">Say Hello</a>
            </div>
           <!--END SECTION 1-->
           <!--SECTION 2-->
           <div id="contactsSection2">
                <p>Dear GIF Design Studios,</p>
                <form id="formContacts">
                  <div>
                     <div class="cursor"></div>
                      <textarea id="textarea-contact" class="contact-us" name="message"></textarea>
                  </div>

                <a id="contactSec2NextBtn" class="btn btn-white-orange" href="#">Next</a>
            </div>
           <!--END SECTION 2-->
           <!--SECTION 3-->
           <div id="contactsSection3">
                <p>Dear GIF Design Studios,</p>

                  <div >
                      <span id="spanContactSec3" name="message"></span>
                  </div>

                <a id="contactSec3NextBtn" class="btn btn-white" href="#">Next</a>
            </div>
           <!--END SECTION 3-->
           <!--SECTION 4-->
           <div id="contactsSection4" >
                <p>We just need your email so we can get back to you:</p>

                 <label>
                  <div>
                      <div class="cursor"></div>
                      <input id="contactsInputMail" type="email" name="email" >
                      <div style="display:none;color:red;margin-top:20px;" class="message-error">*Insert your message</div>
                      <div style="display:none;color:red;" class="email-error">*Insert your email</div>
                     </div>
                </label>
                <label>
                <input style="margin-right: 14px; margin-top: -7px; float: left;display:inline-block;outline: none;" id="contactSendMailBtn" class="fromLeft btn btn-white-orange" type="submit" value="Send Message" />
                <input type="hidden" name="button_pressed" value="1" />
                <div class="s-message" style=" display:none;  margin-left: 20px;text-transform:uppercase;    font-family: Cera-Regular, Helvetica, Arial, sans-serif;">thank you for your contact. We'll get back to you shortly.</div>
                </label>
                </form>

            </div>
           <!--END SECTION 4-->
          </div>
        </div>


    </div>
      
</main>
</div>
<? echo getFooter(); ?>
<script src="js/jquery.imagesloaded.min.js"></script>


</body>
</html>
