jQuery(window).load(function () {

  jQuery('.body').addClass('body--visible');

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
  var searchFormEl = jQuery('.search-form');

  searchIconEl.click(function (e) {
    searchFormEl.toggleClass('search-form--visible');
  });

  var issueCoverEl = jQuery('.issue-cover');
  issueCoverEl.addClass('issue-cover--show');

  var currentCategoryEl = jQuery('.home__current-category');
  currentCategoryEl.addClass('home__current-category--show');

  var tagTitleEl = jQuery('.tag-title');
  tagTitleEl.addClass('tag-title--show');

  var heroEl = jQuery('.rubrica__description');
  heroEl.addClass('rubrica__description--visible');

  var ideaButtonEl = jQuery('.idea-item__button');

  ideaButtonEl.click(function (e) {
    var targetEl = e.currentTarget;
    console.log(e);
    jQuery(targetEl)
      .next('.idea-item__accordion')
      .toggleClass('idea-item__accordion--visible');
  });

  var hamburgerEl = jQuery('.hamburger');
  var mobileMenuEl = jQuery('.menu--mobile');

  hamburgerEl.click(function (e) {
    var targetEl = e.currentTarget;
    jQuery(targetEl).toggleClass('is-active');
    mobileMenuEl.toggleClass('is-active');
  });

});