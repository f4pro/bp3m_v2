$(function () {

  window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  });

  // Menu and stuff

  $(function () {
    var header = $(".start-style");
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 10) {
        header.removeClass('start-style').addClass("scroll-on");
      } else {
        header.removeClass("scroll-on").addClass('start-style');
      }
    });
  });

  //Animation

  $(document).ready(function () {
    $('body.hero-anime').removeClass('hero-anime');
  });

  //Menu On Hover

  $('body').on('mouseenter mouseleave', '.nav-item', function (e) {
    if ($(window).width() > 750) {
      var _d = $(e.target).closest('.nav-item');
      _d.addClass('show');
      setTimeout(function () {
        _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
      }, 1);
    }
  });

  //Counters
  if ($(".counter-item [data-to]").length > 0) {
    $(".counter-item [data-to]").each(function () {
      var stat_item = $(this),
        offset = stat_item.offset().top;
      if ($(window).scrollTop() > (offset - 800) && !(stat_item.hasClass('counting'))) {
        stat_item.addClass('counting');
        stat_item.countTo();
      };
      $(window).scroll(function () {
        if ($(window).scrollTop() > (offset - 800) && !(stat_item.hasClass('counting'))) {
          stat_item.addClass('counting');
          stat_item.countTo();
        }
      });
    });
  };
	$(document).ready(function(){
  	$(this).scrollTop(0);
	});


  //shuffle.js
  var shuffleme = (function ($) {
    'use strict';
    var $grid = $('#grid'), //locate what we want to sort 
      $filterOptions = $('.portfolio-sorting li'), //locate the filter categories

      init = function () {

        // None of these need to be executed synchronously
        setTimeout(function () {
          listen();
          setupFilters();
        }, 100);

        $("#grid .col-md-4").slice(0, 4).show();

        $("#loadMore").on('click', function (e) {
          e.preventDefault();
          $("#grid .col-md-4:hidden")
            .slice(0, 4)
            .fadeIn()
            .each(function () {
              $grid.shuffle('appended', $(this));
            });

          if ($("#grid .col-md-4:hidden").length == 0) {
            $("#loadMore").addClass("disabled").html("No more to Load");
          }
        });

        // instantiate the plugin
        $grid.shuffle({
          itemSelector: '[class*="col-"]',
          group: Shuffle.ALL_ITEMS,
        });
      },


      // Set up button clicks
      setupFilters = function () {
        var $btns = $filterOptions.children();
        $btns.on('click', function (e) {
          e.preventDefault();
          var $this = $(this),
            isActive = $this.hasClass('active'),
            group = isActive ? 'all' : $this.data('group');

          // Hide current label, show current label in title
          if (!isActive) {
            $('.portfolio-sorting li a').removeClass('active');
          }

          $this.toggleClass('active');

          // Filter elements
          $grid.shuffle('shuffle', group);
        });

        $btns = null;
      },

      // Re layout shuffle when images load. This is only needed
      // below 768 pixels because the .picture-item height is auto and therefore
      // the height of the picture-item is dependent on the image
      // I recommend using imagesloaded to determine when an image is loaded
      // but that doesn't support IE7
      listen = function () {
        var debouncedLayout = $.throttle(300, function () {
          $grid.shuffle('update');
        });

        // Get all images inside shuffle
        $grid.find('img').each(function () {
          var proxyImage;

          // Image already loaded
          if (this.complete && this.naturalWidth !== undefined) {
            return;
          }

          // If none of the checks above matched, simulate loading on detached element.
          proxyImage = new Image();
          $(proxyImage).on('load', function () {
            $(this).off('load');
            debouncedLayout();
          });

          proxyImage.src = this.src;
        });

        // Because this method doesn't seem to be perfect.
        setTimeout(function () {
          debouncedLayout();
        }, 500);
      };

    return {
      init: init
    };
  }(jQuery));

  if ($('#grid').length > 0) {
    shuffleme.init(); //filter portfolio
  };

  // News Carousel
  $(".carousel-item-4").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    margin: 30,
    dots: false,
    loop: true,
    nav: true,
    navText: [
      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 2
      },
      992: {
        items: 3
      },
      1200: {
        items: 4
      }
    }
  });

  // timeline
  
  
  
}());
jQuery.noConflict();


