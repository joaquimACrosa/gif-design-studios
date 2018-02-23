//TOGGLE MENU
$( document ).ready(function() {
  $( "#menu_toggle_container" ).click(function() {
    $( this ).toggleClass("change");
    $('#circle').toggleClass('active');


    $( this ).toggleClass("dark_menu");
    $( "#logo").toggleClass("dark_logo");

    //$( "#menu_container" ).toggleClass('active');
    $( "#menu_container" ).fadeToggle();

  });
  /*CONTACTS FADE OUT 1ST BUTTON*/

  $('#helloBtn').click( function() {
      $('#contactsSection1').animate({
  opacity: 0}, 'fast', 'linear', function() {
          $(this).remove();
  });

  $('#contactsSection2').delay(550).queue(function (next) {
  $(this).css('visibility', 'visible');
  next();
  });
  });

  /*END OF CONTACTS FADE OUT 1ST BUTTON*/

  /*CONTACTS FADE OUT 2ND BUTTON*/

  $('#contactSec2NextBtn').click( function() {


      $('#contactsSection2').animate({
  opacity: 0}, 'fast', 'linear', function() {
          //$(this).remove();
  });



  $('#contactsSection4').delay(550).queue(function (next) {
  $(this).css('visibility', 'visible');
  next();
  });
  });

  /*END OF CONTACTS FADE OUT 2ND BUTTON*/

  /*CONTACTS FADE OUT 3RD BUTTON*/

  $('#contactSec3NextBtn').click( function() {

      $('#contactsSection3').animate({
  opacity: 0,marginLeft: '-200px'}, 'fast', 'linear', function() {
          $(this).remove();
  });

  $('#contactsSection4').delay(550).queue(function (next) {
  $(this).css('visibility', 'visible');
  next();
  });
  });

  /*END OF CONTACTS FADE OUT 3RD BUTTON*/
});

/*TYPED*/

$(function(){

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 50,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){  },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }



$(function(){

  $( ".team-member" ).hover(
  function() {
    $( this ).children( ".team-overlay" ).fadeIn("fast");
  }, function() {
    $( this ).find( ".team-overlay" ).fadeOut("fast");
  }
);
});

$(function(){
    $(".nav-dot2").on("click", function() {
        alert("NOT");
        $('.section-our-values').css("background-image", "url(../img/GIF-Website-Studio-OurValues-02.png)");
    });

});
