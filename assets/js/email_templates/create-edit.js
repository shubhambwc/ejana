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
/******/ 	return __webpack_require__(__webpack_require__.s = 83);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/email_templates/create-edit.js":
/*!************************************************************!*\
  !*** ./resources/assets/js/email_templates/create-edit.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).ready(function () {
  $('#body').summernote({
    minHeight: 200,
    height: 200,
    dialogsInBody: true,
    toolbar: [['style', ['style']], ['font', ['bold', 'underline', 'clear']], ['color', ['color']], ['para', ['ul', 'ol', 'paragraph']], ['table', ['table']], ['insert', ['link', 'picture']], ['view', ['codeview']]]
  });
  $(document).on('submit', '#editEmailTemplateForm', function (e) {
    if (!checkSummerNoteEmpty('#body', 'Body field is required.', 1)) {
      e.preventDefault();
      return true;
    }
  });
  $(document).on('click', '.note-link-btn', function (e) {
    e.preventDefault();
    var text = $('.note-form-group .note-link-text').val().trim().length;
    var url = $('.note-form-group .note-link-url').val().trim().length;

    if (text == 0) {
      displayErrorMessage('Text Field is required.');
      $('.link-dialog').modal("show");
      return false;
    }

    if (url == 0) {
      displayErrorMessage('Url Field is required.');
      $('.link-dialog').modal("show");
      return false;
    }

    return true;
  });
  $(document).on('click', '.note-image-btn', function (e) {
    var imageUrl = $('.note-group-image-url .note-image-url').val().trim().length;
    var imageModal = $('.note-modal:eq(1)');

    if (imageUrl == 0) {
      imageModal.show();
      imageModal.addClass('show');
      displayErrorMessage('Url Field is required.');
      return false;
    }

    imageModal.hide();
    imageModal.removeClass('show');
    return true;
  });
  /* summernote modal label */

  $('.note-modal .form-group label').append(' <span class="text-danger">*</span>');
});

/***/ }),

/***/ 83:
/*!******************************************************************!*\
  !*** multi ./resources/assets/js/email_templates/create-edit.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\email_templates\create-edit.js */"./resources/assets/js/email_templates/create-edit.js");


/***/ })

/******/ });