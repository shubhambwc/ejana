/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 71);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/home/home.js":
/*!******************************************!*\
  !*** ./resources/assets/js/home/home.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('.selectpicker').selectpicker({
    width: '100%'
  });
  $('.search-categories').on('click', function () {
    $('.dropdown-menu').css('z-index', '100');
  });
  $('body').click(function () {
    $('#jobsSearchResults').fadeOut();
  });
  $('#search-location').autocomplete({
    source: availableLocation
  });
  $('.image-slider').owlCarousel({
    margin: 10,
    autoplay: false,
    loop: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsiveClass: false,
    dots: true,
    responsive: {
      0: {
        items: 1
      },
      320: {
        items: 1,
        margin: 20
      },
      540: {
        items: 1
      },
      600: {
        items: 1
      }
    }
  });
  $('.pricing-slider').owlCarousel({
    margin: 10,
    autoplay: false,
    loop: false,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsiveClass: false,
    dots: true,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      1024: {
        items: 2
      },
      1200: {
        items: 3
      }
    }
  });
  $('#image-search-carousel').owlCarousel({
    margin: 10,
    autoplay: true,
    loop: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsiveClass: false,
    dots: false,
    items: 1
  });
  var windowWidth = $(window).width();

  function brandItem() {
    if (windowWidth > 1200) {
      return 6;
    } else if (windowWidth > 576) {
      return 4;
    } else if (windowWidth > 0) {
      return 2;
    }
  }

  function brandSlider(item) {
    var itemLength = $('#brandingSlider .item:not(.cloned)').length;
    return itemLength > item ? true : false;
  }

  $('#brandingSlider').owlCarousel({
    loop: brandSlider(brandItem()),
    autoplay: true,
    margin: 30,
    mouseDrag: false,
    autoplayTimeout: 1000,
    autoplayHoverPause: false,
    responsiveClass: false,
    responsive: {
      0: {
        items: 2
      },
      576: {
        items: 4
      },
      1024: {
        items: 4
      },
      1200: {
        items: 6
      }
    }
  });

  if ($(window).width() > 1024) {
    // counting the number of classes named .item
    if ($('#brandingSlider .item').length < 6) {
      $('#brandingSlider.owl-carousel .owl-stage-outer').css('display', 'flex').css('justify-content', 'center');
    }
  }

  $('#brandingSlider .item').on('mouseover', function () {
    $(this).closest('.owl-carousel').trigger('stop.owl.autoplay');
  });
  $('#brandingSlider .item').on('mouseout', function () {
    $(this).closest('.owl-carousel').trigger('play.owl.autoplay');
  });
  $('#notices').on('mouseover', function () {
    this.stop();
  });
  $('#notices').on('mouseout', function () {
    this.start();
  });
  $('#search-keywords').on('keyup', function () {
    var searchTerm = $(this).val();

    if (searchTerm != '') {
      $.ajax({
        url: jobsSearchUrl,
        method: 'GET',
        data: {
          searchTerm: searchTerm
        },
        success: function success(result) {
          $('#jobsSearchResults').fadeIn();
          $('#jobsSearchResults').html(result);
        }
      });
    } else {
      $('#jobsSearchResults').fadeOut();
    }
  });
  $(document).on('click', '#jobsSearchResults ul li', function () {
    $('#search-keywords').val($(this).text());
    $('#jobsSearchResults').fadeOut();
  });
});

/***/ }),

/***/ 71:
/*!************************************************!*\
  !*** multi ./resources/assets/js/home/home.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\home\home.js */"./resources/assets/js/home/home.js");


/***/ })

/******/ });