$( document ).ready(function() {
  $( window ).scroll(function() {

    if ($(this).scrollTop() > 650 ) {
      $('.navigation').css({
        "background": "#333"
      });
      $('.navigation').css({
        "box-shadow": "0px 2px 2px rgba(0, 0, 0, .1)"
      });
    } else {
      $('.navigation').css({
        "background": "transparent"
      });
      $('.navigation').css({
        "box-shadow": "0px 2px 2px rgba(0, 0, 0, 0)"
      });
    }
  });
});


$( document ).ready(function() {
  $('.button_container').click(function() {
    $('.button_container').toggleClass('active');
    $('.overlay').toggleClass('open');
    $('body').toggleClass('active');
  });
});
