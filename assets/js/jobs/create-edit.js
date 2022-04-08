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
/******/ 	return __webpack_require__(__webpack_require__.s = 22);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/jobs/create-edit.js":
/*!*************************************************!*\
  !*** ./resources/assets/js/jobs/create-edit.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  'use strict';

  new AutoNumeric('#toSalary', {
    maximumValue: 200000,
    currencySymbol: '',
    digitGroupSeparator: '\,',
    decimalPlaces: 1,
    currencySymbolPlacement: AutoNumeric.options.currencySymbolPlacement.suffix
  });
  new AutoNumeric('#fromSalary', {
    maximumValue: 90000,
    currencySymbol: '',
    digitGroupSeparator: '\,',
    decimalPlaces: 1,
    currencySymbolPlacement: AutoNumeric.options.currencySymbolPlacement.suffix
  });
  $('#toSalary').on('keyup', function () {
    var fromSalary = parseInt(Math.trunc(removeCommas($('#fromSalary').val())));
    var toSalary = parseInt(Math.trunc(removeCommas($('#toSalary').val())));

    if (toSalary < fromSalary) {
      $('#toSalary').focus();
      $('#salaryToErrorMsg').text(Lang.get('messages.job.please_enter_salary_range_to_greater_than_salary_range_from'));
      $('.actions [href=\'#next\']').css({
        'opacity': '0.7',
        'pointer-events': 'none'
      });
      $('#saveJob').attr('disabled', true);
    } else {
      $('#salaryToErrorMsg').text('');
      $('.actions [href=\'#next\']').css({
        'opacity': '1',
        'pointer-events': 'inherit'
      });
      $('#saveJob').attr('disabled', false);
    }
  });
  $('#toSalary').on('wheel', function (e) {
    $(this).trigger('keyup');
  });
  $('#fromSalary').on('keyup', function () {
    var fromSalary = parseInt(Math.trunc(removeCommas($('#fromSalary').val())));
    var toSalary = parseInt(Math.trunc(removeCommas($('#toSalary').val())));

    if (toSalary < fromSalary) {
      $('#fromSalary').focus();
      $('#salaryToErrorMsg').text(Lang.get('messages.job.please_enter_salary_range_to_greater_than_salary_range_from'));
      $('.actions [href=\'#next\']').css({
        'opacity': '0.7',
        'pointer-events': 'none'
      });
      $('#saveJob').attr('disabled', true);
    } else {
      $('#salaryToErrorMsg').text('');
      $('.actions [href=\'#next\']').css({
        'opacity': '1',
        'pointer-events': 'inherit'
      });
      $('#saveJob').attr('disabled', false);
    }
  });
  $('#fromSalary').on('wheel', function (e) {
    $(this).trigger('keyup');
  });
  $('#jobTypeId,#careerLevelsId,#jobShiftId,#currencyId,#countryId,#stateId,#cityId').select2({
    width: '100%'
  });
  $('#salaryPeriodsId,#functionalAreaId,#requiredDegreeLevelId,#preferenceId,#jobCategoryId').select2({
    width: '100%'
  });
  $('#SkillId').select2({
    width: '100%',
    placeholder: 'Select Job Skill'
  });
  $('#tagId').select2({
    width: '100%',
    placeholder: 'Select Job Tag'
  });

  if (!$('#companyId').hasClass('.select2-hidden-accessible') && $('#companyId').is('select')) {
    $('#companyId').select2({
      width: '100%',
      placeholder: 'Select Company'
    });
  }

  var date = new Date();
  date.setDate(date.getDate() + 1);
  $('.expiryDatepicker').datetimepicker(DatetimepickerDefaults({
    format: 'YYYY-MM-DD',
    useCurrent: false,
    sideBySide: true,
    minDate: new Date()
  }));
  $('#createJobForm, #editJobForm').on('submit', function (e) {
    $('#saveJob,#draftJob').attr('disabled', true);

    if (!checkSummerNoteEmpty('#details', 'Job Description field is required.', 1)) {
      e.preventDefault();
      $('#saveJob,#draftJob').attr('disabled', false);
      return false;
    }

    if ($('#salaryToErrorMsg').text() !== '') {
      $('#toSalary').focus();
      $('#saveJob,#draftJob').attr('disabled', false);
      return false;
    }
  });
  $('#details').summernote({
    minHeight: 200,
    height: 200,
    placeholder: 'Enter Job Details...',
    toolbar: [['style', ['bold', 'italic', 'underline', 'clear']], ['font', ['strikethrough']], ['para', ['paragraph']]]
  });
  $('#editDetails').summernote({
    minHeight: 200,
    height: 200,
    placeholder: 'Enter Job Details...',
    toolbar: [['style', ['bold', 'italic', 'underline', 'clear']], ['font', ['strikethrough']], ['para', ['paragraph']]]
  });
  $('#countryId').on('change', function () {
    $.ajax({
      url: jobStateUrl,
      type: 'get',
      dataType: 'json',
      data: {
        postal: $(this).val()
      },
      success: function success(data) {
        $('#stateId').empty();
        $('#stateId').append($('<option value=""></option>').text('Select State'));
        $.each(data.data, function (i, v) {
          $('#stateId').append($('<option></option>').attr('value', i).text(v));
        });
      }
    });
  });
  $('#stateId').on('change', function () {
    $.ajax({
      url: jobCityUrl,
      type: 'get',
      dataType: 'json',
      data: {
        state: $(this).val(),
        country: $('#countryId').val()
      },
      success: function success(data) {
        $('#cityId').empty();
        $.each(data.data, function (i, v) {
          $('#cityId').append($('<option></option>').attr('value', i).text(v));
        });
      }
    });
  });

  window.autoNumeric = function (formId, validationBox) {
    $(formId)[0].reset();
    $('select.select2Selector').each(function (index, element) {
      var drpSelector = '#' + $(this).attr('id');
      $(drpSelector).val('');
      $(drpSelector).trigger('change');
    });
    $(validationBox).hide();
  };
});

/***/ }),

/***/ 22:
/*!*******************************************************!*\
  !*** multi ./resources/assets/js/jobs/create-edit.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\jobs\create-edit.js */"./resources/assets/js/jobs/create-edit.js");


/***/ })

/******/ });