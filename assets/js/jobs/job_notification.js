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
/******/ 	return __webpack_require__(__webpack_require__.s = 77);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/jobs/job_notification.js":
/*!******************************************************!*\
  !*** ./resources/assets/js/jobs/job_notification.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  'use strict';

  $('#candidateId').select2({
    placeholder: 'Select Candidate'
  });
  $('#filter_employers').select2();
  checkBoxSelect(); //select all checkbox

  function checkBoxSelect() {
    $('#ckbCheckAll').click(function () {
      $('.jobCheck').prop('checked', $(this).prop('checked'));
    });
    $('.jobCheck').on('click', function () {
      if ($('.jobCheck:checked').length == $('.jobCheck').length) {
        $('#ckbCheckAll').prop('checked', true);
      } else {
        $('#ckbCheckAll').prop('checked', false);
      }
    });
  } //employer


  $(document).on('change', '#filter_employers', function () {
    $('.job-notification-ul').empty();
    $('#ckbCheckAll').prop('checked', false);
    var url = '';
    var employerId = $(this).val();

    if (!isEmpty(employerId)) {
      url = getEmployerJobs + '/' + employerId;
    } else {
      url = jobNotification;
    }

    $.ajax({
      url: url,
      type: 'get',
      success: function success(result) {
        if (result.success) {
          var _jobNotification = '';
          var noJobsAvailable = '<li class="no-job-available"><h4>No Jobs available</h4></li>';

          if (!isEmpty(employerId)) {
            var index;

            if (result.data.jobs.length > 0) {
              for (index = 0; index < result.data.jobs.length; ++index) {
                var data = [{
                  'job_id': result.data.jobs[index].id,
                  'job_title': result.data.jobs[index].job_title,
                  'created_by': humanReadableFormatDate(result.data.jobs[index].created_at),
                  'jobDetails': jobDetails + '/' + result.data.jobs[index].id
                }];
                var jobNotificationLi = prepareTemplateRender('#jobNotificationTemplate', data);
                _jobNotification += jobNotificationLi;
              }
            }
          } else {
            if (result.data.length > 0) {
              var count;

              for (count = 0; count < result.data.length; ++count) {
                var _data = [{
                  'job_id': result.data[count].id,
                  'job_title': result.data[count].job_title,
                  'created_by': humanReadableFormatDate(result.data[count].created_at),
                  'jobDetails': jobDetails + '/' + result.data[count].id
                }];
                var jobLi = prepareTemplateRender('#jobNotificationTemplate', _data);
                _jobNotification += jobLi;
              }
            }
          }

          $('.job-notification-ul').append(_jobNotification != '' ? _jobNotification : noJobsAvailable);
          checkBoxSelect();
        }
      },
      error: function error(result) {
        manageAjaxErrors(result);
      }
    });
  });

  function humanReadableFormatDate(date) {
    return moment(date).fromNow();
  }

  ;
  $(document).on('submit', '#createJobNotificationForm', function () {
    if ($('.jobCheck:checked').length === 0) {
      displayErrorMessage('Please select at job.');
      return false;
    }

    screenLock();
    startLoader();
  });
});

/***/ }),

/***/ 77:
/*!************************************************************!*\
  !*** multi ./resources/assets/js/jobs/job_notification.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\jobs\job_notification.js */"./resources/assets/js/jobs/job_notification.js");


/***/ })

/******/ });