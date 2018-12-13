jQuery(window).load(function () {
  /**
   * Make body appearing with a fade-in.
   */
  jQuery('.body').addClass('body--visible');

  /**
   * Masonry setup.
   */
  jQuery('.home-grid').masonry({
    // options
    itemSelector: '.home-grid__cell'
  });

  var searchIconEl = jQuery('.header__search');
  var searchFormEl = jQuery('.search-form');
  var hamburgerEl = jQuery('.hamburger');
  var mobileMenuEl = jQuery('.menu--mobile');

  /**
   * Toggle search form.
   */
  searchIconEl.click(function () {
    hamburgerEl.removeClass('is-active');
    mobileMenuEl.removeClass('is-active');
    searchFormEl.toggleClass('search-form--visible');
  });

  /**
   * Toggle menu.
   */
  hamburgerEl.click(function (e) {
    var targetEl = e.currentTarget;
    searchFormEl.removeClass('search-form--visible');
    jQuery(targetEl).toggleClass('is-active');
    mobileMenuEl.toggleClass('is-active');
  });

  /**
   * Make things appearing with a fade-in.
   */
  var issueCoverEl = jQuery('.issue-cover');
  issueCoverEl.addClass('issue-cover--show');

  var currentCategoryEl = jQuery('.home__current-category');
  currentCategoryEl.addClass('home__current-category--show');

  var tagTitleEl = jQuery('.tag-title');
  tagTitleEl.addClass('tag-title--show');

  var heroEl = jQuery('.rubrica__description');
  heroEl.addClass('rubrica__description--visible');

  /**
   * Toggle idea buttons.
   */
  var ideaButtonEl = jQuery('.idea-item__button');

  ideaButtonEl.click(function (e) {
    var targetEl = e.currentTarget;
    console.log(e);
    jQuery(targetEl)
      .next('.idea-item__accordion')
      .toggleClass('idea-item__accordion--visible');
  });

  var homeTitleWrapper = jQuery(".home__issue-title-wrapper");
  var issueCover = jQuery(".home__issue-cover");

  /**
   * Move home title wrapper below issue cover when too long.
   * @param mql
   */
  function widerThanScreenTest(mql) {
    if (mql.matches) { // If media query matches
      homeTitleWrapper.removeClass("home__issue-title-wrapper");
    } else {
      homeTitleWrapper.addClass("home__issue-title-wrapper");
    }
  }

  var titleWrapperMQL = window.matchMedia("(max-width: " + (homeTitleWrapper.outerWidth() + issueCover.outerWidth() + 40) + "px)");
  widerThanScreenTest(titleWrapperMQL); // Call listener function at run time
  titleWrapperMQL.addListener(widerThanScreenTest); // Attach listener function on state changes
});