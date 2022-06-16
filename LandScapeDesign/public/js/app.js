/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
(function () {
  var burgerItem = document.querySelector('.burger');
  var menu = document.querySelector('.header_nav');
  var menuCloseItem = document.querySelector('.header_nav_close');
  burgerItem.addEventListener('click', function () {
    menu.classList.add('header_nav_active');
  });
  menuCloseItem.addEventListener('click', function () {
    menu.classList.remove('header_nav_active');
  });
})();
/******/ })()
;