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
/******/ 	return __webpack_require__(__webpack_require__.s = 70);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/branding_sliders/branding_sliders.js":
/*!******************************************************************!*\
  !*** ./resources/assets/js/branding_sliders/branding_sliders.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).ready(function () {
  $('#branding_filter_status').select2();
});
$(document).on('submit', '#addNewForm', function (e) {
  e.preventDefault();
  processingBtn('#addNewForm', '#btnSave', 'loading');
  $.ajax({
    url: brandingSliderSaveUrl,
    type: 'POST',
    data: new FormData($(this)[0]),
    dataType: 'JSON',
    processData: false,
    contentType: false,
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        $('#addModal').modal('hide');
        window.livewire.emit('refresh');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    },
    complete: function complete() {
      processingBtn('#addNewForm', '#btnSave');
    }
  });
});
$(document).on('click', '.edit-btn', function (event) {
  var brandingSliderId = $(event.currentTarget).data('id');
  renderData(brandingSliderId);
});

window.renderData = function (id) {
  $.ajax({
    url: brandingSliderUrl + '/' + id + '/edit',
    type: 'GET',
    success: function success(result) {
      if (result.success) {
        var element = document.createElement('textarea');
        element.innerHTML = result.data.title;
        $('#brandingSliderId').val(result.data.id);

        if (isEmpty(result.data.branding_slider_url)) {
          $('#editPreviewImage').attr('src', defaultDocumentImageUrl);
        } else {
          $('#editPreviewImage').attr('src', result.data.branding_slider_url);
          $('#brandingSliderUrl').attr('href', result.data.branding_slider_url);
          $('#brandingSliderUrl').text(view);
        }

        $('#editTitle').val(element.value);
        result.data.is_active == 1 ? $('#editIsActive').prop('checked', true) : $('#editIsActive').prop('checked', false);
        $('#editModal').appendTo('body').modal('show');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    }
  });
};

$(document).on('submit', '#editForm', function (event) {
  event.preventDefault();
  processingBtn('#editForm', '#btnEditSave', 'loading');
  var id = $('#brandingSliderId').val();
  $.ajax({
    url: brandingSliderUrl + '/' + id + '/update',
    type: 'POST',
    data: new FormData($(this)[0]),
    dataType: 'JSON',
    processData: false,
    contentType: false,
    success: function success(result) {
      if (result.success) {
        displaySuccessMessage(result.message);
        $('#editModal').modal('hide');
        window.livewire.emit('refresh');
      }
    },
    error: function error(result) {
      displayErrorMessage(result.responseJSON.message);
    },
    complete: function complete() {
      processingBtn('#editForm', '#btnEditSave');
    }
  });
});
$(document).on('click', '.addBrandingSliderModal', function () {
  $('#addModal').appendTo('body').modal('show');
});
$(document).on('click', '.delete-btn', function (event) {
  var brandingSliderId = $(event.currentTarget).attr('data-id');
  swal({
    title: Lang.get('messages.common.delete') + ' !',
    text: Lang.get('messages.common.are_you_sure_want_to_delete') + '"' + Lang.get('messages.branding_slider.brand') + '" ?',
    type: 'warning',
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
    confirmButtonColor: '#6777ef',
    cancelButtonColor: '#d33',
    cancelButtonText: Lang.get('messages.common.no'),
    confirmButtonText: Lang.get('messages.common.yes')
  }, function () {
    window.livewire.emit('deleteBrandingSlider', brandingSliderId);
  });
});
document.addEventListener('delete', function () {
  swal({
    title: Lang.get('messages.common.deleted') + ' !',
    text: Lang.get('messages.branding_slider.brand') + Lang.get('messages.common.has_been_deleted'),
    type: 'success',
    confirmButtonColor: '#6777ef',
    timer: 2000
  });
});
$('#addModal').on('hidden.bs.modal', function () {
  resetModalForm('#addNewForm', '#validationErrorsBox');
  $('#previewImage').attr('src', defaultDocumentImageUrl);
});
$('#editModal').on('hidden.bs.modal', function () {
  resetModalForm('#editForm', '#editValidationErrorsBox');
  $('#editPreviewImage').attr('src', defaultDocumentImageUrl);
});

window.displayImage = function (input, selector) {
  var displayPreview = true;

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      var image = new Image();
      image.src = e.target.result;

      image.onload = function () {
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

window.isValidImage = function (inputSelector, validationMessageSelector) {
  var ext = $(inputSelector).val().split('.').pop().toLowerCase();

  if ($.inArray(ext, ['png', 'jpg', 'jpeg']) == -1) {
    $(inputSelector).val('');
    $(validationMessageSelector).removeClass('d-none');
    $(validationMessageSelector).html(brandingExtensionMessage).show();
    $(validationMessageSelector).delay(5000).slideUp(300);
    return false;
  }

  $(validationMessageSelector).hide();
  return true;
};

$(document).on('change', '#brandingSlider', function () {
  $('#addModal #validationErrorsBox').addClass('d-none');

  if (isValidImage($(this), '#addModal #validationErrorsBox')) {
    displayImage(this, '#previewImage', '#addModal #validationErrorsBox');
  }
});
$(document).on('change', '#editBrandingSlider', function () {
  $('#editModal #editValidationErrorsBox').addClass('d-none');

  if (isValidFile($(this), '#editModal #editValidationErrorsBox')) {
    displayImage(this, '#editPreviewImage', '#editModal #editValidationErrorsBox');
  }
});
$(document).on('change', '.isActive', function (event) {
  var brandingSliderId = $(event.currentTarget).data('id');
  changeIsActive(brandingSliderId);
});

window.changeIsActive = function (id) {
  $.ajax({
    url: brandingSliderUrl + '/' + id + '/change-is-active',
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

$(document).ready(function () {
  $('#branding_filter_status').on('change', function (e) {
    var data = $('#branding_filter_status').select2('val');
    window.livewire.emit('changeFilter', 'status', data);
  });
});

/***/ }),

/***/ 70:
/*!************************************************************************!*\
  !*** multi ./resources/assets/js/branding_sliders/branding_sliders.js ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\EjanaPortal\resources\assets\js\branding_sliders\branding_sliders.js */"./resources/assets/js/branding_sliders/branding_sliders.js");


/***/ })

/******/ });