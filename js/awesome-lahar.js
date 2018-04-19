jQuery(document).ready(function () {

  jQuery('.home-grid').masonry({
    // options
    itemSelector: '.home-grid__cell',
    columnWidth: '.home-grid__cell',
    percentPosition: true
  });

  var searchIconEl = jQuery('.header__search');
  var searchFormEl = jQuery('.searchform');

  searchIconEl.click(function (e) {
    searchFormEl.toggle()
  });

});