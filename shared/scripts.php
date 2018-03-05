
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
<script src="js/script.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/squareResponsive.js"></script>
<script type="text/javascript" src="js/background-check.min.js"></script>
<script type="text/javascript" src="js/jquery.fullpage.js"></script>
<script src="js/modernizr.custom.js"></script>


<!-- <script src="../node_modules/midnight.js/midnight.jquery.js"></script>

<script>
  // Start midnight
  $(document).ready(function(){
    // Change this to the correct selector for your nav.
    $('.midnightHeader').midnight();
  });
</script> -->

<script>
    $(document).ready(function (){
        $(".keepScrollingContainer").click(function (){
            $('html, body').animate({
                scrollTop: $("#anchor").offset().top
            }, 1000);
        });
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
      BackgroundCheck.init({
          targets: '.logo, #menu_toggle_container'
        });

        BackgroundCheck.refresh();


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

<script rel='text/javascript'>
        $(function() {
  $(\"[href*='#']:not([href='#'])"\).click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>

<script type='text/javascript'>
    $(window).load(function() {
        $('.loader').fadeOut('slow');
    })
</script>

<!-- CONTACT SCRIPTS -->

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
//   $(function() {
//           $('textarea').focus(function() {
//               $(this).prev().css("visibility", "hidden");
//         });
//         $('textarea').focusout(function() {
//             if ($(this).val()==''){
//                 $(this).css("visibility", "visible");
//             }
//
//         });
//
//     jQuery.each(jQuery('textarea[data-autoresize]'), function() {
//     var offset = this.offsetHeight - this.clientHeight;
//
//     var resizeTextarea = function(el) {
//         jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
//     };
//     jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
// });
//     cbpBGSlideshow.init();
//   });
</script>
