$(document).ready(function(){
  $('#nav-icon2').click(function(){
    $(this).toggleClass('open');
  });
});

$(function() {
  var Shortcodes = true;
  $('#ShortcodesMenu').click(function() {
    if (Shortcodes) {
      $('.Shortcodes-responsive').addClass('active').removeClass('inactive');
      Shortcodes = false;
      return;
    }
    $('.Shortcodes-responsive').removeClass('active').addClass('inactive');
    Shortcodes = true;
  });
  $('.Shortcodes-responsive').click(function() {
    $(this).addClass('active').removeClass('inactive');
    Shortcodes = false;
  });
});


$(function() {
  var shortCodeMenu = true;
  $('#ShortcodesMenu').click(function() {
    if (shortCodeMenu) {
      $('.hide-show-shortcode').addClass('active').removeClass('inactive');
      shortCodeMenu = false;
      return;
    }
    $('.hide-show-shortcode').removeClass('active').addClass('inactive');
    shortCodeMenu = true;
  });
  $('.hide-show-shortcode').click(function() {
    $(this).addClass('active').removeClass('inactive');
    shortCodeMenu = false;
  });
});


$(function() {
  var menuVisible = true;
  $('#iconmenu').click(function() {
    if (menuVisible) {
      $('#menuresponsive').addClass('active');
      menuVisible = false;
      return;
    }
    $('#menuresponsive').removeClass('active');
    menuVisible = true;
  });
  $('#menuresponsive').click(function() {
    $(this).addClass('active');
    menuVisible = false;
  });
  $(window).resize(function(){
    $('#menuresponsive').removeClass('active');
    menuVisible = true;
	})
});
