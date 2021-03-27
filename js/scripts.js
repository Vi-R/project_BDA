$(window).on('load', function() {
  $('body').removeClass('preload');
});

$(document).ready(function() {


  // Detect ios 11_0_x affected
  // NEED TO BE UPDATED if new versions are affected
  var ua = navigator.userAgent,
    iOS = /iPad|iPhone|iPod/.test(ua),
    iOS11 = /OS 11_0_1|OS 11_0_2|OS 11_0_3|OS 11_1/.test(ua);

  // ios 11 bug caret position
  if (iOS && iOS11) {

    // Add CSS class to body
    $('body').addClass('iosBugFixCaret');

  }

  if (navigator.userAgent.match(/Trident\/7\./)) { // if IE
    $('body').on('mousewheel', function(e) {
      // remove default behavior
      event.preventDefault();

      //scroll without smoothing
      var wheelDelta = event.wheelDelta;
      var currentScrollPosition = window.pageYOffset;
      window.scrollTo(0, currentScrollPosition - wheelDelta);
    });
  }

  init_elements();

  setTimeout(function() {
    $('.js-intro-animate').addClass('intro_animated');

    setTimeout(function() {
      $('.js-intro-sections').fadeOut();
    }, 1200);
  }, 500);


  function recalcMiddleCardsSize() {
    var maxHeight = 0;

    var $columns = $('.index-show-cards__column');

    $columns.css('height', 'auto');

    $columns.each(function (k, column) {
      var columnHeight = $(column).outerHeight();

      if (columnHeight > maxHeight) {
        maxHeight = columnHeight;
      }
    });

    $columns.css('height', maxHeight + 'px');
  }

  recalcMiddleCardsSize();

  $(window).on('resize orientationchange', recalcMiddleCardsSize);


  $(window).on('scroll', function() {
      var $main = $('#main');
      var $link = $('#side_scroll');

      var wScroll = window.scrollY;
      var mOffset = $main[0].offsetTop;
      var delta = -100;

      if (mOffset - wScroll + delta > 0) {
        $link.removeClass('side-line__arrow_top');
      } else {
        $link.addClass('side-line__arrow_top');
      }
  });

  $(window).scroll();

  $('.js-side-line-scroll').on('click', function() {
    var $link = $(this);

    if ($link.hasClass('side-line__arrow_top')) {
      anchorGoTo('body');
    } else {
      anchorGoTo('#main');
    }
  });


  /*

  (function() {
    var introMinHeight = 0;
    var introFullHeight = 0;
    var introCurrentOffset = 0;
    var introOffset = 0;
    var windowScroll = document.documentElement.scrollTop;

    var $intro = $('#intro');
    var $introWrapper = $('#intro-wrapper');
    var $introMove = $('#intro-move');
    var $introContentMin   = $('#intro-content-min');

    function updateIntroValues() {
      introMinHeight = $introContentMin.outerHeight();
      introOffset = $intro[0].offsetTop;
      introFullHeight = $introWrapper.outerHeight();
    }

    updateIntroValues();

    function updateIntroScrollValues() {
      windowScroll = document.documentElement.scrollTop;
      var introMaxOffset = introFullHeight - introMinHeight - introOffset;

      if (windowScroll > 0) {
        introCurrentOffset = windowScroll;

        if (introCurrentOffset > introMaxOffset) {
          introCurrentOffset = introMaxOffset;
        }
      } else {
        introCurrentOffset = 0;
      }

      $introMove[0].style.transform = 'translateY(' + introCurrentOffset + 'px)';
    }

    updateIntroScrollValues();

    $(window).on('scroll', updateIntroScrollValues);

  })();
  */
  $('#show-more').on('click', function() {
    $('.who-we-2').removeClass('d-none');
    $(this).remove();
  });

  $('input[name=form_email_2]').on('keyup', function() {
    var email = $(this).val();
    if (isEmail(email)) {
      $(this).addClass('validated-successfull');
      $(this).removeClass('validated-error');
    } else {
      $(this).addClass('validated-error');
      $(this).removeClass('validated-successfull');
    }
  });

  $('textarea[name=form_textarea_4], input[name=form_text_1]').on('keyup', function() {
    var text = $(this).val();
    if (isText(text)) {
      $(this).addClass('validated-successfull');
      $(this).removeClass('validated-error');
    } else {
      $(this).addClass('validated-error');
      $(this).removeClass('validated-successfull');
    }
  });

  if (location.search.indexOf('formresult=addok') > 0) {
    $('#form-send-modal').modal('show');
  }
});

function init_elements() {

  $(document.body).on('click', '.side-line-menu__dropdown, .side-line-menu__dropdown *', function(e) {
    e.stopPropagation();
  });

  $('.js-intro-slider').slick({
    rows: false,
    arrows: true,
    slideShowCount: 1,
    fade: true
  });



  $('.mask-mobile').mask('+7 (000) 000-00-00', {
    'translation': {
      M: {pattern: /[012345679]/},
    },
  });

  $('.mask-mac').mask('HH:HH:HH:HH:HH:HH', {
    'translation': {
      H: {pattern: /[A-Fa-f0-9]/},
    },
  });

  ///////////////////////////
  // PAGE NAVIGATION LINK
  $(document.body).on('click', '.anchor-link', function(t) {
    t.preventDefault();
    var e = $(this).attr('href');
    anchorGoTo(e);
  });
  // PAGE NAVIGATION LINK END
  ///////////////////////////

  svg4everybody();


  $('[data-toggle="popover"]').popover();
  $('[data-toggle="tooltip"], [data-tooltip]').tooltip();

  if (typeof sliderTitle !== 'undefined') {
    setSliderTitle(sliderTitle);
  }

  AOS.init({
    once: true
  });

}

function anchorGoTo(e) {
  n = $(e).offset().top;

  $('html').stop();

  $('html').animate({scrollTop: n}, 1000);
}

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

function isText(text) {
  var regex = /^.+$/;
  return regex.test(text);
}

function tooltipError(element, msg) {
  element.setCustomValidity('');

  if (!element.validity.valid) {
    element.setCustomValidity(msg);
  }
}

function setSliderTitle(title) {
  $('a.intro-slider-item__title').text(title);
  $('a.intro-slider-item__title').attr('href', 'javascript:void(0)');
}