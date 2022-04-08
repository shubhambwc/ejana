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
/******/ 	return __webpack_require__(__webpack_require__.s = 26);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/candidate/create-edit.js":
/*!******************************************************!*\
  !*** ./resources/assets/js/candidate/create-edit.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  'use strict';

  $('.select-box').select2({
    'width': '100%'
  });
  
  $('#validateTab1').on('click', function () {});
  
  $('#validateTab2').on('click', function () {});
  
  $('#validateTab3').on('click', function () {});
  
  $('#validateTab4').on('click', function () {
  });
  
  
  $('#validateTab5').on('click', function () {
  });

  $('#validateTab6').on('click', function () {
  });
  
  
  
    
  setTimeout(function () {
    $('input[type=radio][name=immediate_available]').trigger('change');
  }, 300);
  $('#countryId').on('change', function () {
    $.ajax({
      url: companyStateUrl,
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

        if (isEdit && stateId) {
          $('#stateId').val(stateId).trigger('change');
        }
      }
    });
  });
  $('#stateId').on('change', function () {
    $.ajax({
      url: companyCityUrl,
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

        if (isEdit && cityId) {
          $('#cityId').val(cityId).trigger('change');
        }
      }
    });
  });


 $(document).on('change', '#logo', function () {
    var validFile = isValidFile1($(this), '#validationErrorsBox');
    var inputSelector = $(this);
     var ext = $(inputSelector).val().split('.').pop().toLowerCase();

        
    if (validFile) {
         if(ext == 'pdf'||ext == 'docx' ||ext == 'text'){
                 displayPdf(this, '#logoPreviewpdf');
         }
         else{
             displayPhoto(this, '#logoPreview');
               }
     
     
    } else {
     
    }
  });


  $(document).on('change', '#logo2', function () {
    var validFile = isValidFile1($(this), '#validationErrorsBox');
     var inputSelector = $(this);
     var ext = $(inputSelector).val().split('.').pop().toLowerCase();
    
    if (validFile) {
         if(ext == 'pdf'||ext == 'docx' ||ext == 'text'){
                 displayPdf(this, '#logoPreviewpdf1');
         }
         else{
             displayPhoto(this, '#logoPreview1');
               }

    } else {
     
    }
  });


   $(document).on('change', '#logo3', function () {
    var validFile = isValidFile1($(this), '#validationErrorsBox');
     var inputSelector = $(this);
     var ext = $(inputSelector).val().split('.').pop().toLowerCase();

    if (validFile) {
   
         if(ext == 'pdf'||ext == 'docx' ||ext == 'txt'){
                 displayPdf(this, '#logoPreviewpdf2');
         }
         else{
             displayPhoto(this, '#logoPreview2');
               }     
     
    }
     
    else {
     
    }
  });
  
  
  if (isEdit & countryId) {
    $('#countryId').val(countryId).trigger('change');
  }

  $('#createCandidatesForm,#editCandidatesForm').submit(function () {
    if ($('#error-msg').text() !== '') {
      $('#phoneNumber').focus();
      return false;
    }
  });
  
  

  $(document).on('submit', '#createCandidatesForm,#editCandidatesForm', function (e) {
    e.preventDefault();
    $('#createCandidatesForm,#editCandidatesForm').find('input:text:visible:first').focus();
   
    $('#createCandidatesForm,#editCandidatesForm')[0].submit();
    return true;
  });
});

/***/ }),

/***/ 26:
/*!************************************************************!*\
  !*** multi ./resources/assets/js/candidate/create-edit.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\candidate\create-edit.js */"./resources/assets/js/candidate/create-edit.js");


/***/ })

/******/ });