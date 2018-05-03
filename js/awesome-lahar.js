jQuery(document).ready(function () {

  jQuery('.home-grid').masonry({
    // options
    itemSelector: '.home-grid__cell',
    columnWidth: '.home-grid__cell',
    percentPosition: true
  });

  jQuery('.archive-grid').masonry({
    // options
    itemSelector: '.archive-grid__item'
  });

  var searchIconEl = jQuery('.header__search');
  var searchFormEl = jQuery('.searchform');

  searchIconEl.click(function (e) {
    searchFormEl.toggle()
  });

  var issueCoverEl = jQuery('.issue-cover');
  issueCoverEl.addClass('issue-cover--show');

  var currentCategoryEl = jQuery('.home__current-category');
  currentCategoryEl.addClass('home__current-category--show');

  var tagTitleEl = jQuery('.tag-title');
  tagTitleEl.addClass('tag-title--show');

  var heroEl = jQuery('.rubrica__description');
  heroEl.addClass('rubrica__description--visible');

});