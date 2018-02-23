var spinner1 = {
    index: 0,
    auto: function(currentIndex) {
      if (currentIndex != undefined) {
        spinner1.index = currentIndex % spinner1.quotes.length;
      } else {
        spinner1.index = (spinner1.index + 1) % spinner1.quotes.length;
      }
      spinner1.quotes.removeClass("show");
      $(spinner1.quotes[spinner1.index]).addClass("show");
      spinner1.dots.removeClass('dot-fill');
      $(spinner1.dots[spinner1.index]).addClass('dot-fill');
    },

    initial: function(){
      this.quotes = $(".quote-rotate1");
      this.images = $(".quote-image");
      spinner1.quotes.first().addClass("show");
      //dots
      for (i = 0; i < spinner1.quotes.length; i++) {
        $('.quote-dots1').append('<div class="nav-dot1"></div>');
      }
      this.dots = $(".nav-dot1");
      $(spinner1.dots).first().addClass('dot-fill');
    },

    dotnav: function(){
      $(spinner1.dots).on("click", function(){
        var currentIndex = $(spinner1.dots).index(this);
        spinner1.auto(currentIndex);
        //window.clearInterval(interval);
        //interval = window.setInterval(spinner1.auto, 6500);
      });
    }
  }

  var spinner2 = {
      index: 0,
      auto: function(currentIndex) {
        if (currentIndex != undefined) {
          spinner2.index = currentIndex % spinner2.quotes.length;
        } else {
          spinner2.index = (spinner2.index + 1) % spinner2.quotes.length;
        }
        spinner2.quotes.removeClass("show");
        $(spinner2.quotes[spinner2.index]).addClass("show");
        spinner2.dots.removeClass('dot-fill');
        $(spinner2.dots[spinner2.index]).addClass('dot-fill');
      },

      initial: function(){
        this.quotes = $(".quote-rotate2");
        this.images = $(".quote-image");
        spinner2.quotes.first().addClass("show");
        //dots
        for (i = 0; i < spinner2.quotes.length; i++) {
          $('.quote-dots2').append('<div class="nav-dot2"></div>');
        }
        this.dots = $(".nav-dot2");
        $(spinner2.dots).first().addClass('dot-fill');
      },

      dotnav: function(){
        $(spinner2.dots).on("click", function(){
            var bg = ["GIF-Website-Studio-OurValues-01.png", "GIF-Website-Studio-OurValues-02.png", "GIF-Website-Studio-OurValues-03.png", "GIF-Website-Studio-OurValues-04.png", "GIF-Website-Studio-OurValues-05.png", "GIF-Website-Studio-OurValues-06.png", "GIF-Website-Studio-OurValues-07.png"];
          var currentIndex = $(spinner2.dots).index(this);
          //$('.section-our-values').fadeIn().delay(1500).css("background-image", "url(img/"+bg[currentIndex]+")");
          $('.section-our-values').fadeTo('fast', 0.8, function()
          {
            $(this).css('background-image', "url(img/"+bg[currentIndex]+")");
        }).delay(100).fadeTo('fast', 1);
          spinner2.auto(currentIndex);
          //window.clearInterval(interval);
          //interval = window.setInterval(spinner1.auto, 6500);
        });
      }
    }
