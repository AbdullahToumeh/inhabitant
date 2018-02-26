$(document).ready(function(){

  $('.main-navigation svg').on('click', function() {
    $('.header-search').toggleClass('header-display');
    $('.search-field').focus();
  })

})