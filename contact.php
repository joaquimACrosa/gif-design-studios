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

<?php include ('shared/scripts.php');?>

</head>
<body>

<?php include ('shared/header.php');?>

<div id="wrapper">

  <main id="contact-page">
    <div id="fullpage" class="fullpage-wrapper">

        <div class="section fp-section fp-table fp-completely" id="section0" data-anchor="OurFounders">
          <div class="page-header contact-header"><h1>Contact Us</h1></div>
          <div class="page-content">
          <!--SECTION 1-->
           <div id="contactsSection1">
                <a href="#" id="mailContacts">info@gifdesignstudios.com</a><br>
                <span>Praceta Adelino Amaro da Costa, 728, 8E</span><br>
                <span>Porto -- Portugal</span><br><br>
            </div>
           <!--END SECTION 1-->
           <!--SECTION 2-->
           <div id="contactsSection2">
                <p>Dear GIF Design Studios,</p>
                <form id="formContacts">
                  <div>
                      <textarea id="textarea-contact" class="contact-us" name="message"></textarea>
                  </div>

            </div>
           <!--END SECTION 2-->
           <!--SECTION 3-->

           <!-- <div id="contactsSection3">
                <p>Dear GIF Design Studios,</p>

                  <div >
                      <span id="spanContactSec3" name="message"></span>
                  </div>
            </div> -->

           <!--END SECTION 3-->
           <!--SECTION 4-->
           <div id="contactsSection4" >
                <p>We just need your email so we can get back to you:</p>

                 <label>
                  <div>
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
