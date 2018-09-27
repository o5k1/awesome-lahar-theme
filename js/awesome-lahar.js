jQuery(window).load(function () {

  jQuery('.body').addClass('body--visible');

  jQuery('.home-grid').masonry({
    // options
    itemSelector: '.home-grid__cell'
  });

  jQuery('.archive-grid').masonry({
    // options
    itemSelector: '.archive-grid__item'
  });

  var searchIconEl = jQuery('.header__search');
  var searchFormEl = jQuery('.search-form');
  var hamburgerEl = jQuery('.hamburger');
  var mobileMenuEl = jQuery('.menu--mobile');

  searchIconEl.click(function () {
    hamburgerEl.removeClass('is-active');
    mobileMenuEl.removeClass('is-active');
    searchFormEl.toggleClass('search-form--visible');
  });

  hamburgerEl.click(function (e) {
    var targetEl = e.currentTarget;
    searchFormEl.removeClass('search-form--visible');
    jQuery(targetEl).toggleClass('is-active');
    mobileMenuEl.toggleClass('is-active');
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

});