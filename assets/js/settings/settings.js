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
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/settings/settings.js":
/*!**************************************************!*\
  !*** ./resources/assets/js/settings/settings.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).on('change', '#logo', function () {
  if (isValidFile($(this), '#validationErrorsBox')) {
    displayPhoto(this, '#logoPreview');
  }

  $('#validationErrorsBox').delay(5000).slideUp(300);
});

window.displayFavicon = function (input, selector) {
  var displayPreview = true;

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      var image = new Image();
      image.src = e.target.result;

      image.onload = function () {
        if ((image.height != 16 || image.width != 16) && (image.height != 32 || image.width != 32)) {
          $('#favicon').val('');
          $('#validationErrorsBox').removeClass('d-none');
          $('#validationErrorsBox').html('The image must be of pixel 16 x 16 and 32 x 32.').show();
          return false;
        }

        $(selector).attr('src', e.target.result);
        displayPreview = true;
      };
    };

    if (displayPreview) {
      reader.readAsDataURL(input.files[0]);
      $(selector).show();
    }
  }
};

window.isValidFavicon = function (inputSelector, validationMessageSelector) {
  var ext = $(inputSelector).val().split('.').pop().toLowerCase();

  if ($.inArray(ext, ['gif', 'png', 'ico']) == -1) {
    $(inputSelector).val('');
    $(validationMessageSelector).removeClass('d-none');
    $(validationMessageSelector).html('The image must be a file of type: gif, ico, png.').show();
    return false;
  }

  $(validationMessageSelector).hide();
  return true;
};

$(document).on('change', '#favicon', function () {
  $('#validationErrorsBox').addClass('d-none');

  if (isValidFavicon($(this), '#validationErrorsBox')) {
    displayFavicon(this, '#faviconPreview');
  }

  $('#validationErrorsBox').delay(5000).slideUp(300);
});
$('#facebookUrl').keyup(function () {
  this.value = this.value.toLowerCase();
});
$('#twitterUrl').keyup(function () {
  this.value = this.value.toLowerCase();
});
$('#googleUrl').keyup(function () {
  this.value = this.value.toLowerCase();
});
$('#linkedInUrl').keyup(function () {
  this.value = this.value.toLowerCase();
});
$('#editFrontSettingForm').submit(function () {
  if ($('#error-msg').text() !== '') {
    $('#phoneNumber').focus();
    return false;
  }
});
$(document).on('submit', '#editGeneralForm', function (event) {
  event.preventDefault();
  $('#companyUrl').focus();
  var companyUrl = $('#companyUrl').val();
  var companyUrlExp = new RegExp(/^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/);
  var companyUrlCheck = companyUrl == '' ? true : companyUrl.match(companyUrlExp) ? true : false;

  if (!companyUrlCheck) {
    displayErrorMessage('Please enter a valid Company Url');
    return false;
  }

  $('#editGeneralForm')[0].submit();
  return true;
});
$(document).on('submit', '#editForm', function (event) {
  event.preventDefault();
  $('#editForm').find('input:text:visible:first').focus();
  var facebookUrl = $('#facebookUrl').val();
  var twitterUrl = $('#twitterUrl').val();
  var googlePlusUrl = $('#googlePlusUrl').val();
  var linkedInUrl = $('#linkedInUrl').val();
  var facebookExp = new RegExp(/^(https?:\/\/)?((m{1}\.)?)?((w{2,3}\.)?)facebook.[a-z]{2,3}\/?.*/i);
  var twitterExp = new RegExp(/^(https?:\/\/)?((m{1}\.)?)?((w{2,3}\.)?)twitter\.[a-z]{2,3}\/?.*/i);
  var googlePlusExp = new RegExp(/^(https?:\/\/)?(plus\.)?(google\.[a-z]{2,3})\/?(([a-zA-Z 0-9._])?).*/i);
  var linkedInExp = new RegExp(/^(https?:\/\/)?((w{2,3}\.)?)linkedin\.[a-z]{2,3}\/?.*/i);
  var facebookCheck = facebookUrl == '' ? true : facebookUrl.match(facebookExp) ? true : false;

  if (!facebookCheck) {
    displayErrorMessage('Please enter a valid Facebook Url');
    return false;
  }

  var twitterCheck = twitterUrl == '' ? true : twitterUrl.match(twitterExp) ? true : false;

  if (!twitterCheck) {
    displayErrorMessage('Please enter a valid Twitter Url');
    return false;
  }

  var googlePlusCheck = googlePlusUrl == '' ? true : googlePlusUrl.match(googlePlusExp) ? true : false;

  if (!googlePlusCheck) {
    displayErrorMessage('Please enter a valid Google Plus Url');
    return false;
  }

  var linkedInCheck = linkedInUrl == '' ? true : linkedInUrl.match(linkedInExp) ? true : false;

  if (!linkedInCheck) {
    displayErrorMessage('Please enter a valid Linkedin Url');
    return false;
  }

  $('#editForm')[0].submit();
  return true;
});
$('#aboutUs').summernote({
  minHeight: 200,
  height: 200,
  toolbar: [['style', ['bold', 'italic', 'underline', 'clear']], ['font', ['strikethrough']], ['para', ['paragraph']]]
});
$(document).on('submit', '#aboutUsForm', function (event) {
  event.preventDefault();

  if (!checkSummerNoteEmpty('#aboutUs', 'About Us field is required.')) {
    return false;
  }

  $('#aboutUsForm')[0].submit();
});
$(document).on('click', '#btnSaveEnvData', function (event) {
  event.preventDefault();
  swal({
    title: Lang.get('messages.setting.configuration_update') + ' !',
    text: Lang.get('messages.setting.update_application_configuration'),
    type: 'warning',
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
    confirmButtonColor: '#6777ef',
    cancelButtonColor: '#d33',
    cancelButtonText: Lang.get('messages.common.no'),
    confirmButtonText: Lang.get('messages.common.yes')
  }, function () {
    $('#envUpdateForm')[0].submit();
  });
});
$(document).on('change', '#enableEdit', function () {
  if ($(this).prop('checked')) {
    $('#envUpdateForm').find('input:text').attr('disabled', false);
    $('#enableCookie').attr('disabled', false);
    $('#btnSaveEnvData').attr('disabled', false);
    $('#envUpdateText').text(disableEditText);
  } else {
    $('#envUpdateForm').find('input:text').attr('disabled', true);
    $('#enableCookie').attr('disabled', true);
    $('#btnSaveEnvData').attr('disabled', true);
    $('#envUpdateText').text(enableEditText);
  }
});
$(document).on('change', '#enableCookie', function () {
  if ($(this).prop('checked')) $('#enableCookieText').text(disableCookie);else $('#enableCookieText').text(enableCookie);
});

/***/ }),

/***/ 4:
/*!********************************************************!*\
  !*** multi ./resources/assets/js/settings/settings.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\settings\settings.js */"./resources/assets/js/settings/settings.js");


/***/ })

/******/ });