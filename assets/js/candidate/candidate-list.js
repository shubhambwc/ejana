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
/******/ 	return __webpack_require__(__webpack_require__.s = 32);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/candidate/candidate-list.js":
/*!*********************************************************!*\
  !*** ./resources/assets/js/candidate/candidate-list.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).ready(function () {
  $('#filter_status').select2({
    width: '100%'
  });
  $('#immediateAvailable').select2({
    width: '100%'
  });
  $('#jobSkills').select2({
    width: '100%'
  });
});
$(document).on('click', '.delete-btn', function (event) {
  var candidateId = $(event.currentTarget).attr('data-id');
  swal({
    title: Lang.get('messages.common.delete') + ' !',
    text: Lang.get('messages.common.are_you_sure_want_to_delete') + '"' + Lang.get('messages.notification_settings.candidate') + '" ?',
    type: 'warning',
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
    confirmButtonColor: '#6777ef',
    cancelButtonColor: '#d33',
    cancelButtonText: Lang.get('messages.common.no'),
    confirmButtonText: Lang.get('messages.common.yes')
  }, function () {
    window.livewire.emit('deleteCandidate', candidateId);
  });
});
document.addEventListener('delete', function () {
  swal({
    title: Lang.get('messages.common.deleted') + ' !',
    text: Lang.get('messages.notification_settings.candidate') + Lang.get('messages.common.has_been_deleted'),
    type: 'success',
    confirmButtonColor: '#6777ef',
    timer: 2000
  });
});
$(document).on('change', '.isActive', function (event) {
  var candidateId = $(event.currentTarget).data('id');
  $.ajax({
    url: candidateUrl + '/' + candidateId + '/' + 'change-status',
    method: 'post',
    cache: false,
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        window.livewire.emit('refresh');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
});
$(document).on('change', '.is-candidate-email-verified', function (event) {
  if ($(this).is(':checked')) {
    var candidateId = $(event.currentTarget).data('id');
    changeEmailVerified(candidateId);
    $(this).attr('disabled', true);
  } else {
    return false;
  }
});

window.changeEmailVerified = function (id) {
  $.ajax({
    url: candidateUrl + '/' + id + '/verify-email',
    method: 'post',
    cache: false,
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        window.livewire.emit('refresh');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
};

$(document).on('click', '.send-email-verification', function (event) {
  var candidateId = $(event.currentTarget).attr('data-id');
  $.ajax({
    url: candidateUrl + '/' + candidateId + '/resend-email-verification',
    type: 'post',
    success: function success(result) {
     console.log(result)
      if (result.success) {
        displaySuccessMessage(result.message);
        window.livewire.emit('refresh');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
});
$('#candidateFilters').on('click', function () {
  $('#candidateFiltersForm').toggleClass('d-block d-none');
});
$('#action_dropdown').click(function () {
  $('#candidateFiltersForm').removeClass('d-block').addClass('d-none');
});
$(document).ready(function () {
  $('#filter_status').on('change', function (e) {
    var data = $('#filter_status').select2('val');
    window.livewire.emit('changeFilter', 'status', data);
  });
  $('#immediateAvailable').on('change', function (e) {
    var data = $('#immediateAvailable').select2('val');
    window.livewire.emit('changeFilter', 'immediateAvailable', data);
  });
  $('#jobSkills').on('change', function (e) {
    var data = $('#jobSkills').select2('val');
    window.livewire.emit('changeFilter', 'jobSkills', data);
  });
});
$(document).on('click', '#reset-filter', function () {
  $('#jobSkills,#immediateAvailable,#filter_status').val('').change();
});
$(document).on('click', function (event) {
  if ($(event.target).closest('#candidateFilters,#candidateFiltersForm').length === 0) {
    $('#candidateFiltersForm').removeClass('d-block').addClass('d-none');
  }
});

/***/ }),

/***/ 32:
/*!***************************************************************!*\
  !*** multi ./resources/assets/js/candidate/candidate-list.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\candidate\candidate-list.js */"./resources/assets/js/candidate/candidate-list.js");


/***/ })

/******/ });