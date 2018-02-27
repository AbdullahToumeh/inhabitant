$(document).ready(function(){

  $('.main-navigation svg').on('click', function() {
    $('.header-search').toggleClass('header-display');
    $('.search-field').focus();
  })

  //if on the home page or about page, add class to header right away
  if ($('.home').length || $('.page-template-about').length) {
    $('.site-header').addClass('hero-page-header');
  }

  //function to handle the change of header when user scrolls past the height of the header image
  $(window).scroll(function(){
    var currentScreenPosition  = $(document).scrollTop();
    if (currentScreenPosition < $('.front-header').height() || currentScreenPosition < $('.page-template-about .entry-header').height()) {
      $( '.site-header' ).addClass( 'hero-page-header' );
    } else {
      $( '.site-header' ).removeClass( 'hero-page-header' );
    }
  });
})