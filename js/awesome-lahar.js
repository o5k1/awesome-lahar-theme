jQuery(document).ready(function () {


  jQuery('.home-grid').masonry({
    // options
    itemSelector: '.home-grid__cell',
    columnWidth: '.home-grid__cell',
    percentPosition: true
  });

});