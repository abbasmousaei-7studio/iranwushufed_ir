$(window).scroll(function() {
    if ($(this).scrollTop() > 134) {
      $('.navbar-nav').removeClass("mx-auto");
      $('.navbar-nav').removeClass("text-md-right");
      $('.nav-link-logo').show();
    //   $('.navbar').css({"padding": "0"});
      $('.navbar').removeClass("pad-nine");
      $('.navbar').addClass("pad-zero");
    } else {
        $('.navbar-nav').addClass("mx-auto");
        $('.navbar-nav').addClass("text-md-right");
        $('.nav-link-logo').hide();
        $('.navbar').removeClass("pad-zero");
        $('.navbar').addClass("pad-nine");
    }
  });


//   $("#outer").animate({ 
//     'padding-top' : 0,
//     'padding-right' : 0,
//     'padding-bottom' : 0,
//     'padding-left' : 0,
//   }, "slow");