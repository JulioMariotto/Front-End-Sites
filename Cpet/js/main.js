

  // Parallax
  var parallax = function() {
    $(window).stellar();
  };
  

   /*====================================
    Main Navigation Stick to Top when Scroll
    ======================================*/

  function sticky_relocate() {
      var window_top = $(window).scrollTop();
      var div_top = $('#fixa').offset().top;
      if (window_top > div_top) {
          $('#home-menu').addClass('stick');
      } else {
          $('#home-menu').removeClass('stick');
      }
  }

  var clickMenu = function() {

    $('#navbar a:not([class="external"])').click(function(event){
      var section = $(this).data('nav-section'),
        navbar = $('#navbar');

        if ( $('[data-section="' + section + '"]').length ) {
            $('html, body').animate({
                scrollTop: $('[data-section="' + section + '"]').offset().top
            }, 500);
         }

        if ( navbar.is(':visible')) {
          navbar.removeClass('in');
          navbar.attr('aria-expanded', 'false');
          $('.js-nav-toggle').removeClass('active');
        }

        event.preventDefault();
        return false;
    });


  };

  var navActive = function(section) {

    var $el = $('#navbar > ul');
    $el.find('li').removeClass('active');
    $el.each(function(){
      $(this).find('a[data-nav-section="'+section+'"]').closest('li').addClass('active');
    });

  };

  var navigationSection = function() {

    var $section = $('section[data-section]');
    
    $section.waypoint(function(direction) {
        
        if (direction === 'down') {
          navActive($(this.element).data('section'));
        }
    }, {
        offset: '25%'
    });

    $section.waypoint(function(direction) {
        if (direction === 'up') {
          navActive($(this.element).data('section'));
        }
    }, {
        offset: function() { return -$(this.element).height() + 155; }
    });

  };

  var nav_servicos = function(){

  $('.icon').click(function(){
    $('.tabs nav ul li').removeClass('tab-current');
    $(this).parent().addClass('tab-current');
    var id = $(this).attr('data-box');
    $('.content-wrap section').removeClass('content-current');
    $(id).fadeIn('slow');
    $(id).addClass('content-current');
  })
}

var next = function(){
  $(".left").click(function(){
      if($(".roller").css("margin-left") < "0px")
      {
        $(".roller").animate(
                {
                  "margin-left": "+=400"
                },
                1000
        );
      }
      else 
      {
        $(".roller").animate(
                {
                  "margin-left": "+=20"
                },
                400, function(){
                  $(".roller").animate({
                    "margin-left": "0px"
                  }, 150);
                }
        );
      }
    });
}

var prev = function(){
  $(".right").click(function(){
    if($(".roller").css("margin-left") != "-800px")
    {
        $(".roller").animate({
                  "margin-left": "-=400"
                }, 
                1000
        );
    }
    else
    {
        $(".roller").animate(
                {
                  "margin-left": "-=20"
                },
                400, function(){
                  $(".roller").animate({
                    "margin-left": "-800px"
                  }, 150);
                }
        );
    }
  });
}

var galeria = function(){
  $(".bloco").hover(function(){
      $(this).find(".glyphicon").fadeIn();
  },
  function(){
      $(this).find(".glyphicon").fadeOut();
  });
}

$(function(){

  $(window).scroll(sticky_relocate);
      
      sticky_relocate();
      clickMenu();
      navigationSection();
      nav_servicos();
      next();
      prev();
      galeria();
})